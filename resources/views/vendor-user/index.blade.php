@extends('layouts.master' ,['page_title' => 'Dashboard'])
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center justify-content-between w-100 me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Dashboard
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                </h1>
                <a href="#" class="btn btn-primary hover-elevate-up" data-bs-toggle="modal" data-bs-target="#addNewProductsModal">Add Product</a>

                <!--end::Title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <div class="modal fade" id="addNewProductsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Products</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Description</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Price</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Service</label>
                            <select class="form-control">
                                <option>services</option>
                                <option>services</option>
                                <option>services</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Upload Picture</label>
                            <input type="file" class="form-control" id="exampleFormControlInput1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--begin::Post-->
    <div class="container">
        <div class="card-section">
            <div class="card col-sm-3">
                <div class="btn-group">
                    <div class="menuButton">
                        <button type="button" class="btn btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('assets/images/dotmenu.svg')}}" />
                        </button>
                    </div>
                    <div class="dropdown-menu">
                        <button class="dropdown-item" type="button">Edit</button>
                        <button class="dropdown-item" type="button">Delete</button>
                    </div>
                </div>
                <img src="{{asset('assets/images/test.svg')}}" />
                <div class="card-body">
                    <h5 class="card-title">Product name</h5>
                    <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card col-sm-3">
                <div class="btn-group">
                    <div class="menuButton">
                        <button type="button" class="btn btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('assets/images/dotmenu.svg')}}" />
                        </button>
                    </div>
                    <div class="dropdown-menu">
                        <button class="dropdown-item" type="button">Edit</button>
                        <button class="dropdown-item" type="button">Delete</button>
                    </div>
                </div>
                <img src="{{asset('assets/images/test.svg')}}" />
                <div class="card-body">
                    <h5 class="card-title">Product name</h5>
                    <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card col-sm-3">
                <div class="btn-group">
                    <div class="menuButton">
                        <button type="button" class="btn btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('assets/images/dotmenu.svg')}}" />
                        </button>
                    </div>
                    <div class="dropdown-menu">
                        <button class="dropdown-item" type="button">Edit</button>
                        <button class="dropdown-item" type="button">Delete</button>
                    </div>
                </div>
                <img src="{{asset('assets/images/test.svg')}}" />
                <div class="card-body">
                    <h5 class="card-title">Product name</h5>
                    <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

        </div>
    </div>
    <!--end::Row-->
</div>
<!--end::Container-->
</div>
<!--end::Post-->
</div>
@endsection