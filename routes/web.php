<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;







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

Route::get('/', [HomeController::class,'index']);
Route::post('/',[HomeController::class,'HomeFunctions']);

Route::get('/about', function () {return view('about');});
Route::get('/logout', [HomeController::class, 'logout']);
Route::get('/about', function () {return view('about');});
Route::get('/buses', [HomeController::class,'buses']);
Route::get('/trains', [HomeController::class,'trains']);
Route::get('/airplanes', [HomeController::class,'airplanes']);



Route::get('/user_profile', [UserProfileController::class, 'index']);
Route::post('/user_profile', [UserProfileController::class, 'UserProfileFunctions']);

Route::post('/search_vehicle',[SearchController::class,'index']);

Route::get('/booking/{id}', [BookingController::class,'booking']);
Route::post('/pre_seats', [BookingController::class,'pre_seats']);
Route::get('/seats', [BookingController::class,'seats']);
Route::post('/confirm_booking', [BookingController::class,'confirm_booking']);
Route::post('/payment', [BookingController::class,'payment']);
Route::post('/payment_complete', [BookingController::class,'payment_complete']);


//Admin
Route::get('/admin', [AdminController::class,'index']);
Route::post('/admin', [AdminController::class,'logincheck']);
Route::get('/dashboard', [AdminController::class,'dashboard']);

Route::post('/modify_route', [AdminController::class,'modify_route']);
Route::post('/modify_vehicle', [AdminController::class,'modify_vehicle']);

Route::get('/route_update/{id}', [AdminController::class,'route_update']);
Route::get('/route_add', [AdminController::class,'route_add']);
Route::get('/route_delete/{id}', [AdminController::class,'route_delete']);
Route::get('/manage_stopage/{id}', [AdminController::class,'manage_stopage']);
Route::post('/route_update', [AdminController::class,'route_update_data']);
Route::post('/route_add', [AdminController::class,'route_add_data']);
Route::post('/manage_stopage', [AdminController::class,'manage_stopage_data']);

Route::get('/vehicle_update/{id}', [AdminController::class,'vehicle_update']);
Route::get('/vehicle_add', [AdminController::class,'vehicle_add']);
Route::get('/vehicle_delete/{id}', [AdminController::class,'vehicle_delete']);
Route::post('/vehicle_update', [AdminController::class,'vehicle_update_data']);
Route::post('/vehicle_add', [AdminController::class,'vehicle_add_data']);


Route::get('/booking_approve/{id}', [AdminController::class,'booking_approve']);
Route::get('/booking_cancel/{id}', [AdminController::class,'booking_cancel']);
Route::get('/booking_cancel_customer/{id}', [AdminController::class,'booking_cancel_customer']);
Route::get('/receipt/{id}', [AdminController::class,'receipt']);

Route::get('/confirm_reset', function () {return view('confirm_reset');});
Route::get('/reset', [AdminController::class,'reset']);

Route::post('/sendmail', [MailController::class,'sendmail']);

// Route::get('/late', [MailController::class,'late']);
// Route::get('/reminder', [MailController::class,'reminder']);
Route::post('/custom', [MailController::class,'custom']);





