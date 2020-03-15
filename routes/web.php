<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Route Admin
Route::get('/adminLogin', function () {
    return view('admin.login');
})->middleware('guest')->name('loginAdmin');

Route::get('/adminRegister', function () {
    return view('admin.register');
})->middleware('guest');

Route::get('/adminHome', function () {
    return view('admin.home');
})->middleware('auth:admin')->name('homeAdmin');

Route::post('/adminRegister', 'AdminController@register');
Route::post('/adminLogin', 'AdminController@login');
Route::get('/adminLogout', 'AdminController@logout');

//Route User
Route::get('/userLogin', function () {
    return view('user.login');
})->middleware('guest')->name('loginUser');

Route::get('/userRegister', function () {
    return view('user.register');
})->middleware('guest');

Route::get('/userHome', function () {
    return view('user.home');
})->middleware('authUser:user')->name('homeUser');

Route::post('/userRegister', 'UserController@register');
Route::post('/userLogin', 'UserController@login');
Route::get('/userLogout', 'UserController@logout');

//Product
Route::get('/productCreate', function(){
	return view('product.create');
});
Route::get('/productHome', function(){
	return view('product.home');
});

Route::resource('products','ProductController');

Route::post('/productCreate', 'ProductController@store');
Route::get('/productHome', 'ProductController@index');
Route::post('/productShow', 'ProductController@show');
