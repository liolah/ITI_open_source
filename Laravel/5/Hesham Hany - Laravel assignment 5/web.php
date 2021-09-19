<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homePage');
});

Auth::routes();

// Route::get('/home', 'IndexController@index')->name('home');
Route::get('/test1', 'PostController@insert');
Route::get('/test2', 'PostController@select');
Route::get('/test3', 'CommentController@insert');
Route::get('/test4', 'CommentController@select');
// Route::get('/register', 'IndexController@register')->name('register');
// Route::get('/posts', 'PostController@index');
// Route::get('/customers', 'CustomerController@index');

// Route::view('/tutorials', 'tutorials')->name('tuts');
// Route::view('/designs', 'designs')->name('designs');
// Route::view('/projects', 'projects')->name('projects');
// Route::view('/About', 'aboutUs')->name('resume');


