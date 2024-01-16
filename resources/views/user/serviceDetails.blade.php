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
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Service Details
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
                    <div class="text-center mb-4">
                        <img src="{{asset('assets/images/test.png')}}" />
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">About the service</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h6 class="card-title">Responsibility</h6>
                        <ul>
                            <li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
                            <li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
                            <li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
                            <li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
                            <li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
                            <li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <button type="submit" class="btn btn-primary">Apply service</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Post-->
</div>
@endsection