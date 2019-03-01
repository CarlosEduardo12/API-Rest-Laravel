<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //populando minha base de dados com 15 artigos
        factory(\App\Article::class, 15)->create();
    }
}
