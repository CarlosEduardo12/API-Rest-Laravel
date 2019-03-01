<?php

use Faker\Generator as Faker;

$factory->define(\App\Article::class, function (Faker $faker) {
    return [
      
      /** Criação de dados faker para minha base de dados
      * Descriçao e conteuno estao gerando nomes aleatorios para nao dar o erro
      *  1406 Data too long for column 'descricao'.
      */

        'titulo' => $faker->name,
        'descricao' => $faker->name,
        'conteudo' => $faker->name,
        'data' => $faker->dateTime
    ];
});
