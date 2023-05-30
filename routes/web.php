<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware'=>'guest'],function(){
    Route::get('login',[LoginController::class, 'index'])->name('login');
    Route::post('validate_login',[LoginController::class, 'validate_login'])->name('validate_login');

    Route::get('registration',[RegisterController::class, 'registration'])->name('registration');
    Route::post('validate_registration',[RegisterController::class, 'validate_registration'])->name('validate_registration');
});
Route::group(['middleware'=>'auth'],function(){
    Route::get('logout',[LoginController::class, 'logout'])->name('logout');

    Route::get('dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');

});
