<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Criação de tabelas no banco de dados
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profile_registrations', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('surname');
            $table->String('email');
            $table->String('country');
            $table->String('city');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profile_registrations');
    }
};
