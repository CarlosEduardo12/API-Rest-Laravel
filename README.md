# API-Rest-Laravel
Teste prático para vaga PHP Back-end Developer | DialHost

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

Criando a migration para a tabela articles 
````php
php artisan make:migration create_table_articles --create=articles 
````
Inicializando todas as migrations do sistema 
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
#### Foi criado 1 endpoint com 5 verbos diferentes para a interação:
- _GET_, que pede ao servidor o recurso;
- _POST_, que pede ao servidor que crie um recurso novo;
- _DELETE_, que pede ao servidor que apague um recurso;
- _PUT_, que pede ao servidor a atualização ou edição de um recurso;
- _PATCH_, que aplica modificações parciais a um recurso (No caso modificando a variável deleted_at no BD).

#### Utilização dos endpoints:
- Ao acessar http://localhost:8000/api/articles utilizando o verbo _GET_, o servidor local retorna um _JSON_ com tudo que tem no BD

````php
Route::namespace('API')->name('api.')->group(function() {
      Route::get('/articles', 'ArticleController@index')->name('articles_index');
});
````
- Ao acessar http://localhost:8000/api/articles/1 utilizando o verbo _GET_, o servidor local retorna um _JSON_ com o ID do artigo especificado na _URL_, caso o id informado exista

````php
Route::namespace('API')->name('api.')->group(function() {
      Route::get('/articles/{id}', 'ArticleController@show')->name('articles_show');
});
````
- Ao acessar http://localhost:8000/api/articles utilizando o verbo _POST_, o servidor cria uma nova tupla no BD, caso todos parâmetros passados estejam corretos
````php
Route::namespace('API')->name('api.')->group(function() {
      Route::post('/articles', 'ArticleController@store')->name('articles_store');
});
````
- Ao acessar http://localhost:8000/api/articles/1 utilizando o verbo _PUT_, o servidor atualiza uma informação no BD de acordo com o ID passado na _URL_, podendo passar um ou mais parâmetros para edição
````php
Route::namespace('API')->name('api.')->group(function() {
      Route::put('/articles/{id}', 'ArticleController@update')->name('articles_update');
});
````
- Ao acessar http://localhost:8000/api/articles/1 utilizando o verbo _DELETE_, o servidor fará um _Softdelete_ com o ID informado ou seja  a informação não é completamente deletada do BD, evitando que o BD que fique em um estado inconsistente e podendo ser recuperada posteriormente
````php
Route::namespace('API')->name('api.')->group(function() {
      Route::delete('/articles/{id}', 'ArticleController@delete')->name('articles_delete');
});
````
- Ao acessar http://localhost:8000/api/articles/1 utilizando o verbo _PATCH_, o servidor utiliza o ID informado para procurar entre todos artigos que tenham a variável _deleted_at_ diferente de _Null_, caso o ID seja encontrado dentro dos artigos deletados, ele é restaurado.
````php
Route::namespace('API')->name('api.')->group(function() {
      Route::delete('/articles/{id}', 'ArticleController@delete')->name('articles_delete');
});
````


*BD->Banco de dados







