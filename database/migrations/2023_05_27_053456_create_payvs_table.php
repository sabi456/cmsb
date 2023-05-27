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
        Schema::create('payvs', function (Blueprint $table) {
            $table->id('id_payv');
            $table->string('name')->nullable();
            $table->unsignedBigInteger('id')->nullable();
            $table->foreign('id')->references('id')->on('persens');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payvs');
    }
};
