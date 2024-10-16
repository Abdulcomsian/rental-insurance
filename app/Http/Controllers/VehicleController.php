<?php

namespace App\Http\Controllers;

use App\Models\{vehiclemake,
    vehiclemodel,
    Vehicle,
    Company,
};

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class VehicleController extends Controller
{
    public function addVehicle(Request $request){

          // validation
          $request->validate([
            'rental_company'=>'required',
            'make'=>'required',
            'model'=>'required',
            'name'=>'required',
            'reg_no' => 'required',
            'color' => 'required'
        ],[
            'rental_company.required' => 'Rental Company is required',
            'make.required' => 'Make name is required',
            'model.required' => 'Model is required',
            'name.required' => 'Name is required',
            'reg_no.required' => 'Reg No is required',
            'color.required' => 'Color is required',
        ]);
    // error handling using try and catch
    try {
        $user_id = Auth::user()->id;  /// to get current logged in user id
        
            $cehicle=new Vehicle;
            $cehicle->user_id =  $user_id;
            $cehicle->rental_company_id =  $request->rental_company;
            $cehicle->make_id =  $request->make;
            $cehicle->model_id = $request->model;
            $cehicle->name  = $request->name;
            $cehicle->reg_number =  $request->reg_no;
            $cehicle->color = $request->color; 
            if($cehicle->save()){
                return redirect()->back()->with('success', 'Vehicle is added to the menu');
            }else{
                return redirect()->back()->with('error', 'Vehicle not inserted');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }       

        
    }

    public function deleteVehicle(Request $request){

        $id=$request->vehicleId;
        try{
           $result=Vehicle::where('id',$id)->delete();
           if($result){
               return redirect()->back()->with('success', 'Vehicle deleted successfully');
           }
           else{
               return redirect()->back()->with('error', 'Vehicle not deleted');           }

           
        }
        catch (\Exception $e) {  

           return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function editVehicle($id){
        $rentalcompanies = Company::get();
        $vehicles = Vehicle::where('id', $id)->first();
        $vehiclemakes = vehiclemake::with('models')->get();
        $models = vehiclemodel::where('make_id', $vehicles->make_id)->get();

        
        return view('editvehicle', compact('vehicles','models','vehiclemakes','rentalcompanies'));
 
    }

    public function updateVehicle(Request $request){
        
        $request->validate([
            'rental_company'=>'required',
            'make'=>'required',
            'model'=>'required',
            'name'=>'required',
            'reg_no'=>'required',
            'color'=>'required'
           
        ],[
            'rental_company.required' => 'Rental Company is required',
            'make.required' => 'Make is required',
            'model.required' => 'Model is required',
            'name.required' => 'Name number is required',
            'reg_no.required' => 'Reg No  is required',
            'color.required' => 'Color is required',
        ]);
    // error handling using try and catch
    try {
       
       // dd($user_id);
            $id = $request->vehicleId;
            $vehicle=Vehicle::find($id);
            $vehicle->rental_company_id = $request->rental_company;
            $vehicle->make_id = $request->make;
            $vehicle->model_id = $request->model;
            $vehicle->name = $request->name;
            $vehicle->reg_number = $request->reg_no;
            $vehicle->color = $request->color;
          
            
            if($vehicle->update()){
                return redirect('vehicles')->with('success', 'Rental Company vehicle is updated');
            }else{
                return redirect()->back()->with('error', 'Rental Company vehicle not updated');
            }
        } catch (\Exception $e) {
            //dd($e->getMessage());
         return redirect()->url('vehicles')->with('error', $e->getMessage());
        }       
    }
}
