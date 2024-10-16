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
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Eidt Insurance Company Details
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
                            <form method="POST" action="{{url('submit_edit_insurance_company')}}" enctype="multipart/form-data" class="addForm">
                                @csrf

                                <input type="hidden" name="inscompanyId" value="{{$inscompany->id}}">
                                    <div class="row">
                                       
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Name:</label><br>
                                                <input type="text" class="form-control" name="name" value="{{$inscompany->name}}" required data-type="add">
                                                @error('name')
                                                <span class="text-danger">{{$message}}</span>
                                                 @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Email:</label>
                                                <input type="email" class="form-control" name="email"  value="{{$inscompany->email}}" required >
                                                @error('email')
                                                <span class="text-danger">{{$message}}</span>
                                                 @enderror
                                            </div>
                                        </div>
                                    <div class="row">
                                       
                                        <div class="col-lg-6">
                                            <div class="form-group add-emp-number-div">
                                                <label>Reg No:</label>
                                                <input name="reg_no" type="text" value="{{$inscompany->reg_number}}" class="form-control" required data-type="add">
                                                @error('reg_no')
                                                <span class="text-danger">{{$message}}</span>
                                                 @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Address:</label>
                                                <input name="address" type="text" class="form-control"  value="{{$inscompany->address}}" required  data-type="add">
                                                @error('address')
                                                <span class="text-danger">{{$message}}</span>
                                                 @enderror
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>phone:</label>
                                                <input name="phone" type="text" class="form-control" value="{{$inscompany->phone}}"  required  data-type="add">
                                                @error('phone')
                                                <span class="text-danger">{{$message}}</span>
                                                 @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Password:</label>
                                                <input name="password" type="password" class="form-control" required value="{{$inscompany->password}}" data-type="add">
                                            </div>
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
@endsection