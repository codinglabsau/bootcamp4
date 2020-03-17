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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('courses', 'CourseController@index');
Route::get('course/{id}', 'CourseController@show');
Route::post('course', 'CourseController@store');
Route::put('course', 'CourseController@store');
Route::delete('course/{id}', 'CourseController@destroy');

Route::get('comments', 'CommentController@index');

