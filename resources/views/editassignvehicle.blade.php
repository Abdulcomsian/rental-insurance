@extends('layouts.master' ,['page_title' => 'Dashboard'])
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Eidt Assign Vehicle Details
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <div class="post d-flex flex-column-fluid p-4" id="kt_post">
        <div class="container">
            <div class="card">
                <div>
                    
                    <div class="card-body">
                        <div class="employee_from_div">
                            <form method="POST" action="{{url('submit_edit_assignvehicle')}}" enctype="multipart/form-data" class="addForm">
                                @csrf

                                <input type="hidden" name="assignVehicleId" value="{{$assignVehicles->id}}">
                                <div class="row">
                                    <div class="mb-3 col-lg-6">
                                        <label for="exampleFormControlInput1" class="form-label">Rental Company</label><br>
                                        <select name="rental_company" id="rental_company" style="width: 160px;">
                                            <option value="" selected>Select Rental Company</option>
                                            @foreach ($rentalcompanies   as $rentalcompany )
                                                <option value="{{$rentalcompany->id}}" @php
                                                    if($rentalcompany->id==$assignVehicles->rentalCompany->id){ echo "selected";}
                                                @endphp>{{$rentalcompany->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="exampleFormControlInput1" class="form-label">Vehicles</label><br>
                                        <select name="vehicles" id="vehicles" style="width: 160px;">
                                            <option value="" selected>Select Vehicle</option>
                                            @foreach ($vehicles   as $vehicle)
                                                <option value="{{$vehicle->id}}" @php
                                                if($vehicle->id==$assignVehicles->vehicle->id){ echo "selected";}    
                                                @endphp>{{$vehicle->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    </div>
                
                                    <div class="row">
                                        <div class="mb-3 col-lg-6">
                                            <label for="exampleFormControlInput1" class="form-label">Inusurance Company</label><br>
                                            <select name="insurance_main_company" id="insurance_main_company" style="width: 160px;">
                                                <option value="" selected>Inusurance Company</option>
                                                @foreach ($insmaincompanies   as $insmaincompany)
                                                    <option value="{{$insmaincompany->id}}" @php
                                                    if($insmaincompany->id==$assignVehicles->insuranceCompany->id){ echo "selected";}      
                                                    @endphp>{{$insmaincompany->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="exampleFormControlInput1" class="form-label">Sub Inusurance Company</label><br>
                                            <select name="insurance_sub_company" id="insurance_sub_company" style="width: 160px;">
                                                <option value="" selected>Sub Inusurance Company</option>
                                                @foreach ($inssubcompanies   as $inssubcompany)
                                                    <option value="{{$inssubcompany->id}}" @php
                                                    if($inssubcompany->id==$assignVehicles->subInsuranceCompany->id){ echo "selected";}      
                                                    @endphp>{{$inssubcompany->name}}</option>
                                                @endforeach
                                            </select>                        </div>
                                    </div>
                
                                    <div class="row">
                                        <div class="mb-3 col-lg-6">
                                            <label for="exampleFormControlInput1" class="form-label">Amonut</label>
                                            <input type="text" name="amonut" class="form-control" id="amonut" value="{{$assignVehicles->amount}}">
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="exampleFormControlInput1" class="form-label">Start Date</label>
                                            <input type="date" name="startdate" class="form-control" id="startdate" value="{{$assignVehicles->start_date}}">{{$assignVehicles->start_date}}
                                        </div>
                                    </div>
                                    <div class="row">
                             
                                        <div class="mb-3 col-lg-6">
                                            <label for="exampleFormControlInput1" class="form-label">End Date</label>
                                            <input type="date" name="enddate" class="form-control" id="enddate" value="{{$assignVehicles->end_data}}">{{$assignVehicles->end_data}}
                                        </div>
                                    </div>
                
                
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>  
                                        </div>
                                    </div> 
                                
                                </form>
                            </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--end::Post-->
</div>
<script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</script>
    <script>
        // to vehicle modal
        let addButton = document.querySelectorAll('.vehicle-button');
        addButton.forEach(el => {
            el.addEventListener('click', function(){
                // let itemId = this.getAttribute('data-id');
                // document.getElementById('ItemId').value = itemId;
                // showing the Modal
                var modal = new bootstrap.Modal(document.getElementById('addvehicleModal'));
                modal.show();
            })
        })
        ////// to delete vehicle modal
        let deleteButton = document.querySelectorAll('.delete-button');
         deleteButton.forEach(el => {
        el.addEventListener('click', function(){
            let vehicleId = this.getAttribute('data-id');
            document.getElementById('vehicleId').value = vehicleId;
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