<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutores', function (Blueprint $table) {
            $table->id();
            $table->string("nome_completo");
            $table->string("email");
            $table->string("senha");
            $table->string("endereco");
            $table->string("bairro")->nullable();
            $table->string("complemento")->nullable();
            $table->string("estado");
            $table->string("cidade");
            $table->string("cep")->nullable();
            $table->date("nascimento");
            $table->enum("sexo", ["M", "F"]);
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
        Schema::dropIfExists('tutores');
    }
}
