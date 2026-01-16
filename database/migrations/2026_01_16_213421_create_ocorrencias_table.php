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
    Schema::create('ocorrencias', function (Blueprint $table) {
        $table->id();

        // Relacionamentos
        $table->foreignId('usuario_id')
              ->nullable()
              ->constrained('users')
              ->nullOnDelete();

        // Identificação da ocorrência
        $table->string('codigo')->unique();

        // Dados do denunciante
        $table->string('nome_denunciante');
        $table->string('documento_denunciante')->nullable();
        $table->string('telefone')->nullable();
        $table->string('email')->nullable();
        $table->string('endereco_denunciante')->nullable();

        // Detalhes do incidente
        $table->string('tipo_ocorrencia');
        $table->enum('urgencia', ['baixa', 'media', 'alta', 'emergencia']);
        $table->date('data_ocorrencia')->nullable();
        $table->time('hora_ocorrencia')->nullable();
        $table->string('local_ocorrencia');
        $table->text('descricao');
        $table->text('suspeitos')->nullable();
        $table->text('testemunhas')->nullable();
        $table->text('informacoes_adicionais')->nullable();

        // Status operacional
        $table->enum('status', ['registrada', 'em_analise', 'encaminhada', 'arquivada'])
              ->default('registrada');

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ocorrencias');
    }
};
