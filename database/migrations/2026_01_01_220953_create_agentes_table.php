<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 public function up()
{
    Schema::create('agentes', function (Blueprint $table) {
        $table->id();
        $table->string('nome_completo');
        $table->string('nip')->unique();
        $table->string('email')->unique();
        $table->string('telefone')->nullable();
        $table->string('unidade');
        $table->string('departamento');
        $table->string('cargo');
        $table->enum('perfil', ['admin', 'agente'])->default('agente');
        $table->enum('estado', ['ativo', 'inativo'])->default('ativo');
        $table->string('password');
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agentes');
    }
};
