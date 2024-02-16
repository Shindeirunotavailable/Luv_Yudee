<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProvincesController;
use App\Http\Controllers\PropertyController;

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

 // -----------------------------------main function  route non ------------------------------------
route::any('login','App\Http\Controllers\LoginController@login'); // เปิดหน้า Login
route::any('contact','App\Http\Controllers\LoginController@contact'); // เปิดหน้า contact
route::any('rearch_resulte','App\Http\Controllers\LoginController@rearch_resulte'); // เปิดหน้า details

route::any('create-account','App\Http\Controllers\LoginController@createAccount'); //modal สร้างรหัสผ่าน
route::any('forget-password','App\Http\Controllers\LoginController@forgetPassword');  //modal กู้รหัสผ่าน

 // -----------------------------------function test Route ------------------------------------

// earth
Route::any('property' , 'App\Http\Controllers\HomeController@property');
//sidebarแรกคือชื่อURL ด้นหลังของ @ คือชื่อเมธอดที่จะถูกเรียก
Route::any('addproperty','App\Http\Controllers\PropertyController@sidebar');
Route::post('db_provinces','App\Http\Controllers\PropertyController@db_provinces')->name('db_provinces');
Route::post('properties', 'App\Http\Controllers\PropertyController@updatedata')->name('properties');;



