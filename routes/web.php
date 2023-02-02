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

Route::get('/', '\App\Http\Controllers\HomeController@index')->name('home.index');

Route::group(['middleware' => ['guest']],function(){
//    register
    Route::get('/register',[\App\Http\Controllers\RegisterController::class,'index'])->name('register.index');
    Route::post('/register','\App\Http\Controllers\RegisterController@register')->name('register.perform');
//    login
    Route::get('/login',[\App\Http\Controllers\LoginController::class,'index'])->name('login.index');
    Route::post('/login','\App\Http\Controllers\LoginController@login')->name('login.perform');
});

Route::group(['middelware' => ['auth']],function (){
//    logout
    Route::get('/logout',[\App\Http\Controllers\LogoutController::class,'perform'])->name('logout.perform');
});
