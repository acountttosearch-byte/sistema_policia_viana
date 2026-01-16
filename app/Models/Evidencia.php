<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidencia extends Model
{
    use HasFactory;

    protected $table = 'evidencias';

    protected $fillable = [
        'ocorrencia_id',
        'tipo',
        'descricao',
        'local_coleta',
        'coletada_em',
    ];

    public function ocorrencia()
    {
        return $this->belongsTo(Ocorrencia::class);
    }

    public function anexos()
    {
        return $this->hasMany(Anexo::class);
    }
}
