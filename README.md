# API-Rest-Laravel
Teste pratico para vaga PHP Back-end Developer | DialHost

## Criação do projeto
Laravel Versão (v5.8.0)

## Requerimentos pedidos
- [✔]  Criar uma simples API REST utilizando framework Laravel
- [✔]  Operação de CRUD
- [✔]  Disponibilizar o código no github
- [✔]  Endpoint e explicações de utilização
- [✔]  Utilizar Laravel (versão mais recente)
- [✔]  Montar um Migration para iniciar o banco de dados.
- [✔]  O prazo de 3 dias.

## Fluxo de codificação

Criando a migration com a tabela articles 
````php
php artisan make:migration create_table_articles --create=articles 
````
Inicializando as migrations criadas quanto as padrões 
````php
php artisan migrate 
````

Criando artigos fakers para população do BD usando helpers do proprio Laravel, como _Factory_ e _Seeder_
````php
php artisan make:factory ArticlesFactory
php artisan make:seeder ArticlesTableSeeder 
````

Gerando as _Seeder_, _Model_ e _Controller_
````php
php artisan db:seed
php artisan make:controller Api/ArticleController
php artisan make:model Article
````

## Endpoints
Endpoints criados
````php
Route::namespace('API')->name('api.')->group(function() {
      Route::get('/articles', 'ArticleController@index')->name('articles_index');
      Route::get('/articles/{id}', 'ArticleController@show')->name('articles_show');
      Route::post('/articles', 'ArticleController@store')->name('articles_store');
      Route::put('/articles/{id}', 'ArticleController@update')->name('articles_update');
      Route::delete('/articles/{id}', 'ArticleController@delete')->name('articles_delete');
      Route::patch('/articles/{id}', 'ArticleController@restore')->name('articles_restore');
});

````
Foram criado 6 endpoints com 5 verbos diferentes para a interação
- GET, que pede ao servidor o recurso;
- POST, que pede ao servidor que crie um recurso novo;
- DELETE, que pede ao servidor que apague um recurso;
- PUT, que pede ao servidor a atualização ou edição de um recurso;
- PATCH, que aplica modificações parciais a um recurso (No caso modificando a variável deleted_at no BD).



