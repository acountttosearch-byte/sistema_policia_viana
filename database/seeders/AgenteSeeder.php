<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agente;
use Illuminate\Support\Facades\Hash;

class AgenteSeeder extends Seeder
{
    public function run()
    {
        Agente::create([
            'nome_completo' => 'Administrador do Sistema',
            'nip' => 'ADMIN001',
            'email' => 'admin@policia.ao',
            'telefone' => '900000000',
            'unidade' => 'Viana',
            'departamento' => 'Comando',
            'cargo' => 'Administrador',
            'perfil' => 'admin',
            'estado' => 'ativo',
            'password' => Hash::make('123456')
        ]);

        Agente::create([
            'nome_completo' => 'Agente Operacional',
            'nip' => 'AGENTE001',
            'email' => 'agente@policia.ao',
            'telefone' => '911111111',
            'unidade' => 'Viana',
            'departamento' => 'Investigação',
            'cargo' => 'Agente',
            'perfil' => 'agente',
            'estado' => 'ativo',
            'password' => Hash::make('123456')
        ]);
    }
}
