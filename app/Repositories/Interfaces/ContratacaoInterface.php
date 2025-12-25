<?php

namespace App\Repositories\Interfaces;

interface ContratacaoInterface
{
    public function getContratacoes($perPage);
    public function store(array $data);
    public function findOrfail(int $id);
    public function delete(int $id);
}
