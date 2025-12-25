<?php 


namespace App\Services;

use App\Repositories\Interfaces\ContratacaoInterface;

class ContratacaoService{

    protected $contratacaoRepository;

    public function __construct( ContratacaoInterface $contratacaoRepository){
        $this->contratacaoRepository = $contratacaoRepository;
    }

    public function getContratacoes($perPage){
        return $this->contratacaoRepository->getContratacoes($perPage);
    }

    public function store(array $data){
        return $this->contratacaoRepository->store($data);
    }

    public function findOrfail(int $id){
        return $this->contratacaoRepository->findOrfail($id);
    }

    public function delete(int $id){
        return $this->contratacaoRepository->delete($id);
    }


}