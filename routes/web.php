<?php


Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/contact', 'HomeController@contact');

Route::get('/user/edit', 'UserController@edit');
Route::get('/user/dashboard', 'UserController@dashboard');
Route::get('/user/questions', 'UserController@questions');

Route::get('/questions', 'QuestionController@index');
Route::get('/question/ask', 'QuestionController@create')->middleware('auth');
Route::get('/question/{id}', 'QuestionController@show');
Route::post('/question', 'QuestionController@store')->name('question.store');