<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class AdminController extends Controller
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

            return view('admin.index', compact(
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

    public function ServiceProvider()
    {
        return view("admin.serviceProvider");
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
        $unapprovedVendors =User::role('vendor_user')->get();
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
}
