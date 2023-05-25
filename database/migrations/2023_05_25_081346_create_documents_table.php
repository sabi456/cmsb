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
        Schema::create('documents', function (Blueprint $table) {
            $table->id('id_d');
            $table->binary('pict');
            $table->binary('cin_pict');
            $table->binary('magasin_pict');
            $table->binary('entreprise_pict');
            $table->binary('payment_pict');
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('persens');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
