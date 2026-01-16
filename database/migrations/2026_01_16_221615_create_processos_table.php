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
    Schema::create('processos', function (Blueprint $table) {
        $table->id();

        $table->foreignId('ocorrencia_id')
              ->constrained('ocorrencias')
              ->cascadeOnDelete();

        $table->string('numero')->unique();
        $table->enum('status', ['aberto', 'em_andamento', 'encerrado'])
              ->default('aberto');

        $table->dateTime('aberto_em')->nullable();
        $table->text('observacoes')->nullable();

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('processos');
    }
};
