<?php

use Illuminate\Support\Facades\Route;

Route::get('/','TaskController@index');

Route::post('/task/create','TaskController@store')->name('task.create');

