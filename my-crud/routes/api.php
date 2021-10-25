<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

 
 
Route::get('Cat', 'CategoriaController@index');
Route::get('Use', 'UsuariosController@index');

Route::group(['prefix' => 'Categoria'], function () {
    Route::post('addCat', 'CategoriaController@add');
    Route::get('editCat/{id}', 'CategoriaController@edit');
    Route::post('updateCat/{id}', 'CategoriaController@update');
    Route::delete('deleteCat/{id}', 'CategoriaController@delete');
});

Route::group(['prefix' => 'usuarios'], function () {
    Route::post('addUse', 'UsuariosController@add');
    Route::get('editUse/{id}', 'UsuariosController@edit');
    Route::post('updateUse/{id}', 'UsuariosController@update');
    Route::delete('deleteUse/{id}', 'UsuariosController@delete');
});
