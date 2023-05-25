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
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id('id_e');
            $table->string('name_e');
            $table->string('cat');
            $table->string('phone_e')->unique();
            $table->integer('nbr_of_em');
            $table->string('adress_e');
            $table->string('rc')->unique();
            $table->string('cnss')->unique();
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
        Schema::dropIfExists('entreprises');
    }
};
