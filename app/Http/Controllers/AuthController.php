<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function formLogin()
    {
        return view('autenticacao.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nip' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('agente')->attempt([
            'nip' => $request->nip,
            'password' => $request->password,
            'estado' => 'ativo',
        ])) {

            $request->session()->regenerate();

            $agente = Auth::guard('agente')->user();

            // 🔑 DECISÃO DE PAINEL
            if ($agente->perfil === 'admin') {
                return redirect()->route('admin.painel');
            }

            return redirect()->route('agente.painel');
        }

        return back()->withErrors([
            'nip' => 'Credenciais inválidas',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('agente')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
