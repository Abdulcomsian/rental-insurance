<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\{

    InsuranceCompany,
};

class InsuranceCompanyController extends Controller
{
    public function insuranceCompanies(){

        $insurancecomponies = InsuranceCompany::get();
        return view('insurance-componies', compact('insurancecomponies'));

    }

    public function addInsuranceCompany(Request $request){

         // validation
         $request->validate([
            'name'=>'required',
            'email'=>'required',
            'reg_no'=>'required',
            'address' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ],[
            'name.required' => 'Company name is required',
            'email.required' => 'Email is required',
            'reg_no.required' => 'Reg No is required',
            'address.required' => 'Address is required',
            'phone.required' => 'Phone is required',
            'password.required' => 'Password is required',
        ]);
    // error handling using try and catch
    try {
        $user_id = Auth::user()->id;  /// to get current logged in user id
        
            $inscompany=new InsuranceCompany;
            $inscompany->user_id = $user_id;
            $inscompany->name = $request->name;
            $inscompany->email  = $request->email;
            $inscompany->reg_number =  $request->reg_no;
            $inscompany->Address = $request->address; 
            $inscompany->phone = $request->phone; 
            $inscompany->password = $request->password; 
            if($inscompany->save()){
                return redirect('manage-insurance-componies')->with('success', 'Insurance company is added to the menu');
            }else{
                return redirect()->back()->with('error', 'Insurance company not inserted');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }       
    }

    public function editInsuranceCompany($id){

        $inscompany = InsuranceCompany::where('id', $id)->first();
        return view('edit-insurance-company', compact('inscompany'));
        
    }

    public function updateInsuranceCompany(Request $request){

         //   dd($request->all());
           // validation
           $request->validate([
            'name'=>'required',
            'email'=>'required',
            'reg_no'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'password'=>'required'
        ],[
            'name.required' => 'Company name is required',
            'email.required' => 'Email is required',
            'reg_no.required' => 'Reg No is required',
            'phone.required' => 'Phone  is required',
            'address.required' => 'Address is required',
            'password.required' => 'password is required',
        ]);
    // error handling using try and catch
    try {
        
            $id = $request->inscompanyId;
            $inscompany=InsuranceCompany::find($id);
            
            $inscompany->name = $request->name;
            $inscompany->email = $request->email;
            $inscompany->reg_number = $request->reg_no;
            $inscompany->phone = $request->phone;
            $inscompany->address = $request->address;
            $inscompany->password = $request->password;
          
            
            if($inscompany->update()){
                return redirect('manage-insurance-componies')->with('success', 'Insurance company name is updated');
            }else{
                return redirect()->back()->with('error', 'Insurance company name not updated');
            }
        } catch (\Exception $e) {
           // dd($e->getMessage());
             return redirect('manage-insurance-componies')->with('error', $e->getMessage());
        }    

        
    }

    public function deleteInsuranceCompany(Request $request){

        $id=$request->InscompanyId;
        try{
           $result=InsuranceCompany::where('id',$id)->delete();
           if($result){
               return redirect()->back()->with('success', 'Insurance company deleted successfully');
           }
           else{
               return redirect()->back()->with('error', 'Insurance company not deleted');           }

           
        }
        catch (\Exception $e) {  

           return redirect()->back()->with('error', $e->getMessage());
        }
        
    }
}
