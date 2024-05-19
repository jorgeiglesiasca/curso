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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedInteger('codigo')->unique();
            $table->string('nombre', 255);
            $table->unsignedInteger('numpax');
            $table->unsignedInteger('telefono');
            $table->text('notas')->nullable();
            $table->boolean('volado')->nullable()->default(false);
            $table->boolean('exclusivo')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
