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

Geranndo as _Seeder_, _Model_ e _Controller_
````php
php artisan db:seed
php artisan make:controller Api/ArticleController
php artisan make:model Article
````


