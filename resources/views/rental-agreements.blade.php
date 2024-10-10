@extends('layouts.master' ,['page_title' => 'Dashboard'])
@section('content')
<style>
    select {
    width: 215px !important;
    height: 35px;
    }
</style>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center justify-content-between w-100 me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Rental Agreements 
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                </h1>
            </div>
        </div>
    </div>
    <div class="modal fade" id="assignvehicleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form  action="{{url('submit_add_agreement')}}" name="frm" method="POST" id="agreement_form" enctype="multipart/form-data">
                @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Rental Agreement</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Customer Name</label>
                            <input type="text" name="customer_name" class="form-control" id="customer_name" required="required">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" id="address" required="required">
                        </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="exampleFormControlInput1" class="form-label">Out KM</label>
                                <input type="text" name="out_km" class="form-control" id="out_km" required="required">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="exampleFormControlInput1" class="form-label">In KM</label>
                                <input type="text" name="in_km" class="form-control" id="in_km" required="required">
                            </div>
                            
                        </div>
                            

                    <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="exampleFormControlInput1" class="form-label">Rental Company</label>
                        <select name="rental_company" id="rental_company" style="width: 160px;" required="required">
                            <option value="" selected>Select Rental Company</option>
                            @foreach ($rentalcompanies   as $rentalcompany )
                                <option value="{{$rentalcompany->id}}">{{$rentalcompany->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="exampleFormControlInput1" class="form-label" required="required">Vehicles</label>
                        <select name="vehicles" id="vehicles" style="width: 160px;">
                            <option value="" selected>Select Vehicle</option>
                            @foreach ($vehicles   as $vehicle)
                                <option value="{{$vehicle->id}}">{{$vehicle->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label" required="required">Inusurance Company</label>
                            <select name="insurance_main_company" id="insurance_main_company" style="width: 160px;">
                                <option value="" selected>Inusurance Company</option>
                                @foreach ($insmaincompanies   as $insmaincompany)
                                    <option value="{{$insmaincompany->id}}">{{$insmaincompany->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Sub Inusurance Company</label>
                            <select name="insurance_sub_company" id="insurance_sub_company" style="width: 160px;">
                                <option value="" selected>Sub Inusurance Company</option>
                                @foreach ($inssubcompanies   as $inssubcompany)
                                    <option value="{{$inssubcompany->id}}">{{$inssubcompany->name}}</option>
                                @endforeach
                            </select>                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Pick of Date</label>
                            <input type="datetime-local" name="startdate" class="form-control" id="startdate" required="required">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Drop of Date</label>
                            <input type="datetime-local" name="enddate" class="form-control" id="enddate" required="required">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Rental Fee</label>
                            <input type="text" name="rental_fee" class="form-control" id="rental_fee" required="required">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Insurance Cover</label>
                            <input type="text" name="insurance_cover" class="form-control" id="insurance_cover" required="required">
                        </div>
                     
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Rego Recovery</label>
                            <input type="text" name="rego_recovery" class="form-control" id="rego_recovery" required="required">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Administration Charges</label>
                            <input type="text" name="administration_charges" class="form-control" id="administration_charges" required="required">
                        </div>
                     
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Delivery Fee</label>
                            <input type="text" name="delivery_fee" class="form-control" id="rego_recovery" required="required">
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <hr style="color:black">
                            <h2>Terms and Conditions Data</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Basic Insurance</label>
                            <input type="text" name="basic_insurance"  value="2,500.00"  class="form-control" id="basic_insurance" required="required">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Reduction</label>
                            <input type="text" name="reduction" value="1,500.00" class="form-control" id="reduction" required="required">
                        </div>
                     
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Traffic Infringement</label>
                            <input type="text" value="50.00" name="traffic_infringement" class="form-control" id="traffic_infringement" required="required">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Fuel Top Up Fee</label>
                            <input type="text" value="2.00" name="fuel_topup_fee" class="form-control" id="fuel_topup_fee" required="required">
                        </div>
                     
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Vehicle Cleaning Fee</label>
                            <input type="text" value="180.00" name="cleaning_fee" class="form-control" id="cleaning_fee" required="required">
                        </div>
                        <div class="d-flex inputDiv my-0" id="sign"
                                        style="align-items: center;border:none">
                                        <!-- <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                    <span class="required">Signature:</span>
                                                </label>
                                                <br/> -->
                                        <canvas id="sig" onblure="draw()"
                                            style="background: gray; border-radius:10px"></canvas>
                                        <br />
                                        <textarea id="signature" name="signed" style="display: none"></textarea>
                                        <span id="clear" class="fa fa-undo cursor-pointer"
                                            style="line-height: 6; position:relative; top:51px; right:26px"></span>
                                    </div>    
                    
                    </div>
                    
                    <div class="row">
                        <div class="mb-3 col-lg-6"><br>
                            <label for="exampleFormControlInput1" class="form-label">Licence Image</label>
                            <input type="file" name="file" />
                        </div>
                        <div class="mb-3 col-lg-6">
                        </div>
                     
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="submitButton" class="btn btn-primary">Submit </button>
                </div>
            </div>
            </form>
        </div>
    </div>
 {{-- for deletion --}}
 <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="modal-data">
            <form action="{{url('/delete_assignVehicle')}}" name="frm2" method="POST" enctype="multipart/form-data">
                @csrf
                <img src="assets/images/warning.svg" alt="">
                <input type="hidden" name="assignVehicleId" id="assignVehicleId" class="assignVehicleId">
                <h3>Delete <b>Assigned Vehicle</b></h3> 
                <p>You're going to delete the <b>"Assigned Vehicle"</b></p>
                <div class="modal-action">
                    <button type="button" class="btn btn-action-cancel" data-bs-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-action-approve">Yes</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  
    <section class="card">
       <div class="d-flex align-items-center gap-10 my-10 flex-wrap">
           
            <button  class="btn btn-primary vehicle-button ">Add Rental Agreement</button>
        </div>
        <div class="table-responsive">
            @php
                // $date1= '2024-06-04 00:00:00';
                // $date2= '2024-06-05 00:00:00';
                // $diff = strtotime($date2) - strtotime($date1); 
                // echo round($diff / (60 * 60 * 24));
            @endphp
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer Name</th>
                        <th>Address</th>
                        <th>Vehicle Type</th>
                        <th>Pick up Date</th>
                        <th>Drop of Date</th>
                        <th>Rental fee</th>
                        <th>Insurance Cover</th>
                        <th>Rego Recovery</th>
                        <th>Administration Charges</th>
                        <th>Delivery Fee</th>
                        <th>Rental Inovice</th>
                        <th>Rental Agreement</th>
                        {{-- <th colspan="2">Action</th> --}}

                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                   @foreach ($rentalagreements as $rentalagreement)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$rentalagreement->customer_name}}</td>
                        <td>{{$rentalagreement->address}}</td>
                        <td>{{$rentalagreement->vehicle->name}}</td>
                        {{-- <td>{{$rentalagreement->rentalCompany->name}}</td>
                        <td>{{$rentalagreement->vehicle->name}}</td>
                        <td>{{$rentalagreement->insuranceCompany->name}}</td>
                        <td>{{$rentalagreement->subInsuranceCompany->name ?? ''}}</td> --}}
                        <td>{{$rentalagreement->pickup_date}}</td> 
                        <td>{{$rentalagreement->drop_date}}</td> 
                        <td>{{$rentalagreement->rental_fee}}</td> 
                        <td>{{$rentalagreement->insurance_cover}}</td> 
                        <td>{{$rentalagreement->rego_recovery}}</td> 
                        <td>{{$rentalagreement->administration_charges}}</td> 
                        <td>{{$rentalagreement->delivery_fee}}</td> 
                        <td>  
                            @php
                                if($rentalagreement->invoice_pdf_file!='NULL'){
                            @endphp
                            <a href="{{url('/pdf/inovices/'.$rentalagreement->invoice_pdf_file)}}" target="_blank" class="text-primary action-button">
                                {{-- <img src="pdf-svgrepo-com.svg" alt="">  --}}
                               <svg height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 303.188 303.188" xml:space="preserve" fill="#000000">
                              <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                              <g id="SVGRepo_iconCarrier"> <g> <polygon style="fill:#E8E8E8;" points="219.821,0 32.842,0 32.842,303.188 270.346,303.188 270.346,50.525 "/> <path style="fill:#FB3449;" d="M230.013,149.935c-3.643-6.493-16.231-8.533-22.006-9.451c-4.552-0.724-9.199-0.94-13.803-0.936 c-3.615-0.024-7.177,0.154-10.693,0.354c-1.296,0.087-2.579,0.199-3.861,0.31c-1.314-1.36-2.584-2.765-3.813-4.202 c-7.82-9.257-14.134-19.755-19.279-30.664c1.366-5.271,2.459-10.772,3.119-16.485c1.205-10.427,1.619-22.31-2.288-32.251 c-1.349-3.431-4.946-7.608-9.096-5.528c-4.771,2.392-6.113,9.169-6.502,13.973c-0.313,3.883-0.094,7.776,0.558,11.594 c0.664,3.844,1.733,7.494,2.897,11.139c1.086,3.342,2.283,6.658,3.588,9.943c-0.828,2.586-1.707,5.127-2.63,7.603 c-2.152,5.643-4.479,11.004-6.717,16.161c-1.18,2.557-2.335,5.06-3.465,7.507c-3.576,7.855-7.458,15.566-11.815,23.02 c-10.163,3.585-19.283,7.741-26.857,12.625c-4.063,2.625-7.652,5.476-10.641,8.603c-2.822,2.952-5.69,6.783-5.941,11.024 c-0.141,2.394,0.807,4.717,2.768,6.137c2.697,2.015,6.271,1.881,9.4,1.225c10.25-2.15,18.121-10.961,24.824-18.387 c4.617-5.115,9.872-11.61,15.369-19.465c0.012-0.018,0.024-0.036,0.037-0.054c9.428-2.923,19.689-5.391,30.579-7.205 c4.975-0.825,10.082-1.5,15.291-1.974c3.663,3.431,7.621,6.555,11.939,9.164c3.363,2.069,6.94,3.816,10.684,5.119 c3.786,1.237,7.595,2.247,11.528,2.886c1.986,0.284,4.017,0.413,6.092,0.335c4.631-0.175,11.278-1.951,11.714-7.57 C231.127,152.765,230.756,151.257,230.013,149.935z M119.144,160.245c-2.169,3.36-4.261,6.382-6.232,9.041 c-4.827,6.568-10.34,14.369-18.322,17.286c-1.516,0.554-3.512,1.126-5.616,1.002c-1.874-0.11-3.722-0.937-3.637-3.065 c0.042-1.114,0.587-2.535,1.423-3.931c0.915-1.531,2.048-2.935,3.275-4.226c2.629-2.762,5.953-5.439,9.777-7.918 c5.865-3.805,12.867-7.23,20.672-10.286C120.035,158.858,119.587,159.564,119.144,160.245z M146.366,75.985 c-0.602-3.514-0.693-7.077-0.323-10.503c0.184-1.713,0.533-3.385,1.038-4.952c0.428-1.33,1.352-4.576,2.826-4.993 c2.43-0.688,3.177,4.529,3.452,6.005c1.566,8.396,0.186,17.733-1.693,25.969c-0.299,1.31-0.632,2.599-0.973,3.883 c-0.582-1.601-1.137-3.207-1.648-4.821C147.945,83.048,146.939,79.482,146.366,75.985z M163.049,142.265 c-9.13,1.48-17.815,3.419-25.979,5.708c0.983-0.275,5.475-8.788,6.477-10.555c4.721-8.315,8.583-17.042,11.358-26.197 c4.9,9.691,10.847,18.962,18.153,27.214c0.673,0.749,1.357,1.489,2.053,2.22C171.017,141.096,166.988,141.633,163.049,142.265z M224.793,153.959c-0.334,1.805-4.189,2.837-5.988,3.121c-5.316,0.836-10.94,0.167-16.028-1.542 c-3.491-1.172-6.858-2.768-10.057-4.688c-3.18-1.921-6.155-4.181-8.936-6.673c3.429-0.206,6.9-0.341,10.388-0.275 c3.488,0.035,7.003,0.211,10.475,0.664c6.511,0.726,13.807,2.961,18.932,7.186C224.588,152.585,224.91,153.321,224.793,153.959z"/> <polygon style="fill:#FB3449;" points="227.64,25.263 32.842,25.263 32.842,0 219.821,0 "/> <g> <path style="fill:#A4A9AD;" d="M126.841,241.152c0,5.361-1.58,9.501-4.742,12.421c-3.162,2.921-7.652,4.381-13.472,4.381h-3.643 v15.917H92.022v-47.979h16.606c6.06,0,10.611,1.324,13.652,3.971C125.321,232.51,126.841,236.273,126.841,241.152z M104.985,247.387h2.363c1.947,0,3.495-0.546,4.644-1.641c1.149-1.094,1.723-2.604,1.723-4.529c0-3.238-1.794-4.857-5.382-4.857 h-3.348C104.985,236.36,104.985,247.387,104.985,247.387z"/> <path style="fill:#A4A9AD;" d="M175.215,248.864c0,8.007-2.205,14.177-6.613,18.509s-10.606,6.498-18.591,6.498h-15.523v-47.979 h16.606c7.701,0,13.646,1.969,17.836,5.907C173.119,235.737,175.215,241.426,175.215,248.864z M161.76,249.324 c0-4.398-0.87-7.657-2.609-9.78c-1.739-2.122-4.381-3.183-7.926-3.183h-3.773v26.877h2.888c3.939,0,6.826-1.143,8.664-3.43 C160.841,257.523,161.76,254.028,161.76,249.324z"/> <path style="fill:#A4A9AD;" d="M196.579,273.871h-12.766v-47.979h28.355v10.403h-15.589v9.156h14.374v10.403h-14.374 L196.579,273.871L196.579,273.871z"/> </g> <polygon style="fill:#D1D3D3;" points="219.821,50.525 270.346,50.525 219.821,0 "/> </g> </g>
                              </svg>
                              </a>  
                            @php
                        } else {
                            @endphp
                            <a href="{{url('/rental-invoice/'.$rentalagreement->id)}}" class="text-primary action-button">
                                 Generate Rental Inovice
                            </a>
                            @php
                        }
                            @endphp
                        </td>
                        <td>
                            <a href="{{url('/pdf/'.$rentalagreement->pdf_file)}}" target="_blank" class="text-primary action-button">
                                {{-- <img src="pdf-svgrepo-com.svg" alt="">  --}}
                               <svg height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 303.188 303.188" xml:space="preserve" fill="#000000">
                              <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                              <g id="SVGRepo_iconCarrier"> <g> <polygon style="fill:#E8E8E8;" points="219.821,0 32.842,0 32.842,303.188 270.346,303.188 270.346,50.525 "/> <path style="fill:#FB3449;" d="M230.013,149.935c-3.643-6.493-16.231-8.533-22.006-9.451c-4.552-0.724-9.199-0.94-13.803-0.936 c-3.615-0.024-7.177,0.154-10.693,0.354c-1.296,0.087-2.579,0.199-3.861,0.31c-1.314-1.36-2.584-2.765-3.813-4.202 c-7.82-9.257-14.134-19.755-19.279-30.664c1.366-5.271,2.459-10.772,3.119-16.485c1.205-10.427,1.619-22.31-2.288-32.251 c-1.349-3.431-4.946-7.608-9.096-5.528c-4.771,2.392-6.113,9.169-6.502,13.973c-0.313,3.883-0.094,7.776,0.558,11.594 c0.664,3.844,1.733,7.494,2.897,11.139c1.086,3.342,2.283,6.658,3.588,9.943c-0.828,2.586-1.707,5.127-2.63,7.603 c-2.152,5.643-4.479,11.004-6.717,16.161c-1.18,2.557-2.335,5.06-3.465,7.507c-3.576,7.855-7.458,15.566-11.815,23.02 c-10.163,3.585-19.283,7.741-26.857,12.625c-4.063,2.625-7.652,5.476-10.641,8.603c-2.822,2.952-5.69,6.783-5.941,11.024 c-0.141,2.394,0.807,4.717,2.768,6.137c2.697,2.015,6.271,1.881,9.4,1.225c10.25-2.15,18.121-10.961,24.824-18.387 c4.617-5.115,9.872-11.61,15.369-19.465c0.012-0.018,0.024-0.036,0.037-0.054c9.428-2.923,19.689-5.391,30.579-7.205 c4.975-0.825,10.082-1.5,15.291-1.974c3.663,3.431,7.621,6.555,11.939,9.164c3.363,2.069,6.94,3.816,10.684,5.119 c3.786,1.237,7.595,2.247,11.528,2.886c1.986,0.284,4.017,0.413,6.092,0.335c4.631-0.175,11.278-1.951,11.714-7.57 C231.127,152.765,230.756,151.257,230.013,149.935z M119.144,160.245c-2.169,3.36-4.261,6.382-6.232,9.041 c-4.827,6.568-10.34,14.369-18.322,17.286c-1.516,0.554-3.512,1.126-5.616,1.002c-1.874-0.11-3.722-0.937-3.637-3.065 c0.042-1.114,0.587-2.535,1.423-3.931c0.915-1.531,2.048-2.935,3.275-4.226c2.629-2.762,5.953-5.439,9.777-7.918 c5.865-3.805,12.867-7.23,20.672-10.286C120.035,158.858,119.587,159.564,119.144,160.245z M146.366,75.985 c-0.602-3.514-0.693-7.077-0.323-10.503c0.184-1.713,0.533-3.385,1.038-4.952c0.428-1.33,1.352-4.576,2.826-4.993 c2.43-0.688,3.177,4.529,3.452,6.005c1.566,8.396,0.186,17.733-1.693,25.969c-0.299,1.31-0.632,2.599-0.973,3.883 c-0.582-1.601-1.137-3.207-1.648-4.821C147.945,83.048,146.939,79.482,146.366,75.985z M163.049,142.265 c-9.13,1.48-17.815,3.419-25.979,5.708c0.983-0.275,5.475-8.788,6.477-10.555c4.721-8.315,8.583-17.042,11.358-26.197 c4.9,9.691,10.847,18.962,18.153,27.214c0.673,0.749,1.357,1.489,2.053,2.22C171.017,141.096,166.988,141.633,163.049,142.265z M224.793,153.959c-0.334,1.805-4.189,2.837-5.988,3.121c-5.316,0.836-10.94,0.167-16.028-1.542 c-3.491-1.172-6.858-2.768-10.057-4.688c-3.18-1.921-6.155-4.181-8.936-6.673c3.429-0.206,6.9-0.341,10.388-0.275 c3.488,0.035,7.003,0.211,10.475,0.664c6.511,0.726,13.807,2.961,18.932,7.186C224.588,152.585,224.91,153.321,224.793,153.959z"/> <polygon style="fill:#FB3449;" points="227.64,25.263 32.842,25.263 32.842,0 219.821,0 "/> <g> <path style="fill:#A4A9AD;" d="M126.841,241.152c0,5.361-1.58,9.501-4.742,12.421c-3.162,2.921-7.652,4.381-13.472,4.381h-3.643 v15.917H92.022v-47.979h16.606c6.06,0,10.611,1.324,13.652,3.971C125.321,232.51,126.841,236.273,126.841,241.152z M104.985,247.387h2.363c1.947,0,3.495-0.546,4.644-1.641c1.149-1.094,1.723-2.604,1.723-4.529c0-3.238-1.794-4.857-5.382-4.857 h-3.348C104.985,236.36,104.985,247.387,104.985,247.387z"/> <path style="fill:#A4A9AD;" d="M175.215,248.864c0,8.007-2.205,14.177-6.613,18.509s-10.606,6.498-18.591,6.498h-15.523v-47.979 h16.606c7.701,0,13.646,1.969,17.836,5.907C173.119,235.737,175.215,241.426,175.215,248.864z M161.76,249.324 c0-4.398-0.87-7.657-2.609-9.78c-1.739-2.122-4.381-3.183-7.926-3.183h-3.773v26.877h2.888c3.939,0,6.826-1.143,8.664-3.43 C160.841,257.523,161.76,254.028,161.76,249.324z"/> <path style="fill:#A4A9AD;" d="M196.579,273.871h-12.766v-47.979h28.355v10.403h-15.589v9.156h14.374v10.403h-14.374 L196.579,273.871L196.579,273.871z"/> </g> <polygon style="fill:#D1D3D3;" points="219.821,50.525 270.346,50.525 219.821,0 "/> </g> </g>
                              </svg>
                                {{-- Download Rental Agreement PDF --}}
                              </a>    
                        </td> 
                        {{-- <td>
                            <a href="{{url('edit_assignvehicle/'.$rentalagreement->id)}}" class="text-primary action-button">
                                <i class="las la-edit"></i>
                            </a>
                            <a href="#"  class="text-danger action-button delete-button" data-id="{{$rentalagreement->id}}">
                                <i class="las la-trash"></i>
                            </a>

                           
                        </td> --}}
                    </tr> 
                    @php
                        $i++;
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{asset('assets/js/signature_pad.umd.min.js')}}"></script>

<script>
    const canvas = document.getElementById("sig");
    if(canvas){
        var signaturePad = new SignaturePad(canvas);
    }
    $(document).on("submit", "#agreement_form", function(e){
     e.preventDefault();
        //console.log(signaturePad);
        // return;
        if(signaturePad){
            $("#signature").val(signaturePad.toDataURL('image/png'));
        }
         this.submit();
  })
    
    $('#clear').click(function(e) {
        e.preventDefault();
        signaturePad.clear();
        $("#signature").val('');
    });

        // to vehicle modal
        let addButton = document.querySelectorAll('.vehicle-button');
        addButton.forEach(el => {
            el.addEventListener('click', function(){
                // let itemId = this.getAttribute('data-id');
                // document.getElementById('ItemId').value = itemId;
                // showing the Modal
                var modal = new bootstrap.Modal(document.getElementById('assignvehicleModal'));
                modal.show();
            })
        })
        let deleteButton = document.querySelectorAll('.delete-button');
         deleteButton.forEach(el => {
        el.addEventListener('click', function(){
            let assignVehicleId = this.getAttribute('data-id');
            document.getElementById('assignVehicleId').value = assignVehicleId;
            // showing the Modal
            var modal = new bootstrap.Modal(document.getElementById('deleteModal'));
            modal.show();
        })
    })

        document.addEventListener("DOMContentLoaded", function() {
        var makeSelect = document.getElementById("rental_company");
        var modelSelect = document.getElementById("vehicles");

        makeSelect.addEventListener("change", function() {
            var companyId = this.value;
            if (companyId) {
                fetch("/getVehicles/" + companyId)
                    .then(response => response.json())
                    .then(data => {
                        modelSelect.innerHTML = '<option value="" selected>Select Vehicle</option>';
                        data.data.forEach(function(key) {
                            var option = document.createElement("option");
                            option.value = key.id;
                            option.text = key.name;
                            modelSelect.appendChild(option);
                        });
                    })
                    .catch(error => console.error('Error:', error));
            } else {
                modelSelect.innerHTML = '<option value="" selected>Select Vehicle</option>';
            }
        });


        var inscompanySelect = document.getElementById("insurance_main_company");
        var inssubcompanySelect = document.getElementById("insurance_sub_company");

        inscompanySelect.addEventListener("change", function() {
            var insCompanyId = this.value;
            if (insCompanyId) {
                fetch("/getsubcompany/" + insCompanyId)
                    .then(response => response.json())
                    .then(data => {
                        inssubcompanySelect.innerHTML = '<option value="" selected>Sub Inusurance Company</option>';
                        data.data.forEach(function(key) {
                            var option = document.createElement("option");
                            option.value = key.id;
                            option.text = key.name;
                            inssubcompanySelect.appendChild(option);
                        });
                    })
                    .catch(error => console.error('Error:', error));
            } else {
                inssubcompanySelect.innerHTML = '<option value="" selected>Sub Inusurance Company</option>';
            }
        });

    });
    </script>
@endsection