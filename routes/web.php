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

Route::prefix('concepto')->name('concepto.')->group(function () {
    Route::get('/conceptos', 'ConceptoController@index')->name('index');
});

//Trabajadores
Route::prefix('trabajador')->name('trabajador.')->group(function () {
    Route::get('/listar', 'TrabajadorController@showWorkers')->name('show');
    Route::get('/nuevo', 'TrabajadorController@createWorker')->name('nuevo');
    Route::get('/perfil', 'TrabajadorController@showProfile')->name('perfil');
    Route::post('/save', 'TrabajadorController@saveDI');
    Route::post('/saveDI', 'TrabajadorController@saveDI');
    Route::post('/savedl', 'TrabajadorController@saveDL');
    Route::post('/saveSE', 'TrabajadorController@saveDSE');
    Route::post('/saveSS', 'TrabajadorController@saveDSS');
    Route::post('/saveDT', 'TrabajadorController@saveDT');

    //Sin Second Address
    Route::group(['prefix'=>'dir2', 'as'=>'dir2'], function (){
        Route::get('cbos', 'TrabajadorController@secondAddress');
        Route::post('prov', 'TrabajadorController@getProv');
        Route::post('dist', 'TrabajadorController@getDist');
        Route::post('ocup', 'TrabajadorController@getOcupaciones');
        Route::post('dse', 'TrabajadorController@sitEspecialDetail');

    });
    Route::group(['prefix'=>'est', 'as'=>'est'], function (){
        Route::get('ecomp', 'TrabajadorController@getEstudiosSuperiores');
        Route::get('years', 'TrabajadorController@getYearEgreso');
    });
    Route::group(['prefix'=>'depend', 'as'=>'depend'], function (){
        Route::post('cbo', 'TrabajadorController@comboAnidados');
    });

});



//Derecho Habientes
Route::prefix('derecho-hab')->name('derechohab.')->group(function () {
    Route::get('/verdh', 'DerechohabController@showDerechoHab')->name('verdh');
    Route::get('/registrardh', 'DerechohabController@createDerechoHab')->name('registrardh');
});
//mis rutas
Route::get('/nueva-declaracion', 'DeclaracionController@new')->name('dec.new');
Route::get('/declaraciones-registradas', 'DeclaracionController@all')->name('dec.all');
