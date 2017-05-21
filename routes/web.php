<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', function(){return redirect(route('home'));});

Route::get('/games','GameInstanceController@index')->name('games');
Route::get('/games/new','GameInstanceController@create')->name('games.new');
