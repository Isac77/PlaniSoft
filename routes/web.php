<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('empleador')->name('empleador.')->group(function () {
    Route::get('/crear', 'EmpleadorController@create')->name('create');
    Route::get('/consultar', 'EmpleadorController@show')->name('show');
});

Route::prefix('concepto')->name('concepto.')->group(function () {
    Route::get('/conceptos', 'ConceptoController@index')->name('index');
});