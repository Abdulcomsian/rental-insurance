<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;


class CompanyController extends Controller
{
    
    public function allComponies(){

        $componies = Company::get();
        return view('manage-componies', compact('componies'));
    }
    
    public function creatCompany(Request $request){


         // validation
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'abnNumber'=>'required',
            'address' => 'required',
            'phone' => 'required'
        ],[
            'name.required' => 'Company name is required',
            'email.required' => 'Email is required',
            'abnNumber.required' => 'ABN Number is required',
            'address.required' => 'Address is required',
            'phone.required' => 'Phone is required',
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
            if($company->save()){
                return redirect('manage-componies')->with('success', 'Company is added to the menu');
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

    public function deleteCompany(Request $request){


        $id=$request->commpanyId;
        try{
           $result=Company::where('id',$id)->delete();
           if($result){
               return redirect()->back()->with('success', 'Company deleted successfully');
           }
           else{
               return redirect()->back()->with('error', 'Company not deleted');           }

           
        }
        catch (\Exception $e) {  

           return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateCompany(Request $request){
        //   dd($request->all());
           // validation
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'abnNumber'=>'required',
            'phone'=>'required',
            'address'=>'required'
        ],[
            'name.required' => 'Company name is required',
            'email.required' => 'Email is required',
            'abnNumber.required' => 'ABN number is required',
            'phone.required' => 'Phone  is required',
            'address.required' => 'Address is required',
        ]);
    // error handling using try and catch
    try {
        
            $id = $request->companyId;
            $company=Company::find($id);
            
            $company->name = $request->name;
            $company->email = $request->email;
            $company->abn_number = $request->abnNumber;
            $company->phone = $request->phone;
            $company->Address = $request->address;
          
            
            if($company->update()){
                return redirect('manage-componies')->with('success', 'Company name is updated');
            }else{
                return redirect()->back()->with('error', 'Company name not updated');
            }
        } catch (\Exception $e) {
           // dd($e->getMessage());
             return redirect()->url('manage-componies')->with('error', $e->getMessage());
        }       
    }
    
}
