<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');  
            $table->integer('dni')->unique();
            $table->date('dnacimiento');
            $table->string('sexo');
            $table->string('direccion')->nullable();
            $table->integer('telefono_casa')->nullable();
            // $table->integer('telefono_casa');
            // $table->string('')
            $table->foreignId('id_users')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}