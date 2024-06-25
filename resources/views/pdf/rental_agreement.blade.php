<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <style type="text/css">


        .paddingTable td {
            padding: 4px 10px;
        }
        table *{
            font-size: 11px !important;
        }
         .input{
            border: none;
            border-bottom: 1px solid;
            padding:0 8px;
        }
        .paragraph{
            font-size:16px;
            font-weight: 500;
            color:#2e2c2c;
    
        }
    
        table,
        td,
        th {
            border: 1px solid black;
        }
    
        table {
            border-collapse: collapse;
            width: 100%;
        }
    
        .paddingTable td {
            padding: 10px;
        }
      
    </style>
</head>
<body>
    <page pageset="old">
        <div style="padding: 10px; width: 100%; margin: auto;">
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container">
                <!--begin::Card-->
                <div class="card shadow-lg">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2></h2>
                        </div>
                    </div>
                        <div class="card-body pt-0">
                             <div style="margin-bottom: 15px;">
                                <h3  style="float:left;width:70%;margin-top:15px;">VEHICLE RENTAL AGREEMENT</h3>
                                <div class="logo" style="float:right;width:20%;">
                             ABN: {{$data->rentalCompany->abn_number}}
                                </div>
                             </div>
                             <!-- <div style="background:#009fdb;color:#000000e3;font-size:12px;padding:10px">Appointment of a Temporary Works Co-ordinator (TWC)</div> -->
                            <div class="tableDiv paddingTable" style="margin: 20px 0px;">
                                <table>
                                    <tbody>
                                        <tr style="min-height: 150px;">
                                            <td style="width: 250px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="font-weight:900;float: left;width: 200px; height: 70px;  padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Rental Agreement </b></label>
                                            </td>
                                            <td style="background: #c9cacc !important;width:70px; font-size:12px;">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table>
                                    <tbody>
                                        <tr style="min-height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="font-weight:900;float: left;width: 200px; height: 70px;  padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Client Name</b></label>
                                            </td>
                                            <td colspan="3" style="width: 200px; font-size:12px;"> {{$data->customer_name}}</td>
                                           
                                        </tr>
                                        <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Address</b></label>
                                            </td>
                                            <td colspan="2" style="max-height:70px !important; font-size:12px;">{{$data->address}}</td>
                                            
                                            <td  style="max-height:70px !important; font-size:12px;"></td>
                                        </tr>

                                        <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Make</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->vehicle->make->make_name}}</td>
                                            <td >
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->vehicle->name}}</td>
                                        </tr>


                                        <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Colour</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->vehicle->color}}</td>
                                            <td >
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;"></td>
                                        </tr>

                                        <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Registration</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->vehicle->reg_number}}</td>
                                            <td >
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;"></td>
                                        </tr>

                                        <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Pick up Date</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->pickup_date}}</td>
                                            <td >
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;"></td>
                                        </tr>

                                        <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Drop of Date</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->drop_date}}</td>
                                            <td >
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;"></td>
                                        </tr>

                                        <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Rental Fee</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->rental_fee}}</td>
                                            <td >
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;"></td>
                                        </tr>

                                        <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Insurance Cover</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->insurance_cover}}</td>
                                            <td >
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;"></td>
                                        </tr>

                                        <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Rego Cover</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->rego_recovery}}</td>
                                            <td >
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;"></td>
                                        </tr>

                                        <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Administration Charges</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->administration_charges}}</td>
                                            <td >
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;"></td>
                                        </tr>

                                        <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Delivery Fee</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->delivery_fee}}</td>
                                            <td >
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                
                                <table>
                                    <tbody>
                                        <tr style="min-height: 150px;">
                                            <td style="width: 250px;background:#c9cacc;color:#000000e3;text-align: center;">
                                                <label for="" style="font-weight:900;float: left;width: 200px; height: 70px;  padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">ATTENTION: Additional Terms and Conditions</b></label>
                                            </td>
                                        </tr>
                                        <tr style="min-height: 150px;">
                                            <td style="width: 250px;font-size:13px;color:black">
                                                @foreach ($termsdata as $term)
                                                    {{-- {{$term->terms_conditions}} --}}
                                                    @php
                                                        $termsdata= htmlspecialchars_decode(stripslashes($term->terms_conditions)); 
                                                        $termsdata=str_replace("{{Basic insurance}}",$data->basic_insurance,$termsdata);
                                                        $termsdata=str_replace("{{reduction}}",$data->reduction,$termsdata);
                                                        $termsdata=str_replace("{{traffic infringement}}",$data->traffic_infringement,$termsdata);
                                                        $termsdata=str_replace("{{fuel top up fee}}",$data->fuel_topup,$termsdata);
                                                        $termsdata=str_replace("{{vehicle cleaning fee}}",$data->cleaning_fee,$termsdata);
                                                        echo $termsdata;
                                                    @endphp
                                                @endforeach
                                                    {{-- <ul style="text-align: center;">
                                                        <li>
                                                            The TWC has overall responsibility to ensure that all                 temporary         works under their control are undertaken in
                                                             accordance with the  Temporary WorksProcedure.
                                                            
                                                        </li>
                                                        <li>For temporary works in Design Check Category 1, 2 and 3 ensure there is an agreement in place to formally
                                                        allocate design responsibility to the design and design checking organisations.
                                                        </li>
                                                        <li>
                                                            Prepare, maintain and regularly review the Temporary Works Register for the above project.
                                                        </li>
                                                        <li>
                                                            Ensure each temporary works item is allocated an appropriate ‘construction risk’ category.
                                                        </li>
                                                        <li>
                                                            Ensure that a written Design Brief is prepared for all appropriate temporary works and issued to the design and
                                                            design checking organisations identified on the Temporary Works Register.
                                                        </li>
                                                        <li>
                                                            Review Risk Assessments and Method Statements (RAMS) to ensure particular requirements are incorporated.
                                                        </li>
                                                        <li>
                                                            Ensure that a Project Site File is established and maintained; to include a record of all relevant documents.
                                                        </li>
                                                        <li>
                                                            Liaise with the Principal Contractor’s TWC (and seek approvals, where required).
                                                        </li>
                                                        <li>
                                                             Distribute information to all interested parties, including the Principal Designer and Client where appropriate.
                                                        </li>
                                                        <li>
                                                            Ensure that any proposed changes in material or construction are referred to the Temporary Works Designer and
                                                            that any agreed changes or corrections of faults are correctly carried out on site.
                                                        </li>
                                                        <li>
                                                            Ensure that all appropriate inspections and hold points (including those noted in the design) are undertaken and
                                                            recorded on the permit-to-work.
                                                        </li>
                                                        <li>
                                                            Sign and issue the permit-to-work, e.g. permit to load, permit for putting into use, permit to strike, permit to
                                                            remove, etc.; and agree in writing where the TWS may do this (not high-risk work).
                                                        </li>
                                                        <li>
                                                            Identify and instigate any requirements for periodic inspections, monitoring and maintenance of the temporary
                                                            works.
                                                        </li>
                                                    </ul> --}}
                                                </p>
                                            </td>
                                        </tr>
                                       
                                       
                                        {{-- <tr style="min-height: 150px;">
                                            <td style="width: 250px;background:#c9cacc;color:black;text-align: center;">
                                                <label for="" style="font-weight:900;float: left;width: 200px; height: 70px;  padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">I have read, understand the responsibilities as noted and am able to undertake
    the duties placed on me by this appointment.</b></label>
                                            </td>
                                        </tr> --}}
    
                                    </tbody>
                                </table>
                                <table>
                                    <tbody>
                                        <tr style="min-height: 150px;">
                                            <td style="width:120px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="font-weight:900;float: left;width: 200px; height: 70px;  padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Signed:</b></label>
                                            </td>
                                            <td style="width:500px; font-size:12px;">
                                                
                                            </td>
                                        </tr>
                                        <tr style="min-height: 150px;">
                                            <td style="width:120px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="font-weight:900;float: left;width: 200px; height: 70px;  padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Date:</b></label>
                                            </td>
                                            <td style="width:500px; font-size:12px;"></td>
                                        </tr>
                                        <tr style="min-height: 150px;">
                                            <td style="width:120px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="font-weight:900;float: left;width: 200px; height: 70px;  padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Name:</b></label>
                                            </td>
                                            <td style="width:500px; font-size:12px;"></td>
                                        </tr>
                                        
    
                                    </tbody>
                                </table>
                               
    
                            </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
        </div>
    </page>
</body>
</html>