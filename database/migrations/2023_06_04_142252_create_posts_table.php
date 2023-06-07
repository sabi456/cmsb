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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cin');
            $table->string('city_b')->nullable();
            $table->date('date_b')->nullable();
            $table->string('adress');
            $table->string('phone');
            $table->string('mail')->nullable();
            $table->string('note')->nullable();
            $table->binary('pict');
            $table->binary('cin_pict');
            $table->binary('magasin_pict');
            $table->binary('entreprise_pict');
            $table->binary('payment_pict');
            $table->string('name_e');
            $table->string('cat');
            $table->string('phone_e');
            $table->integer('nbr_of_em');
            $table->string('adress_e');
            $table->string('ice');
            $table->string('rc');
            $table->string('payer')->nullable();
            $table->string('number_v');
            $table->string('pay_name');
            $table->string('status');
            $table->integer('user_id')->default(0);
            $table->integer('user_id2')->default(0);
            $table->integer('user_id3')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
