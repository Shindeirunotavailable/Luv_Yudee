<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::any('hometest' , 'App\Http\Controllers\HomeController@hometest');
Route::any('test' , 'App\Http\Controllers\HomeController@test');
Route::any('non' , 'App\Http\Controllers\HomeController@non');


// Route::any('slider' , 'App\Http\Controllers\HomeController@slider'); 
//---------------------- คำสั่งเปิดหน้าต่างๆ ------------------------//

Route::get('/profile', function () { // หน้าแสดงโปรไฟล์
    return view('profile');
});

Route::get('/content', function () { // หน้าแสดง  content
    return view('login.content');
});


 // -----------------------------------main function  route non ------------------------------------
route::any('login','App\Http\Controllers\LoginController@login'); // เปิดหน้า Login
route::any('content','App\Http\Controllers\LoginController@content'); // เปิดหน้า content
route::any('details','App\Http\Controllers\LoginController@details'); // เปิดหน้า details

route::any('create-account','App\Http\Controllers\LoginController@createAccount'); //modal สร้างรหัสผ่าน
route::any('forget-password','App\Http\Controllers\LoginController@forgetPassword');  //modal กู้รหัสผ่าน
route::any('content','App\Http\Controllers\LoginController@indextcontent');  // Content

Route::any('details' , 'App\Http\Controllers\LoginController@details');


 // -----------------------------------function test Route ------------------------------------

// earth
Route::any('sidebar' , 'App\Http\Controllers\HomeController@sidebar');
Route::any('gallery' , 'App\Http\Controllers\HomeController@gallery');
Route::any('tests' , 'App\Http\Controllers\HomeController@tests');


// Route::any('slider' , 'App\Http\Controllers\HomeController@slider');
