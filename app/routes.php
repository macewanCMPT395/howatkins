<?php

Route::get('/', 'HomeController@showHome'); 
Route::get('login', array('as' => 'sessions.create',
        'uses' => 'SessionsController@create'));
Route::get('logout', array('as' => 'sessions.destroy',
        'uses' => 'SessionsController@destroy'));
Route::post('login', array('as' => 'sessions.store',
        'uses' => 'SessionsController@store'));
Route::resource('users', 'UsersController');
