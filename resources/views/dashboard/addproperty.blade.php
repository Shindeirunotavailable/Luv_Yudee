@csrf
<?php
$locale = session()->get('locale', 'th');
?>
<div class="dashboard__main pl-d-0-md ">
    <div class="dashboard__content property-page bg-f7 ">
        <div class="row align-items-center pb-d-40">
            <div class="col-lg-12">
                <div class="dashboard_title_area">
                    <h2 class="fw-600">{{ GoogleTranslate::trans('เพิ่มอสังหาริมทรัพย์ใหม่', $locale) }}</h2>
                    <p class="text-ap">{{ GoogleTranslate::trans('เราดีใจที่ได้พบคุณอีกครั้ง', $locale) }}</p>
                </div>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-xl-12">
                <div class="ps-widget bg-white bdrs-12 default-box-shadow2 pt-d-30 mb-6 overflow-hidden position-relative">
                    <div class="navtab-style1">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                                    <button id="" class="nav-link-ap {{ !isset($data['property']->property_stage) || $data['property']->property_stage=='1' ? 'active' : '' }} font-weight-600 ml-3" id="nav-description-tab"
                                        data-toggle="tab" data-target="#nav-description" type="button" role="tab"
                                        aria-controls="nav-description" aria-selected="{{ isset($data['property']->property_stage) && $data['property']->property_stage=='1' ? 'true' : 'false' }}">
                                        {{ GoogleTranslate::trans('1. คำอธิบาย', $locale) }}
                                    </button>
                                    <button class="nav-link-ap {{ isset($data['property']->property_stage) && $data['property']->property_stage=='2' ? 'active' : '' }} font-weight-600" id="nav-media-tab" data-toggle="tab"
                                        data-target="#nav-media" type="button" role="tab" aria-controls="nav-media"
                                        aria-selected="{{ isset($data['property']->property_stage) && $data['property']->property_stage=='2' ? 'true' : 'false' }}">
                                        {{ GoogleTranslate::trans('2. มีเดี่ย', $locale) }}
                                    </button>
                                    <button class="nav-link-ap {{ isset($data['property']->property_stage) && $data['property']->property_stage=='3' ? 'active' : '' }} font-weight-600" id="nav-location-tab" data-toggle="tab"
                                        data-target="#nav-location" type="button" role="tab" aria-controls="nav-location"
                                        aria-selected="{{ isset($data['property']->property_stage) && $data['property']->property_stage=='3' ? 'true' : 'false' }}">
                                        {{ GoogleTranslate::trans('3. ที่ตั้ง', $locale) }}
                                    </button>
                                    <button class="nav-link-ap {{ isset($data['property']->property_stage) && $data['property']->property_stage=='4' ? 'active' : '' }} font-weight-600" id="nav-detail-tab" data-toggle="tab"
                                        data-target="#nav-detail" type="button" role="tab" aria-controls="nav-detail"
                                        aria-selected="{{ isset($data['property']->property_stage) && $data['property']->property_stage=='4' ? 'true' : 'false' }}">
                                        {{ GoogleTranslate::trans('4. รายละเอียด', $locale) }}
                                    </button>
                                    <button class="nav-link-ap {{ isset($data['property']->property_stage) && $data['property']->property_stage=='5' ? 'active' : '' }} font-weight-600" id="nav-amenities-tab" data-toggle="tab"
                                        data-target="#nav-amenities" type="button" role="tab" aria-controls="nav-amenities"
                                        aria-selected="{{ isset($data['property']->property_stage) && $data['property']->property_stage=='5' ? 'true' : 'false' }}">
                                        {{ GoogleTranslate::trans('5. สิ่งอำนวยความสะดวก', $locale) }}
                                    </button>
                                </div>
                            </nav>
                        <form method="POST" action="{{ route('properties') }}" enctype="multipart/form-data">
                            @csrf
                            @if (isset($data['id_property']))
                                <input type="hidden"  name="id_property" value="{{$data['id_property']}}" >
                            @endif
                            <div class="tab-content-ds " id="nav-tabContent">

                                <div class="tab-pane fade {{ !isset($data['property']->property_stage) || $data['property']->property_stage=='1' ? 'show active' : '' }}" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                                        <div class="ps-widget bg-white bdrs-12 p-d-30 overflow-hidden position-relative">
                                            @if($message = Session::get('success') && $data['property']->property_stage=='1')
                                                <div class="alert alert-success alert-block">
                                                    <strong>{{ GoogleTranslate::trans('อัปโหลดอสังหาริมทรัพย์เรียบร้อยแล้ว', $locale) }}</strong>
                                                </div>
                                            @endif
                                            <h4 id="test" class="fw-600 title fs-17 mb-6">{{ GoogleTranslate::trans('ข้อมูลอสังหาริมทรัพย์', $locale) }}</h4>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="mb-d-20">
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10 required">{{ GoogleTranslate::trans('ชื่อ', $locale) }}</label>
                                                            <input type="text" class="form-control" placeholder="{{ GoogleTranslate::trans('ชื่อของอสังหาริมทรัพย์', $locale) }}" id="titleproperty"  name="title" value="{{isset($data['property']->property_title) ? $data['property']->property_title : ""}}">

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="mb-d-20">
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10">{{ GoogleTranslate::trans('คำอธิบาย', $locale) }}</label>
                                                            <textarea name="description" id="editor">{{isset($data['property']->property_description)? json_decode($data['property']->property_description) :""}}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 col-xl-4">
                                                        <div class="mb-d-20">
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10">{{ GoogleTranslate::trans('เลือกประเภท', $locale) }}</label>
                                                            <select id="selectcategory" name="category" class="form-select" >
                                                                <option value="1"{{ isset($data['property']->property_category) && $data['property']->property_category =='1' ? 'selected' :""}}>{{ GoogleTranslate::trans('คอนโด', $locale) }}</option>
                                                                <option value="2"{{ isset($data['property']->property_category) && $data['property']->property_category =='2' ? 'selected' :""}}>{{ GoogleTranslate::trans('บ้าน', $locale) }}</option>
                                                                <option value="3"{{ isset($data['property']->property_category) && $data['property']->property_category =='3' ? 'selected' :""}}>{{ GoogleTranslate::trans('ทาวน์เฮาส์', $locale) }}</option>
                                                                <option value="4"{{ isset($data['property']->property_category) && $data['property']->property_category =='4' ? 'selected' :""}}>{{ GoogleTranslate::trans('อพาร์ทเมนท์', $locale) }}</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 col-xl-4">
                                                        <div class="mb-d-20">
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10" id="">{{ GoogleTranslate::trans('สถานะทรัพย์สิน', $locale) }}</label>
                                                            <select id="propertystatus" name="type[]" class="form-control" multiple >
                                                                <option value="1"{{ isset($data['property']->property_type) && in_array('1', explode(',', $data['property']->property_type)) ? "selected" : "" }}>{{ GoogleTranslate::trans('ขาย', $locale) }}</option>
                                                                <option value="2"{{ isset($data['property']->property_type) && in_array('2', explode(',', $data['property']->property_type)) ? "selected" : "" }}>{{ GoogleTranslate::trans('เช่า', $locale) }}</option>
                                                            </select>
                                                            <div id="errorstatus"></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 col-xl-4">
                                                        <div class="mb-6">
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10 required">{{ GoogleTranslate::trans('ราคา', $locale) }} </label>
                                                            <input type="text" name="price" id="price" class="form-control" data-type="decimalinput" placeholder="0.00" value="{{ isset($data['property']->property_price) && is_numeric($data['property']->property_price) ? $data['property']->property_price :""}}">
                                                        </div>
                                                    </div>
                                                </div >
                                                @if (isset($data['id_property'])&& $data['property']->property_stage=='1')
                                                    <a href="{{ url('addproperty') }}" type="submit" name="property_stage" value="1"  class="ml-2 afterButton rounded-pill btn-lg mt-2 float-right fw-600">finish</a>
                                                @endif
                                            <button type="submit" id="submitdescription" class="afterButton rounded-pill btn-lg mt-2 float-right fw-600" name="property_stage" value="1">Submit</button>
                                        </div>
                                </div>

                                <div class="tab-pane fade {{ isset($data['property']->property_stage) && $data['property']->property_stage=='2' ? 'show active' : '' }}" id="nav-media" role="tabpanel" aria-labelledby="nav-media-tab">
                                        <div class="ps-widget bg-white bdrs-12 p-d-30 overflow-hidden position-relative">
                                            @if($message = Session::get('success') && $data['property']->property_stage=='2')
                                                <div class="alert alert-success alert-block">
                                                    <strong> {{ GoogleTranslate::trans('อัปโหลดสื่อสำเร็จแล้ว', $locale) }}</strong>
                                                </div>
                                            @endif
                                                    <h4 class="fw-600 title fs-17 mb-10" id="errormedia"> {{ GoogleTranslate::trans('อัปโหลดรูปถ่ายอสังหาริมทรัพย์ของคุณ', $locale) }}</h4>
                                                    <div class=" ">
                                                        <div class="col-sm-4 mb-4 mt-3">
                                                            <label for="customIMG" class="fs-15 afterButton rounded-pill btn-lg upload-button btn-block mt-4 fw-600" id="imageLabel">{{ GoogleTranslate::trans('เลือกรูปภาพ', $locale) }}</label>
                                                            {{-- <input name="image[]" type="file" class="custom-file-input d-none" id="customIMG"  accept="image/*" multiple> --}}
                                                            <input name="image[]" type="file" class="custom-file-input d-none" id="customIMG"  accept=".png, .jpg, .jpeg" {{-- onchange="updateImage(this)"--}} multiple>
                                                        </div>
                                                        {{-- row justify-content-center --}}
                                                        <div class="col-sm-12 mt-0 row mb-4 "  id="fileList"></div>
                                                        @if (isset($data['id_property'])  )
                                                            <div class="row">
                                                                <div class="col-12 mt-0 mb-4 m-2 row justify-content-center mb-6">
                                                                    {{-- ต้องเพิ่ม ('/yuudee' .) ไว้หน้า asset($media->media_property) ถ้าuploadลงserver --}}
                                                                    <table class="mediatable " >
                                                                        @if (isset($data['media']) && $data['media']->isNotEmpty())
                                                                            @if ($data['media']->where('media_property', true)->where('media_file_type', 1)->where('id_property', $data['id_property'])->isNotEmpty())
                                                                                <tr class="align-items-center">
                                                                                    <th class="pt-2">{{ GoogleTranslate::trans('รูปภาพ', $locale) }}</th>
                                                                                    <th class="pt-2">{{ GoogleTranslate::trans('การกระทำ', $locale) }}</th>
                                                                                </tr>
                                                                            @endif
                                                                        @endif
                                                                        @foreach ($data['media'] as $media)
                                                                            @if ($media->id_property == $data['id_property'] && $media->media_file_type === 1)
                                                                                <tr class="align-items-center">
                                                                                    <td class="p-4">
                                                                                        <img src="{{ asset($media->media_property) }}" alt="Property Image" class="imagemedia">
                                                                                        <input type="hidden" name="image_url" value="{{ asset($media->media_property) }}">
                                                                                    </td>
                                                                                    <td class="p-4 trash-td ">
                                                                                        <a href="{{ route('deleteMedia',$media->id_media) }}" class=" btn-danger btn-sm mt-2 fa-solid fa-trash fs-20 trash-delete"></a>
                                                                                    </td>
                                                                                </tr>
                                                                            @endif
                                                                        @endforeach
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <h4 class="fw-600 title fs-17 mb-10 mt-4">{{ GoogleTranslate::trans('อัพโหลดวิดีโอ', $locale) }}</h4>
                                                    <div class=" ">
                                                        <div class="col-sm-4 mb-4 mt-3">
                                                            <label for="customVdo" class="fs-15 afterButton rounded-pill btn-lg upload-button btn-block mt-4 fw-600" id="videoLabel">{{ GoogleTranslate::trans('เลือกวิดีโอ', $locale) }}</label>

                                                            <input name="video[]" type="file" class="custom-file-input d-none" id="customVdo" accept="video/*" {{--onchange="updateVideoLabel(this)"--}} multiple/>
                                                        </div>
                                                        <div class="col-sm-12 mt-0 row mb-4" id="VdoList"></div>

                                                            @if (isset($data['id_property']))
                                                                <div class="row">
                                                                    <div class="col-12 mt-0 mb-4 m-2 row justify-content-center mb-6">
                                                                        <table class="mediatable">
                                                                            @if (isset($data['media']) && $data['media']->isNotEmpty())
                                                                                @if ($data['media']->where('media_property', true)->where('media_file_type', 2)->where('id_property', $data['id_property'])->isNotEmpty())
                                                                                    <tr class="align-items-center">
                                                                                        <th class="pt-2">{{ GoogleTranslate::trans('วิดีโอ', $locale) }}</th>
                                                                                        <th class="pt-2">{{ GoogleTranslate::trans('การกระทำ', $locale) }}</th>
                                                                                     </tr>
                                                                                @endif
                                                                             @endif
                                                                            @foreach ($data['media'] as $media)
                                                                                @if ($media->id_property == $data['id_property'] && $media->media_file_type === 2)
                                                                                    <tr class="align-items-center">
                                                                                        <td class="p-4">
                                                                                            <video src="{{ asset($media->media_property) }}" controls class="videomedia" ></video>
                                                                                        </td>
                                                                                        <td class="p-4 trash-td ">
                                                                                            <a href="{{ route('deleteMedia',$media->id_media) }}" type="submit"  class=" btn-danger btn-sm mt-2 fa-solid fa-trash fs-20 trash-delete"></a>
                                                                                        </td>
                                                                                    </tr>
                                                                                @endif
                                                                            @endforeach
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            @endif

                                                    </div>
                                                    @if (isset($data['id_property'])&& $data['property']->property_stage=='2')
                                                        <a href="{{ url('addproperty') }}" type="submit" name="property_stage" value="1"  class="ml-2 afterButton rounded-pill btn-lg mt-2 float-right fw-600">finish</a>
                                                    @endif
                                            <button type="submit" id="submitmedia" class="afterButton rounded-pill btn-lg mt-2 float-right fw-600 " name="property_stage" value="2">Submit</button>
                                        </div>
                                </div>

                                <div class="tab-pane fade{{ isset($data['property']->property_stage) && $data['property']->property_stage=='3' ? 'show active' : '' }}" id="nav-location" role="tabpanel" aria-labelledby="nav-location-tab">
                                        <div class="ps-widget bg-white bdrs-12 p-d-30 overflow-hidden position-relative">
                                            @if($message = Session::get('success') && $data['property']->property_stage=='3')
                                                <div class="alert alert-success alert-block">
                                                    <strong>{{ GoogleTranslate::trans('อัปโหลดตำแหน่งสำเร็จแล้ว', $locale) }}</strong>
                                                </div>
                                            @endif
                                            <h4 class="fw-600 title fs-17 mb-6"> {{ GoogleTranslate::trans('ตำแหน่งที่ตั้ง', $locale) }}</h4>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="mb-d-20">
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10 required">{{ GoogleTranslate::trans('ที่อยู่', $locale) }} </label>
                                                            <input type="text" class="form-control" placeholder="{{ GoogleTranslate::trans('ที่อยู่ของคุณ', $locale) }}"  name="address" id="address" value="{{isset($data['property']->property_address) ? $data['property']->property_address : ""}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 " >
                                                        <div class="mb-d-20 " >
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10 required" >{{ GoogleTranslate::trans('จังหวัด', $locale) }} </label>
                                                            <div class="" id="errorprovinces">
                                                                <select  name="provinces" id="provinces" class="form-control" >
                                                                    <option  value=""  selected disabled ></option>
                                                                    @foreach ($data['provinces'] as $value)
                                                                        <option value="{{ $value['id'] }}" {{ isset($data['property']->property_provinces) && $data['property']->property_provinces == $value['id'] ? 'selected' : '' }}>
                                                                            {{ $value['name_th'] }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 ">
                                                        <div class="mb-d-20" >
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10 required">{{ GoogleTranslate::trans('อําเภอ', $locale) }} </label>
                                                            <div class="" id="erroramphures">
                                                                <select name="amphures" id="amphures" class="form-control">
                                                                    @if (isset($data['id_property']) && $data['property']->property_amphures !== null)
                                                                        @foreach ($data['amphures'] as $value )
                                                                        <option value="{{ $value['id'] }}" {{ isset($data['property']->property_amphures) && $data['property']->property_amphures == $value['id'] ? 'selected' : '' }}>
                                                                            {{ $value['name_th'] }}
                                                                        </option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 ">
                                                        <div class="mb-d-20" >
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10 required">{{ GoogleTranslate::trans('ตําบล', $locale) }}</label>
                                                            <div class=" " id="errordistricts">
                                                                <select name="districts" id="districts" class="form-control" >
                                                                    @if (isset($data['id_property'])&& $data['property']->property_districts !== null)
                                                                        @foreach ($data['districts'] as $value)
                                                                            <option value="{{ $value['id'] }}" {{ isset($data['property']->property_districts) && $data['property']->property_districts == $value['id'] ? 'selected' : '' }}>
                                                                                {{ $value['name_th'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    @endif

                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 ">
                                                        <div class="mb-d-20">
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10 required">{{ GoogleTranslate::trans('รหัสไปรษณีย์', $locale) }} </label>
                                                            <input type="text" name="zipcode" id="zipcode" readonly class="form-control"  value="{{isset($data['property']->property_zipcode) ? $data['property']->property_zipcode : ""}}">
                                                        </div>
                                                    </div>

                                                        <div class="col-sm-6">
                                                            <div class="mb-d-20">
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10 required">{{ GoogleTranslate::trans('ละติจูด', $locale) }}</label>
                                                            <input type="text" class="form-control" name="latitude" id="latitudeInput" placeholder="{{ GoogleTranslate::trans('ป้อนละติจูด', $locale) }}"  value="{{isset($data['property']->property_latitude) ? $data['property']->property_latitude : ""}}">
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="mb-d-20">
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10 required">{{ GoogleTranslate::trans('ลองจิจูด', $locale) }}</label>
                                                            <input type="text" class="form-control" name="longitude" id="longitudeInput" placeholder="{{ GoogleTranslate::trans('ป้อนลองจิจูด', $locale) }}"  value="{{isset($data['property']->property_longitude) ? $data['property']->property_longitude : ""}}">
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <div class="mb-d-20 mt30">
                                                            <iframe id="mapFrame" class="media-map" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                            </div>
                                                        </div>

                                                </div>
                                                @if (isset($data['id_property'])&& $data['property']->property_stage=='3')
                                                    <a href="{{ url('addproperty') }}" type="submit" name="property_stage" value="1"  class="ml-2 afterButton rounded-pill btn-lg mt-2 float-right fw-600">finish</a>
                                                @endif
                                                <button type="submit" name="property_stage" value="3" id="submitlocation" class="afterButton rounded-pill btn-lg mt-2 float-right fw-600">Submit</button>
                                        </div>
                                </div>

                                <div class="tab-pane fade{{ isset($data['property']->property_stage) && $data['property']->property_stage=='4' ? 'show active' : '' }}" id="nav-detail" role="tabpanel" aria-labelledby="nav-detail-tab">
                                    <div class="ps-widget bg-white bdrs-12 p-d-30 overflow-hidden position-relative">
                                        @if($message = Session::get('success') && $data['property']->property_stage=='4')
                                                <div class="alert alert-success alert-block">
                                                    <strong>{{ GoogleTranslate::trans('รายละเอียดอัปโหลดเรียบร้อยแล้ว', $locale) }}</strong>
                                                </div>
                                            @endif
                                        <h4 class="fw-600 title fs-17 mb-10">{{ GoogleTranslate::trans('รายละเอียดรายการ', $locale) }}</h4>
                                        <div class="row">
                                            <div class="col-5 col-xl-4 col-6-dt">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10 fs-dt required">{{ GoogleTranslate::trans('จำนวนชั้น', $locale) }}</label>
                                                    <input type="number" name="floor_amount" id="floor"  class="form-control" placeholder="{{ GoogleTranslate::trans('จำนวนชั้น', $locale) }}" value="{{isset($data['property']->property_floor_amount) ? $data['property']->property_floor_amount : ""}}">
                                                </div>
                                            </div>
                                            <div class="col-5 col-xl-4 col-6-dt">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10 fs-dt required">{{ GoogleTranslate::trans('จำนวนห้อง', $locale) }}</label>
                                                    <input type="number" name="rooms" id="room" class="form-control" placeholder="{{ GoogleTranslate::trans('ห้อง', $locale) }}" value="{{isset($data['property']->property_rooms) ? $data['property']->property_rooms : ""}}">
                                                </div>
                                            </div>
                                            <div class="col-5 col-xl-4 col-6-dt">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10 fs-dt required">{{ GoogleTranslate::trans('จำนวนห้องนอน', $locale) }}</label>
                                                    <input type="number" name="bedrooms" id="bedrooms"  class="form-control" placeholder="{{ GoogleTranslate::trans('ห้อง', $locale) }}Rooms" value="{{isset($data['property']->property_bedrooms) ? $data['property']->property_bedrooms : ""}}">
                                                </div>
                                            </div>
                                            <div class="col-5 col-xl-4 col-6-dt">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10 fs-dt required">{{ GoogleTranslate::trans('จำนวนห้องน้ำ', $locale) }}</label>
                                                    <input type="number" name="bathrooms" id="bathrooms"  class="form-control" placeholder="{{ GoogleTranslate::trans('ห้อง', $locale) }}Rooms" value="{{isset($data['property']->property_bathrooms) ? $data['property']->property_bathrooms : ""}}">
                                                </div>
                                            </div>
                                            <div class="col-5 col-xl-4 col-6-dt">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10 fs-dt required">{{ GoogleTranslate::trans('ขนาด', $locale) }}</label>
                                                    <input type="text" name="interior_size" id="interior_size"  class="form-control" data-type="decimalinput" placeholder="{{ GoogleTranslate::trans('ตร.ม', $locale) }}" value="{{isset($data['property']->property_interior_size) ? $data['property']->property_interior_size : ""}}">
                                                </div>
                                            </div>
                                            <div class="col-5 col-xl-4 col-6-dt">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10 fs-dt">{{ GoogleTranslate::trans('โรงรถ', $locale) }}</label>
                                                    <input type="number" name="garage" class="form-control" placeholder="{{ GoogleTranslate::trans('โรงรถ', $locale) }}" value="{{isset($data['property']->property_garage) ? $data['property']->property_garage : ""}}">
                                                </div>
                                            </div>
                                            <div class="col-5 col-xl-4 col-6-dt">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10 fs-dt">{{ GoogleTranslate::trans('ขนาดโรงจอดรถ (ตร.ม.)', $locale) }}</label>
                                                    <input type="text" name="garage_size" class="form-control" data-type="decimalinput" placeholder="{{ GoogleTranslate::trans('ตร.ม', $locale) }}" value="{{isset($data['property']->property_garage_size) ? $data['property']->property_garage_size : ""}}">
                                                </div>
                                            </div>
                                            <div class="col-5 col-xl-4 col-6-dt">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10 fs-dt">{{ GoogleTranslate::trans('ราคา/(ตร.ม.)', $locale) }}</label>
                                                    <input type="text" name="psm" class="form-control" data-type="decimalinput" placeholder="{{ GoogleTranslate::trans('ตร.ม', $locale) }}" value="{{isset($data['property']->property_psm) ? $data['property']->property_psm : ""}}">
                                                </div>
                                            </div>
                                            <div class="col-5 col-xl-4 col-6-dt">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10 fs-dt">{{ GoogleTranslate::trans('ปีที่สร้าง', $locale) }} </label>
                                                    <input type="text" name="year_build" class="form-control" placeholder="{{ GoogleTranslate::trans('ปี', $locale) }}" value="{{isset($data['property']->property_year_build) ? $data['property']->property_year_build : ""}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10">{{ GoogleTranslate::trans('หมายเหตุของเจ้าของ/ตัวแทน (ไม่ปรากฏที่ส่วนหน้า)', $locale) }}</label>
                                                    <textarea class="textbox-ap" name="notes" cols="30" rows="5" placeholder="{{ GoogleTranslate::trans('บันทึกย่อ', $locale) }}">{{ isset($data['property']->property_notes) ? $data['property']->property_notes : "" }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        @if (isset($data['id_property'])&& $data['property']->property_stage=='4')
                                            <a href="{{ url('addproperty') }}" type="submit" name="property_stage" value="1"  class="ml-2 afterButton rounded-pill btn-lg mt-2 float-right fw-600">finish</a>
                                        @endif
                                        <button type="submit" name="property_stage" value="4" id="submitdetail" class="afterButton rounded-pill btn-lg mt-2 float-right fw-600">Submit</button>
                                    </div>
                                </div>

                                <div class="tab-pane fade{{ isset($data['property']->property_stage) && $data['property']->property_stage=='5' ? 'show active' : '' }}" id="nav-amenities" role="tabpanel" aria-labelledby="nav-amenities-tab">
                                    <div class="ps-widget bg-white bdrs-12 p-d-30 overflow-hidden position-relative">
                                        @if($message = Session::get('success') && $data['property']->property_stage=='5')
                                                <div class="alert alert-success alert-block">
                                                    <strong>{{ GoogleTranslate::trans('อัปโหลดสิ่งอำนวยความสะดวกสำเร็จแล้ว', $locale) }}</strong>
                                                </div>
                                            @endif
                                        <h4 class="fw-600 title fs-17 mb-6 " id="error">{{ GoogleTranslate::trans('เลือกสิ่งอำนวยความสะดวก', $locale) }}</h4>
                                        <div class="row">
                                            <div  class="row-ap flex-lg-row flex-wrap">
                                                @php
                                                $amenities = isset($data['property']->property_amenities) ? explode(',', $data['property']->property_amenities) : [];
                                                $amenitiesArray = $data['amenities']->toArray();
                                                $chunks = array_chunk($amenitiesArray, ceil(count($amenitiesArray) / 3));
                                                @endphp
                                                    @foreach ($chunks as $chunk)
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="checkbox-style1">
                                                                @foreach ($chunk as $amenity)
                                                                <label class="checkbox-ap">{{ GoogleTranslate::trans($amenity['name_amenities'], $locale) }}
                                                                    {{-- {{ $amenity['name_amenities'] }} --}}
                                                                    <input type="checkbox" name="amenities[]" id="amenities{{ $amenity['id_amenities'] }}" value="{{ $amenity['id_amenities'] }}" {{ in_array($amenity['id_amenities'], $amenities) ? 'checked' : '' }}>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endforeach

                                            </div>
                                        </div>
                                        @if (isset($data['id_property'])&& $data['property']->property_stage=='5')
                                            <a href="{{ url('addproperty') }}" type="submit" name="property_stage" value="1"  class="ml-2 afterButton rounded-pill btn-lg mt-2 float-right fw-600">finish</a>
                                        @endif
                                            <button type="submit" id="submitamenitie" name="property_stage" value="5" class="afterButton rounded-pill btn-lg mt-2 float-right fw-600">Submit</button>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>

    </div>
    @include('dashboard.footerdashboard')

</div>
