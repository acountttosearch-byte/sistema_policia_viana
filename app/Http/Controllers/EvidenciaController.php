<?php

namespace App\Http\Controllers;

use App\Models\Evidencia;
use App\Models\Ocorrencia;
use Illuminate\Http\Request;

class EvidenciaController extends Controller
{
    public function store(Request $request, Ocorrencia $ocorrencia)
    {
        $request->validate([
            'descricao' => 'required|string',
            'tipo' => 'required|string',
        ]);

        Evidencia::create([
            'ocorrencia_id' => $ocorrencia->id,
            'descricao' => $request->descricao,
            'tipo' => $request->tipo,
            'estado' => 'registrada',
        ]);

        return back();
    }
}
