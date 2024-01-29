@extends('layouts.master' ,['page_title' => 'Dashboard'])
@push('page-css')
<link rel="stylesheet" href="{{asset('assets/css/adminpage_css.css')}}">
@endpush
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div id="kt_content_container" class="">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                    <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Dashboard
                        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    </h1>
                </div>
            </div>
        </div>
        <div class="dashboard">
            <div class="row justify-content-center">
                <div class="mb-2  col-sm-5 col-lg-3">
                    <div class="card text-center">
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="100" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                            </svg>
                        </div>
                        <h4>23</h4>
                        <h3>TOTAL ACTIVE SERVICES</h3>
                    </div>

                </div>
                <div class="mb-2  col-sm-5 col-lg-3">
                    <div class="card text-center">
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="100" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                            </svg>
                        </div>
                        <h4>23</h4>
                        <h3>COMPLETE SERVICES</h3>
                    </div>

                </div>
                <div class="mb-2  col-sm-5 col-lg-3">
                    <div class="card text-center">
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="100" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z" />
                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z" />
                                <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5" />
                            </svg>
                        </div>
                        <h4>23</h4>
                        <h3>PENDING SERVICES</h3>
                    </div>

                </div>
                <div class="mb-2  col-sm-5 col-lg-3">
                    <div class="card text-center">
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="100" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                                <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5" />
                                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z" />
                            </svg>
                        </div>
                        <h4>23</h4>
                        <h3>BOOKED SERVICES</h3>
                    </div>

                </div>
            </div>
            <div class="row my-8">
                <div class="col-md-6 ">
                    <div class="card">
                        <div class="Request-Title">
                            <h3>ACTIVE SERVICES</h3>
                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table table-admin-services ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Service</th>
                                            <th>Price</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Nauman</td>
                                            <td>Arshad </td>
                                            <td>150$</td>
                                            <td>+923345417521</td>
                                            <td>Active</td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Nauman</td>
                                            <td>Arshad </td>
                                            <td>150$</td>
                                            <td>+923345417521</td>
                                            <td>Active</td>

                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Nauman</td>
                                            <td>Arshad </td>
                                            <td>150$</td>
                                            <td>+923345417521</td>
                                            <td>Active</td>

                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Nauman</td>
                                            <td>Arshad </td>
                                            <td>150$</td>
                                            <td>+923345417521</td>
                                            <td>Pending</td>

                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Nauman</td>
                                            <td>Arshad </td>
                                            <td>150$</td>
                                            <td>+923345417521</td>
                                            <td>Pending</td>

                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Nauman</td>
                                            <td>Arshad </td>
                                            <td>150$</td>
                                            <td>+923345417521</td>
                                            <td>Pending</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="Transaction-Title">
                            <h3>COMPLETE SERVICES</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-admin-services ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Service</th>
                                        <th>Price</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Nauman</td>
                                        <td>Arshad </td>
                                        <td>150$</td>
                                        <td>+923345417521</td>
                                        <td>Active</td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Nauman</td>
                                        <td>Arshad </td>
                                        <td>150$</td>
                                        <td>+923345417521</td>
                                        <td>Active</td>

                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Nauman</td>
                                        <td>Arshad </td>
                                        <td>150$</td>
                                        <td>+923345417521</td>
                                        <td>Active</td>

                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Nauman</td>
                                        <td>Arshad </td>
                                        <td>150$</td>
                                        <td>+923345417521</td>
                                        <td>Pending</td>

                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Nauman</td>
                                        <td>Arshad </td>
                                        <td>150$</td>
                                        <td>+923345417521</td>
                                        <td>Pending</td>

                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Nauman</td>
                                        <td>Arshad </td>
                                        <td>150$</td>
                                        <td>+923345417521</td>
                                        <td>Pending</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-8">
                <div class="col-md-6 ">
                    <div class="card">
                        <div class="Request-Title">
                            <h3>PENDING SERVICES</h3>
                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table table-admin-services ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Service</th>
                                            <th>Price</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Nauman</td>
                                            <td>Arshad </td>
                                            <td>150$</td>
                                            <td>+923345417521</td>
                                            <td>Active</td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Nauman</td>
                                            <td>Arshad </td>
                                            <td>150$</td>
                                            <td>+923345417521</td>
                                            <td>Active</td>

                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Nauman</td>
                                            <td>Arshad </td>
                                            <td>150$</td>
                                            <td>+923345417521</td>
                                            <td>Active</td>

                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Nauman</td>
                                            <td>Arshad </td>
                                            <td>150$</td>
                                            <td>+923345417521</td>
                                            <td>Pending</td>

                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Nauman</td>
                                            <td>Arshad </td>
                                            <td>150$</td>
                                            <td>+923345417521</td>
                                            <td>Pending</td>

                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Nauman</td>
                                            <td>Arshad </td>
                                            <td>150$</td>
                                            <td>+923345417521</td>
                                            <td>Pending</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="Transaction-Title">
                            <h3>BOOKED SERVICES</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-admin-services ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Service</th>
                                        <th>Price</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Nauman</td>
                                        <td>Arshad </td>
                                        <td>150$</td>
                                        <td>+923345417521</td>
                                        <td>Active</td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Nauman</td>
                                        <td>Arshad </td>
                                        <td>150$</td>
                                        <td>+923345417521</td>
                                        <td>Active</td>

                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Nauman</td>
                                        <td>Arshad </td>
                                        <td>150$</td>
                                        <td>+923345417521</td>
                                        <td>Active</td>

                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Nauman</td>
                                        <td>Arshad </td>
                                        <td>150$</td>
                                        <td>+923345417521</td>
                                        <td>Pending</td>

                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Nauman</td>
                                        <td>Arshad </td>
                                        <td>150$</td>
                                        <td>+923345417521</td>
                                        <td>Pending</td>

                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Nauman</td>
                                        <td>Arshad </td>
                                        <td>150$</td>
                                        <td>+923345417521</td>
                                        <td>Pending</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection