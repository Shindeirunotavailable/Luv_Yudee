<?php $locale = session()->get('locale', 'th'); ?>

    <div class="dashboard__main pl-d-0-md">
        <div class="dashboard__content property-page bg-f7">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="hidden" id="hiddensuccessUpdate">
                        <div class="alert alert-success" role="alert">
                            <div id="successUpdate"></div>
                        </div>
                    </div>

                    {{-- @foreach ($data['blogs']->where('id', Auth::id())->unique('id_property') as $item) --}}

                    <form action="{{ url('/upload') }}" method="POST"  enctype="multipart/form-data" id="profileForm" class="needs-validation" >
                        @csrf
                        <div class="row">
                            @if (isset($data))
                                @foreach ($data['profiles']->where('create_by', Auth::id())->unique('id_profiles')  as $item)
                                        <div class="col-md-6 col-12 col-lg-6">
                                            <div class="pb-10">
                                                <div class="card cardBox">
                                                    <div class="card-body p-3">
                                                        <div class="text-left">
                                                            <h4 class="mb-3 pt-3 font-weight-bold"> {{ GoogleTranslate::trans('รูปภาพ', $locale) }}</h4>
                                                            <label>{{ GoogleTranslate::trans('อัพโหลดรูปภาพโปรไฟล์ของคุณ', $locale) }}</label>
                                                        </div>
                                                        <div class="avatar-upload">
                                                            <div class="avatar-edit">
                                                                <input type='file' id="imageuser" accept=".png, .jpg, .jpeg"  name="imageuser">
                                                                <label for="imageuser"></label>
                                                            </div>
                                                            <div class="avatar-preview">
                                                                <div id="imagePreview" class="showproperty" style="background-image: url('{{ $item->imageuser ?? 'https://static.vecteezy.com/system/resources/previews/008/442/086/non_2x/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg' }}');"></div>

                                                            </div>
                                                        </div>
                                                        {{-- <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                                            </div>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                            </div>
                                                        </div>   --}}
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="pb-10">
                                                <div class="card cardBox">
                                                    <div class="card-body p-3">
                                                        <div class="text-left">
                                                            <h4 class="mb-3 pt-3 font-weight-bold">{{ GoogleTranslate::trans('ข้อมูลติดต่อ', $locale) }}</h4>
                                                        </div>
                                                        @if (session('user_id'))
                                                            <div class="form-group col-md-6 px-4">
                                                                <input type="hidden" class="form-control form-control-lg "
                                                                    id="user_id" name="user_id"
                                                                    value="{{ session('user_id') }}">
                                                            </div>
                                                        @endif
                                                        <input type="hidden" class="form-control " id="nameUser" name="nameUser">
                                                        <div class="row pt-10">
                                                            <div class="col-12 col-lg-6">
                                                                <label>{{ GoogleTranslate::trans('ชื่อ', $locale) }}</label>
                                                                <input type="text" class="form-control " id="firstName" name="firstName" value={{$item->name}}>
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label>{{ GoogleTranslate::trans('นามสุกล', $locale) }}</label>
                                                                <input type="text" class="form-control" placeholder="Last name"  id="lastName" name="lastName" value={{$item->lastname}}>
                                                            </div>
                                                        </div>
                                                        <div class="row pt-10">
                                                            <div class="col-12 col-lg-6">
                                                                <label>{{ GoogleTranslate::trans('เบอร์โทรมือถือ', $locale) }}</label>
                                                                <input type="text" class="form-control" placeholder="ํYour phone"  id="phone" name="phone"   value={{$item->phone}}>
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label>{{ GoogleTranslate::trans('เบอร์บ้าน', $locale) }}</label>
                                                                <input type="text" class="form-control" placeholder="ํYour mobile" id="mobile" name="mobile" value={{$item->mobile}}>
                                                            </div>
                                                        </div>
                                                        <div class="row pt-10">
                                                            @if (session('user_email'))
                                                                <div class="col-12 col-lg-6">
                                                                    <label>{{ GoogleTranslate::trans('อีเมล์', $locale) }}</label>
                                                                    <input type="text" class="form-control" placeholder="ํYour Email" id="email" name="email" value="{{ session('user_email') }}" readonly>
                                                                </div>
                                                            @endif


                                                            <div class="col-12 col-lg-6">
                                                                <label>Line</label>
                                                                <input type="text" class="form-control" placeholder="ํYour skype" id="skype" name="skype" value={{$item->skype}}>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 col-lg-6">
                                            <div class="pb-10">
                                                <div class="card cardBox">
                                                    <div class="card-body p-3">
                                                        <div class="text-left">
                                                            <h4 class="mb-3 pt-3 font-weight-bold">{{ GoogleTranslate::trans('รายละเอียดติดต่อผ่านช่องทางโซเชียล', $locale) }}</h4>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="label-700 pl-5">Facebook Url</label>
                                                            <input type="text" name="facebook" id="facebook" class="form-control " placeholder="Enter Your Facebook" value={{$item->facebook}}>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="label-700 pl-5">Pinterest Url</label>
                                                            <input type="text" name="pinterest" id="pinterest" class="form-control " placeholder="Enter Your Pinterest" value={{$item->pinterest}}>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="label-700 pl-5">Instagram Url</label>
                                                            <input type="text" name="instagram" id="instagram" class="form-control "
                                                                placeholder="Enter Your Instagram" value={{$item->instagram}}>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="label-700 pl-5">Twitter Url</label>
                                                            <input type="text" name="twitter" id="twitter" class="form-control "
                                                                placeholder="Enter Your Twitter" value={{$item->twitter}}>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="label-700 pl-5">Linkedin Url</label>
                                                            <input type="text" name="linkedin" id="linkedin" class="form-control "
                                                                placeholder="Enter Your Linkedin" value={{$item->linkedin}}>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="label-700 pl-5">Website Url</label>
                                                            <input type="text" name="website" id="website" class="form-control "
                                                                placeholder="Enter Your name" value={{$item->website}}>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pb-10">
                                                <div class="card cardBox">
                                                    <div class="card-body p-3">
                                                        <div class="text-left">
                                                            <h4 class="mb-3 pt-3 font-weight-bold">{{ GoogleTranslate::trans('เกี่ยวกับฉัน', $locale) }} </h4>
                                                        </div>
                                                        <div class="form-group pt-10">
                                                            <label>Title / Posittion</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" id="title" name="title" value={{$item->title}}>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end flex-wrap">
                                                {{-- <div class="position-relative  pt-d-30 mr-2 ">
                                                        <button type="submit" class="afterButton rounded-pill btn-lg" id="">
                                                            Delete Profile  <i class="fa-solid fa-arrow-right"></i>
                                                    </button>
                                                </div> --}}
                                                <div class="position-relative  pt-d-30  mr-2 ">
                                                    <button type="submit" class="afterButton rounded-pill btn-lg" id="profileSubmit">
                                                        Update Profile<i class="fa-solid fa-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                            @endif
                        </div>
                    </form>

                </div>
            </div>
        </div>
        @include('dashboard.footerdashboard')
    </div>


<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
$('.changeLanguage').change(function(event){
    var url = "{{ route('google.translate.change') }}";
    window.location.href = url+"?lang="+$(this).val()
})
</script>
