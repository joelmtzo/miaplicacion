<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'FirstController@index')->name('index');

Route::get('/productos', 'FirstController@productos')->name('productos');

Route::get('/contacto', 'SecondController@index')->name('contacto'); // no existe aun
