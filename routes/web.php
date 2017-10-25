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


Route::get('/', function() {
    return view('welcome');
});
Route::get('/rule', function() {
    return view('rule');
});
Route::post('/enrol', 'enrolController@enrol');
Route::get('/excel', 'enrolController@excel');
Route::get('/admin', 'adminController@score');

Route::prefix('admin')->group(function () {
    Route::get('login', 'LoginController@login');
    Route::post('login', 'LoginController@auth');
    Route::get('score', 'adminController@score');
    Route::get('result', 'adminController@result');
    Route::get('{type}', 'adminController@scoringPage');
    Route::post('{type}', 'adminController@scoring');
});
