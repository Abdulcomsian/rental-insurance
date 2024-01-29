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
                <a href="#" class="btn btn-primary hover-elevate-up" data-bs-toggle="modal" data-bs-target="#addNewProductsModal">Add Services</a>

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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Services</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action  = "{{route('addService')}}" method = "post" enctype = "multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                            <input type="text" name  = "title" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Description</label>
                            <textarea type="text"name  = "description" rows="4" class="form-control ckeditor" id="exampleFormControlInput1"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Price</label>
                            <input type="number" name = "price" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1"  class="form-label">Service</label>
                            <select class="form-select" name = "service_category_id">
                                @isset($serviceCategories)
                                @foreach($serviceCategories as $index=>$serviceCategory)
                                <option value = "{{$serviceCategory->id}}" {{$index == 0 ? 'selected' : ''}}>{{$serviceCategory->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Upload Picture</label>
                            <input type="file" class="form-control" name  = "upload_media" id="exampleFormControlInput1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Services</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--begin::Post-->
    <div class="services-section">
        <div class="card filter-wraper">
            <form>
                <div class=" filter-section col-md-12">
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
            </form>
        </div>
        <div class="card-section">
            @isset($services)
            @foreach($services as  $index=>$service)
            <div class="card col-sm-3 col-md-4 col-lg-3">
                <div class="btn-group">
                    <div class="menuButton">
                        <button type="button" class="btn btn-light" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('assets/images/dotmenu.svg')}}" />
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <a href="#" class = "dropdown-item Delete-Service-Category-Button" data-bs-toggle="modal" data-bs-target="#deleteModal" id = "{{$service->id}}">Edit</a>
                            <button class="dropdown-item" type="button">Delete</button>
                        </div>
                    </div>
                </div>
                <img src="{{asset('assets/images/test.png')}}" />
                <div class="card-body">
                    <h5 class="card-title">{{$service->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$service->price}}$</h6>
                    <p class="card-text">{!! $service->description !!}</p>
                </div>
            </div>
            @endforeach
            @endisset
        {{--
            <div class="card col-sm-3 col-md-4 col-lg-3">
                <div class="btn-group">
                    <div class="menuButton">
                        <button type="button" class="btn btn-light" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('assets/images/dotmenu.svg')}}" />
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <button class="dropdown-item" type="button">Edit</button>
                            <button class="dropdown-item" type="button">Delete</button>
                        </div>
                    </div>
                </div>
                <img src="{{asset('assets/images/test.png')}}" />
                <div class="card-body">
                    <h5 class="card-title">Product name</h5>
                    <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card col-sm-3 col-md-4 col-lg-3">
                <div class="btn-group">
                    <div class="menuButton">
                        <button type="button" class="btn btn-light" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('assets/images/dotmenu.svg')}}" />
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <button class="dropdown-item" type="button">Edit</button>
                            <button class="dropdown-item" type="button">Delete</button>
                        </div>
                    </div>
                </div>
                <img src="{{asset('assets/images/test.png')}}" />
                <div class="card-body">
                    <h5 class="card-title">Product name</h5>
                    <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card col-sm-3 col-md-4 col-lg-3">
                <div class="btn-group">
                    <div class="menuButton">
                        <button type="button" class="btn btn-light" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('assets/images/dotmenu.svg')}}" />
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <button class="dropdown-item" type="button">Edit</button>
                            <button class="dropdown-item" type="button">Delete</button>
                        </div>
                    </div>
                </div>
                <img src="{{asset('assets/images/test.png')}}" />
                <div class="card-body">
                    <h5 class="card-title">Product name</h5>
                    <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card col-sm-3 col-md-4 col-lg-3">
                <div class="btn-group">
                    <div class="menuButton">
                        <button type="button" class="btn btn-light" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('assets/images/dotmenu.svg')}}" />
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <button class="dropdown-item" type="button">Edit</button>
                            <button class="dropdown-item" type="button">Delete</button>
                        </div>
                    </div>
                </div>
                <img src="{{asset('assets/images/test.png')}}" />
                <div class="card-body">
                    <h5 class="card-title">Product name</h5>
                    <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card col-sm-3 col-md-4 col-lg-3">
                <div class="btn-group">
                    <div class="menuButton">
                        <button type="button" class="btn btn-light" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('assets/images/dotmenu.svg')}}" />
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <button class="dropdown-item" type="button">Edit</button>
                            <button class="dropdown-item" type="button">Delete</button>
                        </div>
                    </div>
                </div>
                <img src="{{asset('assets/images/test.png')}}" />
                <div class="card-body">
                    <h5 class="card-title">Product name</h5>
                    <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card col-sm-3 col-md-4 col-lg-3">
                <div class="btn-group">
                    <div class="menuButton">
                        <button type="button" class="btn btn-light" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('assets/images/dotmenu.svg')}}" />
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <button class="dropdown-item" type="button">Edit</button>
                            <button class="dropdown-item" type="button">Delete</button>
                        </div>
                    </div>
                </div>
                <img src="{{asset('assets/images/test.png')}}" />
                <div class="card-body">
                    <h5 class="card-title">Product name</h5>
                    <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card col-sm-3 col-md-4 col-lg-3">
                <div class="btn-group">
                    <div class="menuButton">
                        <button type="button" class="btn btn-light" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('assets/images/dotmenu.svg')}}" />
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <button class="dropdown-item" type="button">Edit</button>
                            <button class="dropdown-item" type="button">Delete</button>
                        </div>
                    </div>
                </div>
                <img src="{{asset('assets/images/test.png')}}" />
                <div class="card-body">
                    <h5 class="card-title">Product name</h5>
                    <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card col-sm-3 col-md-4 col-lg-3">
                <div class="btn-group">
                    <div class="menuButton">
                        <button type="button" class="btn btn-light" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('assets/images/dotmenu.svg')}}" />
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <button class="dropdown-item" type="button">Edit</button>
                            <button class="dropdown-item" type="button">Delete</button>
                        </div>
                    </div>
                </div>
                <img src="{{asset('assets/images/test.png')}}" />
                <div class="card-body">
                    <h5 class="card-title">Product name</h5>
                    <h6 class="card-subtitle mb-2 text-muted">500$</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
                  --}}
        </div>
    </div>
    <!--end::Row-->
</div>
<!--end::Container-->
</div>
<!--end::Post-->
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action = "" id = "delete-service-category-form" method = "post">
             @csrf
             @method('DELETE')
            <div class="modal-body">
                Are you sure to delete ? 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
            </form>
        </div>
    </div>
</div>
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
@endsection
@endsection