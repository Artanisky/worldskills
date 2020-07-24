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
})->name('welcome');
Route::get('/login', 'UserController@index')->name('login');
Route::post('/login', 'UserController@login')->name('user-login');
Route::middleware('auth:web')->group(function (){
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::get('/dashboard/templates', 'DashboardController@templates')->name('templates');
    Route::get('/logout','UserController@logout')->name('user-logout');
});
