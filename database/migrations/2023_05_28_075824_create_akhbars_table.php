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
        Schema::create('akhbars', function (Blueprint $table) {
            $table->id('id_n');
            $table->string('title');
            $table->text('detail');
            $table->enum('statu', ['قادم', 'قريب', 'منتهي'])->default('قادم');
            $table->date('datePosted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akhbars');
    }
};