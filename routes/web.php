<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('email', function () {
    return view('login/emails');
});

Route::any('home' , 'App\Http\Controllers\HomeController@home');
Route::any('home_email' , 'App\Http\Controllers\HomeController@home_email');
Route::any('review' , 'App\Http\Controllers\ReviewsController@review')->middleware('auth');
Route::any('reply' , 'App\Http\Controllers\ReviewsController@reply');
Route::get('deletereview/{id_review}' , 'App\Http\Controllers\ReviewsController@deletereview')->name('deletereview');
Route::get('change/{id_review}' , 'App\Http\Controllers\ReviewsController@change')->name('change');
Route::get('deletereply/{id_reply}' , 'App\Http\Controllers\ReviewsController@deletereply')->name('deletereply');
Route::get('changereply/{id_reply}' , 'App\Http\Controllers\ReviewsController@changereply')->name('changereply');
// Route::any('indextest' , 'App\Http\Controllers\HomeController@indextest');


// Route::any('slider' , 'App\Http\Controllers\HomeController@slider');

 // -----------------------------------main function  route non ------------------------------------
route::any('login','App\Http\Controllers\LoginController@login')->name('login'); // เปิดหน้า Login
route::any('contact','App\Http\Controllers\LoginController@contact')->name('contact'); // เปิดหน้า contact
route::any('search_result','App\Http\Controllers\LoginController@search_result'); // เปิดหน้า search_result

route::any('create-account','App\Http\Controllers\LoginController@createAccount'); //modal สร้างรหัสผ่าน
route::any('forget-password','App\Http\Controllers\LoginController@forgetPassword');  //modal กู้รหัสผ่าน

route::any('register','App\Http\Controllers\LoginController@register');  // ส่งค่าสมัคร
route::any('loginform','App\Http\Controllers\LoginController@loginform');  // ส่งค่าlogin
route::any('lostpassword','App\Http\Controllers\LoginController@lostpassword');  // ส่งค่าเมล์กู้Password
Route::get('logout', 'App\Http\Controllers\LoginController@logout')->name('logout'); // logout

Route::any('resetPassword', 'App\Http\Controllers\LoginController@resetPassword');  //เปิดหน้า resetPassword
Route::any('newPassword', 'App\Http\Controllers\LoginController@newPassword');  //ส่งค่าnewPassword
route::any('contentstone','App\Http\Controllers\LoginController@contentstone'); // ส่งค่า contact
route::any('profliestone','App\Http\Controllers\LoginController@profliestone'); // ส่งค่า proflie
route::any('upload','App\Http\Controllers\LoginController@upload'); // ส่งค่า proflie
route::get('/verify-email/{token}','App\Http\Controllers\LoginController@verifyEmail')->name('verify.email'); // ส่งค่ายืนยันอีเมล์


Route::get('google/translate','App\Http\Controllers\GoogleTranslateController@googleTranslate')->name('google.translate');
Route::get('google/translate/change','App\Http\Controllers\GoogleTranslateController@googleTranslateChange')->name('google.translate.change');


 // ----------------------------------- dashboard admin ------------------------------------

 route::any('test','App\Http\Controllers\LoginController@test')->middleware('IsAdmin')->name('test'); // ส่งค่า proflie
 route::any('indexadmin','App\Http\Controllers\adminController@indexadmin')->middleware('IsAdmin')->name('indexadmin'); // เปิดหน้า admin
 Route::any('adminIndex','App\Http\Controllers\adminController@adminIndex')->name('adminIndex')->middleware('IsAdmin');
 Route::get('deleteporfile/{create_by}' , 'App\Http\Controllers\adminController@deleteporfile')->name('deleteporfile'); // ลบผู้ใช้งานเว็บ
//  Route::get('showporfile/{id_profiles}', 'App\Http\Controllers\adminController@showporfile')->name('showprofile');


Route::get('/getProfile/{id_profile}', 'App\Http\Controllers\adminController@getProfile'); //แสดงข้อมูล

 // -----------------------------------function test Route ------------------------------------
//  Route::view('/addproperty', 'dashboard.sidebardashboard');
Route::view('/addproperty', 'dashboard.sidebardashboard');

// earth
Route::any('property' , 'App\Http\Controllers\HomeController@property');
//sidebarแรกคือชื่อURL ด้นหลังของ @ คือชื่อเมธอดที่จะถูกเรียก
Route::any('addproperty','App\Http\Controllers\PropertyController@databaseconnect')->middleware('auth')->name('addproperty');
Route::post('db_provinces','App\Http\Controllers\PropertyController@db_provinces')->name('db_provinces');
Route::post('properties', 'App\Http\Controllers\PropertyController@updatedata')->name('properties');
Route::get('delete_image/{id_media}', 'App\Http\Controllers\PropertyController@deleteMedia')->name('deleteMedia');
Route::get('deleteProperty/{id_media}/{id_property}', 'App\Http\Controllers\PropertyController@deleteProperty')->name('deleteProperty');
Route::get('deletenomediaProperty/{id_property}', 'App\Http\Controllers\PropertyController@deletenomediaProperty')->name('deletenomediaProperty');
Route::get('approve/{id_property}', 'App\Http\Controllers\PropertyController@approve')->name('approve');
