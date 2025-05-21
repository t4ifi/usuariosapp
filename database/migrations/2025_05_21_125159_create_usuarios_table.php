<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('nickname')->unique();
            $table->dateTime('fecha_nac');
            $table->string('nacionalidad');
            $table->timestamps();
        });
    }

 
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
