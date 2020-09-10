<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PostController@index');
Route::post('/', 'PostController@store');
Route::get('posts/create', 'PostController@create');
Route::get('posts/{post}', 'PostController@show');

Route::get('admin/feedbacks', 'FeedbackController@index');
Route::get('contacts', 'FeedbackController@create');
Route::post('contacts', 'FeedbackController@store');

Route::get('about', function () {
    return view('about');
});
