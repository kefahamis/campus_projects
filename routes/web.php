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
Route::get('/lists','Auth\RegisterController@roles');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/worker', 'WorkerController@index')->name('worker')->middleware('worker');
Route::get('/employer', 'EmployerController@index')->name('employer')->middleware('employer');