<?php

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::namespace('API')->name('api.')->group(function() {
      Route::get('/articles', 'ArticleController@index')->name('articles_index');
      Route::get('/articles/{id}', 'ArticleController@show')->name('articles_show');
      Route::post('/articles', 'ArticleController@store')->name('articles_store');
      Route::put('/articles/{id}', 'ArticleController@update')->name('articles_update');
      Route::delete('/articles/{id}', 'ArticleController@delete')->name('articles_delete');
      Route::patch('/articles/{id}', 'ArticleController@restore')->name('articles_restore');
});
