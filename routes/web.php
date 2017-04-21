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

Route::get('/', 'HomeController@index')->name('home');

Route::get('about', function() {
    return view('about.index');
})->name('about');

Route::get('become-student', 'BecomeStudentController@index')->name('become-student');

Route::get('become-tutor', function() {
    return view('become-tutor.index');
})->name('become-tutor');
