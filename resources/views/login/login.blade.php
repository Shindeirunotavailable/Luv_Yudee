@extends('layout.master')
@section('content')

{{-- 
@foreach ($count as $item)
    {{ $item }}
@endforeach --}}

    <div class="container ">
        <div class="imagbackground ">
            <div class="row pt-13 ">
                <div class="col-12 col-lg-6 ">
                    <div class="card cardBox">
                        <div class="card-body">
                            <div class="text-center">
                                {{-- <img src="https://img5.pic.in.th/file/secure-sv1/YuuDee2.png" class="logo-sm logo-md"> --}}
                                <h2 class="mb-3 pt-3 font-weight-bold">Sign in</h2>
                                <label class="mb-5 ">Sign in with this account across the following sites.</label>
                            </div>
                            {{-- <form action="{{ url('/login') }}"  method="POST" class="needs-validation" novalidate> --}}
                            <form class="needs-validation">
                                @csrf
                                <div class="form-group">
                                    <label class="label-700">Email</label>
                                        <input type="email" name="email" id="email" class="form-control " placeholder="Enter Email" required>
                                </div>
                                <div class="form-group">
                                    <label class="label-700">Password</label>
                                        <input type="password" name="password" id="password" class="form-control " placeholder="Enter Password">
                                        <div class="invalid-feedback">
                                            <a> กรุณากรอก Password</a>
                                        </div>
                                </div>
                                <!-- ลืมรหัสผ่าน และ Checkbox -->
                                <div class="text-right">
                                    <button type="button" class="btn Forgetpassword text-left" id="lost-password">Lost your password?</button>
                                </div>

                                <div class="pt-10 pb-10">
                                   <button type="submit" class="afterButton rounded-pill btn-lg btn-block"
                                    id="submitModalBtn"> <i class="fa-regular fa-paper-plane "></i> Submit
                                   </button> 
                                </div>

                                @if ($errors->any())
                                    <h6 class="colorRed">{{$errors->first()}}</h6>
                                @endif
                                <div id="result"> </div>

                            </form>
                            <div class="text-center mt-3">
                                <a href="javascript:void(0)" class="register" id="myBtn"> Not signed up? 
                                    <span class="colorBlue">Create an account. </span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popupmodal" id="modal-data"></div>

        </div>
    </div>

@endsection
