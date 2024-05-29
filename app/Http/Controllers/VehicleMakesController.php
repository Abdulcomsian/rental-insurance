<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\vehiclemake;

use Illuminate\Http\Request;

class VehicleMakesController extends Controller
{
    public function addMake(Request $request){

          // validation
          $request->validate([
            'makname'=>'required'
            
        ],[
            'makname.required' => 'Make name is required',
           
        ]);
    // error handling using try and catch
    try {
        $user_id = Auth::user()->id;  /// to get current logged in user id
        
            $make=new vehiclemake;
            $make->make_name = $request->makname;
          
            
            if($make->save()){
                return redirect()->back()->with('success', 'Make name is added to the menu');
            }else{
                return redirect()->back()->with('error', 'Make name not inserted');
            }
        } catch (\Exception $e) {
            return redirect()->url('vehicleMakes')->with('error', $e->getMessage());
        }       
            
    }

    public function editMake($id){

        $make = vehiclemake::where('id', $id)->first();
        return view('editmake', compact('make'));
    }

    public function updateVehicleMake(Request $request){

        
          // validation
          $request->validate([
            'makname'=>'required'
            
        ],[
            'makname.required' => 'Make name is required',
           
        ]);
    // error handling using try and catch
    try {
        
            $id = $request->makeid;
 
            $make=vehiclemake::find($id);
            
            $make->make_name = $request->makname;
          
            
            if($make->update()){
                return redirect('vehicle-makes')->with('success', 'Make name is added to the menu');
            }else{
                return redirect()->back()->with('error', 'Make name not inserted');
            }
        } catch (\Exception $e) {
            return redirect()->url('vehicleMakes')->with('error', $e->getMessage());
        }       

    }

    public function deleteVehicleMake(Request $request){

        $id=$request->makeId;
        try{
           $result=vehiclemake::where('id',$id)->delete();
           if($result){
               return redirect()->back()->with('success', 'Vehicle make deleted successfully');
           }
           else{
               return redirect()->back()->with('error', 'Vehicle make not deleted');
           }

           
        }
        catch (\Exception $e) {  

           return redirect()->back()->with('error', $e->getMessage());
        }

    }
}
