<?php

Route::get('/', 'WelcomeController@index');
Route::get('/support', 'WelcomeController@support');
Route::get('/about', 'WelcomeController@about');
Route::get('/blog', 'WelcomeController@blog');
Route::get('/contact', 'WelcomeController@contact');