<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\{

    InsuranceCompany,
    SubInsuranceCompany,
};
class SubInsuranceCompanyController extends Controller
{
   public function subinsuranceCompanies(){

    
        $maincompanies = InsuranceCompany::get();
        $subcompanies = SubInsuranceCompany::get();
        return view('sub-insurance-componies', compact('subcompanies','maincompanies'));

   }

    public function addSubInsuranceCompany(Request $request){

        // validation
        $request->validate([
        'name'=>'required'
    ],[
        'name.required' => 'Company name is required',
        
    ]);
    // error handling using try and catch
    try {
     //$user_id = Auth::user()->id;  /// to get current logged in user id
    
        $inscompany=new SubInsuranceCompany;
        $inscompany->main_company_id = $request->mainCompany;;
        $inscompany->name = $request->name;
       
        if($inscompany->save()){
            return redirect('sub-insurance-componies')->with('success', 'Insurance sub company is added to the menu');
        }else{
            return redirect()->back()->with('error', 'Insurance sub company not inserted');
        }
    } catch (\Exception $e) {
        return redirect()->back()->with('error', $e->getMessage());
    }       
    }

    public function editSubInsuranceCompany($id){
    $maincompanies = InsuranceCompany::get();
    $inscompany = SubInsuranceCompany::where('id', $id)->first();
    return view('edit-subinsurance-company', compact('inscompany','maincompanies'));
    
    }

    public function updateSubnsuranceCompany(Request $request){

        // dd($request->all());
        // validation
        $request->validate([
        'name'=>'required',
        'email'=>'required',
        'mainCompany'=>'required',
        'phone'=>'required',
        'address'=>'required',
        'password'=>'required'
    ],[
        'name.required' => 'Company name is required',
        'email.required' => 'Email is required',
        'mainCompany.required' => 'Parent company is required',
        'phone.required' => 'Phone  is required',
        'address.required' => 'Address is required',
        'password.required' => 'password is required',
    ]);
    // error handling using try and catch
    try {
    
        $id = $request->inscompanyId;
        $inscompany=SubInsuranceCompany::find($id);
        $inscompany->main_company_id= $request->mainCompany;
        $inscompany->name = $request->name;
        $inscompany->email = $request->email;
        $inscompany->phone = $request->phone;
        $inscompany->address = $request->address;
        $inscompany->password = $request->password;
        
        
        if($inscompany->update()){
            return redirect('sub-insurance-componies')->with('success', 'Insurance sub company name is updated');
        }else{
            return redirect()->back()->with('error', 'Insurance sub company name not updated');
        }
    } catch (\Exception $e) {
        // dd($e->getMessage());
            return redirect('sub-insurance-componies')->with('error', $e->getMessage());
    }    

    
    }

    public function deleteSubInsuranceCompany(Request $request){

    $id=$request->SubInscompanyId;
    try{
        $result=SubInsuranceCompany::where('id',$id)->delete();
        if($result){
            return redirect()->back()->with('success', 'Insurance sub company deleted successfully');
        }
        else{
            return redirect()->back()->with('error', 'Insurance sub company not deleted');           }

        
    }
    catch (\Exception $e) {  

        return redirect()->back()->with('error', $e->getMessage());
    }
    
    }
}
