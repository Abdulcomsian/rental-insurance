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
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Eidt Rental Vehicle Details
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
                            <form method="POST" action="{{url('submit_eidt_vehicle')}}" enctype="multipart/form-data" class="addForm">
                                @csrf

                                <input type="hidden" name="vehicleId" value="{{$vehicles->id}}">
                                <div class="row">
                                    <div class="mb-3 col-lg-6">
                                        <label for="exampleFormControlInput1" class="form-label">Make</label><br>
                                        <select name="make" id="make" style="width: 160px;">
                                            <option value="" selected>Select Make</option>
                                            @foreach ($vehiclemakes as $make )
                                                <option value="{{$make->id}}" @php
                                                    if($make->id==$vehicles->make_id) {echo "selected";}
                                                @endphp>{{$make->make_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="exampleFormControlInput1" class="form-label">Model</label><br>
                                        <select name="model" id="model" style="width: 160px;">
                                            <option value="" selected>Select Model</option>                                            
                                            @foreach ($models as $model )
                                                <option value="{{$model->id}}" @php
                                                    if($model->id==$vehicles->model_id){ echo 'selected';}
                                                @endphp >{{$model->model_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    </div>
                
                                    <div class="row">
                                        <div class="mb-3 col-lg-6">
                                            <label for="exampleFormControlInput1" class="form-label">Rental Company</label><br>
                                            <select name="rental_company" id="rental_company" style="width: 160px;">
                                                <option value="" selected>Select Rental Company</option>
                                                @foreach ($rentalcompanies as $rentalcompany )
                                                    <option value="{{$rentalcompany->id}}" @php
                                                        if($rentalcompany->id==$vehicles->rental_company_id) {echo "selected";}
                                                    @endphp>{{$rentalcompany->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                                            <input type="text" name="name" value="{{$vehicles->name}}" class="form-control" id="exampleFormControlInput1">
                                        </div>
                                       
                                    </div>
                
                                    <div class="row">

                                        <div class="mb-3 col-lg-6">
                                            <label for="exampleFormControlInput1" class="form-label">Reg No</label>
                                            <input type="text" name="reg_no" value="{{$vehicles->reg_number}}" class="form-control" id="exampleFormControlInput1">
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="exampleFormControlInput1" class="form-label">Color</label>
                                            <input type="text" name="color" value="{{$vehicles->color}}" class="form-control" id="exampleFormControlInput1">
                                        </div>
                                        {{-- <div class="mb-3 col-lg-6">
                                            <label for="exampleFormControlInput1" class="form-label">Model</label>
                                            <input type="number" class="form-control" id="exampleFormControlInput1">
                                        </div> --}}
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
  
        document.addEventListener("DOMContentLoaded", function() {
        var makeSelect = document.getElementById("make");
        var modelSelect = document.getElementById("model");

        makeSelect.addEventListener("change", function() {
            var makeId = this.value;
            if (makeId) {
                fetch("/getModels/" + makeId)
                    .then(response => response.json())
                    .then(data => {
                        modelSelect.innerHTML = '<option value="" selected>Select Model</option>';
                        data.data.forEach(function(key) {
                            var option = document.createElement("option");
                            option.value = key.id;
                            option.text = key.model_name;
                            modelSelect.appendChild(option);
                        });
                    })
                    .catch(error => console.error('Error:', error));
            } else {
                modelSelect.innerHTML = '<option value="" selected>Select Model</option>';
            }
        });
    });
    </script>
@endsection