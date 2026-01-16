<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'acao',
        'entidade',
        'entidade_id',
        'timestamp',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
