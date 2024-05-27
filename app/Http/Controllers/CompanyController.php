<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;


class CompanyController extends Controller
{
    public function creatCompany(Request $request){


         // validation
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'abnNumber'=>'required',
            'address' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ],[
            'name.required' => 'Compan name is required',
            'email.required' => 'Email is required',
            'abnNumber.required' => 'ABN Number is required',
            'address.required' => 'Address is required',
            'phone.required' => 'Phone is required',
            'password.required' => 'Password is required',
        ]);
    // error handling using try and catch
    try {
        $user_id = Auth::user()->id;  /// to get current logged in user id
        
            $company=new Company;
            $company->user_id = $user_id;
            $company->name = $request->name;
            $company->email  = $request->email;
            $company->abn_number =  $request->abnNumber;
            $company->Address = $request->address; 
            $company->phone = $request->phone; 
            $company->password = $request->password; 
            if($company->save()){
                return redirect('user')->with('success', 'Company is added to the menu');
            }else{
                return redirect()->back()->with('error', 'Company not inserted');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }       
    }

    public function editCompany($id){

        $company = Company::where('id', $id)->first();
        return view('editcompany', compact('company'));
    }
}
