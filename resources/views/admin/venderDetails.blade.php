@extends('layouts.master' ,['page_title' => 'Dashboard'])
@push('page-css')
<link rel="stylesheet" href="{{asset('assets/css/adminpage_css.css')}}">
@endpush
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Vender Details
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                </h1>
            </div>
        </div>
    </div>
    <div class="card vender-details">
        <div class="NameSection">
            <div class="image-section">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
            </div>
            <h1 class="Name">Rana Nouman</h1>
            <h5 class="Role">ServiceProvider</h5>
        </div>
        <div class="Details-section">
            <div class="description">
                <h5>Gender</h5>
                <h6>Male</h6>
                <h5>Date of Birth</h5>
                <h6>12/03/2000</h6>

                <h5>Telephone</h5>
                <h6>0752567534</h6>
                <h5>Email</h5>
                <h6> pssp10000@gmail.com</h6>
                <h5>Status</h5>
                <h6>Active</h6>
                <h5>Service Number</h5>
                <h6>00023P</h6>
                <h5>Location</h5>
                <h6>Kampala</h6>
                <h5>Country</h5>
                <h6>Uganda</h6>
            </div>
            <div class="service-section">
                <h2>Verification Documents</h2>
                <ul>
                    <li>
                        National ID
                    </li>
                    <li>
                        National ID
                    </li>
                    <li>
                        National ID
                    </li>
                </ul>
            </div>
            <div class="service-section">
                <h2>service offered</h2>
                <ul>
                    <li>
                        Live & Closed Captioning
                    </li>
                    <li>
                        Live & Closed Captioning
                    </li>
                    <li>
                        Live & Closed Captioning
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection