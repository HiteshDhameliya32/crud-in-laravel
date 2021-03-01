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

Route::get('/test/{id}', function ($id) {
    echo $id;
    return view('first');
});

Route::get('user_home','App\Http\Controllers\User@index');

Route::get('ShowStudent','App\Http\Controllers\StudentController@show');

Route::get('student_delete/{id}','App\Http\Controllers\StudentController@destroy');

Route::get('student_insert','App\Http\Controllers\StudentController@create');

Route::post('student_submit','App\Http\Controllers\StudentController@store');

Route::get('student_edit/{id}','App\Http\Controllers\StudentController@edit');

Route::post('student_update/{id}','App\Http\Controllers\StudentController@update')->name('studupdate');