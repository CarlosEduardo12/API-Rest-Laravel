<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //defenindo a tabela a ser populada
         $this->call(ArticlesTableSeeder::class);
    }
}
