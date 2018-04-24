<?php

Route::get('/','PostController@index');
Route::get('/post/create','PostController@create');
Route::post('/post','PostController@store');
Route::get('/post/{id}','PostController@show');