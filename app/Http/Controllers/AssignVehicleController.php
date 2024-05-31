<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{

    InsuranceCompany,
    SubInsuranceCompany,
    Vehicle,
    Company,
   
 
};

class AssignVehicleController extends Controller
{
    public function assignComapny(){

        $insmaincompanies = InsuranceCompany::get();
        $inssubcompanies = SubInsuranceCompany::get();
        $vehicles = Vehicle::get();
        $rentalcompanies = Company::get();
        return view('assign-vehicles', compact('insmaincompanies','inssubcompanies','vehicles','rentalcompanies'));

    }
}
