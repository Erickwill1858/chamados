<?php
Route::get('/', 'IndexController@index')->name('home');

/* Senha única */
Route::get('login', 'Auth\LoginController@redirectToProvider')->name('login');
Route::get('callback', 'Auth\LoginController@handleProviderCallback');
Route::post('/logout', 'Auth\LoginController@logout');

/**/
Route::resource('categorias', 'CategoriaController');
Route::resource('chamados', 'ChamadoController');
