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
Route::redirect('/','/home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/estado', 'EstadoController');
Route::resource('/cidade', 'CidadeController');
Route::resource('/aluno', 'AlunoController');
//Route::resource('/nota', 'NotaController');
$this->get('nota', 'NotaController@index')->name('nota.index');
$this->get('nota/create', 'NotaController@create')->name('nota.create');
$this->post('nota', 'NotaController@store')->name('nota.store');
$this->get('nota/{id}/ano/{ano}/semestre/{semestre}', 'NotaController@show')->name('nota.show');
$this->get('nota/{id}/edit/{ano}/semestre/{semestre}', 'NotaController@edit')->name('nota.edit');
$this->patch('nota/{id}/edit/{ano}/semestre/{semestre}', 'NotaController@update')->name('nota.update');
$this->delete('nota/{id}/edit/{ano}/semestre/{semestre}', 'NotaController@destroy')->name('nota.destroy');
