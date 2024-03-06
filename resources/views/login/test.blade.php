@extends('layout.master')
@section('content')



    <div class="container mt-5">
        <div class="col-md-6 col-md-offset-3">
    
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul class="mb-0 mt-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
            <div class="card">
                <div class="card-header text-center">
                    Laracoding.com - Google reCaptcha V3 Example
                </div>
    
                <div class="card-body">
                    <div class="container py-4">
                        <form action="{{ url('/register') }}"  method="POST" class="needs-validation" id="registerForm">
                            @csrf
    
                            <!-- Name input -->
                            <!-- Email address input -->
                            <div class="mb-3">
                                <label class="form-label" for="email">Email Address</label>
                                <input class="form-control" id="modal_email" type="email" name="modal_email"
                                       placeholder="Email Address" required>
                                <div class="invalid-feedback">
                                    <a> กรุณากรอก modal_email</a>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email">Pass1</label>
                                <input class="form-control" id="modal_password" type="email" name="modal_password"
                                       placeholder="modal_password"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email">Pass2</label>
                                <input class="form-control" id="modal_confirmPassword" type="email" name="modal_confirmPassword"
                                       placeholder="modal_confirmPassword"/>
                            </div>
    
                            <!-- Form submit button, including reCAPTCHA V3 attributes -->
                            <div class="d-grid">
                                <button type="submit" class=" g-recaptcha afterButton rounded-pill btn-lg btn-block" id="loginSubmit" 
                                data-sitekey="{{config('services.recaptcha.site_key')}}" data-callback='onSubmitRegister' data-action='register'> 
                                     <i class="fa-regular fa-paper-plane "></i> Submit
                                </button> 
                            </div>
                        </form>
                    </div>
                </div>
    
                <div class="card-footer text-center">
                    Made with ❤ by laracoding.com
                </div>
            </div>
        </div>
    </div>

@endsection
