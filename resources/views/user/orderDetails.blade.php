@extends('layouts.master' ,['page_title' => 'Dashboard'])
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Transaction Details
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                </h1>
            </div>
        </div>
    </div>
    <div class="p-4" id="kt_post">
        <section class="card">
            <div class="mb-6">
                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Approved Payments</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Pending Payments</button>
                    </div>
                </nav>
            </div>

            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="table-responsive">
                        <table class="table text-center ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Provider Name</th>
                                    <th>Services</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>nauman</td>
                                    <td>International Sign Language</td>
                                    <td>150$</td>
                                    <td>Approved</td>
                                    <td>10/01/24</td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>nauman</td>
                                    <td>Live &amp; Closed Captioning</td>
                                    <td>150$</td>
                                    <td>Approved</td>
                                    <td>10/01/24</td>

                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>nauman</td>
                                    <td>Mobility guides</td>
                                    <td>150$</td>
                                    <td>Approved</td>
                                    <td>10/01/24</td>

                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>nauman</td>
                                    <td>Personal assistants</td>
                                    <td>150$</td>
                                    <td>Approved</td>
                                    <td>10/01/24</td>

                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>nauman</td>
                                    <td>Tactile sign language</td>
                                    <td>150$</td>
                                    <td>Approved</td>
                                    <td>10/01/24</td>

                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>nauman</td>
                                    <td>Ugandan Sign language</td>
                                    <td>150$</td>
                                    <td>Approved</td>
                                    <td>10/01/24</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Provider Name</th>
                                    <th>Services</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Date</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>nauman</td>
                                    <td>International Sign Language</td>
                                    <td>150$</td>
                                    <td>held with plateform</td>
                                    <td>10/01/24</td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>nauman</td>
                                    <td>Live &amp; Closed Captioning</td>
                                    <td>150$</td>
                                    <td>held with plateform</td>
                                    <td>10/01/24</td>

                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>nauman</td>
                                    <td>Mobility guides</td>
                                    <td>150$</td>
                                    <td>held with plateform</td>
                                    <td>10/01/24</td>

                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>nauman</td>
                                    <td>Personal assistants</td>
                                    <td>150$</td>
                                    <td>held with plateform</td>
                                    <td>10/01/24</td>

                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>nauman</td>
                                    <td>Tactile sign language</td>
                                    <td>150$</td>
                                    <td>held with plateform</td>
                                    <td>10/01/24</td>

                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>nauman</td>
                                    <td>Ugandan Sign language</td>
                                    <td>150$</td>
                                    <td>held with plateform</td>
                                    <td>10/01/24</td>
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