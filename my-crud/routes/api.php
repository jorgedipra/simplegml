<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

 
 
Route::get('categoria', 'CategoriaController@index');
Route::get('usuarios', 'UsuariosController@index');

Route::group(['prefix' => 'Categoria'], function () {
    Route::post('add', 'CategoriaController@add');
    Route::get('edit/{id}', 'CategoriaController@edit');
    Route::post('update/{id}', 'CategoriaController@update');
    Route::delete('delete/{id}', 'CategoriaController@delete');
});

Route::group(['prefix' => 'usuarios'], function () {
    Route::post('add', 'UsuariosController@add');
    Route::get('edit/{id}', 'UsuariosController@edit');
    Route::post('update/{id}', 'UsuariosController@update');
    Route::delete('delete/{id}', 'UsuariosController@delete');
});
