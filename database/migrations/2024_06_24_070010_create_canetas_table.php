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
        Schema::create('canetas', function (Blueprint $table) {
            $table->id();
            $table->string('cor'); // exemplo: Azul
            $table->string('tipo_de_tinta'); // exemplo: Gel
            $table->string('marca'); // exemplo: Bic
            $table->string('ponta'); // exemplo: 0.7mm
            $table->string('material_do_corpo'); // exemplo: plastico
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('canetas');
    }
};
