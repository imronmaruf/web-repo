-<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


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
    return view('landings.pages.landing-page');
});

// // login
// Route::view('/login', 'auth.login');
// Route::view('/register', 'auth.register');
// Route::view('/auth', [LoginController::class, 'index']);

Route::middleware('auth')->group(function ()
{
    Route::get('/dashboard',[AuthController::class,'dashboard']);
});
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');
Route::get('/registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// // dashboard
// Route::view('/dashboard', 'dashboard.pages.dashboard');

// //master data
// Route::view('/repo-kp', 'dashboard.pages.repo-kp');
