<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [MainController::class,'getIndex']);


//Authentication
Route::get('login', [LoginController::class,'getLogin']);
Route::get('signup', [LoginController::class,'getSignup']);
Route::post('login', [LoginController::class,'postLogin']);
Route::post('signup', [LoginController::class,'postSignup']);
Route::get('bye', [LoginController::class,'getLogout']);

//Dashboard
Route::get('dashboard', [MainController::class,'getDashboard']);
Route::get('profile', [MainController::class,'getProfile']);
Route::post('profile', [MainController::class,'postProfile']);

//Customer Ids
Route::get('customer-ids', [MainController::class,'getCustomerIds']);
Route::get('customer-id', [MainController::class,'getCustomerId']);
Route::post('add-customer-id', [MainController::class,'postAddCustomerId']);