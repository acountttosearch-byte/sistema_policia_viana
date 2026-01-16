<?php

namespace App\Observers;

use App\Models\Ocorrencia;
use App\Models\AuditLog;
use Illuminate\Support\Facades\Auth;

class OcorrenciaObserver
{
    public function created(Ocorrencia $ocorrencia)
    {
        AuditLog::create([
            'usuario_id' => Auth::id(),
            'acao' => 'CRIAR',
            'entidade' => 'Ocorrencia',
            'entidade_id' => $ocorrencia->id,
            'timestamp' => now(),
        ]);
    }
}
