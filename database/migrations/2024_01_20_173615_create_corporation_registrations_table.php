<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('corporation_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreign('profile_id')->references('id')->on('profile_registration'); //pegando o id do perfil com chave estrangeira
            $table->enum('office', ['boss','employee'])->default('employee');
            $table->enum('function', ['manage_business','consult_client'])->default('consult_client');
            $table->String('type_of_technology');
            $table->String('company');
            $table->enum('modality', ['clt','pj']);
            $table->Decimal('wage');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('corporation_registrations');
    }
};
