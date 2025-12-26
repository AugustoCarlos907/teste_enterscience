<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artist extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'tipo',
        'estilo_musical',
        'cache_base',
        'imagem',
    ];

    // Acessor to get formatted cache_base in Brazilian Real
    // public function getCacheBaseAttribute()
    // {
    //     return 'R$ ' . number_format($this->cache_base, 2, ',', '.');
    // }

    // Relationship with Contratacao model
    public function contratacoes()
    {
        return $this->hasMany(Contratacao::class);
    }
}
