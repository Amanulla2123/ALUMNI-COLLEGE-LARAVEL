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

Route::get('/addhodtech', function () {
    return view('admin.addhodtech');
});
Route::get('/postapproval', function () {
    return view('admin.postapproval');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/hod', 'HodController@index')->name('hod')->middleware('hod');
Route::get('/user', 'USerController@index')->name('user')->middleware('user');