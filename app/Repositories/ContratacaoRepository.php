<?php 

namespace App\Repositories;

use App\Models\Artist;
use App\Models\Contratacao;
use App\Repositories\Interfaces\ContratacaoInterface;
use Illuminate\Database\Eloquent\Collection;

class ContratacaoRepository implements ContratacaoInterface
{
    public function getContratacoes($perPage): Collection{
        return Contratacao::orderBy('created_at', 'desc')
                            ->paginate($perPage);
    }

    public function store(array $data){
        return Contratacao::create($data);
    }
    public function findOrFail(int $id): Contratacao{
        return Contratacao::findOrFail($id);
    }

    public function delete(int $id): bool|null{
        return $this->findOrFail($id)->delete();
    }
}