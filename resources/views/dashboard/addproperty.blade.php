@csrf
<div class="dashboard__main pl-d-0-md">
    <div class="dashboard__content property-page bg-f7">
        <div class="row align-items-center pb-d-40">
            <div class="col-lg-12">
                <div class="dashboard_title_area">
                    <h2 class="fw-600">Add New Property</h2>
                    <p class="text-ap">We are glad to see you again!</p>
                </div>

            </div>
        </div>
        <div class="row d-flex">
            <div class="col-xl-12">
                <div class="ps-widget bg-white bdrs-12 default-box-shadow2 pt-d-30 mb-6 overflow-hidden position-relative">
                    <div class="navtab-style1">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                                <button class="nav-link-ap active font-weight-600 ml-3" id="nav-description-tab"
                                    data-toggle="tab" data-target="#nav-description" type="button" role="tab"
                                    aria-controls="nav-description" aria-selected="true">
                                    1. Description
                                </button>
                                <button class="nav-link-ap font-weight-600" id="nav-media-tab" data-toggle="tab"
                                    data-target="#nav-media" type="button" role="tab" aria-controls="nav-media"
                                    aria-selected="false">2. Media
                                </button>
                                <button class="nav-link-ap font-weight-600" id="nav-location-tab" data-toggle="tab"
                                    data-target="#nav-location" type="button" role="tab" aria-controls="nav-location"
                                    aria-selected="false">3. Location
                                </button>
                                <button class="nav-link-ap font-weight-600" id="nav-detail-tab" data-toggle="tab"
                                    data-target="#nav-detail" type="button" role="tab" aria-controls="nav-detail"
                                    aria-selected="false">4. Detail
                                </button>
                                <button class="nav-link-ap font-weight-600" id="nav-amenities-tab" data-toggle="tab"
                                    data-target="#nav-amenities" type="button" role="tab" aria-controls="nav-amenities"
                                    aria-selected="false">5. Amenities
                                </button>
                            </div>
                        </nav>
                        <form method="POST" action="{{ route('properties') }}" enctype="multipart/form-data">
                            @csrf
                            @if (isset($data['id_propertie']))
                                <input type="hidden"  name="id_propertie" value="{{$data['id_propertie']}}" >
                            @endif
                            <div class="tab-content-ds" id="nav-tabContent">

                                <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                                    {{-- <form method="POST" action="{{ route('properties') }}" enctype="multipart/form-data">
                                        @csrf
                                        @if (isset($data['id_properties']))
                                            <input type="hidden"  name="id_properties" value="{{$data['id_properties']}}" >
                                        @endif --}}
                                        <div class="ps-widget bg-white bdrs-12 p-d-30 overflow-hidden position-relative">
                                            {{-- @if($message = Session::get('success'))
                                                <div class="alert alert-success alert-block">
                                                    <strong>{{$message}}</strong>
                                                </div>
                                            @endif --}}
                                            <h4 class="fw-600 title fs-17 mb-6">Property Description</h4>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="mb-d-20">
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10">Title *</label>
                                                            <input type="text" class="form-control" placeholder="Your Name" id="titleproperty"  name="title" value="{{isset($data['property']->property_title) ? $data['property']->property_title : ""}}">

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="mb-d-20">
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10">Description</label>
                                                            <textarea name="description" id="editor">{{isset($data['property']->property_description)? json_decode($data['property']->property_description) :""}}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 col-xl-4">
                                                        <div class="mb-d-20">
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10">Select Category</label>
                                                            <select id="selectcategory" name="category" class="form-select" >
                                                                <option value="1"{{ isset($data['property']->property_category) && $data['property']->property_category =='1' ? 'selected' :""}}>คอนโด</option>
                                                                <option value="2"{{ isset($data['property']->property_category) && $data['property']->property_category =='2' ? 'selected' :""}}>บ้าน</option>
                                                                <option value="3"{{ isset($data['property']->property_category) && $data['property']->property_category =='3' ? 'selected' :""}}>ทาวน์เฮาส์</option>
                                                                <option value="4"{{ isset($data['property']->property_category) && $data['property']->property_category =='4' ? 'selected' :""}}>อพาร์ทเมนท์</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 col-xl-4">
                                                        <div class="mb-d-20">
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10">Property Status</label>
                                                            <select id="propertystatus" name="status" class="form-control" >
                                                                <option value="1"{{ isset($data['property']->property_status) && $data['property']->property_status=='1' ? "selected" :""}}>ขาย</option>
                                                                <option value="2"{{ isset($data['property']->property_status) && $data['property']->property_status=='2' ? "selected" :""}}>เช่า</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 col-xl-4">
                                                        <div class="mb-6">
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10">Price in baht *</label>
                                                            <input type="text" name="price" id="price" class="form-control" data-type="decimalinput" placeholder="0.00" value="{{ isset($data['property']->property_price) && is_numeric($data['property']->property_price) ? $data['property']->property_price :""}}">
                                                        </div>
                                                    </div>
                                                </div >
                                            <button data-target="#nav-media-tab" type="submit" id="submitdescription" class="afterButton rounded-pill btn-lg mt-2 float-right">Submit</button>
                                        </div>
                                    {{-- </form> --}}
                                </div>

                                <div class="tab-pane fade" id="nav-media" role="tabpanel" aria-labelledby="nav-media-tab">
                                    {{-- <form method="POST" action="{{ route('properties') }}" enctype="multipart/form-data">
                                        @csrf
                                        @if (isset($data['id_properties']))
                                            <input type="hidden"  name="id_properties" value="{{$data['id_properties']}}" >
                                        @endif --}}
                                        <div class="ps-widget bg-white bdrs-12 p-d-30 overflow-hidden position-relative">
                                                    <h4 class="fw-600 title fs-17 mb-10">Upload photos of your property</h4>
                                                    <div class=" ">
                                                        <div class="col-sm-6 mb-4 mt-3">
                                                            <label for="customIMG" class="fs-15 afterButton rounded-pill btn-lg upload-button btn-block mt-4" id="imageLabel">Select Image</label>
                                                            <input name="image[]" type="file" class="custom-file-input" id="customIMG"  accept="image/*" {{-- onchange="updateImage(this)"--}} multiple>
                                                        </div>

                                                        <div class="col-sm-12 mt-0 row justify-content-center"  id="fileList"></div>
                                                        @if (isset($data['id_propertie'])&& isset($data['property']->property_image_url))

                                                            <div class="row">
                                                                @foreach (explode(',', $data['property']->property_image_url) as $imageUrl)
                                                                    <div class="col-4 mt-0 row justify-content-center mb-6">
                                                                        <img src="{{ $imageUrl }}" alt="Property Image" style="width: 50%;">
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <h4 class="fw-600 title fs-17 mb-10">Video Option</h4>
                                                    <div class=" ">
                                                        <div class="col-sm-6 mb-4 mt-3">
                                                            <label for="customVdo" class="fs-15 afterButton rounded-pill btn-lg upload-button btn-block mt-4" id="videoLabel">Select Video</label>
                                                            <input name="video[]" type="file" class="custom-file-input" id="customVdo" accept="video/*" {{--onchange="updateVideoLabel(this)"--}} multiple/>
                                                        </div>
                                                        <div class="col-sm-12 mt-0 row justify-content-center" id="VdoList"></div>
                                                        @if (isset($data['id_propertie'])&& isset($data['property']->property_video_url))
                                                            <div class="row">
                                                                @foreach (explode(',', $data['property']->property_video_url) as $videoUrl)
                                                                    <div class="col-6 mt-0 row justify-content-center mb-6 " >
                                                                        <video src="{{ $videoUrl }}" controls style="width: 75%;" ></video>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    </div>
                                            <button type="submit" id="submitmedia" class="afterButton rounded-pill btn-lg mt-2 float-right ">Submit</button>
                                        </div>
                                    {{-- </form> --}}
                                </div>

                                <div class="tab-pane fade" id="nav-location" role="tabpanel" aria-labelledby="nav-location-tab">
                                        <div class="ps-widget bg-white bdrs-12 p-d-30 overflow-hidden position-relative">
                                            <h4 class="fw-600 title fs-17 mb-6">Listing Location</h4>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="mb-d-20">
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10">Address *</label>
                                                            <input type="text" class="form-control" placeholder="Your Address"  name="address" id="address" value="{{isset($data['property']->property_address) ? $data['property']->property_address : ""}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 " >
                                                        <div class="mb-d-20 " >
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10" >Country/State *</label>
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
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10">City *</label>
                                                            <div class="" id="erroramphures">
                                                                <select name="amphures" id="amphures" class="form-control">
                                                                    @if (isset($data['id_propertie']))
                                                                        @foreach ($data['amphures'] as $value)
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
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10">Country *</label>
                                                            <div class=" " id="errordistricts">
                                                                <select name="districts" id="districts" class="form-control" >
                                                                    @if (isset($data['id_propertie']))
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
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10">Zip *</label>
                                                            <input type="text" name="zipcode" id="zipcode" readonly class="form-control"  value="{{isset($data['property']->property_zipcode) ? $data['property']->property_zipcode : ""}}">
                                                        </div>
                                                    </div>

                                                        <div class="col-sm-6">
                                                            <div class="mb-d-20">
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10">Latitude *</label>
                                                            <input type="text" class="form-control" name="latitude" id="latitudeInput" placeholder="Enter latitude"  value="{{isset($data['property']->property_latitude) ? $data['property']->property_latitude : ""}}">
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="mb-d-20">
                                                            <label class="heading-color ff-heading font-weight-600 mb-d-10">Longitude *</label>
                                                            <input type="text" class="form-control" name="longitude" id="longitudeInput" placeholder="Enter longitude"  value="{{isset($data['property']->property_longitude) ? $data['property']->property_longitude : ""}}">
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <div class="mb-d-20 mt30">
                                                            <iframe id="mapFrame" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                            </div>
                                                        </div>

                                                </div>

                                                <button type="submit" id="submitdetail" class="afterButton rounded-pill btn-lg mt-2 float-right">Submit</button>
                                        </div>
                                </div>

                                <div class="tab-pane fade" id="nav-detail" role="tabpanel" aria-labelledby="nav-detail-tab">
                                    <div class="ps-widget bg-white bdrs-12 p-d-30 overflow-hidden position-relative">
                                        <h4 class="fw-600 title fs-17 mb-10">Listing Details</h4>
                                        <div class="row">
                                            <div class="col-5 col-xl-4 col-6-dt">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10 fs-dt">Floor amount</label>
                                                    <input type="number" name="floor_amount"  class="form-control" placeholder="Floor amount" value="{{isset($data['property']->property_floor_amount) ? $data['property']->property_floor_amount : ""}}">
                                                </div>
                                            </div>
                                            <div class="col-5 col-xl-4 col-6-dt">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10 fs-dt">Rooms</label>
                                                    <input type="number" name="rooms" class="form-control" placeholder="Rooms" value="{{isset($data['property']->property_rooms) ? $data['property']->property_rooms : ""}}">
                                                </div>
                                            </div>
                                            <div class="col-5 col-xl-4 col-6-dt">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10 fs-dt">Bedrooms</label>
                                                    <input type="number" name="bedrooms" class="form-control" placeholder="Rooms" value="{{isset($data['property']->property_bedrooms) ? $data['property']->property_bedrooms : ""}}">
                                                </div>
                                            </div>
                                            <div class="col-5 col-xl-4 col-6-dt">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10 fs-dt">Bathrooms</label>
                                                    <input type="number" name="bathrooms" class="form-control" placeholder="Rooms" value="{{isset($data['property']->property_bathrooms) ? $data['property']->property_bathrooms : ""}}">
                                                </div>
                                            </div>
                                            <div class="col-5 col-xl-4 col-6-dt">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10 fs-dt">Interior Size</label>
                                                    <input type="text" name="interior_size" class="form-control" data-type="decimalinput" placeholder="Sqm" value="{{isset($data['property']->property_interior_size) ? $data['property']->property_interior_size : ""}}">
                                                </div>
                                            </div>
                                            <div class="col-5 col-xl-4 col-6-dt">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10 fs-dt">Garage</label>
                                                    <input type="number" name="garage" class="form-control" placeholder="Garage" value="{{isset($data['property']->property_garage) ? $data['property']->property_garage : ""}}">
                                                </div>
                                            </div>
                                            <div class="col-5 col-xl-4 col-6-dt">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10 fs-dt">Garage size (Sqm)</label>
                                                    <input type="text" name="garage_size" class="form-control" data-type="decimalinput" placeholder="Sqm" value="{{isset($data['property']->property_garage_size) ? $data['property']->property_garage_size : ""}}">
                                                </div>
                                            </div>
                                            <div class="col-5 col-xl-4 col-6-dt">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10 fs-dt">PSM / sqm</label>
                                                    <input type="text" name="psm" class="form-control" data-type="decimalinput" placeholder="Sqm" value="{{isset($data['property']->property_psm) ? $data['property']->property_psm : ""}}">
                                                </div>
                                            </div>
                                            <div class="col-5 col-xl-4 col-6-dt">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10 fs-dt">Year build </label>
                                                    <input type="text" name="year_build" class="form-control" placeholder="Year" value="{{isset($data['property']->property_year_build) ? $data['property']->property_year_build : ""}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10">Owner/Agent notes (not visible on front end)</label>
                                                    <textarea class="textbox-ap" name="notes" cols="30" rows="5" placeholder="There are many variations of passages.">{{ isset($data['property']->property_notes) ? $data['property']->property_notes : "" }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" id="submitlocation" class="afterButton rounded-pill btn-lg mt-2 float-right">Submit</button>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-amenities" role="tabpanel" aria-labelledby="nav-amenities-tab">
                                    <div class="ps-widget bg-white bdrs-12 p-d-30 overflow-hidden position-relative">
                                        <h4 class="fw-600 title fs-17 mb-6" id="error">Select Amenities</h4>
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
                                                                <label class="checkbox-ap">{{ $amenity['name_amenities'] }}
                                                                    <input type="checkbox" name="amenities[]" id="amenities{{ $amenity['id_amenities'] }}" value="{{ $amenity['id_amenities'] }}" {{ in_array($amenity['id_amenities'], $amenities) ? 'checked' : '' }}>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endforeach
                                            </div>
                                        </div>
                                        <button type="submit" id="submitpp" class="afterButton rounded-pill btn-lg mt-2 float-right">Submit</button>
                                    </div>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>

    </div>
    <footer class="mb-1 pt-30">
        <div class="container">
            <div class="row items-center justify-content-center justify-content-md-between">
                <div class="col-auto">
                    <div class="copyright-widget">
                        <p class="text-ap">© Homez 2024 <a href="https://themeforest.net/user/ib-themes"
                                target="_blank" rel="noopener noreferrer">ib-themes</a> - All rights reserved</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="footer_bottom_right_widgets text-center text-lg-end">
                        <p><a href="#">Privacy</a> · <a href="#">Terms</a> · <a
                                href="#">Sitemap</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

{{-- <script>
    document.getElementById("submitdescription").addEventListener("click", function() {
        // เปลี่ยนไปยัง tap ที่เป็นส่วนของ Media
        document.getElementById("nav-media-tab").click();
    });
</script> --}}
