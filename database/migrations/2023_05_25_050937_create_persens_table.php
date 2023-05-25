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
        Schema::create('persens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cin')->unique();
            $table->string('city_b');
            $table->date('date_b');
            $table->string('adress');
            $table->string('phone')->unique();
            $table->string('mail')->unique();
            $table->text('note');     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persens');
    }
};
