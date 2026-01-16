<?php

namespace App\Http\Controllers;

use App\Models\Mensagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MensagemController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'destinatario_id' => 'required|exists:users,id',
            'corpo' => 'required|string',
        ]);

        Mensagem::create([
            'remetente_id' => Auth::id(),
            'destinatario_id' => $request->destinatario_id,
            'corpo' => $request->corpo,
            'enviado_em' => now(),
        ]);

        return back();
    }
}
