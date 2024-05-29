@extends('layouts.master' ,['page_title' => 'Dashboard'])
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center justify-content-between w-100 me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Vehicles
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                </h1>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addvehicleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form  action="{{url('submit_vehicle')}}" name="frm" method="POST">
                @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Vehicle</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="exampleFormControlInput1" class="form-label">Make</label>
                        <select name="make" id="make" style="width: 160px;">
                            <option value="" selected>Select Make</option>
                            @foreach ($vehiclemakes as $make )
                                <option value="{{$make->id}}">{{$make->make_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="exampleFormControlInput1" class="form-label">Model</label>
                        <select name="model" id="model" style="width: 160px;">
                            <option value="" selected>Select Model</option>
                        </select>
                    </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Reg No</label>
                            <input type="text" name="reg_no" class="form-control" id="exampleFormControlInput1">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Color</label>
                            <input type="text" name="color" class="form-control" id="exampleFormControlInput1">
                        </div>
                        {{-- <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Model</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1">
                        </div> --}}
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
            <form action="{{url('/delete_vehicle')}}" name="frm2" method="POST" enctype="multipart/form-data">
                @csrf
                <img src="assets/images/warning.svg" alt="">
                <input type="hidden" name="vehicleId" id="vehicleId" class="vehicleId">
                <h3>Delete <b>Vehicle</b></h3> 
                <p>You're going to delete the <b>"Vehicle"</b></p>
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
           
            <button  class="btn btn-primary vehicle-button ">Add Vehicle</button>
        </div>
        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Reg No</th>
                        <th>Color</th>
                        
                        <th colspan="2">Action</th>

                    </tr>
                </thead>
                <tbody>
                   @foreach ($vehicles as $vehicle)
                   @php
                   // dd($item->order_id);
                       $makeName = App\Models\vehiclemake::where('id', $vehicle->make_id)->value('make_name');
                       $modelName = App\Models\vehiclemodel::where('id', $vehicle->model_id)->value('model_name');
                       // this is jugaad 
                   @endphp
                    <tr>
                        <td>1</td>
                        <td>{{$vehicle->name}}</td>
                        <td>{{$makeName}}</td>
                        <td>{{$modelName}}</td>
                        <td>{{$vehicle->reg_number}}</td>
                        <td>{{$vehicle->color}}</td> 
                        <td>
                            <a href="{{url('edit_vehicle/'.$vehicle->id)}}" class="text-primary action-button">
                                <i class="las la-edit"></i>
                            </a>
                            <a href="#"  class="text-danger action-button delete-button" data-id="{{$vehicle->id}}">
                                <i class="las la-trash"></i>
                            </a>
                        </td>
                    </tr> 
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