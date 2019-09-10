<?php


Route::get('/', function () {
    return view('front.layouts.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact');

Route::get('/user/edit', 'UserController@edit');
Route::get('/user/dashboard', 'UserController@dashboard');
Route::get('/user/questions', 'UserController@questions');

Route::resource('question', 'QuestionController');