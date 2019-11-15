<?php


Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/contact', 'HomeController@contact');

Route::get('/user/edit', 'UserController@edit');
Route::get('/user/dashboard', 'UserController@dashboard');
Route::get('/user/questions', 'UserController@questions');


Route::get('/questions', 'QuestionController@index');
Route::get('/question/ask', 'QuestionController@create')->middleware('auth');
Route::get('/question/{question}', 'QuestionController@show');
Route::post('/question', 'QuestionController@store')->name('question.store');
Route::get('/question/{question}/edit', 'QuestionController@edit')->name('questions.edit')->middleware('auth');
Route::put('/question/{question}', 'QuestionController@update')->name('questions.update')->middleware('auth');
Route::delete('/question/{question}', 'QuestionController@destroy')->name('questions.destroy')->middleware('auth');

Route::post('/question/{id}/comment', 'CommentController@store');

Route::get('/tag/{tag}', 'TagController@show');