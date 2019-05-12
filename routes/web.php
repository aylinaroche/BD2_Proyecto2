<?php

Route::get('/Usuarios', function () {
    return view('usuarios');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/', 'Auth\LoginController@showLoginForm')->middleware('guest');

Route::post('create', 'UsuariosController@create')->name('create');
Route::get('/usuarios', 'UsuariosController@showForm')->name('usuarios');