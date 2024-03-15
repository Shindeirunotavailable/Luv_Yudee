<?php

use Illuminate\Support\Facades\Auth;
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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::any('home' , 'App\Http\Controllers\HomeController@home');
Route::any('home_email' , 'App\Http\Controllers\HomeController@home_email');
Route::any('review' , 'App\Http\Controllers\ReviewsController@review');

// Route::any('slider' , 'App\Http\Controllers\HomeController@slider');

 // -----------------------------------main function  route non ------------------------------------
route::any('login','App\Http\Controllers\LoginController@login'); // เปิดหน้า Login
route::any('contact','App\Http\Controllers\LoginController@contact'); // เปิดหน้า contact
route::any('search_result','App\Http\Controllers\LoginController@search_result'); // เปิดหน้า details

route::any('create-account','App\Http\Controllers\LoginController@createAccount'); //modal สร้างรหัสผ่าน
route::any('forget-password','App\Http\Controllers\LoginController@forgetPassword');  //modal กู้รหัสผ่าน

route::any('register','App\Http\Controllers\LoginController@register');  // สมัคร
route::any('loginform','App\Http\Controllers\LoginController@loginform');  // เข้าสู่ระบบ
route::any('lostpassword','App\Http\Controllers\LoginController@lostpassword');  // กู้รหัสผ่าน
Route::get('logout', 'App\Http\Controllers\LoginController@logout')->name('logout');



 // -----------------------------------function test Route ------------------------------------
 Route::view('/addproperty', 'dashboard.sidebardashboard');
// earth
Route::any('property' , 'App\Http\Controllers\HomeController@property');
//sidebarแรกคือชื่อURL ด้นหลังของ @ คือชื่อเมธอดที่จะถูกเรียก
Route::any('addproperty','App\Http\Controllers\PropertyController@databaseconnect');
Route::post('db_provinces','App\Http\Controllers\PropertyController@db_provinces')->name('db_provinces');
Route::post('properties', 'App\Http\Controllers\PropertyController@updatedata')->name('properties');
Route::get('delete_image/{id_media}', 'App\Http\Controllers\PropertyController@deleteMedia')->name('deleteMedia');

Route::any('myproperties','App\Http\Controllers\PropertyController@showproperty');
