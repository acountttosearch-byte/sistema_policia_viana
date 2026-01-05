<?php

namespace App\Http\Controllers;

use App\Models\Agente;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AgenteController extends Controller
{
    // LISTAR AGENTES
    public function index()
    {
        $agentes = Agente::with('role')->get();
        return view('agentes.index', compact('agentes'));
    }

    // FORMULÁRIO DE CADASTRO
    public function create()
    {
        $roles = Role::all();
        return view('agentes.create', compact('roles'));
    }

    // GUARDAR NO BANCO
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:agentes',
            'nome_completo' => 'required',
            'email' => 'required|email|unique:agentes',
            'departamento' => 'required',
            'role_id' => 'required',
            'password' => 'required|min:6'
        ]);

        Agente::create([
            'nip' => $request->nip,
            'nome_completo' => $request->nome_completo,
            'email' => $request->email,
            'departamento' => $request->departamento,
            'role_id' => $request->role_id,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/agentes')->with('success', 'Agente cadastrado com sucesso');
    }
}
