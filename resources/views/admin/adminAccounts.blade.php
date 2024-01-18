@extends('layouts.master' ,['page_title' => 'Dashboard'])
@push('page-css')
<link rel="stylesheet" href="{{asset('assets/css/adminpage_css.css')}}">
@endpush
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Admin Accounts
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                </h1>
            </div>
        </div>
    </div>
    <section class="card">
        <table class="table table-admin-services">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
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
                    <td>Male</td>
                    <td>noman@gmail.com</td>
                    <td>+923345417521</td>
                    <td>Admin</td>
                    <td>Active</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nauman</td>
                    <td>Arshad </td>
                    <td>Male</td>
                    <td>noman@gmail.com</td>
                    <td>+923345417521</td>
                    <td>Admin</td>
                    <td>Active</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Nauman</td>
                    <td>Arshad </td>
                    <td>Male</td>
                    <td>noman@gmail.com</td>
                    <td>+923345417521</td>
                    <td>Admin</td>
                    <td>Active</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Nauman</td>
                    <td>Arshad </td>
                    <td>Male</td>
                    <td>noman@gmail.com</td>
                    <td>+923345417521</td>
                    <td>Admin</td>
                    <td>Active</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Nauman</td>
                    <td>Arshad </td>
                    <td>Male</td>
                    <td>noman@gmail.com</td>
                    <td>+923345417521</td>
                    <td>Admin</td>
                    <td>Active</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Nauman</td>
                    <td>Arshad </td>
                    <td>Male</td>
                    <td>noman@gmail.com</td>
                    <td>+923345417521</td>
                    <td>Admin</td>
                    <td>Active</td>
                </tr>
            </tbody>
        </table>
    </section>


</div>
@endsection