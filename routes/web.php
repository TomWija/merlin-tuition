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

Route::get('about', 'AboutController@index')->name('about');

Route::get('become-student', 'BecomeStudentController@index')->name('become-student');
Route::post('become-student', 'BecomeStudentController@index')->name('become-student');
Route::post('become-student/submit', 'BecomeStudentController@submitApplication')->name('become-student.submit');

Route::get('become-tutor', 'BecomeTutorController@index')->name('become-tutor');
Route::post('become-tutor/submit', 'BecomeTutorController@submitApplication')->name('become-tutor.submit');

Route::post('contact/submit', 'ContactController@submitContactForm')->name('submit-contact-form');
