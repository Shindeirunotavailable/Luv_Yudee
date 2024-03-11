@extends('layout.master')
@section('content')

<div class="container ">
        <div class="row pt-13 ">
            <div class="col-12 col-lg-6 ">
                <div class="card cardBox">
                    <div class="card-body">
                        <div class="text-center">
                            <h2 class="mb-3 pt-3 font-weight-bold">Sign in</h2>
                            <label class="mb-5 ">Sign in with this account across the following sites.</label>

                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ $errors->first() }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                        </div>
                            <form action="{{ url('/register') }}" method="POST" class="needs-validation" id="registerForm" novalidate>
                                @csrf  
                                <div class="form-group">
                                    <label class="label-700 pl-5">Email</label>
                                    <input type="Email" name="modal_email" id="modal_email" class="form-control "
                                        placeholder="Enter Email">
                                        <div class="colorRed" id="ShowError"></div>
    
                                </div>
                                <div class="form-group">
                                    <label class="label-700 pl-5">Password</label>
                                    <div class="d-flex justify-content-end">
                                        <span toggle="#modal_password"
                                            class="fa fa-fw fa-eye field-icon toggle-password icon-style"></span>
                                    </div>
                                    <input type="password" name="modal_password" id="modal_password" class="form-control "
                                        placeholder="Enter Password" >
                                     <div class="colorRed" id="errorPassword"></div>
                                    <div class="invalid-feedback">
                                        <a> กรุณากรอก Password</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="label-700 pl-5">Confirm Password</label>
                                    <div class="d-flex justify-content-end">
                                        <span toggle="#modal_confirmPassword"
                                            class="fa fa-fw fa-eye field-icon toggle-password icon-style"></span>
                                    </div>
                                    <input type="password" name="modal_confirmPassword" id="modal_confirmPassword"
                                        class="form-control" placeholder="Enter Confirm Password" >
                                        <div class="colorRed" id="errorconfirm"></div>
                                    <div class="invalid-feedback">
                                        <a> กรุณากรอก Confirm Password</a>
                                    </div>
                                    <div class="colorRed" id="errorpassword"></div>
    
                                </div>
                                <div class="pt-20 pb-20 text-center">
                                    <button type="submit" class=" g-recaptcha afterButton rounded-pill btn-lg btn-block" 
                                    data-sitekey="{{config('services.recaptcha.site_key')}}" data-callback='onSubmitRegister' data-action='register'> 
                                         <i class="fa-regular fa-paper-plane "></i> Submit
                                    </button> 

                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
