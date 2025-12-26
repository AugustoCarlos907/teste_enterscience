<?php 

namespace App\Repositories;

use App\Models\Artist;
use App\Models\Contratacao;
use App\Repositories\Interfaces\ContratacaoInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ContratacaoRepository implements ContratacaoInterface
{
    // Get all contratacoes with pagination
    public function getContratacoes($perPage): LengthAwarePaginator
{
        return Contratacao::with('artist')
                            ->orderBy('created_at', 'desc')
                            ->paginate($perPage);
    }

    // Store a new contratacao
    public function store(array $data){
        return Contratacao::create($data);
    }

    // Find a contratacao by ID or fail 
    public function findOrFail(int $id): Contratacao{
        return Contratacao::findOrFail($id);
    }


    // Delete a contratacao by ID
    public function delete(int $id): bool|null{
        return $this->findOrFail($id)->delete();
    }
}