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
                                <h3  style="float:left;width:70%;margin-top:15px;">VEHICLE RENTAL INVOICE</h3>
                             </div>
                             <div style="margin-bottom: 15px;">
                                <div class="logo" style="float:left;width:20%;">
                                    {{$data->rentalCompany->name}}<br>
                                    ABN: {{$data->rentalCompany->abn_number}}<br>
                                    INOVICE NUM:
                                       </div>
                                <div class="logo" style="float:right;width:20%;">
                                 {{$data->rentalCompany->email}}
                                 <br>
                                Address: {{$data->rentalCompany->Address}}
                                </div>
                             </div>
                             <!-- <div style="background:#009fdb;color:#000000e3;font-size:12px;padding:10px">Appointment of a Temporary Works Co-ordinator (TWC)</div> -->
                            <div class="tableDiv paddingTable" style="margin: 20px 0px;">
                                <table>
                                    <tbody>
                                        <tr style="min-height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="font-weight:900;float: left;width: 200px; height: 70px;  padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Processed by </b></label>
                                            </td>
                                            <td colspan="5"  style="background: #c9cacc !important;width:70px; font-size:12px;">{{$data->rentalCompany->name}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table style="margin-bottom: 20px;">
                                    <tbody>
                                        <tr style="min-height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="font-weight:900;float: left;width: 200px; height: 70px;  padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Date of Inovice</b></label>
                                            </td>
                                            <td colspan="5" style="width: 200px; font-size:12px;"> @php
                                                echo date("d/m/Y");
                                            @endphp</td>
                                           
                                        </tr>
                                        <tr style="min-height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="font-weight:900;float: left;width: 200px; height: 70px;  padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Customer Name</b></label>
                                            </td>
                                            <td colspan="5" style="width: 200px; font-size:12px;"> {{$data->customer_name}}</td>
                                           
                                        </tr>
                                        <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Address</b></label>
                                            </td>
                                            <td colspan="4" style="max-height:70px !important; font-size:12px;">{{$data->address}}</td>
                                            
                                            <td  style="max-height:70px !important; font-size:12px;"></td>
                                        </tr>

                                        <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Vehicle Type</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->vehicle->name}}</td>
                                            <td style="max-height:70px !important; font-size:12px;"> <label for="" style="float: left;width: 200px; height: 70px;  padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Make</b></label></td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->vehicle->make->make_name}}</td>
                                            <td style="max-height:70px !important; font-size:12px;">
                                                <label for="" style="float: left;width: 200px; font-size:12px; height: 70px;  padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Model</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->vehicle->model->model_name}}</td>
                                        </tr>

                                        <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Registration</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->vehicle->reg_number}}</td>
                                            <td style="max-height:70px !important; font-size:12px;">
                                                <label  style="max-height:70px !important; font-size:12px;"><b style="font-size: 12px;">Condition</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">Excillent</td>
                                        </tr>

                                        <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Pick up Date</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->pickup_date}}</td>
                                            <td style="max-height:70px !important; font-size:12px;">
                                                <label for="" style="max-height:70px !important; font-size:12px;"><b style="font-size: 12px;">End Date</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->drop_date}}</td>
                                            <td style="max-height:70px !important; font-size:12px;">
                                                <label for="" style="max-height:70px !important; font-size:12px;"><b style="font-size: 12px;">Total Days</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">@php
                                                $diff = strtotime($data->drop_date) - strtotime($data->pickup_date); 
                                                $days= round($diff / (60 * 60 * 24));
                                                echo $days;
                                            @endphp</td>
                                        </tr>

                                    </tbody>
                                </table>
                                
                                
                                <table>
                                    <tbody>
                                        <tr style="min-height: 150px;">
                                            <th>Item</th>
                                            <th>Day Rate</th>
                                            <th>Total Days</th>
                                            <th>Total Amount</th>
                                        </tr>
                                        <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Rental Fee</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->rental_fee}}</td>
                                            <td style="max-height:70px !important; font-size:12px;">
                                                @php
                                                    echo $days;
                                                @endphp
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">
                                                @php
                                                    $total_rental_fee=$data->rental_fee*$days;
                                                    echo $total_rental_fee;
                                                @endphp
                                            </td>
                                         </tr>
                                         <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Insurance Cover</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->insurance_cover}}</td>
                                            <td style="max-height:70px !important; font-size:12px;">
                                                @php
                                                    
                                              
                                                    echo $days;
                                                @endphp
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">
                                                @php
                                                    $total_insurance_cover=$data->insurance_cover*$days;
                                                    echo $total_insurance_cover;
                                                @endphp
                                            </td>
                                         </tr>
                                         <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Rego Cover</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->rego_recovery}}</td>
                                            <td style="max-height:70px !important; font-size:12px;">
                                                @php
                                                    
                                              
                                                    echo $days;
                                                @endphp
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">
                                                @php
                                                    $total_rego_recovery=$data->rego_recovery*$days;
                                                    echo $total_rego_recovery;
                                                @endphp
                                            </td>
                                         </tr>
                                         <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Administration Charges</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->administration_charges}}</td>
                                            <td style="max-height:70px !important; font-size:12px;">
                                                @php
                                                    
                                              
                                                    echo $days;
                                                @endphp
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">
                                                @php
                                                    $total_administration_charges=$data->administration_charges*$days;
                                                    echo $total_administration_charges;
                                                @endphp
                                            </td>
                                         </tr>
                                         <tr style="height: 150px;">
                                            <td style="width: 150px;background:#c9cacc;color:#000000e3">
                                                <label for="" style="float: left;width: 200px; height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Delivery Fee</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">{{$data->delivery_fee}}</td>
                                            <td style="max-height:70px !important; font-size:12px;">
                                                @php
                                                    
                                              
                                                    echo $days;
                                                @endphp
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">
                                                @php
                                                    $total_delivery_fee=$data->delivery_fee*$days;
                                                    echo $total_delivery_fee;
                                                @endphp
                                            </td>
                                         </tr>


                                         <tr style="height: 150px;border:none; border-bottom: none !important; border-right: none !important;">
                                            <td  style="border:none;"> &nbsp; </td>
                                            <td style="border:none;"> &nbsp; </td>
                                            <td >
                                                <label for="" style="height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Sub Total</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">
                                                @php
                                                   $sub_total= $total_delivery_fee+$total_administration_charges+$total_rego_recovery+$total_insurance_cover+$total_rental_fee;
                                                    echo $sub_total;
                                                @endphp
                                            </td>
                                         </tr>
                                         <tr style="height: 150px;;border:none; border-bottom: none !important; border-right: none !important;">
                                            <td style="border:none;"> &nbsp; </td>
                                            <td style="border:none;"> &nbsp; </td>
                                            <td >
                                                <label for="" style="height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">GST(10%)</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">
                                                @php
                                                    $gst_tax=(10/100)*$sub_total;
                                                    echo $gst_tax;
                                                @endphp
                                            </td>
                                         </tr>
                                         <tr style="height: 150px;;border:none; border-bottom: none !important; border-right: none !important;">
                                            <td style="border:none;"> &nbsp; </td>
                                            <td style="border:none;"> &nbsp; </td>
                                            <td >
                                                <label for="" style="height: 70px; font-size: 14px; padding: 10px; display: grid; align-items: center; background: #c9cacc !important;  color: #fff; margin: 0px;"><b style="font-size: 12px;">Total Due</b></label>
                                            </td>
                                            <td style="max-height:70px !important; font-size:12px;">
                                                @php
                                                    $total_due_amount=$gst_tax+$sub_total;
                                                    echo $total_due_amount;
                                                @endphp
                                            </td>
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