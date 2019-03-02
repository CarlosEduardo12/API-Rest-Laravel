<?php

use Faker\Generator as Faker;

$factory->define(\App\Article::class, function (Faker $faker) {
    return [

        'titulo' => $faker->name,
        'descricao' => $faker->text($maxNbChars = 50),
        'conteudo' => $faker->text($maxNbChars = 200),
        'data' => $faker->dateTime
    ];
});
