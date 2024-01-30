<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ServiceCategory, Service};
use Auth;
class VendorController extends Controller
{
    public function index()
    {
        try {
            //Related to transactions
          $serviceCategories = ServiceCategory::all();
          $services = Service::where('user_id',Auth::id())->get();

            return view('vendor-user.index', compact('serviceCategories','services'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    public function Profile()
    {
        return view("vendor-user.profile");
    }
    public function Payments()
    {
        return view("vendor-user.paymentTransaction");
    }
}
