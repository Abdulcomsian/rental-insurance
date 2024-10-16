@extends('layouts.master' ,['page_title' => 'Dashboard'])
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center justify-content-between w-100 me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Assign vehicle to insurance company 
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                </h1>
            </div>
        </div>
    </div>
    <div class="modal fade" id="assignvehicleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form  action="{{url('submit_assign_vehicle')}}" name="frm" method="POST">
                @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Assign Vehicle</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="exampleFormControlInput1" class="form-label">Rental Company</label>
                        <select name="rental_company" id="rental_company" style="width: 160px;">
                            <option value="" selected>Select Rental Company</option>
                            @foreach ($rentalcompanies   as $rentalcompany )
                                <option value="{{$rentalcompany->id}}">{{$rentalcompany->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="exampleFormControlInput1" class="form-label">Vehicles</label>
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
                            <label for="exampleFormControlInput1" class="form-label">Inusurance Company</label>
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
                            <label for="exampleFormControlInput1" class="form-label">Amonut</label>
                            <input type="text" name="amonut" class="form-control" id="amonut">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Start Date</label>
                            <input type="date" name="startdate" class="form-control" id="amonut">
                        </div>
                    </div>
                    <div class="row">
             
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">End Date</label>
                            <input type="date" name="enddate" class="form-control" id="amonut">
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit </button>
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
           
            <button  class="btn btn-primary vehicle-button ">Assign Vehicle</button>
        </div>
        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Rental Company</th>
                        <th>Vehicle</th>
                        <th>Insurance Company</th>
                        <th>Sub Insurance Company</th>
                        <th>Amount</th>
                        <th>From Date</th>
                        <th>End Date</th>
                        <th colspan="2">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                   @foreach ($assignVehicles as $assignVehicle)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$assignVehicle->rentalCompany->name}}</td>
                        <td>{{$assignVehicle->vehicle->name}}</td>
                        <td>{{$assignVehicle->insuranceCompany->name}}</td>
                        <td>{{$assignVehicle->subInsuranceCompany->name ?? ''}}</td>
                        <td>{{$assignVehicle->amount}}</td> 
                        <td>{{$assignVehicle->start_date}}</td> 
                        <td>{{$assignVehicle->end_date}}</td> 
                        <td>
                            <a href="{{url('edit_assignvehicle/'.$assignVehicle->id)}}" class="text-primary action-button">
                                <i class="las la-edit"></i>
                            </a>
                            <a href="#"  class="text-danger action-button delete-button" data-id="{{$assignVehicle->id}}">
                                <i class="las la-trash"></i>
                            </a>
                        </td>
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
                var modal = new bootstrap.Modal(document.getElementById('assignvehicleModal'));
                modal.show();
            })
        })
        ////// to delete vehicle modal
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