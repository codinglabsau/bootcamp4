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



Route::get('/', 'CourseController@index');

Route::get('/courses', 'CourseController@index')
    ->name('courses');

Route::get('/course/{course}', 'CourseController@show')
    ->name('course.show')
    ->middleware('auth');

Route::get('/home', function() {
   return view('home');
})->middleware('auth')->name('home');

Route::get('/quiz', function () {
    return view('quiz');
})->middleware('auth');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// User
Auth::routes();
Route::get('/profile', 'UserController@index');
Route::get('/users/{user}/edit', 'UserController@edit')->name('user.edit');
Route::put('/users/{user}', 'UserController@update')->name('user.update');
