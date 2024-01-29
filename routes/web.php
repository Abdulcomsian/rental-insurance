<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController,AdminController,UserController,VendorController, ServiceCategoryController};

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
    Route::group(['middleware' => ['web','auth','role:admin','approved_user']], function () {
        Route::get('/admin', [AdminController::class,'index'])->name('admin');
        Route::resource('service-categories',ServiceCategoryController::class);
        Route::get('/provider', [AdminController::class,'ServiceProvider'])->name('ServiceProvider');
        Route::get('/userAccounts', [AdminController::class,'UserAccounts'])->name('UserAccounts');
        Route::get('/get-Vendor-Details/{id}', [AdminController::class,'getVendorDetails'])->name('getVendorDetails');
        Route::post('/updateVendor', [AdminController::class,'updateVendor'])->name('UpdateVendor');
        Route::get('/adminAccounts', [AdminController::class,'AdminAccounts'])->name('AdminAccounts');
        Route::get('/approvals', [AdminController::class,'Approvals'])->name('Approvals');
        Route::get('/venderdetails', [AdminController::class,'VenderDetails'])->name('VenderDetails');
        Route::get('/alltransactions', [AdminController::class,'Transactions'])->name('Transactions');
        Route::get('/dispute', [AdminController::class,'Dispute'])->name('Dispute');
        Route::get('/dashboard', [AdminController::class,'Dashboard'])->name('Dashboard');
    });
    Route::group(['middleware' => ['web','auth','role:vendor_user','approved_user']], function () {
        Route::get('/profile', [VendorController::class,'Profile'])->name('Profile');
        Route::get('/payments', [VendorController::class,'Payments'])->name('Payments');
        Route::post('add-service',[VendorController::class,'addService'])->name('addService');
        Route::get('/dashboard', [VendorController::class,'Dashboard'])->name('Dashboard');
    });
    Route::group(['middleware' => ['web','auth','role:user']], function () {
        Route::get('/user', [UserController::class,'index'])->name('user');
        Route::get('/details', [UserController::class,'Details'])->name('Details');
        Route::get('/payment', [UserController::class,'Payment'])->name('Payment');
        Route::get('/transactions', [UserController::class,'Transactions'])->name('Transactions');
        Route::get('/dashboard', [UserController::class,'Dashboard'])->name('Dashboard');

    });
    Route::group(['middleware' => ['web','auth','approved_user']], function () {
        Route::get('/vendor-user', [VendorController::class,'index'])->name('vendor_user');
    });

});

