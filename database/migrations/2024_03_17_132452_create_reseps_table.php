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
        Schema::create('resep', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_menu');
            $table->unsignedBigInteger('id_bahan_baku');
            $table->string('satuan');
            $table->integer('kebutuhan');
            $table->decimal('harga', 10, 2);
            $table->timestamps();

            // Relasiii
            $table->foreign('id_menu')->references('id')->on('menu')->onDelete('cascade');
            $table->foreign('id_bahan_baku')->references('id')->on('bahan_baku')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resep');
    }
};
