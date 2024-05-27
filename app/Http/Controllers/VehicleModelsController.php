<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\vehiclemake;
use App\Models\vehiclemodel;

use Illuminate\Http\Request;

class VehicleModelsController extends Controller
{
    public function addModel(Request $request){

         // validation
         $request->validate([
            'modelname'=>'required'
            
        ],[
            'modelname.required' => 'Model name is required',
           
        ]);
    // error handling using try and catch
    try {
        $user_id = Auth::user()->id;  /// to get current logged in user id
        
           // $make=new vehiclemake;
            $model=new vehiclemodel;
            
            $model->make_id = $request->make;
            $model->model_name = $request->modelname;
          
            
            if($model->save()){
                return redirect()->back()->with('success', 'Model name is added to the menu');
            }else{
                return redirect()->back()->with('error', 'Model name not inserted');
            }
        } catch (\Exception $e) {
            return redirect()->url('vehicleModels')->with('error', $e->getMessage());
        }     


    }
}
