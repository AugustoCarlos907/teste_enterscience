<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        'data_evento' => 'date',
        'cache' => 'decimal:2',
    ];

    // Relationship with Artist model
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
