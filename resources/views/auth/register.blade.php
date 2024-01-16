@extends('layouts.master_loggedout' )

@section('content')
<div class="d-flex flex-column col-sm-7 positon-xl-relative">
    <img src="{{asset('assets/images/loginPage.jpg')}}" style="width: 100%;height:100%;object-fit: cover;" />
</div>
<!--end::Aside-->
<!--begin::Body-->
<div class="d-flex flex-column col-sm-5 " style="position: relative;">
    <!--begin::Content-->
    <div style="background-color: rgb(55, 190, 167)!important;text-align: center;padding: 42px 24px;margin-top: 58px;">
        <img src="{{asset('assets/images/logo.png')}}" height="150" />
    </div>
    <div class="" style="    position: absolute;
    top: 60%;
    left: 0;
    transform: translate(0, -50%);
    width: 100%;">
        <!--begin::Wrapper-->
        <!--begin::Form-->
        <!--begin::Wrapper-->
        <div class="w-lg-500px p-10" style="margin: auto;">
            <!--begin::Page-->
            <!--begin::Form-->

            <!--end::Login options-->


            <form method="POST" action="{{ route('register') }}">
                @csrf


                <!--begin::Input group--->
                <div class="fv-row mb-8 fv-plugins-icon-container">
                    <!--begin::Name-->
                    <input type="text" placeholder="Name" name="name" value="{{ old('name') }}" autocomplete="off" class="form-control bg-transparent form-control @error('name') is-invalid @enderror">
                    <!--end::Name-->

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">

                    </div>
                </div>

                <!--begin::Input group--->
                <div class="fv-row mb-8 fv-plugins-icon-container">
                    <!--begin::Email-->
                    <input type="text" placeholder="Email" name="email" value="{{ old('email') }}" autocomplete="off" class="form-control bg-transparent @error('email') is-invalid @enderror">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <!--end::Email-->
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>

                <!--begin::Input group-->
                <div class="fv-row mb-8 fv-plugins-icon-container" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="mb-1">
                        <!--begin::Input wrapper-->
                        <div class="position-relative mb-3">
                            <input class="form-control bg-transparent @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" autocomplete="off">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                <i class="bi bi-eye-slash fs-2"></i>
                                <i class="bi bi-eye fs-2 d-none"></i>
                            </span>
                        </div>
                        <!--end::Input wrapper-->

                        <!--begin::Meter-->
                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                        </div>
                        <!--end::Meter-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Hint-->
                    <div class="text-muted">
                        Use 8 or more characters with a mix of letters, numbers &amp; symbols.
                    </div>
                    <!--end::Hint-->
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
                <!--end::Input group--->

                <!--end::Input group--->
                <div class="fv-row mb-8 fv-plugins-icon-container">
                    <!--begin::Repeat Password-->
                    <input placeholder="Repeat Password" id="password-confirm" name="password_confirmation" type="password" autocomplete="off" class="form-control bg-transparent">
                    <!--end::Repeat Password-->
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
                <!--end::Input group--->

                <!--begin::Input group--->
                <div class="fv-row mb-10 fv-plugins-icon-container">
                    <div class="form-check form-check-custom form-check-solid form-check-inline">
                        <input class="form-check-input" type="checkbox" name="toc" value="1">

                        <label class="form-check-label fw-semibold text-gray-700 fs-6">
                            I Agree &amp;

                            <a href="#" class="ms-1 link-primary" style="color:rgb(55, 190, 167)!important">Terms and conditions</a>.
                        </label>
                    </div>
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
                <!--end::Input group--->

                <!--begin::Submit button-->
                <div class="d-grid mb-10">
                    <button type="submit" id="kt_sign_up_submit" class="btn btn-primary" style="background-color:rgb(55, 190, 167)!important">
                        <!--begin::Indicator label-->
                        <span class="indicator-label">
                            Sign Up
                        </span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>

                </div>
               
                <!--end::Submit button-->

                <!--begin::Sign up-->
                <div class="text-gray-500 text-center fw-semibold fs-6">
                    Already have an Account?

                    <a href="{{route('login')}}" class="link-primary fw-semibold" style="color:rgb(55, 190, 167)!important">
                        Sign in
                    </a>
                </div>
                <!--end::Sign up-->
            </form>
            <!--end::Form-->
            <!--end::Page-->
        </div>
        <!--end::Wrapper-->
        <!--end::Form-->

        <!--begin::Footer-->
        <!-- <div class="d-flex flex-center flex-wrap px-5">
                    <div class="d-flex fw-semibold text-primary fs-base">
                        <a href="#" class="px-5" target="_blank">Terms</a>

                        <a href="#" class="px-5" target="_blank">Plans</a>

                        <a href="#" class="px-5" target="_blank">Contact Us</a>
                    </div>
                </div> -->
        <!--end::Footer-->
        <!--end::Wrapper-->
    </div>
    <!--end::Content-->
    <!--begin::Footer-->
    <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
        <!--begin::Links-->
        <!-- <div class="d-flex flex-center fw-bold fs-6">
                <a href="https://keenthemes.com/faqs" class="text-muted text-hover-primary px-2" target="_blank">About</a>
                <a href="https://keenthemes.com/support" class="text-muted text-hover-primary px-2" target="_blank">Support</a>
                <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2" target="_blank">Purchase</a>
            </div> -->
        <!--end::Links-->
    </div>
    <!--end::Footer-->
</div>
<!--end::Body-->
@endsection