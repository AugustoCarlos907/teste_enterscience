<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contratacaos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('artist_id')
                  ->constrained('artists')
                  ->cascadeOnDelete();

            $table->string('nome');
            $table->decimal('cache', 10, 2)->nullable();
            $table->date('data_evento');
            $table->string('endereco')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratacaos');
    }
};
