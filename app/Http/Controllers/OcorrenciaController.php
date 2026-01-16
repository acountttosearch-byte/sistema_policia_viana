<?php

namespace App\Http\Controllers;

use App\Models\Ocorrencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OcorrenciaController extends Controller
{
    public function index()
    {
        $ocorrencias = Ocorrencia::with('agente')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('ocorrencias.index', compact('ocorrencias'));
    }

    public function create()
    {
        return view('ocorrencias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'local' => 'required|string',
            'data_ocorrencia' => 'required|date',
        ]);

        Ocorrencia::create([
            'agente_id' => Auth::id(),
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'local' => $request->local,
            'data_ocorrencia' => $request->data_ocorrencia,
            'estado' => 'aberta',
        ]);

        return redirect()->route('/ocorrencias');
    }
}
