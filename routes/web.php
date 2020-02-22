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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/{name}','HomeController@user')->name('userName');
Route::prefix('admin')->group(function(){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/all-user','AdminController@allUser')->name('allUser');
    Route::get('/all-employee','AdminController@allEmployee')->name('allEmployee');
    Route::get('/activeUser/{id}','AdminController@activeUser');
    Route::get('/unactiveUser/{id}','AdminController@unactiveUser');
    Route::get('/deleteUser/{id}','AdminController@deleteUser');
    Route::get('/activeEmployee/{id}','AdminController@activeEmployee');
    Route::get('/unactiveEmployee/{id}','AdminController@unactiveEmployee');
    Route::get('/deleteEmployee/{id}','AdminController@deleteEmployee');
    Route::get('editEmployee/{id}','AdminController@editEmployee');
    Route::post('editEmployee/{id}','AdminController@saveEmployee');
});
Route::prefix('viewer')->group(function(){
    Route::get('/login','Auth\ViewerLoginController@showLoginForm')->name('viewer.login');
    Route::post('/login','Auth\ViewerLoginController@login')->name('viewer.login.submit');
    Route::get('/', 'ViewerController@index')->name('viewer.dashboard');
    Route::get('/register','Auth\ViewerRegisterController@showRegistrationForm')->name('viewer.register');
    Route::post('/register','Auth\ViewerRegisterController@register')->name('viewer.register.submit');
    Route::get('/my-details','ViewerController@employeeDetails')->name('employeeDetails');
});
