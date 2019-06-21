<?php


Route::get("/admin", 'PagesController@admin')->name('admin')->middleware('admin');
Route::get("/", 'PagesController@index');
Route::resource("/posts", "PostController")->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
