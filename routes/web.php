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

Route::resource('users', 'UsersController', [
    'only' => ['auth.register', 'show']
]);
// Route::get('users', 'UsersController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'App\Http\Middleware\WorkerMiddleware'], function()
    {
        Route::match(['get', 'post'], '/workerOnlyPage/', 'HomeController@admin');
        
});

Route::group(['middleware' => 'App\Http\Middleware\EmployerMiddleware'], function()
    {
        Route::match(['get', 'post'], '/employeeOnlyPage/', 'HomeController@member');
        
});
