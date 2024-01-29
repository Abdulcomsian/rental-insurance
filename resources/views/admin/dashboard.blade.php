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
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="100" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                            </svg>
                        </div>
                        <h4>23</h4>
                        <h3>TOTAL ACTIVE USERS</h3>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="100" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z" />
                            </svg>
                        </div>
                        <h4>23</h4>
                        <h3>SERVICE PROVIDERS</h3>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="100" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16">
                                <path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56" />
                                <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </div>
                        <h4>23</h4>
                        <h3>ADMIN ACCOUNTS</h3>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="100" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg>
                        </div>
                        <h4>23</h4>
                        <h3>SERVICE USERS</h3>
                    </div>

                </div>
            </div>
            <div class="row my-8">
                <div class="col-md-8 ">
                    <div class="card">
                        <div class="Request-Title">
                            <h3>APPOINTMENT REQUESTS</h3>
                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table table-admin-services ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Service Provider</th>
                                            <th>Service</th>
                                            <th>Price</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Nauman</td>
                                            <td>Arshad </td>
                                            <td>150$</td>
                                            <td>noman@gmail.com</td>
                                            <td>+923345417521</td>
                                            <td>service provider</td>
                                            <td>Active</td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Nauman</td>
                                            <td>Arshad </td>
                                            <td>150$</td>
                                            <td>noman@gmail.com</td>
                                            <td>+923345417521</td>
                                            <td>service provider</td>
                                            <td>Active</td>

                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Nauman</td>
                                            <td>Arshad </td>
                                            <td>150$</td>
                                            <td>noman@gmail.com</td>
                                            <td>+923345417521</td>
                                            <td>service provider</td>
                                            <td>Active</td>

                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Nauman</td>
                                            <td>Arshad </td>
                                            <td>150$</td>
                                            <td>noman@gmail.com</td>
                                            <td>+923345417521</td>
                                            <td>service provider</td>
                                            <td>Pending</td>

                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Nauman</td>
                                            <td>Arshad </td>
                                            <td>150$</td>
                                            <td>noman@gmail.com</td>
                                            <td>+923345417521</td>
                                            <td>service provider</td>
                                            <td>Pending</td>

                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Nauman</td>
                                            <td>Arshad </td>
                                            <td>150$</td>
                                            <td>noman@gmail.com</td>
                                            <td>+923345417521</td>
                                            <td>service provider</td>
                                            <td>Pending</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="Transaction-Title">
                            <h3>TRANSACTION</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>nouman</td>
                                        <td>150$</td>
                                        <td>20/1/2024</td>
                                        <th>Successfull</th>

                                    </tr>
                                    <tr>
                                        <td>nouman</td>
                                        <td>150$</td>
                                        <td>20/1/2024</td>
                                        <th>Successfull</th>


                                    </tr>
                                    <tr>
                                        <td>nouman</td>
                                        <td>150$</td>
                                        <td>20/1/2024</td>
                                        <th>Successfull</th>


                                    </tr>
                                    <tr>
                                        <td>nouman</td>
                                        <td>150$</td>
                                        <td>20/1/2024</td>
                                        <th>Successfull</th>


                                    </tr>
                                    <tr>
                                        <td>nouman</td>
                                        <td>150$</td>
                                        <td>20/1/2024</td>
                                        <th>Successfull</th>


                                    </tr>
                                    <tr>
                                        <td>nouman</td>
                                        <td>150$</td>
                                        <td>20/1/2024</td>
                                        <th>Successfull</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card">
                    <div class="Transaction-Title">
                        <h3>TRANSACTION</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>nouman</td>
                                    <td>150$</td>
                                    <td>20/1/2024</td>
                                    <th>Successfull</th>

                                </tr>
                                <tr>
                                    <td>nouman</td>
                                    <td>150$</td>
                                    <td>20/1/2024</td>
                                    <th>Successfull</th>


                                </tr>
                                <tr>
                                    <td>nouman</td>
                                    <td>150$</td>
                                    <td>20/1/2024</td>
                                    <th>Successfull</th>


                                </tr>
                                <tr>
                                    <td>nouman</td>
                                    <td>150$</td>
                                    <td>20/1/2024</td>
                                    <th>Successfull</th>


                                </tr>
                                <tr>
                                    <td>nouman</td>
                                    <td>150$</td>
                                    <td>20/1/2024</td>
                                    <th>Successfull</th>


                                </tr>
                                <tr>
                                    <td>nouman</td>
                                    <td>150$</td>
                                    <td>20/1/2024</td>
                                    <th>Successfull</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection