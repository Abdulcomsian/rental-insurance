<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController,AdminController,UserController,VendorController, ServiceCategoryController, ServiceController, CompanyController, VehicleMakesController,
     VehicleModelsController, VehicleController, InsuranceCompanyController, SubInsuranceCompanyController, AssignVehicleController};

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
        Route::get('/manage-componies', [CompanyController::class,'allComponies'])->name('allComponies');
        Route::post('/submit_company', [CompanyController::class,'creatCompany']);
        Route::get('/vehicle-makes', [UserController::class,'vehicleMakes'])->name('vehicleMakes');
        Route::get('/vehicle-models', [UserController::class,'vehicleModels'])->name('vehicleModels');
        Route::post('/submit_make', [VehicleMakesController::class,'addMake']);
        Route::post('/submit_model', [VehicleModelsController::class,'addModel']);
        Route::get('/vehicles', [UserController::class,'allVehicles'])->name('allVehicles');
        Route::get('/getModels/{makeId}', [VehicleModelsController::class,'getModel'])->name('getModel');
        Route::post('/submit_vehicle', [VehicleController::class,'addVehicle'])->name('addVehicle');
        Route::get('/edit_make/{id}', [VehicleMakesController::class,'editMake']);
        Route::post('/submit_editmake', [VehicleMakesController::class,'updateVehicleMake']);
        Route::post('/delete_make', [VehicleMakesController::class,'deleteVehicleMake']);
        Route::get('/edit_model/{id}', [VehicleModelsController::class,'editModel']);
        Route::post('/delete_model', [VehicleModelsController::class,'deleteModel']);
        Route::post('/submit_edit_model', [VehicleModelsController::class,'updateVehicleModel']);
        Route::post('/delete_company', [CompanyController::class,'deleteCompany']);
        Route::get('/edit_company/{id}', [CompanyController::class,'editCompany']);
        Route::post('/submit_eidt_company', [CompanyController::class,'updateCompany']);
        Route::post('/delete_vehicle', [VehicleController::class,'deleteVehicle']);
        Route::get('/edit_vehicle/{id}', [VehicleController::class,'editVehicle']);
        Route::post('/submit_eidt_vehicle', [VehicleController::class,'updateVehicle']);

        //// insurance conpanies
        Route::get('/manage-insurance-componies', [InsuranceCompanyController::class,'insuranceCompanies']);
        Route::post('/submit_insurance_company', [InsuranceCompanyController::class,'addInsuranceCompany']);
        Route::post('/delete_Inscompany', [InsuranceCompanyController::class,'deleteInsuranceCompany']);
        Route::get('/edit_insurance_company/{id}', [InsuranceCompanyController::class,'editInsuranceCompany']);
        Route::post('/submit_edit_insurance_company', [InsuranceCompanyController::class,'updateInsuranceCompany']);
        //////////// sub insurance companies
        Route::get('/sub-insurance-componies', [SubInsuranceCompanyController::class,'subinsuranceCompanies']);
        Route::post('/submit_subinsurance_company', [SubInsuranceCompanyController::class,'addSubInsuranceCompany']);
        Route::post('/delete_SubInscompany', [SubInsuranceCompanyController::class,'deleteSubInsuranceCompany']);
        Route::get('/edit_subinsurance_company/{id}', [SubInsuranceCompanyController::class,'editSubInsuranceCompany']);
        Route::post('/submit_edit_subinsurance_company', [SubInsuranceCompanyController::class,'updateSubnsuranceCompany']);
        /////////// assign vehicle to insurance companies
        Route::get('assign-vehicle', [AssignVehicleController::class,'assignComapny']);
        Route::get('/getVehicles/{companyId}', [AssignVehicleController::class,'getVehicle'])->name('getVehicle');
        Route::get('/getsubcompany/{companyId}', [AssignVehicleController::class,'getSubCompany'])->name('getSubCompany');
        Route::post('/submit_assign_vehicle', [AssignVehicleController::class,'assignVehicle'])->name('assignVehicle');
        Route::get('/edit_assignvehicle/{id}', [AssignVehicleController::class,'editAssignVehicle']);
        Route::post('/submit_edit_assignvehicle', [AssignVehicleController::class,'updateAssignVehicle']);
        Route::post('/delete_assignVehicle',[AssignVehicleController::class,'deleteAssignVehicle']);
        
    });
    Route::group(['middleware' => ['web','auth','approved_user']], function () {
        Route::get('/vendor-user', [VendorController::class,'index'])->name('vendor_user');
        Route::resource('services',ServiceController::class);
    });

});

