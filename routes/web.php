<?php

use system\router\web\route;

Route::get('', 'HomeController@index', 'index');
Route::get('create', 'HomeController@create', 'create');
Route::post('store', 'HomeController@store', 'store');
Route::get('edit/{id}', 'HomeController@edit', 'edit');
Route::put('update/{id}', 'HomeController@update', 'update');
Route::delete('delete/{id}', 'HomeController@destroy', 'delete');
