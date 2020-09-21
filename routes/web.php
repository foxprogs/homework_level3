<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PostController@index')->name('post.index');
Route::post('/', 'PostController@store')->name('post.store');
Route::get('posts/create', 'PostController@create')->name('post.create');
Route::get('posts/{post}', 'PostController@show')->name('post.show');

Route::get('admin/feedbacks', 'FeedbackController@index')->name('feedback.index');
Route::get('contacts', 'FeedbackController@create')->name('feedback.create');
Route::post('contacts', 'FeedbackController@store')->name('feedback.store');

Route::get('about', 'StaticPageController@about')->name('static.about');
