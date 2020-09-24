<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Task;

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

//Posts
Route::get('/', 'PostController@index')->name('home');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts/create', 'PostController@store');

//Tags
Route::get('/posts/tags/{tag}', 'TagsController@index');

//Comments
Route::post('/posts/{post}/createComment', 'CommentController@store');

//Registration
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

//Session
Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');
