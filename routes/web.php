<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login', 'AuthController@login')->name('login');
Route::post('/register', 'AuthController@register')->name('register');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::resource('empleador', 'EmpleadorController');

Route::resource('concepto', 'ConceptoController');

Route::get('/nueva-declaracion', 'DeclaracionController@new')->name('dec.new');
Route::get('/declaraciones-registradas', 'DeclaracionController@all')->name('dec.all');