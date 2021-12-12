<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//rutas auth
Route::post('/login', 'AuthController@login')->name('login');
Route::post('/register', 'AuthController@register')->name('register');
Route::get('/logout', 'AuthController@logout')->name('logout');

//ruta empleador
Route::resource('empleador', 'EmpleadorController');
//ruta concepto
Route::resource('concepto', 'ConceptoController');

//mis rutas
Route::get('/nueva-declaracion', 'DeclaracionController@new')->name('dec.new');
Route::get('/declaraciones-registradas', 'DeclaracionController@all')->name('dec.all');