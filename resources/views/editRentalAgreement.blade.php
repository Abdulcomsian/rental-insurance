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
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Edit Rental Agreement
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                </h1>
            </div>
        </div>
    </div>
    <div  tabindex="-1" aria-labelledby="" style="margin-left: 100px" >
        <div class="modal-dialog-centered" >
            <form  action="{{url('submit_edit_agreement')}}" method="POST" id="agreement_form" enctype="multipart/form-data">
                @csrf
            <div class="modal-content">
                <input type="hidden" name="agreement_id" value="{{$rentalagreements->id}}">
                <div class="modal-body">

                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Customer Name</label>
                            <input type="text" name="customer_name" class="form-control" id="customer_name" value="{{$rentalagreements->customer_name}}" required="required">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" id="address" value="{{$rentalagreements->address}}" required="required">
                        </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="exampleFormControlInput1" class="form-label">Out KM</label>
                                <input type="text" name="out_km" class="form-control" id="out_km" value="{{$rentalagreements->out_km}}" required="required">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="exampleFormControlInput1" class="form-label">In KM</label>
                                <input type="text" name="in_km" class="form-control" id="in_km" value="{{$rentalagreements->in_km}}" required="required">
                            </div>
                            
                        </div>
                        <div class="row">
                            
                            <div class="mb-3 col-lg-6">
                                <label for="exampleFormControlInput1" class="form-label">Pick of Date</label>
                                <input type="datetime-local" name="startdate" class="form-control select_vehicle" id="startdate" disabled value="{{$rentalagreements->pickup_date}}" required="required">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="exampleFormControlInput1" class="form-label">Drop of Date</label>
                                <input type="datetime-local" name="enddate" class="form-control select_vehicle" id="enddate"  disabled value="{{$rentalagreements->drop_date}}" required="required">
                            </div>
                        </div>     
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="exampleFormControlInput1" class="form-label" required="required">Inusurance Company</label><br>
                                <select name="insurance_main_company" id="insurance_main_company"  disabled class="select_vehicle" style="width: 160px;">
                                    <option value="" disabled selected>Inusurance Company</option>
                                    @foreach ($insmaincompanies   as $insmaincompany)
                                        <option value="{{$insmaincompany->id}}" @if ($insmaincompany->id==$rentalagreements->insurance_company_id) @selected(true) @endif>{{$insmaincompany->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="exampleFormControlInput1" class="form-label">Sub Inusurance Company</label>
                                <select name="insurance_sub_company" disabled id="insurance_sub_company" style="width: 160px;">
                                    <option value="" disabled selected>Sub Inusurance Company</option>
                                    @foreach ($inssubcompanies   as $inssubcompany)
                                        <option value="{{$inssubcompany->id}}" @if ($inssubcompany->id==$rentalagreements->insurance_sub_company_id) @selected(true) @endif>{{$inssubcompany->name}}</option>
                                    @endforeach
                                </select>                        </div>
                        </div>
                    <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="exampleFormControlInput1" class="form-label">Rental Company</label>
                        <select name="rental_company" id="rental_company" disabled class="select_vehicle" style="width: 160px;" required="required">
                            <option value="" disabled selected>Select Rental Company</option>
                            @foreach ($rentalcompanies   as $rentalcompany )
                                <option value="{{$rentalcompany->id}}" @if ($rentalcompany->id==$rentalagreements->rental_companyid ) @selected(true) @endif>{{$rentalcompany->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="exampleFormControlInput1" class="form-label" required="required">Vehicles</label> <br>
                        <select name="vehicles" disabled id="vehicles" style="width: 160px;">
                            <option value="">Select Vehicle</option>
                            @foreach ($vehicles   as $vehicle)
                                <option value="{{$vehicle->id}}" @if ($vehicle->id==$rentalagreements->vehicle_id) @selected(true) @endif>{{$vehicle->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>

                    
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Rental Fee</label>
                            <input type="text" name="rental_fee" class="form-control" id="rental_fee" value="{{$rentalagreements->rental_fee}}" required="required">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Insurance Cover</label>
                            <input type="text" name="insurance_cover" class="form-control" value="{{$rentalagreements->insurance_cover}}" id="insurance_cover" required="required">
                        </div>
                     
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Rego Recovery</label>
                            <input type="text" name="rego_recovery" class="form-control"  id="rego_recovery" value="{{$rentalagreements->rego_recovery}}" required="required">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Administration Charges</label>
                            <input type="text" name="administration_charges" class="form-control" id="administration_charges" value="{{$rentalagreements->administration_charges}}" required="required">
                        </div>
                     
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Delivery Fee</label>
                            <input type="text" name="delivery_fee" class="form-control" id="rego_recovery"  value="{{$rentalagreements->delivery_fee}}" required="required">
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
                            <input type="text" name="basic_insurance"  value="{{$rentalagreements->basic_insurance}}"  class="form-control" id="basic_insurance" required="required">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Reduction</label>
                            <input type="text" name="reduction" value="{{$rentalagreements->reduction}}" class="form-control" id="reduction" required="required">
                        </div>
                     
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Traffic Infringement</label>
                            <input type="text" value="{{$rentalagreements->traffic_infringement}}" name="traffic_infringement" class="form-control" id="traffic_infringement" required="required">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Fuel Top Up Fee</label>
                            <input type="text" value="{{$rentalagreements->fuel_topup}}" name="fuel_topup_fee" class="form-control" id="fuel_topup_fee" required="required">
                        </div>
                     
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Vehicle Cleaning Fee</label>
                            <input type="text" value="{{$rentalagreements->cleaning_fee}}" name="cleaning_fee" class="form-control" id="cleaning_fee" required="required">
                        </div>
                        <div class="d-flex inputDiv my-0" id="sign" style="align-items: center;border:none">
                            <label class="fs-6 fw-bold mb-2">
                                <span>Signature</span>
                            </label>
                            <div>
                                @if($rentalagreements->signature!==null)
                                    <img src="{{asset('assets/signature/' .$rentalagreements->signature )}}" width="200" alt="signature">
                                @endif
                            </div>
                        </div>    
                    
                    </div>
                    
                    <div class="row">
                        <div class="mb-3 col-lg-6"><br>
                            <label for="exampleFormControlInput1" class="form-label">Licence Image</label>
                            <input type="file" name="file" />
                            <br>
                            @if($rentalagreements->licence_image !== null)
                            <img src="{{asset('uploads/licence_images/' .$rentalagreements->licence_image )}}" width="200" alt="signature" style="margin-top: 10px;">
                            @endif
                        </div>
                        <div class="mb-3 col-lg-6">
                        </div>
                     
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="submitForm" class="btn btn-primary">Submit </button>
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

  
    
</div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{asset('assets/js/signature_pad.umd.min.js')}}"></script>

<script>
    const canvas = document.getElementById("sig");
    if(canvas){
        var signaturePad = new SignaturePad(canvas);
        signaturePad.addEventListener("endStroke", function(){
            $("#signature").val(signaturePad.toDataURL('image/png'));
        }, {once: true})
    }


    // $(document).on("submit", "#agreement_form", function(e){
    //     e.preventDefault();
    //     $.ajax({
    //         url: $(this).attr('action'), // Get the form's action URL
    //         type: 'POST', // Set the HTTP method to POST
    //         data: $(this).serialize(), // Serialize form data
    //         success: function(response) {
    //             console.log(response);
    //             if(response.success == true){
    //                 if(confirm('Successful Message')){
    //                     window.location.reload();  
    //                 }
    //             }
    //         },
    //         error: function(xhr) {
    //             alert('Vehicle already assigned to insurance company');
    //             // if(xhr.success == false){
    //             //     if(confirm(response.msg)){
    //             //         window.location.reload();  
    //             //     }
    //             // }
    //         }
    //     });
    // })
    
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
        var insuranceVehicle = document.querySelectorAll(".select_vehicle");
        var modelSelect = document.getElementById("vehicles");
        let url = "{{route('get.vehicle')}}";

        insuranceVehicle.forEach((el) => {
            el.addEventListener("change", function() {
                var startDate = document.querySelector("#startdate").value;
                var endDate = document.querySelector("#enddate").value;
                var insuranceCompany = document.querySelector("#insurance_main_company").value;
                var rentalCompany = document.querySelector("#rental_company").value;
                    fetch(url, {
                        method: "POST",
                        body: JSON.stringify({
                            _token: "{{csrf_token()}}",
                            startDate: startDate,
                            endDate: endDate,
                            insuranceCompany: insuranceCompany,
                            rentalCompany: rentalCompany,
                        }),
                        headers: {
                            "Content-Type": "application/json",
                        },
                    })
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
            });
        })
        
        


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