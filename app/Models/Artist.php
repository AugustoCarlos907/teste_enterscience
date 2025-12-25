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
    public function contratacoes()
    {
        return $this->hasMany(Contratacao::class);
    }
}
