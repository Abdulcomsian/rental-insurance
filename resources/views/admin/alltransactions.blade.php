@extends('layouts.master' ,['page_title' => 'Dashboard'])
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center justify-content-between w-100 me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Transctions
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                </h1>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addNewServiceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Withdraw</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center">
                        <h2>Balance:&nbsp;</h2>
                        <h2 style="color: #2f953f;">500$</h2>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit </button>
                </div>
            </div>
        </div>
    </div>

    <section class="card">
        <div class="d-flex align-items-center gap-10 my-10">
            <h3>Search By Date:</h3>
            <div class="d-flex align-items-center gap-10">
                <input type="date" class="form-control ">
                <h3>To</h3>
                <input type="date" class="form-control">

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <table class="table text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tansaction ID</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Role</th>
                    <th>Date</th>
                    <th>Status</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2541</td>
                    <td>nouman</td>
                    <td>150$</td>
                    <th>Service Provider</th>
                    <td>20/1/2024</td>
                    <th>Successfull</th>

                </tr>
                <tr>
                    <td>2</td>
                    <td>5498</td>
                    <td>nouman</td>
                    <td>150$</td>
                    <th>User</th>
                    <td>20/1/2024</td>
                    <th>Successfull</th>


                </tr>
                <tr>
                    <td>3</td>
                    <td>7845</td>
                    <td>nouman</td>
                    <td>150$</td>
                    <th>Service Provider</th>
                    <td>20/1/2024</td>
                    <th>Successfull</th>


                </tr>
                <tr>
                    <td>4</td>
                    <td>9624</td>
                    <td>nouman</td>
                    <td>150$</td>
                    <th>User</th>
                    <td>20/1/2024</td>
                    <th>Successfull</th>


                </tr>
                <tr>
                    <td>5</td>
                    <td>1144</td>
                    <td>nouman</td>
                    <td>150$</td>
                    <th>Service Provider</th>
                    <td>20/1/2024</td>
                    <th>Successfull</th>


                </tr>
                <tr>
                    <td>6</td>
                    <td>5544</td>
                    <td>nouman</td>
                    <td>150$</td>
                    <th>User</th>
                    <td>20/1/2024</td>
                    <th>Successfull</th>

                </tr>
            </tbody>
        </table>
    </section>
</div>

@endsection