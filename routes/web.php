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
Route::get('/calender', function () {
    return view('admin.calender');
});
/* Route::get('/postapproval', function () {
    return view('admin.postapproval');
}); */
//Route::get('/addschool', function () {
    //return view('admin.addschool');
//});
//Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::middleware(['auth'])->group(function () {
    Route::get('/approval', 'HomeController@approval')->name('approval');

    Route::middleware(['approved'])->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
    });
});

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/hod', 'HodController@index')->name('hod')->middleware('hod');
Route::get('/user', 'USerController@index')->name('user')->middleware('user');
Route::get('/teacher', 'TeacherController@index')->name('teacher')->middleware('teacher');

Route::resource('addevent', 'AddeventController');
Route::resource('addnews', 'AddnewsController');
Route::resource('addhodtech', 'AddhodtechController');
Route::resource('approveuser', 'ApproveuserController');
Route::get('/admin/approveuser/{userid}', 'ApproveuserController@approve');
Route::resource('postapproval', 'PostapprovalController');
Route::resource('createpost', 'CreatepostController');
Route::resource('/viewpost', 'ViewpostController');
Route::get('/admin.viewpost.{id}', 'ViewpostController@show');
Route::get('/admin/approve/{id}', 'ViewpostController@approve');
Route::resource('addfriend', 'AddfriendController');
