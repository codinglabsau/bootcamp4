<?php

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

Route::get('/courses', 'CourseController@index');
Route::get('/courses/{course}', 'CourseController@show');
Route::get('/courses/buy/{course}', 'CourseController@buy')->middleware('auth');
Route::get('/courses/{course}/{sectionid}', 'CourseController@section');

Route::get('/student_courses', 'CourseController@studentCourses');
