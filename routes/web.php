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

Route::get('/quiz', function () {
    return view('quiz');
});

Route::get('modal-test', function() {
    //dd(App\User::find(2)->enrolments->first()->assessmentItems->where('assessment_item_id', 1)->first()->mark);
    return view('modal_test');
})->middleware('auth');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::resource('courses', 'CourseController')->names([
   'index' => 'courses',
]);

