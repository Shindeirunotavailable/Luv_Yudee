<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProvincesController;
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
route::any('content','App\Http\Controllers\LoginController@content'); // เปิดหน้า content
route::any('details','App\Http\Controllers\LoginController@details'); // เปิดหน้า details

route::any('create-account','App\Http\Controllers\LoginController@createAccount'); //modal สร้างรหัสผ่าน
route::any('forget-password','App\Http\Controllers\LoginController@forgetPassword');  //modal กู้รหัสผ่าน


 // -----------------------------------function test Route ------------------------------------

// earth
Route::any('sidebar' , 'App\Http\Controllers\HomeController@sidebar');
Route::any('property' , 'App\Http\Controllers\HomeController@property');


// Route::get('editor' , 'App\Http\Controllers\CKEditor@editor');
// Route::post('store' , 'App\Http\Controllers\CKEditor@store');
// Route::any('slider' , 'App\Http\Controllers\HomeController@slider');


// Route::get('/test-database', function () {
//     try {
//         DB::connection()->getPdo();
//         return "เชื่อมต่อฐานข้อมูลสำเร็จ!";
//     } catch (\Exception $e) {
//         return "ไม่สามารถเชื่อมต่อฐานข้อมูล: " . $e->getMessage();
//     }
// });
Route::get('provinces', function () {
    return view('provinces');
});


Route::get('/provinces', [ProvincesController::class, 'index']);
