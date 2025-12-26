<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Type\Decimal;

class Contratacao extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'artist_id',
        'nome',
        'data_evento',
        'endereco',
        'cache',
    ];

    protected $casts = [
        // 'data_evento' => 'date|Y-m-d',
        'cache' => 'decimal:2',
    ];


    // Relationship with Artist model
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
