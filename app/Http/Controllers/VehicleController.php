<?php

namespace App\Http\Controllers;

use App\Models\{vehiclemake,
    vehiclemodel,
    Vehicle,
};

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class VehicleController extends Controller
{
    public function addVehicle(Request $request){

          // validation
          $request->validate([
            'make'=>'required',
            'model'=>'required',
            'name'=>'required',
            'reg_no' => 'required',
            'color' => 'required'
        ],[
            'make.required' => 'Make name is required',
            'model.required' => 'Model is required',
            'name.required' => 'Name is required',
            'reg_no.required' => 'Reg No is required',
            'color.required' => 'Color is required',
        ]);
    // error handling using try and catch
    try {
       // $user_id = Auth::user()->id;  /// to get current logged in user id
        
            $cehicle=new Vehicle;
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
}
