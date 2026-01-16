<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    use HasFactory;

    protected $fillable = [
        'ocorrencia_id',
        'numero',
        'status',
        'aberto_em',
        'observacoes',
    ];

    public function ocorrencia()
    {
        return $this->belongsTo(Ocorrencia::class);
    }
}

