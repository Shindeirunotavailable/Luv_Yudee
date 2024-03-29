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
                    
                    <form action="{{ url('/profliestone') }}" method="POST" class="needs-validation" id="profileForm">
                        @csrf
                        <div class="row">    
                            @if (isset($data))
                             @foreach ($data['profiles'] as $item)
                                {{-- @foreach ($data['profiles']->where('id_review', Auth::id())->unique('id_review')  as $item)                     --}}
                                        <div class="col-md-6 col-12 col-lg-6">
                                            <div class="pb-10">
                                                <div class="card cardBox">
                                                    <div class="card-body p-3">
                                                        <div class="text-left">
                                                            <h4 class="mb-3 pt-3 font-weight-bold">Photo</h4>
                                                            <label>Upload your profile photo.</label>
                                                        </div>
                                                        <div class="avatar-upload">
                                                            <div class="avatar-edit">
                                                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="image"/>
                                                                <label for="imageUpload"></label>
                                                            </div>
                                                            <div class="avatar-preview">
                                                                <div id="imagePreview" style="background-image: url(https://static.vecteezy.com/system/resources/previews/008/442/086/non_2x/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg);">
                                                                </div>
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
                                                            <h4 class="mb-3 pt-3 font-weight-bold">Contact information</h4>
                                                            <label>Lorem ipsum dolor sit amet, consectetur adipiscing elit</label>
                                                        </div>
                                                        @if (session('user_id'))
                                                            <div class="form-group col-md-6 px-4">
                                                                <input type="hidden" class="form-control form-control-lg "
                                                                    id="user_id" name="user_id"
                                                                    value="{{ session('user_id') }}">
                                                            </div>
                                                        @endif                                                
                                                        <div class="row pt-10">
                                                            <div class="col-12 col-lg-6">
                                                                <label>First name</label>
                                                                <input type="text" class="form-control " id="firstName" name="firstName" value={{$item->name}}>                                                
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label>Last name</label>
                                                                <input type="text" class="form-control" placeholder="Last name"  id="lastName" name="lastName" value={{$item->lastname}}>
                                                            </div>
                                                        </div>
                                                        <div class="row pt-10">
                                                            <div class="col-12 col-lg-6">
                                                                <label>phone</label>
                                                                <input type="text" class="form-control" placeholder="ํYour phone"  id="phone" name="phone"   value={{$item->phone}}>
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label>mobile</label>
                                                                <input type="text" class="form-control" placeholder="ํYour mobile" id="mobile" name="mobile" value={{$item->mobile}}>
                                                            </div>
                                                        </div>
                                                        <div class="row pt-10">
                                                            @if (session('user_email'))
                                                                <div class="col-12 col-lg-6">
                                                                    <label>email</label>
                                                                    <input type="text" class="form-control" placeholder="ํYour Email" id="email" name="email" value="{{ session('user_email') }}" readonly>
                                                                </div>                                      
                                                            @endif
                                                        
                                                        
                                                            <div class="col-12 col-lg-6">
                                                                <label>skype</label>
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
                                                            <h4 class="mb-3 pt-3 font-weight-bold">User detail</h4>
                                                            <label>Lorem ipsum dolor sit amet, consectetur adipiscing elit</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="label-700 pl-5">Facebook Url</label>
                                                            <input type="text" name="facebook" id="facebook" class="form-control " placeholder="Enter Your Facebook" value={{$item->facebook}}>
                                                            <div class="valid-feedback">
                                                                <a> กรุณากรอก กรอกชื่อผู้ใช้งาน</a>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="label-700 pl-5">Pinterest Url</label>
                                                            <input type="text" name="pinterest" id="pinterest" class="form-control " placeholder="Enter Your Pinterest" value={{$item->pinterest}}>
                                                            <div class="valid-feedback">
                                                                <a> กรุณากรอก กรอกชื่อผู้ใช้งาน</a>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="label-700 pl-5">Instagram Url</label>
                                                            <input type="text" name="instagram" id="instagram" class="form-control "
                                                                placeholder="Enter Your Instagram" value={{$item->instagram}}>
                                                            <div class="valid-feedback">
                                                                <a> กรุณากรอก กรอกชื่อผู้ใช้งาน</a>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="label-700 pl-5">Twitter Url</label>
                                                            <input type="text" name="twitter" id="twitter" class="form-control "
                                                                placeholder="Enter Your Twitter" value={{$item->twitter}}>
                                                            <div class="valid-feedback">
                                                                <a> กรุณากรอก กรอกชื่อผู้ใช้งาน</a>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="label-700 pl-5">Linkedin Url</label>
                                                            <input type="text" name="linkedin" id="linkedin" class="form-control "
                                                                placeholder="Enter Your Linkedin" value={{$item->linkedin}}>
                                                                <div class="valid-feedback">
                                                                    <a> กรุณากรอก กรอกชื่อผู้ใช้งาน</a>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="label-700 pl-5">Website Url</label>
                                                            <input type="text" name="website" id="website" class="form-control "
                                                                placeholder="Enter Your name" value={{$item->website}}>
                                                            <div class="valid-feedback">
                                                                <a> กรุณากรอก กรอกชื่อผู้ใช้งาน</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pb-10">
                                                <div class="card cardBox">
                                                    <div class="card-body p-3">
                                                        <div class="text-left">
                                                            <h4 class="mb-3 pt-3 font-weight-bold">User detail</h4>
                                                            <label>Lorem ipsum dolor sit amet, consectetur adipiscing elit</label>
                                                        </div>
                                                        <div class="form-group pt-10">
                                                            <label>Title / Posittion</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" id="title" name="title" value={{$item->title}}>
                                                        </div>
                                                    </div>
                                                </div>                 
                                            </div>                                              
                                            <div class="d-flex justify-content-end flex-wrap">
                                                <div class="position-relative  pt-d-30 mr-2 ">
                                                        <button type="submit" class="afterButton rounded-pill btn-lg" id="">
                                                            Delete Profile  <i class="fa-solid fa-arrow-right"></i>
                                                    </button>
                                                </div>
                                                <div class="position-relative  pt-d-30  mr-2 ">
                                                    <button type="submit" class="afterButton rounded-pill btn-lg" id="profileSubmit">
                                                        Update Profile  <i class="fa-solid fa-arrow-right"></i>
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
