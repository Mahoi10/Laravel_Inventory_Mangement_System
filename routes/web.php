<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
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
Route::get('/login', [CustomAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [CustomAuthController::class, 'registration'])->middleware('alreadyLoggedIn');
Route::get('/forgotpassword', [CustomAuthController::class, 'forgotpassword'])->name('register-user');
Route::get('/recoverpassword', [CustomAuthController::class, 'recoverpassword']);
Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->middleware('isLoggedIn'); 
Route::get('/table', [CustomAuthController::class, 'table']);
Route::get('/form', [CustomAuthController::class, 'form']);
Route::get('/users', [CustomAuthController::class, 'users']);
Route::get('/contactus', [CustomAuthController::class, 'contactus']);
Route::get('/logout', [CustomAuthController::class, 'logout']);

Route::resource('/Equipment', 'EquipmentController');