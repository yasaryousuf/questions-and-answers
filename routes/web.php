<?php


Route::get('/', function () {
    return view('front.layouts.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('question', 'QuestionController');