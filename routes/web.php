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
    return view('home');
});
Route::get('/login', 'Authcontroller@login')->name('login');
Route::post('/putslogin','Authcontroller@putslogin');
Route::get('/logout','Authcontroller@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard','Dashboardcontroller@index');
    Route::get('/siswa','Siswacontroller@index');
    Route::post('/siswa/create','Siswacontroller@create');
    Route::get('/siswa/{id}/edit','Siswacontroller@edit');
    Route::post('/siswa/{id}/update','Siswacontroller@update');
    Route::get('/siswa/{id}/delete','Siswacontroller@delete');
    Route::get('/siswa/{id}/profile','Siswacontroller@profile');

});

