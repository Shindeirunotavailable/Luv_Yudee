@extends('layout.master')
@section('content')
<?php
$locale = session()->get('locale', 'th');
?>
    <main >
{{-- ================================================================================================================================================================================================================================================================================== --}}

            <section class="section-pp">
                <div class="container-pp-fluid">
                    <div class="position-relative zoomIn ">

                        <div class="position-absolute pos-fixed-top-right z-index-2">
                            <ul class="list-inline pt-4 pr-5">

                                <li class="list-inline-item mr-2">
                                    <a href="javascript:void(0)" data-toggle="tooltip" title=""
                                        class="d-flex align-items-center justify-content-center tooltip-icon bg-white text-heading bg-hover-primary hover-white rounded-circle"
                                        data-original-title="Favourite">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </li>

                                <li class="list-inline-item mr-2">
                                    <button
                                        class="btn-1 btn-white-1 p-0 d-flex align-items-center justify-content-center tooltip-icon text-heading bg-hover-primary hover-white rounded-circle border-0 shadow-none"
                                        type="button" data-placement="top" data-toggle="popover" data-container="body"
                                        data-content='
                                            <ul class="list-inline mb-0 fs-22">
                                                <li class="list-inline-item">
                                                    <i class="fab fa-twitter"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fab fa-facebook"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa-brands fa-youtube"></i>
                                                </li>
                                            </ul>'
                                        data-html="true" data-original-title="" title="">
                                        <i class="fa-solid fa-share-nodes"></i>
                                    </button>
                                </li>


                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" data-toggle="tooltip" title=""
                                        class="d-flex align-items-center justify-content-center tooltip-icon bg-white text-heading bg-hover-primary hover-white rounded-circle"
                                        data-original-title="Print">
                                        <i class="fa-solid fa-print"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                @php
                $id_property = request('id_property');
                @endphp

                {{-- <input  name="id_property" value="{{$id_property}}" > --}}
                {{-- {{dd($id_property);}} --}}
                <div class="container-pp-fluid">
                    <div class="row galleries m-n1 py-2">
                    @foreach ($blogs as $blog)
                        @php
                        $firstMedia = $blogs->where('id_property', $id_property)->where('media_file_type', 1)->unique('id_media')->first();
                        @endphp

                        <div class="col-lg-6 p-1 ">
                            <div class="item item-size-4-3">
                                <div class="card p-0 hover-zoom-in">
                                    <a href="{{ $firstMedia->media_property }}" class="card-img-pp"
                                        data-gtf-mfp="true" data-gallery-id="01">
                                        <img src="{{ $firstMedia->media_property }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        @break
                    @endforeach
                        <div class="col-lg-6 p-1 ">
                            <div class="row m-n1">
                                @foreach ($blogs as $blog)
                                    @php
                                        // $remainingMedias = $blogs->where('id_property', $id_property)->unique('id_media')->slice(1);
                                        $remainingMedias = $blogs->where('id_property', $id_property)
                                            ->where('media_file_type', 1)
                                            ->unique('id_media')
                                            ->slice(1);
                                        $count = 0;
                                        $totalMedias = $remainingMedias->count(); // นับจำนวนรูปภาพทั้งหมดที่เหลือ
                                        // $totalMediasInDatabase = $blogs->where('id_property', $id_property)->unique('id_media')->count();
                                        $totalMediasInDatabase = $blogs->where('id_property', $id_property)
                                            ->where('media_file_type', 1) // เพิ่มเงื่อนไขที่นี่
                                            ->unique('id_media')
                                            ->count();
                                        $remainingMediasCount = $totalMediasInDatabase - 5 ;
                                    @endphp
                                        @foreach ($remainingMedias as $item)
                                            @if ($count < 4)
                                                <div class="col-md-6 p-1">
                                                    <div class="item item-size-4-3">
                                                        <div class="card p-0 hover-zoom-in">
                                                            <a href="{{ $item->media_property }}" class="card-img-pp"
                                                                data-gtf-mfp="true" data-gallery-id="01">
                                                                <img src="{{ $item->media_property }}">
                                                            </a>
                                                            @if ($count >= 3  && $totalMedias > 4 )
                                                                    <div class="card-img-pp-overlay  d-flex flex-column align-items-center justify-content-center hover-image ">
                                                                        <p class="fs-48 font-weight-600 text-dark lh-1 mb-4">+{{ $remainingMediasCount }}</p>
                                                                        <p class="fs-16 font-weight-bold text-dark lh-1625 text-uppercase"> View more </p>{{-- ดูเพิ่มเติม --}}
                                                                    </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                @php $count++; @endphp
                                            @endif

                                        @endforeach
                                        @for ($i = $count; $i < 4; $i++)
                                            <div class="col-md-6 p-1">
                                                <div class="item item-size-4-3">
                                                    <div class="card p-0 hover-zoom-in">
                                                        <img src="{{ asset('/assets/images/noimg.jpg') }}" alt="No Image" >
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                        <!-- ไม่เกี่ยวกับรูปใหญ่สุด -->
                                        @foreach ($remainingMedias as $item)
                                            @if ($count >= 8)
                                                <a href="{{ $item->media_property }}" class="card-img-pp"data-gtf-mfp="true" data-gallery-id="01"></a>
                                            @endif
                                            @php $count++; @endphp
                                        @endforeach
                                        @break
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

                </form>
                <div class="container-pp ">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb pb-0 pl-0 bg-white">
                            <li class="breadcrumb-item fs-12 letter-spacing-087">
                                <a href="{{url("home")}}">Home</a> {{-- หน้าหลัก --}}
                            </li>
                            <li class="breadcrumb-item fs-12 letter-spacing-087">
                                <a href="{{url("search_result")}}">Listing</a> {{-- รายการ --}}
                            </li>
                            @foreach ($blogs as $blog)
                                @php
                                $info = $blogs->where('id_property', $id_property)->unique('id_media')->first();
                                @endphp
                                <li class="breadcrumb-item fs-12 font-weight-600 letter-spacing-087 active">
                                    {{$info->property_title}}</li>
                                @break
                            @endforeach
                        </ol>
                    </nav>
                </div>
            </section>


        <div class="container-md-pp ">
            <div class="row">
                @foreach ($blogs as $blog)
                        @php
                            $info = $blogs->where('id_property', $id_property)->unique('id_media')->first();
                            $postDate = new DateTime($blog->update_datetime);
                            // วันปัจจุบัน
                            $currentDate = new DateTime();
                            // คำนวณระยะเวลาที่ผ่านมา
                            $interval = $postDate->diff($currentDate);
                            // กำหนดค่าเริ่มต้นของข้อความ
                            $timeAgo = '';
                            // ตรวจสอบและกำหนดข้อความตามระยะเวลาที่ผ่านมา
                            if ($interval->y > 0) {
                                $timeAgo = $interval->y . ' years ago';
                            } elseif ($interval->m > 0) {
                                $timeAgo = $interval->m . ' months ago';
                            } elseif ($interval->d > 0) {
                                $timeAgo = $interval->d . ' days ago';
                            } else {
                                $timeAgo = 'Just now';
                            }
                        @endphp
                    {{-- {{dd($postDate);}} --}}
                    <article class="col-lg-8  pr-xl-7 mt-5">
                        <section class="m-top border-bottom-pp">
                            <ul class="list-inline d-sm-flex align-items-sm-center">
                                <li class="list-inline-item badge-pp badge-pp-orange">Featured</li> {{-- โดดเด่น --}}
                                <li class="list-inline-item badge-pp badge-pp-primary">For Sale</li> {{-- สำหรับขาย --}}
                                <li class="list-inline-item mr-2 mt-2 mt-sm-0">
                                    <i class="fa-regular fa-clock mr-1"></i>{{$timeAgo}}
                                </li>
                                <li class="list-inline-item mt-2 mt-sm-0">
                                    <i class="fa-regular fa-eye mr-1"></i>1039views {{-- จำนวนการดู 1039 ครั้ง --}}
                                </li>
                            </ul>

                            <div class="d-sm-flex justify-content-sm-between ">
                                <div>
                                    <h2 class="fw-600 fs-30 text-heading font-bold mb-0">{{ isset($info->property_title) ? $info->property_title : ' N/A' }}</h2>
                                    <p class="mb-0 text-mute"><i class="fa-solid fa-location-dot mr-2"></i>
                                        @if(is_null($info->property_provinces))
                                            <a class="text-muted">N/A</a>
                                        @endif

                                        @foreach($provinces as $province)
                                            @if($info->property_provinces == $province->id)
                                            <a class="text-muted">{{ $province->name_th }}</a>
                                            @endif
                                        @endforeach

                                        @foreach($amphures as $amphure)
                                            @if($info->property_amphures == $amphure->id)
                                            <a class="text-muted">{{ $amphure->name_th }}</a>
                                            @endif
                                        @endforeach

                                        @foreach($districts as $district)
                                            @if($info->property_districts == $district->id)
                                            <a class="text-muted">{{ $district->name_th }}</a>

                                            @endif
                                        @endforeach

                                        @foreach($districts as $district)
                                            @if($info->property_districts == $district->id)
                                            <a class="text-muted">{{ $district->zip_code }}</a>
                                            @endif
                                        @endforeach

                                    </p>
                                </div>

                                <div class="mt-2 text-lg-right">
                                    <p class="fs-22 text-heading font-bold mb-0 font-weight-600">{{ isset($info->property_price) ? '฿ ' . $info->property_price : ' N/A' }}</p>
                                    <p class="mb-0 text-muted">{{ isset($info->property_psm) ? '฿ ' . $info->property_psm  . ' /SqFt' : ' N/A' }}</p>
                                </div>
                            </div>
                            <h2 class="fw-600 fs-22 text-heading font-bold mb-0">Description</h2> {{-- คำอธิบาย --}}
                            <p class="mb-6 lh-md pt-2 ">
                                {!! isset($info->property_description) && $info->property_description !== 'null' ? json_decode($info->property_description) : ' N/A' !!}
                            </p>
                        </section>

                        <section class="pt-6 border-bottom-pp section-pp">
                            <h2 class="fw-600 fs-30 text-heading font-bold mt-3">Facts and Features</h2> {{-- คุณสมบัติ --}}
                            <div class="row pt-3">
                                <div class="col-lg-3 col-6 mt-4 ">
                                    <div class="media ">
                                        <div class="media-fa p-2 shadow-xxs-1 rounded-lg mr-2 ">
                                            <i class="fa-solid fa-house-chimney-window text-blue"></i>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="fw-600 fs-ff text-uppercase letter-spacing-093 font-weight-normal ">
                                                Type {{-- ชนิด --}}
                                            </h5>
                                            <p class=" fs-ff2 font-weight-bold text-heading">
                                                @switch($info->property_category)
                                                    @case(1)
                                                    คอนโด
                                                        @break
                                                    @case(2)
                                                    บ้าน
                                                        @break
                                                    @case(3)
                                                    ทาวน์เฮาส์
                                                        @break
                                                    @case(4)
                                                    อพาร์ทเมนท์
                                                        @break
                                                @endswitch
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6 mt-4">
                                    <div class="media ">
                                        <div class="media-fa p-2 shadow-xxs-1 rounded-lg mr-2 ">
                                            <i class="fa-solid fa-trowel-bricks text-blue"></i>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="fw-600 fs-ff text-uppercase letter-spacing-093 font-weight-normal ">
                                                YEAR BUILT {{-- ปีที่สร้าง --}}
                                            </h5>
                                            <p class=" fs-ff2 font-weight-bold text-heading">
                                                {{ isset($info->property_year_build) ? $info->property_year_build : ' N/A' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6 mt-4">
                                    <div class="media ">
                                        <div class="media-fa p-2 shadow-xxs-1 rounded-lg mr-2 ">
                                            {{-- <i class="fa-solid fa-temperature-arrow-up text-blue"></i> --}}
                                            <i class="fa-solid fa-building text-blue"></i>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="fw-600 fs-ff text-uppercase letter-spacing-093 font-weight-normal ">
                                                Floor {{-- ชั้น --}}
                                            </h5>
                                            <p class=" fs-ff2 font-weight-bold text-heading">
                                                {{ isset($info->property_floor_amount) ? $info->property_floor_amount : ' N/A' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6 mt-4">
                                    <div class="media ">
                                        <div class="media-fa p-2 shadow-xxs-1 rounded-lg mr-2  ">
                                            <i class="fa-solid fa-bath text-blue"></i>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="fw-600 fs-ff text-uppercase letter-spacing-093 font-weight-normal ">
                                                BATHROOMS {{-- ห้องน้ำ --}}
                                            </h5>
                                            <p class=" fs-ff2 font-weight-bold text-heading">
                                                {{ isset($info->property_bathrooms) ? $info->property_bathrooms : ' N/A' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6 mt-4">
                                    <div class="media ">
                                        <div class="media-fa p-2 shadow-xxs-1 rounded-lg mr-2 ">
                                            <i class="fa-solid fa-bed text-blue"></i>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="fw-600 fs-ff text-uppercase letter-spacing-093 font-weight-normal ">
                                                BEDROOMS {{-- ห้องนอน --}}
                                            </h5>
                                            <p class=" fs-ff2 font-weight-bold text-heading">
                                                {{ isset($info->property_bedrooms) ? $info->property_bedrooms : ' N/A' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6 mt-4">
                                    <div class="media ">
                                        <div class="media-fa p-2 shadow-xxs-1 rounded-lg mr-2 ">
                                            <i class="fa-solid fa-house-flag text-blue"></i>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="fw-600 fs-ff text-uppercase letter-spacing-093 font-weight-normal ">
                                                SQFT {{-- ตารางฟุต --}}
                                            </h5>
                                            <p class=" fs-ff2 font-weight-bold text-heading">
                                                {{ isset($info->property_interior_size) ? $info->property_interior_size : ' N/A' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6 mt-4">
                                    <div class="media ">
                                        <div class="media-fa p-2 shadow-xxs-1 rounded-lg mr-2 ">
                                            <i class="fa-solid fa-warehouse text-blue"></i>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="fw-600 fs-ff text-uppercase letter-spacing-093 font-weight-normal ">
                                                GARAGE {{-- โรงรถ --}}
                                            </h5>
                                            <p class=" fs-ff2 font-weight-bold text-heading">
                                                {{ isset($info->property_garage) ? $info->property_garage : ' N/A' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6 mt-4">
                                    <div class="media ">
                                        <div class="media-fa p-2 shadow-xxs-1 rounded-lg mr-2 ">
                                            <i class="fa-solid fa-scroll text-blue"></i>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="fw-600 fs-ff text-uppercase letter-spacing-093 font-weight-normal ">
                                                STATUS {{-- สถานะ --}}
                                            </h5>
                                            <p class=" fs-ff2 font-weight-bold text-heading">
                                                @switch($info->property_category)
                                                    @case(1)
                                                    ขาย
                                                        @break
                                                    @case(2)
                                                    เช่า
                                                     @break

                                                @endswitch
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>

                        <section class="pt-6 border-bottom-pp section-pp">
                            <h2 class="fw-600 fs-30 text-heading font-bold mt-3">Additional Details {{-- รายละเอียดเพิ่มเติม --}}</h2>
                            <div class="row pt-2">
                                {{-- <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14  text-heading pr-2">Property ID</dt>
                                    <dd>AD-29100</dd>
                                </dl> --}}

                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14  text-heading pr-2">Price</dt> {{-- ราคา --}}
                                    <dd>{{ isset($info->property_price) ? '$ ' . $info->property_price : ' N/A' }}</dd>
                                </dl>
                                {{-- <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14  text-heading pr-2">Property type</dt>
                                    <dd>Apartment, bar, cafe, villa</dd>
                                </dl> --}}
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14  text-heading pr-2">Property status</dt> {{-- สถานะทรัพย์สิน --}}
                                    <dd>
                                        @switch($info->property_category)
                                            @case(1)
                                            ขาย
                                                @break
                                            @case(2)
                                            เช่า
                                            @break

                                        @endswitch
                                </dd>
                                </dl>
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14  text-heading pr-2">Rooms</dt> {{-- ห้องทั้งหมด --}}
                                    <dd>{{ isset($info->property_rooms) ? $info->property_rooms : ' N/A' }}</dd>
                                </dl>
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14  text-heading pr-2">Bedrooms</dt> {{-- ห้องนอน --}}
                                    <dd>{{ isset($info->property_bedrooms) ? $info->property_bedrooms : ' N/A' }}</dd>
                                </dl>
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14  text-heading pr-2">Size</dt> {{-- ขนาด --}}
                                    <dd>{{ isset($info->property_interior_size) ? $info->property_interior_size . ' SqFt' : ' N/A' }}</dd>
                                </dl>
                                {{-- <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14  text-heading pr-2">Bathrooms</dt>
                                    <dd>2</dd>
                                </dl> --}}
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14  text-heading pr-2">Garage</dt> {{-- โรงรถ --}}
                                    <dd>{{ isset($info->property_garage) ? $info->property_garage : ' N/A' }}</dd>
                                </dl>
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14  text-heading pr-2">Bathrooms</dt> {{-- ห้องน้ำ --}}
                                    <dd>{{ isset($info->property_bathrooms) ? $info->property_bathrooms : ' N/A' }}</dd>
                                </dl>
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14  text-heading pr-2">Garage size</dt> {{-- ขนาดโรงรถ --}}
                                    <dd>{{ isset($info->property_garage_size) ? $info->property_garage_size . ' SqFt' : ' N/A' }}</dd>
                                </dl>
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14  text-heading pr-2">Year build</dt> {{-- ปีที่สร้าง --}}
                                    <dd>{{ isset($info->property_year_build) ? $info->property_year_build : ' N/A' }}</dd>
                                </dl>
                                {{-- <dl class="offset-sm-6 col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14  text-heading pr-2">Label</dt>
                                    <dd>Bestseller</dd>
                                </dl> --}}

                            </div>
                            <div class="container-pp list-head">
                            </div>
                        </section>

                        <section class="pt-6 border-bottom-pp section-pp ">
                            <h2 class="fw-600 fs-30 text-heading font-bold mt-3">Offices Amenities</h2> {{-- สิ่งอำนวยความสะดวก --}}
                            <ul class="list-unstyled mb-0 row pt-2 ">

                                @foreach($pp_amenities as $amenity)
                                @if(isset($info->property_amenities) && in_array($amenity->id_amenities, explode(',', $info->property_amenities)))
                                        <li class="col-sm-3 col-6 mb-2">
                                            <i class="fa-solid fa-check mr-2 text-blue"></i>{{ GoogleTranslate::trans($amenity->name_amenities, $locale) }}
                                            {{-- {{ $amenity->name_amenities }} --}}
                                        </li>
                                    @else
                                        <li class="col-sm-3 col-6 mb-2 decoration">
                                            <i class="fa-solid fa-xmark mr-2 text-danger"></i>{{ GoogleTranslate::trans($amenity->name_amenities, $locale) }}
                                            {{-- {{ $amenity->name_amenities }} --}}
                                        </li>
                                    @endif
                                @endforeach

                            </ul>

                        </section>

                        <section class="pt-6 border-bottom-pp section-pp">
                            <h4 class="fw-600 fs-30 text-heading font-bold mb-3 mt-3">Video Tour</h4> {{-- วิดีโอทัวร์ --}}
                            @foreach ($blogs as $blog)
                                @php
                                    $videoMedias = $blogs->where('id_property', $id_property)->where('media_file_type', 2);
                                @endphp

                                @if ($videoMedias->isNotEmpty())
                                    @foreach ($videoMedias as $videoMedia)
                                        <video src="{{ asset($videoMedia->media_property) }}" controls allowfullscreen="" class="w-100"></video>
                                    @endforeach
                                @else
                                    {{-- <iframe height="430" src="https://my.matterport.com/show/?m=wWcGxjuUuSb" allowfullscreen="" class="w-100"></iframe> --}}
                                    <img src="{{ asset('/assets/images/novideo.png') }}" alt="No Image" class="w-100">

                                @endif
                                @break
                            @endforeach
                        </section>

                        <section class="pt-6 border-bottom-pp section-pp">
                            <h2 class="fw-600 fs-30 text-heading font-bold mb-3 mt-3">Location</h2> {{-- ที่ตั้ง --}}
                            <div class="d-flex justify-content-center ">
                                <input type="text" class="form-control hidden" name="latitude" id="latitudeInput" placeholder="Enter latitude"  value="{{($info->property_latitude) ? $info->property_latitude : ""}}">
                                <input type="text" class="form-control hidden" name="longitude" id="longitudeInput" placeholder="Enter longitude"  value="{{($info->property_longitude) ? $info->property_longitude : ""}}">
                                <iframe id="mapFrame" class="media-map" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </section>

                        <section class="pt-6 section-pp">

                            <h4 class="fw-600 fs-30 text-heading lh-15 pt-3">Rating & Reviews</h4>
                            <div class="card border-0">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-sm-6 mb-6 mb-sm-0">
                                            <div class="bg-gray-01 rounded-lg pt-2 px-6 pb-5 pl-4">
                                                <h5 class="fw-600 fs-16 lh-2 text-heading mb-6">
                                                    Average User Rating
                                                </h5>
                                                <p class="fs-40 text-heading font-weight-bold lh-1">
                                                    {{ number_format($averageRating, 2) }}  <span class="fs-18 text-gray-light font-weight-normal">/5</span>
                                                </p>
                                                <div class="list-inline">
                                                    @php
                                                    $fullStars = floor($averageRating); // จำนวนดาวเต็ม
                                                    $halfStar = $averageRating - $fullStars; // คำนวณจำนวนครึ่งดาว
                                                    @endphp
                                                    @for ($i = 0; $i < $fullStars; $i++)
                                                        <li class="list-inline-item bg-warning text-white star d-inline-flex align-items-center justify-content-center mb-1"><i class="fas fa-star"></i></li>
                                                    @endfor
                                                    @if ($halfStar >= 0.5)
                                                        <li class="list-inline-item bg-warning text-white star d-inline-flex align-items-center justify-content-center mb-1"><i class="fas fa-star-half-alt"></i></li>
                                                    @endif
                                                    @if ($fullStars < 5 && $halfStar == 0.5)
                                                        <li class="list-inline-item bg-gray text-white star d-inline-flex align-items-center justify-content-center mb-1"><i class="fas fa-star"></i></li>
                                                    @endif
                                                </div>



                                            </div>
                                        </div>

                                        <div class="col-sm-6 pt-2">
                                            <h5 class="fw-600 fs-16 lh-2 text-heading ">
                                                Rating Breakdown
                                            </h5>
                                            @foreach (range(5, 1) as $star)
                                                @php
                                                $count = $starCounts[$star] ?? 0; // ตรวจสอบว่ามีข้อมูลหรือไม่ ถ้าไม่มีกำหนดให้เป็น 0
                                                $percentage = ($count / $totalReviews) * 100;
                                                @endphp
                                                <div class="d-flex align-items-center mx-n1">
                                                    <ul class="list-inline d-flex px-1 mb-0">
                                                        @for ($i = 0; $i < $star; $i++)
                                                            <li class="list-inline-item text-warning mr-1"><i class="fas fa-star"></i></li>
                                                        @endfor
                                                        @for ($i = 0; $i < 5 - $star; $i++)
                                                            <li class="list-inline-item text-border mr-1"><i class="fas fa-star"></i></li>
                                                        @endfor
                                                    </ul>
                                                    <div class="d-block w-100 px-1">
                                                        <div class="progress-pp rating-progress-pp">
                                                            <div class="progress-pp-bar bg-warning" role="progressbar" style="width: {{ $percentage }}%" aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-muted px-1">{{ round($percentage, 2) }}%</div>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="pt-6 border-bottom-pp section-pp">
                            <div class="card border-0 ">
                                <div class="card-body p-0">
                                    <h3 class="fw-600 fs-16 lh-2 text-heading mb-0 d-inline-block pr-4 border-bottom-pp border-primary">
                                        Reviews</h3>

                                    @if (isset($data))
                                    @foreach ($data as $review)
                                        <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">

                                            @if (isset($data))
                                                @foreach ($profiles ->where('create_by', $review->create_by)->unique('id_profiles') as $item)
                                                    @if (!empty($item->imageuser))
                                                        <img src="{{ $item->imageuser }}" alt="{{ $item->imageuser }}" class="review-icon mr-sm-8 mb-sm-0 img-fluid" style="width: 84px; height: 84px; object-fit: cover;">
                                                    @else
                                                        <img src="{{ asset('/assets/images/user2.jpg') }}" alt="{{ $item->imageuser }}" class="review-icon mr-sm-8 mb-sm-0 img-fluid" style="width: 84px; height: 84px; object-fit: cover;">
                                                    @endif
                                                @endforeach
                                            @endif

                                            <div class="media-body">
                                                <div class="row mb-1 align-items-center">
                                                    <div class="col-sm-6 mb-2 mb-sm-0  ">
                                                        <h4 class="fw-600 mb-0 text-heading fs-14">{{$review->review_name}}</h4>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                            <li class="list-inline-item mr-0">
                                                                    @php
                                                                        $star = $review->review_star;
                                                                    @endphp

                                                                    @for ($i = 1; $i <= 5; $i++)
                                                                    @if ($i <= $star)
                                                                        <span class="fa fa-star text-warning"></span>
                                                                    @else
                                                                        <span class="fa fa-star text-secondary"></span>
                                                                    @endif
                                                                    @endfor
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                    <p class="mb-3 m-mb-3 ">{{$review->review_content}}</p>
                                                    <div class="d-flex justify-content-sm-start justify-content-center">
                                                        <p class="mb-0 text-muted fs-13 lh-1 ">{{$review->create_datetime}}</p>
                                                        <a href="javascript:void(0)" onclick="openReplyModal('{{ $review->id_review }}')" class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>

                                                    </div>


                                                    {{-- @if (isset($data))
                                                    @foreach ($pp_reply->where('id_review', $review->id_review) as $reply)
                                        <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                            <img src="{{ asset('/assets/images/review-1.jpg') }}" alt="Danny Fox"
                                                class=" review-icon mr-sm-8 mb-sm-0 img-fluid"
                                                style="width: 84px; height: 84px; object-fit: cover;">
                                            <div class="media-body">
                                                <div class="row mb-1 align-items-center">
                                                    <div class="col-sm-6 mb-2 mb-sm-0  ">
                                                        <h4 class="fw-600 mb-0 text-heading fs-14">{{$reply->reply_name}}</h4>
                                                    </div>
                                                </div>
                                                    <p class="mb-3 m-mb-3 ">{{$reply->reply_content}}</p>
                                                    <div class="d-flex justify-content-sm-start justify-content-center">
                                                        <p class="mb-0 text-muted fs-13 lh-1 ">{{$reply->create_datetime}}</p>
                                                        <a href="javascript:void(0)" onclick="openReplyModal('{{ $reply->id_review }}')" class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>

                                                    </div>
                                                    @endforeach
                                    @endif
                                                     --}}

                                                     @if (isset($data))
                                                    @foreach ($pp_reply->where('id_review', $review->id_review) as $reply)
                                                    <br>
                                                        <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                                            @if (isset($data))
                                                            @foreach ( $profiles->where('create_by', $reply->create_by)->unique('id_profiles') as $item)
                                                                @if (!empty($item->imageuser))
                                                                    <img src="{{ $item->imageuser }}" alt="{{ $item->imageuser }}" class="review-icon mr-sm-8 mb-sm-0 img-fluid" style="width: 84px; height: 84px; object-fit: cover;">
                                                                @else
                                                                    <img src="{{ asset('/assets/images/user2.jpg') }}" alt="{{ $item->imageuser }}" class="review-icon mr-sm-8 mb-sm-0 img-fluid" style="width: 84px; height: 84px; object-fit: cover;">
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                            <div class="media-body">
                                                                <div class="row mb-1 align-items-center">
                                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                                        <h4 class="fw-600 mb-0 text-heading fs-14">{{$reply->reply_name}}</h4>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-3 m-mb-3 ">{{$reply->reply_content}}</p>
                                                                <div class="d-flex justify-content-sm-start justify-content-center">
                                                                    <p class="mb-0 text-muted fs-13 lh-1 ">{{$reply->create_datetime}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif


                                                    <div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="replyModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="replyModalLabel">Reply</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- แบบฟอร์มการตอบกลับ -->
                                                                    <form action="{{ url('/reply') }}" method="POST" id="form_reply_modal" class="needs-validation" novalidate>
                                                                        @csrf
                                                                        <input type="hidden" class="form-control form-control-lg" id="id_review_modal" name="id_review">
                                                                        <div class="row">
                                                                            @if (session('user_name'))
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group mb-4">
                                                                                        <input placeholder="Your Name" class="form-control form-control-pp form-control-pp-lg" value="{{ session('user_name') }}" type="text" name="name_reply" id="name_reply" readonly >
                                                                                            <div class="invalid-feedback">
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            @else
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group mb-4">
                                                                                    <input placeholder="Your Name" class="form-control form-control-pp form-control-pp-lg"  type="text" name="name_reply" id="name_reply">
                                                                                        <div class="invalid-feedback">
                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            @endif
                                                                            @if (session('user_email'))
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group mb-4">
                                                                                    <input type="email" placeholder="Email" name="email_reply" id="email_reply" value="{{ session('user_email') }}" readonly class="form-control form-control-pp form-control-pp-lg">
                                                                                    <div class="colorRed" id="ShowErrorEmail"></div>
                                                                                </div>
                                                                            </div>
                                                                            @else
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group mb-4">
                                                                                    <input type="email" placeholder="Email" name="email_reply" id="email_reply" class="form-control form-control-pp form-control-pp-lg">
                                                                                    <div class="colorRed" id="ShowErrorEmail"></div>
                                                                                </div>
                                                                            </div>
                                                                            @endif
                                                                        </div>

                                                                        @if (session('user_id'))
                                                                            <div class="form-group col-md-6 px-4">
                                                                                <input type="hidden" class="form-control form-control-lg "
                                                                                    id="user_id" name="user_id"
                                                                                    value="{{ session('user_id') }}">
                                                                            </div>
                                                                        @endif
                                                                        <div class="form-group ">
                                                                            <textarea class="form-control form-control-pp form-control-pp-lg textarea-pp" placeholder="Your Review" required name="content_reply" id="content_reply" rows="5"></textarea>
                                                                                <div class="invalid-feedback">
                                                                                    Please enter a message in the textarea.
                                                                                </div>
                                                                        </div>
                                                                        <button type="submit" class="afterButton rounded-pill btn-lg btn-block-sb wait-al" id="form_reply"> Submit </button>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                            </div>
                                        </div>
                                        @endforeach
                                    @endif

                                    {{-- <div class="comments-section">
                                        @if (isset($data))
                                            @foreach ($data as $item)
                                                <div class="comment">
                                                    <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                                        <img src="{{ asset('/assets/images/review-1.jpg') }}" alt="Danny Fox"
                                                            class="review-icon mr-sm-8 mb-sm-0 img-fluid"
                                                            style="width: 84px; height: 84px; object-fit: cover;">
                                                        <div class="media-body">
                                                            <div class="row mb-1 align-items-center">
                                                                <div class="col-sm-6 mb-2 mb-sm-0">
                                                                    <h4 class="fw-600 mb-0 text-heading fs-14">{{$item->review_name}}</h4>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                                        <li class="list-inline-item mr-0">
                                                                            @php
                                                                                $star = $item->review_star;
                                                                            @endphp
                                                                            @for ($i = 1; $i <= 5; $i++)
                                                                                @if ($i <= $star)
                                                                                    <span class="fa fa-star text-warning"></span>
                                                                                @else
                                                                                    <span class="fa fa-star text-secondary"></span>
                                                                                @endif
                                                                            @endfor
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <p class="mb-3 m-mb-3">{{$item->review_content}}</p>
                                                            <div class="d-flex justify-content-sm-start justify-content-center">
                                                                <p class="mb-0 text-muted fs-13 lh-1">{{$item->create_datetime}}</p>
                                                                <a href="javascript:void(0)" class="reply-link mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                                                            </div>
                                                            <br>
                                                            <!-- Reply form -->
                                                            <div class="reply-form" style="display: none;">
                                                                <div class="form-group">
                                                                    <textarea class="form-control form-control-pp form-control-pp-lg textarea-pp" placeholder="Your Review" required name="content" id="content" rows="5"></textarea>
                                                                    <div class="invalid-feedback">
                                                                        Please enter a message in the textarea.
                                                                    </div>
                                                                    <br>
                                                                    <button type="submit" class="afterButton rounded-pill btn-lg btn-block-sb wait-al" id="form_review"> Submit </button>
                                                                </div>
                                                            </div>
                                                            <!-- End reply form -->
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div> --}}


                                    {{-- <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center ">
                                        <img src="{{ asset('/assets/images/review-2.jpg') }}" alt="Viola Austin"
                                            class=" review-icon mr-sm-8 mb-sm-0 img-fluid"
                                            style="width: 84px; height: 84px; object-fit: cover;">
                                            <div class="media-body">
                                                <div class="row mb-1 align-items-center">
                                                    <div class="col-sm-6 mb-2 mb-sm-0  ">
                                                        <h4 class="fw-600 mb-0 text-heading fs-14">Danny Fox</h4>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <ul
                                                            class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                            <li class="list-inline-item mr-0">
                                                                <span class="align-item-right text-warning">
                                                                    <i class="fas fa-star"></i>
                                                                </span>
                                                                <span class="align-item-right text-warning">
                                                                    <i class="fas fa-star"></i>
                                                                </span>
                                                                <span class="align-item-right text-warning">
                                                                    <i class="fas fa-star"></i>
                                                                </span>
                                                                <span class="align-item-right text-warning">
                                                                    <i class="fas fa-star"></i>
                                                                </span>
                                                                <span class="align-item-right text-warning">
                                                                    <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                    <p class="mb-3 m-mb-3 ">Very good and fast support during the week. Thanks for
                                                        always keeping your WordPress themes up to date. Your level of support
                                                        and
                                                        dedication
                                                        is second to none.
                                                    </p>
                                                    <div class="d-flex justify-content-sm-start justify-content-center">
                                                        <p class="mb-0 text-muted fs-13 lh-1 ">02 Dec 2020 at 2:40pm</p>
                                                        <a href="javascript:void(0)"
                                                            class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                                                    </div>
                                            </div>
                                    </div> --}}
                                </div>
                            </div>
                        </section>

                        <section class="pt-6 border-bottom-pp section-pp">
                            <div class="card border-0">
                                <div class="card-body pt-0 ">
                                    <h3 class="fw-600 fs-16 lh-2 text-heading mb-4">Write A Review</h3>
                                    <form action="{{ url('/review') }}"  method="POST" id="form_review" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="form-group mb-4 d-flex justify-content-start">
                                            <div class="rate-input">
                                                <input type="radio" id="star5" name="star" value="5">
                                                <label for="star5" title="text" class="mb-0 mr-1 lh-1">
                                                    <i class="fas fa-star"></i>
                                                </label>
                                                <input type="radio" id="star4" name="star" value="4">
                                                <label for="star4" title="text" class="mb-0 mr-1 lh-1">
                                                    <i class="fas fa-star"></i>
                                                </label>
                                                <input type="radio" id="star3" name="star" value="3">
                                                <label for="star3" title="text" class="mb-0 mr-1 lh-1">
                                                    <i class="fas fa-star"></i>
                                                </label>
                                                <input type="radio" id="star2" name="star" value="2">
                                                <label for="star2" title="text" class="mb-0 mr-1 lh-1">
                                                    <i class="fas fa-star"></i>
                                                </label>
                                                <input type="radio" id="star1" name="star" value="1">
                                                <label for="star1" title="text" class="mb-0 mr-1 lh-1">
                                                    <i class="fas fa-star"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @if (session('user_name'))
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-4">
                                                        <input placeholder="Your Name" class="form-control form-control-pp form-control-pp-lg" value="{{ session('user_name') }}" type="text" name="name" id="name" readonly >
                                                            <div class="invalid-feedback">
                                                            </div>
                                                    </div>
                                                </div>
                                            @else
                                            <div class="col-sm-6">
                                                <div class="form-group mb-4">
                                                    <input placeholder="Your Name" class="form-control form-control-pp form-control-pp-lg"  type="text" name="name" id="name">
                                                        <div class="invalid-feedback">
                                                        </div>
                                                </div>
                                            </div>
                                            @endif
                                            @if (session('user_email'))
                                            <div class="col-sm-6">
                                                <div class="form-group mb-4">
                                                    <input type="email" placeholder="Email" name="email" id="email" value="{{ session('user_email') }}" readonly class="form-control form-control-pp form-control-pp-lg">
                                                    <div class="colorRed" id="ShowErrorEmail"></div>
                                                </div>
                                            </div>
                                            @else
                                            <div class="col-sm-6">
                                                <div class="form-group mb-4">
                                                    <input type="email" placeholder="Email" name="email" id="email" class="form-control form-control-pp form-control-pp-lg">
                                                    <div class="colorRed" id="ShowErrorEmail"></div>
                                                </div>
                                            </div>
                                            @endif
                                        </div>

                                        @if (session('user_id'))
                                            <div class="form-group col-md-6 px-4">
                                                <input type="hidden" class="form-control form-control-lg "
                                                    id="user_id" name="user_id"
                                                    value="{{ session('user_id') }}">
                                            </div>
                                        @endif
                                        <div class="form-group ">
                                            <textarea class="form-control form-control-pp form-control-pp-lg textarea-pp" placeholder="Your Review" required name="content" id="content" rows="5"></textarea>
                                                <div class="invalid-feedback">
                                                    Please enter a message in the textarea.
                                                </div>
                                        </div>
                                        <button type="submit" class="afterButton rounded-pill btn-lg btn-block-sb wait-al" id="form_review"> Submit </button>

                                    </form>

                                </div>
                            </div>
                        </section>
                        {{-- เอาของpodมาวาง --}}









                    </article>
                    @break
                @endforeach


                <aside class="col-lg-4 pl-xl-4 pdr-0 primary-sidebar sidebar-sticky  ">
                    <div class="make-me-sticky hide-all ">
                        <div class="card border-0">

                            <div class="card-body pr-sm-6 pl-sm-6 shadow-xxs-2 pb-5 pt-0">
                                <form>
                                    <div class="tab-content pt-1 pb-0 px-0 shadow-none">
                                        {{-- Request Info ID --}}
                                        <div class="tab-pane fade fade show active" id="request-info" role="tabpanel">

                                            <div class="hide-content">
                                                <div
                                                    class="form-check d-flex align-items-center border-bottom-pp pb-3 mb-3">
                                                    <input class="form-check-input" type="radio" name="agent"
                                                        value="option1">
                                                    <div class="form-check-label ml-2">
                                                        <div class="d-flex align-items-center mt-3">
                                                            <a href="javascript:void(0)" class="d-block agent-icon mr-3">
                                                                <img class="img-angent"
                                                                    src="{{ asset('/assets/images/agent-1.jpg') }}"
                                                                    class="rounded-circle" alt="agent-2">
                                                            </a>
                                                            <div>
                                                                <a href="javascript:void(0)"
                                                                    class="d-block text-dark font-weight-500 lh-15 hover-primary">Oliver
                                                                    Beddows</a>
                                                                <p class="mb-0 fs-13 mb-0 lh-17">Sales Excutive</p>
                                                                <p class="mb-0 fs-13 mb-0 lh-17">
                                                                    <span>(+123)</span><span
                                                                        class="text-heading d-inline-block ml-2">1900
                                                                        68668</span>
                                                                </p>

                                                                <ul class="list-inline mb-0 fs-22 pl-2">

                                                                    <li class="list-inline-item mr-2 ml-2 mb-0">
                                                                        <a href="https://line.me/R/ti/p/@Luvdrive?from=page"
                                                                            target="_blank">
                                                                            <i class="fa-brands fa-line text-success"></i>
                                                                        </a>
                                                                    </li>


                                                                    <li class="list-inline-item mr-2 ml-2 mb-0">
                                                                        <a href="tel:091-545-3939" target="_blank">
                                                                            <i class="fa-solid fa-phone text-blue"></i>
                                                                        </a>
                                                                    </li>
                                                                    </a>
                                                                </ul>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-check d-flex align-items-center mb-6">
                                                    <input class="form-check-input" type="radio" name="agent"
                                                        id="inlineRadio2" value="option2">
                                                    <div class="form-check-label ml-2">
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0)" class="d-block agent-icon mr-3">
                                                                <img class="img-angent"
                                                                    src="{{ asset('/assets/images/agent-2.jpg') }}"
                                                                    class="rounded-circle" alt="agent-1">
                                                            </a>
                                                            <div>
                                                                <a href="javascript:void(0)"
                                                                    class="d-block text-dark font-weight-500 lh-15 hover-primary">Max
                                                                    Kordex</a>
                                                                <p class="mb-0 fs-13 mb-0 lh-17">Real estate broker</p>
                                                                <p class="mb-0 fs-13 mb-0 lh-17">
                                                                    <span>(+123)</span><span
                                                                        class="text-heading d-inline-block ml-2">1900
                                                                        68668</span>
                                                                </p>

                                                                <ul class="list-inline mb-0 fs-22 pl-2">

                                                                    <li class="list-inline-item mr-2 ml-2 mb-0">
                                                                        <a href="https://line.me/R/ti/p/@Luvdrive?from=page"
                                                                            target="_blank">
                                                                            <i class="fa-brands fa-line text-success"></i>
                                                                        </a>
                                                                    </li>


                                                                    <li class="list-inline-item mr-2 ml-2 mb-0">
                                                                        <a href="tel:091-545-3939" target="_blank">
                                                                            <i class="fa-solid fa-phone text-blue"></i>
                                                                        </a>
                                                                    </li>

                                                                </ul>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3 hide-on-ls show-on-ss">
                                                <h2 class="fw-600 text-center">Contact</h2>
                                            </div>
                                            <div class="mt-4">
                                                <div class="form-group mb-2">
                                                    <input type="text"
                                                        class="form-control-pp form-control-pp-lg border-0"
                                                        placeholder="First Name, Last Name">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <input type="email"
                                                        class="form-control-pp form-control-pp-lg border-0"
                                                        placeholder="Your Email">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <input type="tel"
                                                        class="form-control-pp form-control-pp-lg border-0"
                                                        placeholder="Your phone">
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <textarea class="form-control-pp border-0 textarea-pp" rows="4">Hello, I'm interested in Villa Called Archangel</textarea>
                                            </div>
                                            {{-- เอา btn-t-white ออก --}}
                                            <button type="submit" class="afterButton rounded-pill btn-lg btn-block"
                                                id="submitModalBtn"> Request Info</button>
                                            <div class="form-group form-check mt-2 mb-0">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                <label class="form-check-label fs-13" for="exampleCheck2">Egestas
                                                    fringilla
                                                    phasellus
                                                    faucibus
                                                    scelerisque
                                                    eleifend donec.</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </aside>


            </div>
        </div>

        <section class="section-pp md-mb-80">
            <div class="container-pp ">
                <h4 class="fw-600 fs-22 text-heading ">Similar Homes You May Like</h4>

                <div class="max-width1460-con position-relative mr-auto ml-auto mt-4">
                    <div class="row">
                        <div class="col-lg-12 aos-init aos-animate pl-0 pr-0" data-aos="fade-up" data-aos-delay="300">
                            <div class="pro-city-slider position-relative ">
                                <div class="swipersss swiper-initialized swiper-horizontal swiper-pointer swiper-backface-hidden">
                                    <div class="swiper-wrapper pb-20">

                                        @foreach ($blogs->where('property_approve', 1)->unique('id_property') as $info)
                                            @if($info->id_property != $id_property)
                                                <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active">
                                                    <div class="card box-shadow-lightblue mb-30">
                                                        <div class="card-body p-0">
                                                            <div class="img-block ">
                                                                <div class="block-text text-center">
                                                                    <b class="font-size-13">FEATURED</b>
                                                                </div>
                                                                <div class="text-block text-center">
                                                                    <a href="javascript:void(0)" class="font-weight-500">{{ isset($info->property_price) ? '฿ ' . $info->property_price : ' N/A' }}</a>
                                                                </div>
                                                                <img src="{{ $info->media_property }}" alt="listings" class="card-img-top img-sell">
                                                            </div>
                                                            <div class="p-10">
                                                                {{-- <h6 class="card-title"><a href="{{ '?id_property=' . $info->id_property }}">{{ isset($info->property_title) ? $info->property_title : ' N/A' }}</a></h6> --}}
                                                                <h6 class="card-title">
                                                                    <a href="{{ '?id_property=' . $info->id_property }}">
                                                                        {{ isset($info->property_title) ? Str::limit($info->property_title, 45, '...') : 'N/A' }}
                                                                    </a>
                                                                </h6>
                                                                <p class="list-text">
                                                                    @if(is_null($info->property_provinces))
                                                                        <a class="text-muted">N/A</a>
                                                                    @endif

                                                                    @foreach($provinces as $province)
                                                                        @if($info->property_provinces == $province->id)
                                                                        <a class="text-muted">{{ $province->name_th }}</a>
                                                                        @endif
                                                                    @endforeach

                                                                    @foreach($amphures as $amphure)
                                                                        @if($info->property_amphures == $amphure->id)
                                                                        <a class="text-muted">{{ $amphure->name_th }}</a>
                                                                        @endif
                                                                    @endforeach

                                                                    @foreach($districts as $district)
                                                                        @if($info->property_districts == $district->id)
                                                                        <a class="text-muted">{{ $district->name_th }}</a>

                                                                        @endif
                                                                    @endforeach

                                                                    @foreach($districts as $district)
                                                                        @if($info->property_districts == $district->id)
                                                                        <a class="text-muted">{{ $district->zip_code }}</a>
                                                                        @endif
                                                                    @endforeach
                                                                </p>
                                                                <div class="d-flex align-items-center">
                                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i>
                                                                        {{ isset($info->property_bedrooms) ? $info->property_bedrooms . ' bed' : ' N/A' }}
                                                                    </a>
                                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i>
                                                                        {{ isset($info->property_bathrooms) ? $info->property_bathrooms . ' bath' : ' N/A' }}
                                                                    </a>
                                                                    <a href="javascript:void(0)" class="mr-10"> <i class="fa-brands fa-uncharted"></i>
                                                                        {{ isset($info->property_interior_size) ? $info->property_interior_size . ' sqft' : ' N/A' }}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer bg-transparent">
                                                            <div class="d-flex ">
                                                                <div class="flex-grow-1">
                                                                    <label class="label-700">For Rent</label>
                                                                </div>
                                                                <div class="flex-row-reverse">
                                                                    <i class="fa-regular fa-share-from-square mr-10 blue"aria-hidden="true"></i>
                                                                    <i class="fa fa-heart-o mr-10 red" aria-hidden="true"></i>
                                                                    <i class="fa-regular fa-square-plus mr-10 green" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

                                        {{-- <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active">
                                            <div class="card box-shadow-lightblue mb-30">
                                                <div class="card-body p-0">
                                                    <div class="img-block ">
                                                        <div class="block-text text-center">
                                                            <b class="font-size-13">FEATURED</b>
                                                        </div>
                                                        <div class="text-block text-center">
                                                            <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                        </div>
                                                        <img src="{{ asset('/assets/images/properties-grid-02.jpg') }}" alt="listings"
                                                            class="card-img-top img-sell">
                                                    </div>
                                                    <div class="p-10">
                                                        <h6 class="card-title"><a href="javascript:void(0)">Equestrian Family Home</a></h6>
                                                        <p class="list-text">San Diego City, CA, USA</p>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> 5
                                                                bed</a>
                                                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i> 4
                                                                bath</a>
                                                            <a href="javascript:void(0)" class="mr-10"> <i
                                                                    class="fa-brands fa-uncharted"></i> 900 sqft</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <div class="d-flex ">
                                                        <div class="flex-grow-1">
                                                            <label class="label-700">For Rent</label>
                                                        </div>
                                                        <div class="flex-row-reverse">
                                                            <i class="fa-regular fa-share-from-square mr-10 blue"aria-hidden="true"></i>
                                                            <i class="fa fa-heart-o mr-10 red" aria-hidden="true"></i>
                                                            <i class="fa-regular fa-square-plus mr-10 green" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                            <div class="card box-shadow-lightblue mb-30">
                                                <div class="card-body p-0">
                                                    <div class="img-block ">
                                                        <div class="text-block text-center">
                                                            <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                        </div>
                                                        <img src="{{ asset('/assets/images/properties-grid-05.jpg') }}" alt="listings"
                                                            class="card-img-top img-sell">
                                                    </div>

                                                    <div class="p-10">
                                                        <h6 class="card-title"><a href="javascript:void(0)">Equestrian Family Home</a>
                                                        </h6>
                                                        <p class="list-text">San Diego City, CA, USA</p>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> 5
                                                                bed</a>
                                                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i>
                                                                4 bath</a>
                                                            <a href="javascript:void(0)" class="mr-10"> <i
                                                                    class="fa-brands fa-uncharted"></i> 900 sqft</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <div class="d-flex ">ป
                                                        <div class="flex-grow-1">
                                                            <label class="label-700">For Rent</label>
                                                        </div>
                                                        <div class="flex-row-reverse">
                                                            <i class="fa-regular fa-share-from-square mr-10 blue"aria-hidden="true"></i>
                                                            <i class="fa fa-heart-o mr-10 red" aria-hidden="true"></i>
                                                            <i class="fa-regular fa-square-plus mr-10 green" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                            <div class="card box-shadow-lightblue mb-30">
                                                <div class="card-body p-0">
                                                    <div class="img-block ">
                                                        <div class="block-text text-center">
                                                            <b class="font-size-13">FEATURED</b>
                                                        </div>
                                                        <div class="text-block text-center">
                                                            <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                        </div>
                                                        <img src="{{ asset('/assets/images/properties-grid-06.jpg') }}" alt="listings"
                                                            class="card-img-top img-sell">
                                                    </div>

                                                    <div class="p-10">
                                                        <h6 class="card-title"><a href="javascript:void(0)">Equestrian Family Home</a></h6>
                                                        <p class="list-text">San Diego City, CA, USA</p>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> 5
                                                                bed</a>
                                                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i> 4
                                                                bath</a>
                                                            <a href="javascript:void(0)" class="mr-10"> <i
                                                                    class="fa-brands fa-uncharted"></i> 900 sqft</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <div class="d-flex ">
                                                        <div class="flex-grow-1">
                                                            <label class="label-700">For Rent</label>
                                                        </div>
                                                        <div class="flex-row-reverse">
                                                            <i class="fa-regular fa-share-from-square mr-10 blue"aria-hidden="true"></i>
                                                            <i class="fa fa-heart-o mr-10 red" aria-hidden="true"></i>
                                                            <i class="fa-regular fa-square-plus mr-10 green" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                            <div class="card box-shadow-lightblue mb-30">
                                                <div class="card-body p-0">
                                                    <div class="img-block ">
                                                        <div class="block-text text-center ">
                                                            <b class="font-size-13">FEATURED</b>
                                                        </div>
                                                        <div class="text-block text-center">
                                                            <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                        </div>
                                                        <img src="{{ asset('/assets/images/properties-grid-07.jpg') }}" alt="listings"
                                                            class="card-img-top img-sell">
                                                    </div>

                                                    <div class="p-10">
                                                        <h6 class="card-title"><a href="javascript:void(0)">Equestrian Family Home</a></h6>
                                                        <p class="list-text">San Diego City, CA, USA</p>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> 5
                                                                bed</a>
                                                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i> 4
                                                                bath</a>
                                                            <a href="javascript:void(0)" class="mr-10"> <i
                                                                    class="fa-brands fa-uncharted"></i> 900 sqft</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <div class="d-flex ">
                                                        <div class="flex-grow-1">
                                                            <label class="label-700">For Rent</label>
                                                        </div>
                                                        <div class="flex-row-reverse">
                                                            <i class="fa-regular fa-share-from-square mr-10 blue"aria-hidden="true"></i>
                                                            <i class="fa fa-heart-o mr-10 red" aria-hidden="true"></i>
                                                            <i class="fa-regular fa-square-plus mr-10 green" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                            <div class="card box-shadow-lightblue mb-30">
                                                <div class="card-body p-0">
                                                    <div class="img-block ">
                                                        <div class="text-block text-center">
                                                            <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                        </div>
                                                        <img src="{{ asset('/assets/images/properties-grid-02.jpg') }}" alt="listings"
                                                            class="card-img-top img-sell">
                                                    </div>

                                                    <div class="p-10">
                                                        <h6 class="card-title"><a href="javascript:void(0)">Equestrian Family Home</a></h6>
                                                        <p class="list-text">San Diego City, CA, USA</p>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> 5
                                                                bed</a>
                                                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i> 4
                                                                bath</a>
                                                            <a href="javascript:void(0)" class="mr-10"> <i
                                                                    class="fa-brands fa-uncharted"></i> 900 sqft</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <div class="d-flex ">
                                                        <div class="flex-grow-1">
                                                            <label class="label-700">For Rent</label>
                                                        </div>
                                                        <div class="flex-row-reverse">
                                                            <i class="fa-regular fa-share-from-square mr-10 blue"aria-hidden="true"></i>
                                                            <i class="fa fa-heart-o mr-10 red" aria-hidden="true"></i>
                                                            <i class="fa-regular fa-square-plus mr-10 green" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                            <div class="card box-shadow-lightblue mb-30">
                                                <div class="card-body p-0">
                                                    <div class="img-block ">
                                                        <div class="block-text text-center ">
                                                            <b class="font-size-13">FEATURED</b>
                                                        </div>
                                                        <div class="text-block text-center">
                                                            <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                        </div>
                                                        <img src="{{ asset('/assets/images/properties-grid-05.jpg') }}" alt="listings"
                                                            class="card-img-top img-sell">
                                                    </div>

                                                    <div class="p-10">
                                                        <h6 class="card-title"><a href="javascript:void(0)">Equestrian Family Home</a></h6>
                                                        <p class="list-text">San Diego City, CA, USA</p>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> 5
                                                                bed</a>
                                                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i> 4
                                                                bath</a>
                                                            <a href="javascript:void(0)" class="mr-10"> <i
                                                                    class="fa-brands fa-uncharted"></i> 900 sqft</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <div class="d-flex ">
                                                        <div class="flex-grow-1">
                                                            <label class="label-700">For Rent</label>
                                                        </div>
                                                        <div class="flex-row-reverse">
                                                            <i class="fa-regular fa-share-from-square mr-10 blue"aria-hidden="true"></i>
                                                            <i class="fa fa-heart-o mr-10 red" aria-hidden="true"></i>
                                                            <i class="fa-regular fa-square-plus mr-10 green" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                            <div class="card box-shadow-lightblue mb-30">
                                                <div class="card-body p-0">
                                                    <div class="img-block ">
                                                        <div class="block-text text-center">
                                                            <b class="font-size-13">FEATURED</b>
                                                        </div>
                                                        <div class="text-block text-center">
                                                            <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                        </div>
                                                        <img src="{{ asset('/assets/images/properties-grid-06.jpg') }}" alt="listings"
                                                            class="card-img-top img-sell">
                                                    </div>

                                                    <div class="p-10">
                                                        <h6 class="card-title"><a href="javascript:void(0)">Equestrian Family Home</a></h6>
                                                        <p class="list-text">San Diego City, CA, USA</p>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> 5
                                                                bed</a>
                                                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i> 4
                                                                bath</a>
                                                            <a href="javascript:void(0)" class="mr-10"> <i
                                                                    class="fa-brands fa-uncharted"></i> 900 sqft</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <div class="d-flex ">
                                                        <div class="flex-grow-1">
                                                            <label class="label-700">For Rent</label>
                                                        </div>
                                                        <div class="flex-row-reverse">
                                                            <i class="fa-regular fa-share-from-square mr-10 blue"aria-hidden="true"></i>
                                                            <i class="fa fa-heart-o mr-10 red" aria-hidden="true"></i>
                                                            <i class="fa-regular fa-square-plus mr-10 green" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                            <div class="card box-shadow-lightblue mb-30">
                                                <div class="card-body p-0">
                                                    <div class="img-block ">
                                                        <div class="text-block text-center">
                                                            <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                        </div>
                                                        <img src="{{ asset('/assets/images/properties-grid-07.jpg') }}" alt="listings"
                                                            class="card-img-top img-sell">
                                                    </div>

                                                    <div class="p-10">
                                                        <h6 class="card-title"><a href="javascript:void(0)">Equestrian Family Home</a>
                                                        </h6>
                                                        <p class="list-text">San Diego City, CA, USA</p>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> 5
                                                                bed</a>
                                                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i>
                                                                4 bath</a>
                                                            <a href="javascript:void(0)" class="mr-10"> <i
                                                                    class="fa-brands fa-uncharted"></i> 900 sqft</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <div class="d-flex ">
                                                        <div class="flex-grow-1">
                                                            <label class="label-700">For Rent</label>
                                                        </div>
                                                        <div class="flex-row-reverse">
                                                            <i class="fa-regular fa-share-from-square mr-10 blue"aria-hidden="true"></i>
                                                            <i class="fa fa-heart-o mr-10 red" aria-hidden="true"></i>
                                                            <i class="fa-regular fa-square-plus mr-10 green" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                            <div class="card box-shadow-lightblue mb-30">
                                                <div class="card-body p-0">
                                                    <div class="img-block ">
                                                        <div class="block-text text-center ">
                                                            <b class="font-size-13">FEATURED</b>
                                                        </div>
                                                        <div class="text-block text-center">
                                                            <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                        </div>
                                                        <img src="{{ asset('/assets/images/properties-grid-02.jpg') }}" alt="listings"
                                                            class="card-img-top img-sell">
                                                    </div>

                                                    <div class="p-10">
                                                        <h6 class="card-title"><a href="javascript:void(0)">Equestrian Family Home</a></h6>
                                                        <p class="list-text">San Diego City, CA, USA</p>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> 5
                                                                bed</a>
                                                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i> 4
                                                                bath</a>
                                                            <a href="javascript:void(0)" class="mr-10"> <i
                                                                    class="fa-brands fa-uncharted"></i> 900 sqft</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <div class="d-flex ">
                                                        <div class="flex-grow-1">
                                                            <label class="label-700">For Rent</label>
                                                        </div>
                                                        <div class="flex-row-reverse">
                                                            <i class="fa-regular fa-share-from-square mr-10 blue"aria-hidden="true"></i>
                                                            <i class="fa fa-heart-o mr-10 red" aria-hidden="true"></i>
                                                            <i class="fa-regular fa-square-plus mr-10 green" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <div class="d-flex bottom-bar-action bottom-bar-action-01 con-t bg-gray-01 align-items-center position-fixed fixed-bottom d-sm-none"
            style="">
            <div class="media align-items-center">
                <img class="img-angent" src="{{ asset('/assets/images/agent-3.png') }}" alt="Irene Wallace"
                    class="mr-4 rounded-circle">
                <div class="media-body">
                    <a href="javascript:void(0)" class="d-block text-dark fs-15 font-weight-500 lh-15">Irene Wallace</a>
                    <span class="fs-13 lh-2">Sales Excutive</span>
                </div>
            </div>
            <div class="ml-auto">

                <ul class="list-inline mb-0 fs-22 pl-2">

                    <li class="list-inline-item mr-2 ml-2 mb-0">
                        <a href="https://line.me/R/ti/p/@Luvdrive?from=page" target="_blank">
                            <i class="fa-brands fa-line text-success"></i>
                        </a>
                    </li>


                    <li class="list-inline-item mr-2 ml-2 mb-0">
                        <a href="tel:091-545-3939" target="_blank">
                            <i class="fa-solid fa-phone text-blue"></i>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </main>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
$('.changeLanguage').change(function(event){
    var url = "{{ route('google.translate.change') }}";
    window.location.href = url+"?lang="+$(this).val()
})
</script>


@endsection

