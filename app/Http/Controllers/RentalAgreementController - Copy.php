<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\{

    InsuranceCompany,
    SubInsuranceCompany,
    Vehicle,
    Company,
    RentalAgreement,
    TermsCondition,
 
};
use PDF;
class RentalAgreementController extends Controller
{
    public function rentalAgreements()
    {
        $insmaincompanies = InsuranceCompany::get();
        $inssubcompanies = SubInsuranceCompany::get();
        $vehicles = Vehicle::get();
        $rentalcompanies = Company::get();
        //$rentalagreements = RentalAgreement::get();
        $rentalagreements = RentalAgreement::with('vehicle', 'vehicle.make', 'vehicle.model')->get();
        //to get data from assignVehicle table with relationship we made in the assignVehicle model
        //$assignVehicles = AssignVehicle::with('rentalCompany', 'vehicle', 'insuranceCompany', 'subInsuranceCompany')->get();
        //dd($assignVehicle);
        return view('rental-agreements', compact('insmaincompanies','inssubcompanies','vehicles','rentalcompanies','rentalagreements'));


    }

    public function viewPdf()
    {
        $data = [
            'foo' => 'bar'
        ];

        $pdf = PDF::loadView('pdf.rental_agreement', ['data' => $data]);

        return $pdf->stream('rental_agreement.pdf');
    }

    
    public function getVehicle($id){
        $renalcompany = Vehicle::where('rental_company_id', $id)->get();
        return response()->json(["data" => $renalcompany]);
    }
    public function getSubCompany($id){
        $subInsCompany = SubInsuranceCompany::where('main_company_id', $id)->get();
        return response()->json(["data" => $subInsCompany]);
    }

