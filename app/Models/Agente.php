<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Agente extends Authenticatable
{
    protected $table = 'agentes';

    protected $fillable = [
        'nome_completo',
        'nip',
        'email',
        'telefone',
        'unidade',
        'departamento',
        'cargo',
        'perfil',
        'estado',
        'password'
    ];

    protected $hidden = [
        'password'
    ];
}
