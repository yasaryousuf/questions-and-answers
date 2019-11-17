<?php


Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/contact', 'HomeController@contact');


Route::prefix('user')->group(function(){
    Route::get('/edit', 'UserController@edit');
    Route::get('/dashboard', 'UserController@dashboard');
    Route::get('/questions', 'UserController@questions');
});

Route::prefix('questions')->group(function () {
    Route::get('/', 'QuestionController@index');
    Route::get('/ask', 'QuestionController@create')->middleware('auth');
    Route::get('/{question}', 'QuestionController@show');
    Route::post('/', 'QuestionController@store')->name('question.store');
    Route::get('/{question}/edit', 'QuestionController@edit')->name('questions.edit')->middleware('auth');
    Route::put('/{question}', 'QuestionController@update')->name('questions.update')->middleware('auth');
    Route::delete('/{question}', 'QuestionController@destroy')->name('questions.destroy')->middleware('auth');
    Route::post('/{id}/comment', 'CommentController@store');
});


Route::get('/tag/{tag}', 'TagController@show');