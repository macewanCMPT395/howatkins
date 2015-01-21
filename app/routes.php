<?php

Route::get('/', 'HomeController@showHome'); 
Route::resource('users', 'UserController');
