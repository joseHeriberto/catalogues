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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuarios', 'HomeController@user');
Route::resource('users', 'HomeController');
Route::resource('user', 'UserController');


Route::get('/phone', 'UserController@phone');
Route::get('/phoneSo', 'UserController@phoneSo');
Route::get('/console', 'UserController@console');
Route::get('/console/xbox', 'UserController@xbox');
Route::get('/console/ps', 'UserController@ps');
Route::get('/phone/brand', 'UserController@brand');
Route::get('/phone/camera', 'UserController@camera');
Route::get('/phone/system', 'UserController@system');
Route::get('/phone/system/android', 'UserController@android');
Route::get('/phone/system/ios', 'UserController@ios');
Route::get('/phone/brand/motorola', 'UserController@motorola');
Route::get('/phone/brand/samsung', 'UserController@samsung');
Route::get('/phone/brand/huawei', 'UserController@huawei');
Route::get('/phone/brand/huawei', 'ProductController@index');
Route::get('/phone/brand/motorola', 'ProductController@motorola');
Route::get('/phone/brand/samsung', 'ProductController@samsung');
Route::get('/phone/system/ios', 'ProductController@ios');
Route::get('/console/xbox', 'ProductController@xbox');
Route::get('/console/ps', 'ProductController@ps');
Route::get('/create', 'UserController@create');
Route::post('/login-two-factor/{user}', 'Auth\LoginController@login2FA')->name('login.2fa');

