@extends('layouts.master' ,['page_title' => 'Dashboard'])
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center justify-content-between w-100 me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">All Sub Insurance Companies
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                </h1>
            </div>
        </div>
    </div>

    <div class="modal fade" id="AddInsuranceCompany" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" action="{{url('submit_subinsurance_company')}}" enctype="multipart/form-data" class="addForm">
                @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sub Insurance Company</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label>Select Parent Company:</label>
                        <select name="mainCompany" id="mainCompany">
                        @foreach ($maincompanies as $maincompany)
                        <option value="{{$maincompany->id}}">{{$maincompany->name}}</option> 
                        @endforeach      
                        </select> 
                        @error('mainCompany')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3 col-lg-6">
                        <label>Name:</label><br>
                        <input type="text" class="form-control" name="name" required placeholder="Enter Name" data-type="add">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                   
                    </div>

                    <div class="row">

                        <div class="mb-3 col-lg-6">
                            <label>Email:</label>
                            <input type="email" class="form-control" name="email" required placeholder="Enter Email">
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>    
                        <div class="mb-3 col-lg-6">
                            <label>Address:</label>
                            <input name="address" type="text" class="form-control" required placeholder="Enter Address" data-type="add">
                            @error('address')
                            <span class="text-danger">{{$message}}</span>
                                @enderror                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label>phone:</label>
                            <input name="phone" type="text" class="form-control" required placeholder="Enter phone" data-type="add">
                            @error('phone')
                            <span class="text-danger">{{$message}}</span>
                                @enderror                        </div>
                        <div class="mb-3 col-lg-6">
                            <label>Password:</label>
                            <input name="password" type="password" class="form-control" required placeholder="Enter Password" data-type="add">
                        </div>
                    </div>



                </div>
                <div class="modal-footer col-lg-9">
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
                <form action="{{url('/delete_SubInscompany')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <img src="assets/images/warning.svg" alt="">
                    <input type="hidden" name="SubInscompanyId" id="SubInscompanyId" class="SubInscompanyId">
                    <h3>Delete <b>Company</b></h3> 
                    <p>You're going to delete the <b>"Company"</b></p>
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
            {{-- <h3>Search By Date:</h3>
            <div class="d-flex align-items-center gap-5 gap-sm-10 flex-wrap flex-sm-nowrap">
                <input type="date" class="form-control ">
                <h3>To</h3>
                <input type="date" class="form-control">

            </div> --}}
            <button  class="btn btn-primary make-button">Add Sub Insurance Company</button>
        </div>
        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Parent Company</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th colspan="2">Action</th>
                       

                    </tr>
                </thead>
                <tbody>
                    @foreach ($subcompanies as $subcompony)
                    @php
                     $ParentCompanyName = App\Models\InsuranceCompany::where('id', $subcompony->main_company_id)->value('name');
                    @endphp
                    <tr>
                        <td>{{$subcompony->id}}</td>
                        <td>{{$ParentCompanyName}}</td>
                        <td>{{$subcompony->name}}</td>
                        <td>{{$subcompony->email}}</td>
                        <td>{{$subcompony->phone}}</td>
                        <td>{{$subcompony->address}}</td>
                        <td>
                            <a href="{{url('edit_subinsurance_company/'.$subcompony->id)}}" class="text-primary action-button">
                                <i class="las la-edit"></i>
                            </a>
                            <a href="#"  class="text-danger action-button delete-button" data-id="{{$subcompony->id}}">
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

   {{-- delete modal --}}
    
       
    <script>
        //for add 
        let showbutton = document.querySelectorAll('.make-button');
        showbutton.forEach(el => {
            el.addEventListener('click', function(){
                // showing the Modal
                var modal = new bootstrap.Modal(document.getElementById('AddInsuranceCompany'));
                modal.show();
            })
        })

        //for deletion
        let deleteButton = document.querySelectorAll('.delete-button');
    deleteButton.forEach(el => {
        el.addEventListener('click', function(){
            let SubInscompanyId = this.getAttribute('data-id');
            document.getElementById('SubInscompanyId').value = SubInscompanyId;
            // showing the Modal
            var modal = new bootstrap.Modal(document.getElementById('deleteModal'));
            modal.show();
        })
    })
    </script>
@endsection
