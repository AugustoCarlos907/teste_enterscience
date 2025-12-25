<?php

namespace App\Http\Controllers;

use ApiResponse;
use App\Http\Requests\StoreContratacaoRequest;
use App\Services\ContratacaoService;
use Illuminate\Http\Request;

class ContratacaoController extends Controller
{
    protected $contratacaoService;
    public function __construct(ContratacaoService $contratacaoService)
    {
        $this->contratacaoService = $contratacaoService;
    }

    public function index(){
        return $this->contratacaoService->getContratacoes(10 );
    }

    public function store(StoreContratacaoRequest $request){
        try {
        $data = $request->validated();
        $contratacao = $this->contratacaoService->store($data);

        return ApiResponse::success('contratacao criada com sucesso', $contratacao);
        
        } catch (\Exception $e) {
           return ApiResponse::error('Erro ao criar contratacao: ' . $e->getMessage(), 500);
        }
    }

    public function destroy(int $id){
        return $this->contratacaoService->delete($id);
    }
}
