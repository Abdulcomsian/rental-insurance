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
        <section class="w-100">
            <div class="card mb-6">
                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">All Services</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Booked Services</button>
                    </div>
                </nav>
            </div>

            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="card">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Provider Name</th>
                                    <th>Services</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>nauman</td>
                                    <td>International Sign Language</td>
                                    <td>150$</td>
                                    <td>10/01/24</td>
                                    <td>
                                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#refund">Refund</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>nauman</td>
                                    <td>Live &amp; Closed Captioning</td>
                                    <td>150$</td>
                                    <td>10/01/24</td>
                                    <td>
                                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#refund">Refund</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>nauman</td>
                                    <td>Mobility guides</td>
                                    <td>150$</td>
                                    <td>10/01/24</td>
                                    <td>
                                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#refund">Refund</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>nauman</td>
                                    <td>Personal assistants</td>
                                    <td>150$</td>
                                    <td>10/01/24</td>
                                    <td>
                                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#refund">Refund</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>nauman</td>
                                    <td>Tactile sign language</td>
                                    <td>150$</td>
                                    <td>10/01/24</td>
                                    <td>
                                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#refund">Refund</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>nauman</td>
                                    <td>Ugandan Sign language</td>
                                    <td>150$</td>
                                    <td>10/01/24</td>
                                    <td>
                                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#refund">Refund</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
    </div>
    <div class="modal fade" id="refund" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Refund</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Reason</label>
                        <textarea type="text" rows="4" class="form-control" id="exampleFormControlInput1"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="services-section">
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
    </div> -->
</div>
<!--end::Post-->
</div>
@endsection