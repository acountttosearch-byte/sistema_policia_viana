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
    Schema::create('mensagens', function (Blueprint $table) {
        $table->id();

        $table->foreignId('remetente_id')
              ->constrained('users')
              ->cascadeOnDelete();

        $table->foreignId('destinatario_id')
              ->constrained('users')
              ->cascadeOnDelete();

        $table->string('assunto')->nullable();
        $table->text('corpo');

        $table->boolean('lido')->default(false);
        $table->dateTime('enviado_em')->nullable();

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensagems');
    }
};
