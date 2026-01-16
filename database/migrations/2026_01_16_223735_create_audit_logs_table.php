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
    Schema::create('audit_logs', function (Blueprint $table) {
        $table->id();

        $table->foreignId('usuario_id')
              ->constrained('users')
              ->cascadeOnDelete();

        $table->string('acao');
        $table->string('entidade');
        $table->unsignedBigInteger('entidade_id')->nullable();

        $table->dateTime('timestamp');

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audit_logs');
    }
};
