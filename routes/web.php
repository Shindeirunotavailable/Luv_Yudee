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
    return view('home.content');
});

Route::get('/login', function () { // แสดงหน้า login
    return view('home.login');
});



Route::get('/basenav', function () { //แสดงหน้า login
    return view('basenav');
});




 // -----------------------------------main function ------------------------------------
route::post('login',[HomeController::class,'login']); // ส่งค่า login

route::any('createaccount','App\Http\Controllers\HomeController@createaccount'); //modal สร้างรหัสผ่าน
route::any('register','App\Http\Controllers\HomeController@register');  //สมัครสมาชิก

route::any('Forgetpassword','App\Http\Controllers\HomeController@Forgetpassword');  //modal กู้รหัสผ่าน
route::any('lostpassword','App\Http\Controllers\HomeController@lostpassword');  //กู้รหัสผ่าน

route::any('content','App\Http\Controllers\HomeController@indextcontent');  // Content
route::any('contentstone','App\Http\Controllers\HomeController@contentstone');  // save Content

Route::any('details' , 'App\Http\Controllers\HomeController@details');


 // -----------------------------------function test Route ------------------------------------

// earth
Route::any('sidebar' , 'App\Http\Controllers\HomeController@sidebar');
Route::any('gallery' , 'App\Http\Controllers\HomeController@gallery');
Route::any('tests' , 'App\Http\Controllers\HomeController@tests');


// Route::any('slider' , 'App\Http\Controllers\HomeController@slider');
