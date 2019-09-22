<?php


Route::view('admin/panel','partials.admin.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
