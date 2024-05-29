<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\{
    vehiclemodel, 
    vehiclemake,
};

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

    public function getModel($id){
        $model = vehiclemodel::where('make_id', $id)->get();
        return response()->json(["data" => $model]);
    }

//for model edit page

  public function editModel($id){
    $makes = vehiclemake::get();
    $models = vehiclemodel::where('id', $id)->first();
    return view('editmodel', compact('models','makes'));
}

public function updateVehicleModel(Request $request){

    
      // validation
      $request->validate([
        'make'=>'required',
        'modelname'=>'required'
        
        
    ],[
        'make.required' => 'Make name is required',
        'modelname.required' => 'Model name is required',
       
    ]);
// error handling using try and catch
try {
    
        $id = $request->modeleid;

        $model=vehiclemodel::find($id);
        
        $model->make_id = $request->make;
        $model->model_name = $request->modelname;
        
        if($model->update()){
            return redirect('vehicle-models')->with('success', 'Model is updated successfully');
        }else{
            return redirect()->back()->with('error', 'Model is not updated');
        }
    } catch (\Exception $e) {
        return redirect()->url('vehicle-models')->with('error', $e->getMessage());
    }       

}

 ///for deletion
    public function deleteModel(Request $request){

        $id=$request->modelId;
        try{
           $result=vehiclemodel::where('id',$id)->delete();
           if($result){
               return redirect()->back()->with('success', 'Vehicle model deleted successfully');
           }
           else{
               return redirect()->back()->with('error', 'Vehicle model not deleted');
           }

           
        }
        catch (\Exception $e) {  

           return redirect()->back()->with('error', $e->getMessage());
        }

    }
}
