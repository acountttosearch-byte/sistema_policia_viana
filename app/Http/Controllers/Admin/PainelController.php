<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agente;

class PainelController extends Controller
{
  
        public function index()
{
    $agentesAtivos = Agente::where('estado', 'ativo')->get();
    $agentesInativos = Agente::where('estado', 'inativo')->get();

    return view('admin.painel', compact('agentesAtivos', 'agentesInativos'));
}

    }
