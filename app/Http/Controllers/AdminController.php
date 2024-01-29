<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Models\ServiceCategory;
class AdminController extends Controller
{
    public function index()
    {
        try {
           $serviceCategories = ServiceCategory::all();
       
            return view('admin.index', compact(
                'serviceCategories'
            ));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    public function ServiceProvider()
    {
        $approvedVendors =User::role('vendor_user')->where('is_approved',1)->get();
        return view("admin.serviceProvider",compact('approvedVendors'));
    }
    public function UserAccounts()
    {
        return view("admin.userAccounts");
    }
    public function AdminAccounts()
    {
        return view("admin.adminAccounts");
    }
    public function Approvals()
    {
        $unapprovedVendors =User::role('vendor_user')->where('is_approved',0)->get();
        return view("admin.approvals",compact('unapprovedVendors'));
    }
    public function VenderDetails()
    {
        return view("admin.venderDetails");
    }
    public function Transactions()
    {
        return view("admin.alltransactions");
    }
    public function Dispute()
    {
        return view("admin.refundDispute");
    }
    public function Dashboard()
    {
        return view("admin.dashboard");
    }

    public function getVendorDetails($id)
    {
        $vendorDetails = User::where('id',$id)->first();
         return response()->json([
            "status" => true, 
            "vendorDetails" => $vendorDetails
        ]);
    
    }
    public function updateVendor(Request $request)
    {
        $updateVendor = User::where('id',$request->user_id)->first();
        $updateVendor->is_approved  = 1;
        if($updateVendor->save())
        {
            return redirect()->to('/approvals');
        }
    }

}
