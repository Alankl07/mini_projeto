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


Route::get('login', function(){
    return view('login');
});

Route::get('tarefa', function(){
    return view('tarefas');
});

Route::get('tipo_de_tarefas', function(){
    return view('tipo_de_tarefa');
});

Route::get('cadastro', function(){
    return view('cadastro_usuario');
});
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
