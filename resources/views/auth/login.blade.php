@extends('layouts.master_loggedout' ,['page_title' => 'Sign in'])
@section('content')
<div class="d-flex flex-column col-sm-7 positon-xl-relative ">
    <!--begin::Wrapper-->
    <!-- <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y"> -->
    <!--begin::Content-->
    <img src="{{asset('assets/images/loginPage.jpg')}}" style="width: 100%;height:100%;object-fit: cover;" />
    <!-- <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">

        </div> -->
    <!--end::Content-->
    <!--begin::Illustration-->
    <!-- <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(assets/media/illustrations/checkout.png)"></div> -->
    <!--end::Illustration-->
    <!-- </div> -->
    <!--end::Wrapper-->
</div>
<!--end::Aside-->
<!--begin::Body-->
<div class="d-flex flex-column col-sm-5 " style="position: relative;">
    <!--begin::Content-->
    <div style="background-color: rgb(55, 190, 167)!important;text-align: center;padding: 42px 24px;margin-top: 58px;">
        <img src="{{asset('assets/images/logo.png')}}" height="150" />
    </div>
    <div class="" style="width: 100%; ">
        <!--begin::Wrapper-->
        <div class="w-lg-500px p-10 " style="margin: auto;">
            <!--begin::Form-->
            <form method="POST" action="{{ route('login') }}" class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="#">
                @csrf

                <!--begin::Heading-->
                <div class="text-center mb-10">
                    <!--begin::Title-->
                    <!-- <h1 class="text-dark mb-10">Login</h1> -->
                    <!--end::Title-->
                    <!--begin::Link-->
                    <!-- <div class="text-gray-400 fw-bold fs-4">New Here?
                        <a href="authentication/flows/aside/sign-up.html" class="link-primary fw-bolder">Create an Account</a></div> -->
                    <!--end::Link-->
                </div>
                <!--begin::Heading-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input required class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror" required type="text" name="email" autocomplete="off" />
                    <!--end::Input-->
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    @if ($message = Session::get('error'))
                    <span class="invalid-feedback d-flex" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @endif
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack mb-2">
                        <!--begin::Label-->
                        <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                        <!--end::Label-->
                        <!--begin::Link-->
                        <!-- <a href="authentication/flows/aside/password-reset.html" class="link-primary fs-6 fw-bolder">Forgot Password ?</a> -->
                        <!--end::Link-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Input-->
                    <input required class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" type="password" required name="password" autocomplete="off" />
                    <!--end::Input-->
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center">
                    <!--begin::Submit button-->
                    <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5" style="background-color:rgb(55, 190, 167)!important">
                        <span class="indicator-label">Continue</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Submit button-->
                    <!--begin::Separator-->
                    <!-- <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div> -->
                    <!--end::Separator-->
                    <!--begin::Google link-->

                    <!--end::Google link-->
                </div>
                <div class="text-gray-500 text-center fw-semibold fs-6">
                    Don't have an Account?

                    <a href="{{route('register')}}" class="link-primary fw-semibold" style="color:rgb(55, 190, 167)!important">
                        Sign Up
                    </a>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Content-->
    <!--begin::Footer-->
    <!-- <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0"> -->
    <!--begin::Links-->
    <!-- <div class="d-flex flex-center fw-bold fs-6">
                <a href="https://keenthemes.com/faqs" class="text-muted text-hover-primary px-2" target="_blank">About</a>
                <a href="https://keenthemes.com/support" class="text-muted text-hover-primary px-2" target="_blank">Support</a>
                <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2" target="_blank">Purchase</a>
            </div> -->
    <!--end::Links-->
    <!-- </div> -->
    <!--end::Footer-->
</div>
<!--end::Body-->
@endsection