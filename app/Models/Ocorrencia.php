<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{
    use HasFactory;

    protected $table = 'ocorrencias';

    protected $fillable = [
        'usuario_id',
        'codigo',
        'nome_denunciante',
        'documento_denunciante',
        'telefone',
        'email',
        'endereco_denunciante',
        'tipo_ocorrencia',
        'urgencia',
        'data_ocorrencia',
        'hora_ocorrencia',
        'local_ocorrencia',
        'descricao',
        'suspeitos',
        'testemunhas',
        'informacoes_adicionais',
        'status',
    ];

    /*
    |--------------------------------------------------------------------------
    | RELACIONAMENTOS
    |--------------------------------------------------------------------------
    */

    public function evidencias()
    {
        return $this->hasMany(Evidencia::class);
    }

    public function processo()
    {
        return $this->hasOne(Processo::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
