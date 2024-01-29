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
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Payment
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
    <div class="row post d-flex flex-column-fluid p-4" id="kt_post">
        <div class="Left-side col-sm-6">
            <h1>Service details</h1>
            <p>Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <h6 class="card-title">Responsibility</h6>
            <ul>
                <li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
                <li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
                <li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
                <li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
                <li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
                <li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
            </ul>
            <div class="d-flex justify-content-center">
                <div class="card col-12 col-sm-8">
                    <h5 class="transactionTitles text-center">
                        service Price
                    </h5>
                    <div class="transactionDetails">
                        <div class="price-section">
                            <h6>service</h6>
                            <h6>50$</h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="Right-side col-sm-6">
            <div class="main-wraper">
                <div class="pay-section">
                    <div class="title text-center">
                        <h1>Pay with card</h1>
                    </div>
                </div>
                <form class="pay-page">
                    <div class="InputSection">
                        <div class="mb-2">
                            <label class="form-label">Email</label>
                            <input class="form-control" placeholder="Eamil"></input>
                        </div>
                        <div class="mb-2">
                            <div class=" Describe-section">
                                <label class="form-label">Card Information</label>
                                <input class="form-control"></input>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class=" Describe-section">
                                <div class="d-flex align-items-center">
                                    <input class="form-control"></input>
                                    <input class="form-control"></input>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class=" Describe-section">
                                <label class="form-label">Cardholder name</label>
                                <input class="form-control"></input>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class=" Describe-section">
                                <label class="form-label">Country or region</label>
                            </div>

                            <select class="form-control mb-4">
                                <option>services</option>
                                <option>services</option>
                                <option>services</option>
                            </select>
                        </div>
                        <div class="mb-2 Describe-section">
                            <label class="form-label">Start Date</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="mb-2 Describe-section">
                            <label class="form-label">End Date</label>
                            <input type="date" class="form-control">
                        </div>
                        <!-- <div class="">
                            <div class=" card cardSection">
                                <input class="form-check-input" type="checkbox" value="">
                                <div class=" Describe-section ">
                                    <h2>Securely save my information for 1-click checkout</h2>
                                    <p>Pay faster on Stripe Atlas and everywhere Link is accepted.</p>
                                </div>
                            </div>
                        </div> -->
                        <div class="">
                            <div class=" Describe-section ">
                                <p>To pay your company formation fee, make sure you’re not using an anonymous IP address or a VPN.</p>
                            </div>
                        </div>
                        <div class="">
                            <button type="button" class="btn btn-primary w-100">
                                Pay
                            </button>
                        </div>
                        <div class="">
                            <div class=" Describe-section ">
                                <p>By confirming your payment, you allow Stripe Atlas to charge you for this payment and future payments in accordance with their terms.</p>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <!--end::Post-->
    </div>
    @endsection