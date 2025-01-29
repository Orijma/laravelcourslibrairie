<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\SummaryController;

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



Route::get('/',[SummaryController::class,'index'])->name('summaries.index');

/*Route::get('/', function () {
    return view('test', [
        "title" => env('APP_NAME')
    ]);
})->name('home');*/

Route::get('register',[RegisterController::class, 'index'])->name('register.index');

Route::post('register',[RegisterController::class, 'register'])->name('register.register');
Route::get('login',[LoginController::class, 'index'])->name('login.index');

Route::post('login',[LoginController::class, 'login'])->name('login.login');
Route::get('logout',[LogoutController::class, 'logout'])->name('logout.logout');

Route::get('forgot',[ForgotController::class, 'index'])->name('forgot.index');
Route::post('forgot',[ForgotController::class, 'forgot'])->name('forgot.forgot');

Route::get('reset/{token}',[ForgotController::class, 'index'])->name('reset.index');
Route::post('reset',[ForgotController::class, 'reset'])->name('reset.reset');


Route::resource('summaries',SummaryController::class)->except('index');