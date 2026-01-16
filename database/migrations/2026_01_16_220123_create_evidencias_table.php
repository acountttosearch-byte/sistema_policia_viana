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
    Schema::create('evidencias', function (Blueprint $table) {
        $table->id();

        $table->foreignId('ocorrencia_id')
              ->constrained('ocorrencias')
              ->cascadeOnDelete();

        $table->string('tipo'); // foto, video, audio, documento
        $table->string('descricao')->nullable();
        $table->string('local_coleta')->nullable();
        $table->dateTime('coletada_em')->nullable();

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evidencias');
    }
};
