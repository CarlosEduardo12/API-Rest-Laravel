<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {

          /**
          * Criação da tabela artigos com titulo, descriçâo, conteudo, data e
          * softDeletes para manter a consistencia do banco.
          */
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('descricao');
            $table->string('conteudo');
            $table->date('data');
            $table->softDeletes();
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
        Schema::dropIfExists('articles');
    }
}
