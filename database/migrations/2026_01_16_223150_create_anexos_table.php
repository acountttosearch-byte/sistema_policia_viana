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
    Schema::create('anexos', function (Blueprint $table) {
        $table->id();

        $table->foreignId('evidencia_id')
              ->constrained('evidencias')
              ->cascadeOnDelete();

        $table->string('nome_arquivo');
        $table->string('mime');
        $table->unsignedBigInteger('tamanho_bytes');
        $table->string('caminho_armazenamento');

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anexos');
    }
};
