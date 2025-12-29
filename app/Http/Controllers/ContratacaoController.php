<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContratacaoRequest;
use App\Http\Response\ApiResponse;
use App\Models\Artist;
use App\Services\ContratacaoService;
use Illuminate\Http\Request;

class ContratacaoController extends Controller
{
    // Dependency Injection of the ContratacaoService
    protected $contratacaoService;
    public function __construct(ContratacaoService $contratacaoService)
    {
        $this->contratacaoService = $contratacaoService;
    }

    // List contratacoes with pagination
    public function index(){
        $contratacoes = $this->contratacaoService->getContratacoes(4 );
        return response()->json($contratacoes);
    }
    
    // Store a new contratacao
    public function store(StoreContratacaoRequest $request ){
        try {
        $data = $request->validated();
        $artist = Artist::findOrFail($data['artist_id']);

        // Validate cache base before creating contratacao
        if($data['cache'] < $artist->cache_base){
            return ApiResponse::error('Cache base insuficiente para a contratação.', 400);
        }

        $contratacao = $this->contratacaoService->store($data);
        $contratacao->load('artist');

        return ApiResponse::success($contratacao, 'Contratação criada com sucesso.', 201);
        
        } catch (\Exception $e) {
           return ApiResponse::error('Erro ao criar contratacao: ' . $e->getMessage(), 500);
        }
    }

    // Destroy a contratacao by ID
    public function destroy(int $id){
        return $this->contratacaoService->delete($id);
    }
}
