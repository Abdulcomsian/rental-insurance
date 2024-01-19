@extends('layouts.master' ,['page_title' => 'Dashboard'])
@push('page-css')
<link rel="stylesheet" href="{{asset('assets/css/adminpage_css.css')}}">
@endpush
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center justify-content-between w-100 me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Profile
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                </h1>
            </div>
        </div>
    </div>
    <div class="card card-container">
        <h1 class="text-center mb-6">Profile Information</h1>
        <div class="inputs-wrapper">
            <div class="span--2-cols">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="span--2-cols">
                <label class="form-label">Email</label>
                <input type="email" class="form-control">
            </div>
            <div class="">
                <label for="exampleFormControlInput1" class="form-label">Gender</label>
                <select class="form-select">
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
            <div class="">
                <label class="form-label">Date of Birth</label>
                <input type="date" class="form-control">
            </div>
            <div class="">
                <label class="form-label">Telephone</label>
                <input type="number" class="form-control">
            </div>
            <div class="">
                <label class="form-label">Service Number</label>
                <input type="number" class="form-control">
            </div>
            <div class="">
                <label class="form-label">Country</label>
                <select class="form-select">
                    <option>Select Country</option>
                    <option>one</option>
                    <option>two</option>
                </select>
            </div>
            <div class="">
                <label class="form-label">Locations</label>
                <input type="text" class="form-control">
            </div>
            <div class="span--2-cols">
                <label class="form-label">Service Offfered</label>
                <select class="form-select" aria-label=".form-select-sm example" id="ListCountry" multiple>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="span--2-cols">
                <h4>VERIFICATION DOCUMENTS</h4>
            </div>
            <div class="span--2-cols">
                <label class="form-label">Upload ID</label>
                <input type="file" class="form-control">
            </div>
            <!-- <div class="span--2-cols d-flex align-items-center justify-content-between">
                <h4>Qualification</h4>
                <button type="submit" class="btn btn-primary add">Add More</button>
            </div>
            <div class="AddQualification span--2-cols">

                <div class="Qualification-section">
                    <div class="Action-icon d-none">
                        <h5>Qualification</h5>
                        <button type="button" class="btn btn-light " onclick="dltSection(event)">Remove</button>
                    </div>
                    <div class="">
                        <label class="form-label">Degree Title</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="">
                        <label class="form-label">Institue</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="">
                        <label class="form-label">Dates</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="">
                        <label class="form-label">Percentage</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div> -->
            <div class="span--2-cols BtnSection">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>



@endsection