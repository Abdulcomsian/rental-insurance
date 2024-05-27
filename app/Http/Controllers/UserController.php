<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{
    vehiclemake,
    vehiclemodel,
   
};

class UserController extends Controller
{
    public function index()
    {
        try {
            //Related to transactions
            $transactions_today = 0;
            $transactions_weekly = 0;
            $transactions_monthly = 0;
            $transactions_yearly = 0;

            //Related to users
            $users_today = 0;
            $users_weekly = 0;
            $users_monthly = 0;
            $users_yearly = 0;

            //Companies
            $total_companies = 0;
            $total_users = 0;
            $total_packages = 0;
            $total_transactions = 0;

            return view('user.index', compact(
                'transactions_today',
                'transactions_weekly',
                'transactions_monthly',
                'transactions_yearly',
                'users_today',
                'users_weekly',
                'users_monthly',
                'users_yearly',
                'total_companies',
                'total_users',
                'total_packages',
                'total_transactions'

            ));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    public function Details()
    {
        return view("user.serviceDetails");
    }
    public function Payment()
    {
        return view("user.payment");
    }
    public function Transactions()
    {
        return view("user.orderDetails");
    }
    public function Dashboard()
    {
        return view("user.dashboard");
    }
    public function addCompany(){

        return view("add-company");
    }
    public function vehicleMakes(){

        $vehiclemakes = vehiclemake::get();
        return view('vehicleMakes', compact('vehiclemakes'));
    }
    public function vehicleModels(){

        
        $vehiclemodels = vehiclemodel::get();
        $vehiclemakes = vehiclemake::get();
        $vehiclemakes = vehiclemake::get();
        return view('vehicleModels', compact('vehiclemodels','vehiclemakes'));
    }

}
