@extends('layout.master')
@section('content')

<div class="pb-10">
    <form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="card cardBox">
        <div class="card-body p-3">
            <div class="text-left">
                <h4 class="mb-3 pt-3 font-weight-bold">Photo</h4>
                <label>Upload your profile photo.</label>
            </div>
            <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type='file' id="imageuser" accept=".png, .jpg, .jpeg"  name="imageuser">
                    <label for="imageuser"></label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url(https://static.vecteezy.com/system/resources/previews/008/442/086/non_2x/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg);">
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <div class="position-relative  pt-d-30  mr-2 ">
        <button type="submit" class="afterButton rounded-pill btn-lg" id="profileSubmit">
            Update Profile  <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>
    </form>               
</div>




@endsection