    public function addAgreement(Request $request){
    //dd($request->all());

        // // validation
        //     $request->validate([
        //     'customer_name'=>'required',
        //     'address'=>'required',    
        //     'rental_company'=>'required',
        //     'vehicles'=>'required',
        //     'insurance_main_company'=>'required',
        //     'startdate' => 'required',
        //     'enddate' => 'required',
        //     'rental_fee' => 'required',
        //     'insurance_cover' => 'required',
        //     'rego_recovery' => 'required',
        //     'administration_charges' => 'required',
        //     'delivery_fee' => 'required'
        // ],[
        //     'customer_name.required' => 'Customer name is required',
        //     'address.required' => 'Customer address is required',
        //     'rental_company.required' => 'Rental Company is required',
        //     'vehicles.required' => 'Vehicle is required',
        //     'insurance_main_company.required' => 'Insurance Main Company is required',
        //     'startdate.required' => 'State Date is required',
        //     'enddate.required' => 'End Date is required',
        //     'rental_fee.required' => 'Rental Fee is required',
        //     'insurance_cover.required' => 'Insturance Cover is required',
        //     'rego_recovery.required' => 'Rego Recovery is required',
        //     'administration_charges.required' => 'Administration Charges are required',
        //     'delivery_fee.required' => 'Delivery Fee is required',
            
        // ]);

       $subInsuranceCompanyIds =  SubInsuranceCompany::where('main_company_id' , $request->insurance_main_company)->get()->pluck('id')->toArray();
    
        $rentalAgreemant = RentalAgreement::where('rental_companyid',$request->rental_company)
                                            ->where('vehicle_id' , $request->vehicles)
                                            ->where(function($query) use ($request ,$subInsuranceCompanyIds){
                                                $query->whereHas('insuranceCompany' , function($query1) use($request ){
                                                    $query1->where('id' , $request->insurance_main_company);
                                                 })

                                                 ->orWhereHas('subInsuranceCompany' , function($query1) use ($subInsuranceCompanyIds){
                                                    $query1->whereIn('id' , $subInsuranceCompanyIds);
                                                 });
                                             })
                                            ->where(DB::raw('DATE(pickup_date)') , '>=' , $request->startdate)
                                            ->where(DB::raw('DATE(drop_date)') , '<=' , $request->enddate)
                                            ->count();

        //dd($rentalAgreemant);
        //dd(count($alreadyassign)) ;
        if($rentalAgreemant<1){  

        // error handling using try and catch
        try {
            $user_id = Auth::user()->id;  /// to get current logged in user id

                $path = '';
                if( $request->hasFile('file') ) {
                    $file = $request->file('file');
                    // Get the Image Name
                    $licencefileName = time().'.'.$file->getClientOriginalExtension();
                    // Set the Filepath 
                    $path = public_path('uploads/licence_images') ;
                    // Move the file to the upload Folder
                    $file = $file->move($path, $licencefileName);
                }
                $filename =rand().'rental-agreement.pdf';
                $rentalagreement=new RentalAgreement;
                $rentalagreement->customer_name  = $request->customer_name;
                $rentalagreement->address  = $request->address;
                $rentalagreement->vehicle_id  =   $request->vehicles;
                $rentalagreement->rental_companyid  =  $request->rental_company;
                $rentalagreement->insurance_company_id  =  $request->insurance_main_company;
                $rentalagreement->insurance_sub_company_id  = $request->insurance_sub_company;
                $rentalagreement->pickup_date =  $request->startdate;
                $rentalagreement->drop_date = $request->enddate; 
                $rentalagreement->rental_fee  = $request->rental_fee;
                $rentalagreement->insurance_cover  = $request->insurance_cover;
                $rentalagreement->rego_recovery  = $request->rego_recovery;
                $rentalagreement->administration_charges  = $request->administration_charges;
                $rentalagreement->delivery_fee  = $request->delivery_fee;
                $rentalagreement->basic_insurance  = $request->basic_insurance;
                $rentalagreement->reduction  = $request->reduction;
                $rentalagreement->traffic_infringement  = $request->traffic_infringement;
                $rentalagreement->fuel_topup  = $request->fuel_topup_fee;
                $rentalagreement->cleaning_fee  = $request->cleaning_fee;
                $rentalagreement->pdf_file  = $filename;
                $rentalagreement->in_km  =  $request->in_km;
                $rentalagreement->out_km  =  $request->out_km;
                if($request->hasFile("file")){
                    $rentalagreement->licence_image  = $licencefileName;
                }

              ////for signature
              if($request->signed != null){
                $folderPath = public_path('assets/signature/');
                $image = explode(";base64,", $request->signed);
                $image_type = explode("image/", $image[0]);
                $image_type_png = $image_type[1];
                $image_base64 = base64_decode($image[1]);
                $image_name = uniqid() . '.' . $image_type_png;
                $file = $folderPath . $image_name;
                file_put_contents($file, $image_base64);
                //dd($file);
                if(is_string($image_name)){
                    $rentalagreement->signature = $image_name;
                }
              }
               

                if($rentalagreement->save()){
                    //dd($rentalagreement);
                $termsconditions=TermsCondition::get();    
                $pdf = PDF::loadView('pdf.rental_agreement', ['data' => $rentalagreement],['termsdata' => $termsconditions]);
                $path = public_path('pdf');
                $pdf->save($path . '/' . $filename);

                return redirect()->back()->with('success', 'Rental Agreement is added to the menu');
                }else{
                    return redirect()->back()->with('error', 'Rental Agreement not inserted');
                }
            } catch (\Exception $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }       
    }
    else{

        return redirect()->back()->with('error', 'Vehicle already assigned to insurance company between '.$request->startdate.' and '.$request->enddate);
    }           
      
  }
public function generateRentaInvoice($id){

    
    //$alreadyassign = RentalAgreement::where('rental_companyid',$request->rental_company)->where('vehicle_id',$request->vehicles)->where('insurance_company_id',$request->insurance_main_company)->where('pickup_date','>=',$request->startdate)->where('drop_date','<=',$request->enddate)->get();
    //dd(count($alreadyassign)) ;
    //dd($request->all()) ;
    // error handling using try and catch
    try {
            $user_id = Auth::user()->id;  /// to get current logged in user id

            $filename =rand().'rental-invoice.pdf';
            $rentalinvoice=RentalAgreement::find($id);
            $rentalinvoice->invoice_pdf_file  = $filename;
            if($rentalinvoice->update()){
                //dd($rentalagreement);
            //$termsconditions=TermsCondition::get();    
            $pdf = PDF::loadView('pdf.rental_invoice', ['data' => $rentalinvoice]);
            $path = public_path('pdf/inovices');
            $pdf->save($path . '/' . $filename);

            return redirect()->back()->with('success', 'Rental Agreement is added to the menu');
            }else{
                return redirect()->back()->with('error', 'Rental Agreement not inserted');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }       
          


}
  public function editRentalAgreement($id){
    $rentalcompanies = Company::get();
    $insmaincompanies = InsuranceCompany::get();
    $inssubcompanies = SubInsuranceCompany::get();
    $vehicles = Vehicle::get();
    $rentalcompanies = Company::get();
    $rentalagreements = RentalAgreement::with('rentalCompany', 'vehicle', 'insuranceCompany', 'subInsuranceCompany')->where('id', $id)->first();
        return view('editRentalAgreement', compact('insmaincompanies','inssubcompanies','vehicles','rentalcompanies', 'RentalAgreements'));

  }

  public function updateRentalAgreement(Request $request){
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
      // $user_id = Auth::user()->id;
        $id = $request->assignVehicleId;
        $vehicle=RentalAgreement::find($id);
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
    
  public function deleteRentalAgreement(Request $request)
  {
    $id=$request->assignVehicleId;
    try{
       $result=RentalAgreement::where('id',$id)->delete();
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

  public function rentalTermsConditions(){

    $termsconditions=TermsCondition::get()->where('id', '1')->first();
   // dd($termsconditions);
    return view('rental-termsconditions', compact('termsconditions'));

  }

  public function updateTermsConditions(Request $request)
  {
 
    $request->validate([
        'terms_conditions'=>'required'
        
    ],[
        'terms_conditions.required' => 'Terms and Conditions ares required',
       
    ]);
    $id=TermsCondition::get()->where('id', '1')->first();
//dd($request->all());
    try {
       
        
        if($id){
           // dd($id);
           
            $termsconditions=TermsCondition::find($request->termsid);
            //dd($termsconditions);
            $termsconditions->terms_conditions= $request->terms_conditions;

            if($termsconditions->update()){
                return redirect('terms-conditions')->with('success', 'Terms and Conditions are updated successfully');
            }else{
                return redirect()->back()->with('error', 'Terms and Conditions are not updated successfully');
            }
        }
        else
        {
           // dd($request->terms_conditions);
            $termsconditions=new TermsCondition;
            $termsconditions->terms_conditions = $request->terms_conditions;

            if($termsconditions->save()){
                return redirect('terms-conditions')->with('success', 'Terms and Conditions are added successfully');
            }else{
                return redirect()->back()->with('error', 'Terms and Conditions are not added successfully');
            }
        }
    } catch (\Exception $e) {
        return redirect('terms-conditions')->with('error', $e->getMessage());
    }      
  }

  
}
