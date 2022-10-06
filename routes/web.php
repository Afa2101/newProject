<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::resource('posts', PostController::class);

Route::get('admin/post',['middleware'=>'admin', 'uses'=>'App\Http\Controllers\Admin\Post\IndexController'])->middleware('auth')->name('admin.post.index');

Route::get('/about', 'App\Http\Controllers\MyAboutController@index')->name('about.index');
Route::get('/contacts', 'App\Http\Controllers\MyContactsController@index')->name('contact.index');
Route::get('/main', 'App\Http\Controllers\MyMainController@index')->name('main.index');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
