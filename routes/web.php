<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController,AdminController,UserController,VendorController};

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



Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    // Auth::routes([
    //     'register' => false, // Registration Routes...
    //     'reset' => false, // Password Reset Routes...
    //     'verify' => false, // Email Verification Routes...
    // ]);
    Auth::routes();
    Route::group(['middleware' => ['web','auth','role:admin']], function () {
        Route::get('/admin', [AdminController::class,'index'])->name('admin');
    });
    Route::group(['middleware' => ['web','auth','role:vendor_user']], function () {
        Route::get('/vendor-user', [VendorController::class,'index'])->name('vendor_user');
    });
    Route::group(['middleware' => ['web','auth','role:user']], function () {
        Route::get('/user', [UserController::class,'index'])->name('user');
        Route::get('/details', [UserController::class,'Details'])->name('Details');
        Route::get('/payment', [UserController::class,'Payment'])->name('Payment');
    });
});

