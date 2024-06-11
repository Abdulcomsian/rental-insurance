<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\{

    InsuranceCompany,
    SubInsuranceCompany,
    Vehicle,
    Company,
    AssignVehicle,
   
 
};

class AssignVehicleController extends Controller
{
    public function assignComapny(){

        $insmaincompanies = InsuranceCompany::get();
        $inssubcompanies = SubInsuranceCompany::get();
        $vehicles = Vehicle::get();
        $rentalcompanies = Company::get();
       
        //to get data from assignVehicle table with relationship we made in the assignVehicle model
        $assignVehicles = AssignVehicle::with('rentalCompany', 'vehicle', 'insuranceCompany', 'subInsuranceCompany')->get();
        //dd($assignVehicle);
        return view('assign-vehicles', compact('insmaincompanies','inssubcompanies','vehicles','rentalcompanies', 'assignVehicles'));

    }

    public function getVehicle($id){
        $renalcompany = Vehicle::where('rental_company_id', $id)->get();
        return response()->json(["data" => $renalcompany]);
    }
    public function getSubCompany($id){
        $subInsCompany = SubInsuranceCompany::where('main_company_id', $id)->get();
        return response()->json(["data" => $subInsCompany]);
    }

    

    public function assignVehicle(Request $request){

        // validation
            $request->validate([
            'rental_company'=>'required',
            'vehicles'=>'required',
            'insurance_main_company'=>'required',
            'amonut' => 'required',
            'startdate' => 'required',
            'enddate' => 'required'
        ],[
            'rental_company.required' => 'Rental Company is required',
            'vehicles.required' => 'Vehicle is required',
            'insurance_main_company.required' => 'Insurance Main Company is required',
            'amonut.required' => 'Amount is required',
            'startdate.required' => 'State Date is required',
            'enddate.required' => 'End Date is required',
        ]);
    // error handling using try and catch
    try {
        $user_id = Auth::user()->id;  /// to get current logged in user id
        
            $assigncehicle=new AssignVehicle;
            $assigncehicle->user_id = $user_id;
            $assigncehicle->vehicle_id  =   $request->vehicles;
            $assigncehicle->rental_company_id =  $request->rental_company;
            $assigncehicle->insurance_company_id  =  $request->insurance_main_company;
            $assigncehicle->insurance_sub_company_id  = $request->insurance_sub_company;
            $assigncehicle->amount  = $request->amonut;
            $assigncehicle->start_date =  $request->startdate;
            $assigncehicle->end_data = $request->enddate; 
            if($assigncehicle->save()){
                return redirect()->back()->with('success', 'Vehicle is added to the menu');
            }else{
                return redirect()->back()->with('error', 'Vehicle not inserted');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }       

      
  }

  public function editAssignVehicle($id){
    $rentalcompanies = Company::get();
    $insmaincompanies = InsuranceCompany::get();
    $inssubcompanies = SubInsuranceCompany::get();
    $vehicles = Vehicle::get();
    $rentalcompanies = Company::get();
    $assignVehicles = AssignVehicle::with('rentalCompany', 'vehicle', 'insuranceCompany', 'subInsuranceCompany')->where('id', $id)->first();
        return view('editassignvehicle', compact('insmaincompanies','inssubcompanies','vehicles','rentalcompanies', 'assignVehicles'));

  }

  public function updateAssignVehicle(Request $request){
     $request->validate([
        'rental_company'=>'required',
        'vehicles'=>'required',
        'insurance_main_company'=>'required',
        'amonut' => 'required',
        'startdate' => 'required',
        'enddate' => 'required'
    ],[
        'rental_company.required' => 'Rental Company is required',
        'vehicles.required' => 'Vehicle is required',
        'insurance_main_company.required' => 'Insurance Main Company is required',
        'amonut.required' => 'Amount is required',
        'startdate.required' => 'State Date is required',
        'enddate.required' => 'End Date is required',
    ]);
    try {
       $user_id = Auth::user()->id;
        $id = $request->assignVehicleId;
        $vehicle=AssignVehicle::find($id);
        $vehicle->user_id = $user_id;
        $vehicle->vehicle_id  =   $request->vehicles;
        $vehicle->rental_company_id =  $request->rental_company;
        $vehicle->insurance_company_id  =  $request->insurance_main_company;
        $vehicle->insurance_sub_company_id  = $request->insurance_sub_company;
        $vehicle->amount  = $request->amonut;
        $vehicle->start_date =  $request->startdate;
        $vehicle->end_data = $request->enddate; 
        if($vehicle->update()){
            return redirect('assign-vehicle')->with('success', 'Assign Vehicle is updated successfully');
        }else{
            return redirect()->back()->with('error', 'VehAssign Vehicleicle not updated successfully');
        }
    } catch (\Exception $e) {
        return redirect('assign-vehicle')->with('error', $e->getMessage());
    }       


  }
    
  public function deleteAssignVehicle(Request $request)
  {
    $id=$request->assignVehicleId;
    try{
       $result=AssignVehicle::where('id',$id)->delete();
       if($result){
           return redirect()->back()->with('success', 'Assigned Vehicle deleted successfully');
       }
       else{
           return redirect()->back()->with('error', 'Assigned Vehicle not deleted');           
        }

       
    }
    catch (\Exception $e) {  

       return redirect()->back()->with('error', $e->getMessage());
    }

  }
}
