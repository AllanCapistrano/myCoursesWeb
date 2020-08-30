<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Rota para a listagem de todos os cursos (página inicial).*/
Route::get('/', 'CursoController@index')->name('index');

/*Rota para a página de inserir os dados no banco de dados.*/
Route::get('/create', 'CursoController@create')->name('curso.create');

/*Rota para a inserção dos dados no banco de dados.*/
Route::post('/store', 'CursoController@store')->name('curso.store');

/*Rota para a página de editar os dados.*/
/*{id} informação passada na URL.*/
Route::get('/edit/{id}', 'CursoController@edit')->name('curso.edit');

/*Rota para a editação dos dados.*/
Route::put('/update/{id}', 'CursoController@update')->name('curso.update');

/*Rota para deletar um curso.*/
Route::delete('/delete/{id}', 'CursoController@destroy')->name('curso.delete');