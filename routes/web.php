<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\carController;
use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
//User
Route::get('/', [pageController::class, 'index'])->name('/');

Route::get('/brand/{id}', [pageController::class, 'brand']);

Route::get('/car-detail/{idcar}', [pageController::class, 'carDetail']);

// Route::get('/form', [pageController::class, 'input']);
// Route::post('/form', [pageController::class, 'validationform']);




//Admin
Route::get('/admin', [adminController::class, 'index'])->middleware('auth')->middleware(['can:admin-rule']);
Route::get('/admin/carlist', [carController::class, 'index']);
Route::resource('carlist', carController::class);

Route::resource('booking', bookingController::class);
Auth::routes();

Route::get('/home', [pageController::class, 'index'])->name('home');

Route::get('/chotdon/{id}', [bookingController::class, 'chotdon']);
Route::get('/huydon/{id}', [bookingController::class, 'huydon']);
Route::get('/xoa-xe/{id}', [carController::class, 'destroy']);

Route::get('thoat', function () {
    Auth::logout();
    return redirect('/login');
});

Route::get('/donhang', [bookingController::class, 'index']);