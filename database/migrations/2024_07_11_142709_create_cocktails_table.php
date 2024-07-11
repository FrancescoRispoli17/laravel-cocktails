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
        Schema::create('cocktails', function (Blueprint $table) {
            $table->id();
            $table->string('nome',30);
            $table->string('ingrediente 1',30);
            $table->string('ingrediente 2',30);
            $table->string('ingrediente 3',30);
            $table->string('ingrediente 4',30);
            $table->string('ingrediente 5',30);
            $table->float('tasso_alcolemico');
            $table->float('prezzo');
            $table->string('descrizione',200);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cocktails');
    }
};
