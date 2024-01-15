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
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Services
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
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid p-4" id="kt_post">
        <div class="services-section">
            <div class="card filter-wraper">
                <div class=" filter-section col-md-8">
                    <h3>Search By Services:</h3>
                    <div class="col-sm-4">
                        <select class="form-select" aria-label=" select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <div class="card-section">
                <div class="card col-sm-2">
                    <img src="{{asset('assets/images/test.png')}}" />
                    <div class="card-body">
                        <h5 class="card-title">Product name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card col-sm-2">
                    <img src="{{asset('assets/images/test.png')}}" />
                    <div class="card-body">
                        <h5 class="card-title">Product name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card col-sm-2">
                    <img src="{{asset('assets/images/test.png')}}" />
                    <div class="card-body">
                        <h5 class="card-title">Product name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card col-sm-2">
                    <img src="{{asset('assets/images/test.png')}}" />
                    <div class="card-body">
                        <h5 class="card-title">Product name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card col-sm-2">
                    <img src="{{asset('assets/images/test.png')}}" />
                    <div class="card-body">
                        <h5 class="card-title">Product name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card col-sm-2">
                    <img src="{{asset('assets/images/test.png')}}" />
                    <div class="card-body">
                        <h5 class="card-title">Product name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card col-sm-2">
                    <img src="{{asset('assets/images/test.png')}}" />
                    <div class="card-body">
                        <h5 class="card-title">Product name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card col-sm-2">
                    <img src="{{asset('assets/images/test.png')}}" />
                    <div class="card-body">
                        <h5 class="card-title">Product name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card col-sm-2">
                    <img src="{{asset('assets/images/test.png')}}" />
                    <div class="card-body">
                        <h5 class="card-title">Product name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card col-sm-2">
                    <img src="{{asset('assets/images/test.png')}}" />
                    <div class="card-body">
                        <h5 class="card-title">Product name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--end::Post-->
</div>
@endsection