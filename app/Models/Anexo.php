<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anexo extends Model
{
    use HasFactory;

    protected $fillable = [
        'evidencia_id',
        'nome_arquivo',
        'mime',
        'tamanho_bytes',
        'caminho_armazenamento',
    ];

    public function evidencia()
    {
        return $this->belongsTo(Evidencia::class);
    }
}
