<?php
$locale = session()->get('locale', 'th');
?>
<div class="dashboard__main pl-d-0-md ">
    <div class="dashboard__content property-page bg-f7 ">

        <div class="row align-items-center pb-d-40">
            <div class="col-lg-12">
                <div class="dashboard_title_area">
                    <h2 class="fw-600">{{ GoogleTranslate::trans('อสังหาริมทรัพย์ของฉัน', $locale) }}</h2>
                    <p class="text-ap">{{ GoogleTranslate::trans('เราดีใจที่ได้พบคุณอีกครั้ง', $locale) }}</p>
                </div>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="ps-widget bg-white bdrs-12 default-box-shadow2 pt-d-30 mb-6 overflow-hidden position-relative">
                <div class="row m-3">
                    <div class="table-responsive table-responsive-sm">
                        <table class="table table-striped">
                            <thead class="t-head color-yuudee">
                                <tr>
                                    <th scope="col" class="text-white">{{ GoogleTranslate::trans('รูปภาพ', $locale) }}</th>
                                    <th scope="col" class="text-white">{{ GoogleTranslate::trans('ชื่อรายการ', $locale) }}</th>
                                    <th scope="col" class="text-white">{{ GoogleTranslate::trans('วันที่สร้าง', $locale) }}</th>
                                    <th scope="col" class="text-white">{{ GoogleTranslate::trans('วันที่อัปเดต', $locale) }}</th>
                                    <th scope="col" class="text-white">{{ GoogleTranslate::trans('สถานะ', $locale) }}</th>
                                    <th scope="col" class="text-white">{{ GoogleTranslate::trans('การกระทำ', $locale) }}</th>
                                </tr>
                            </thead>
                            @foreach ($data['blogs']->where('id', Auth::id())->unique('id_property') as $item)
                                {{-- @foreach ($data['blogs']->unique('id_property') as $item) --}}

                                <tbody class="t-body">
                                    <tr>
                                        <th scope="row">
                                            <div class="listing-style1 dashboard-style d-xxl-flex align-items-center mb-0">
                                                <div class="list-thumb">
                                                    @if(isset($item->id_media) && !empty($item->id_media))
                                                        <img class="showproperty" src="{{ $item->media_property }}" alt="property">
                                                    @else
                                                        <img src="{{ asset('/assets/images/noimg.jpg') }}" alt="No Image" class="showproperty">
                                                    @endif
                                                </div>
                                            </div>
                                        </th>
                                        <td class="vam">
                                            <div class="list-content py-0 p-0 mt-2 mt-xxl-0 ps-xxl-4">
                                                <div class="h6 list-title">
                                                    <a href="{{ 'property/?id_property=' . $item->id_property }}">{{ $item->property_title }}</a>
                                                </div>
                                                    <p class="list-text mb-0 text-muted">
                                                    @if(is_null($item->property_provinces))
                                                        <a class="text-muted">N/A</a>
                                                    @endif
                                                    @foreach($data['provinces'] as $province)
                                                        @if($item->property_provinces == $province->id)
                                                            {{ $province->name_th }}
                                                            @endif
                                                        @endforeach

                                                        @foreach($data['amphures'] as $amphure)
                                                            @if($item->property_amphures == $amphure->id)
                                                                {{ $amphure->name_th }}
                                                            @endif
                                                        @endforeach

                                                        @foreach($data['districts'] as $district)
                                                            @if($item->property_districts == $district->id)
                                                                {{ $district->name_th }}
                                                            @endif
                                                        @endforeach

                                                        @foreach($data['districts'] as $district)
                                                            @if($item->property_districts == $district->id)
                                                                {{ $district->zip_code }}
                                                        @endif
                                                    @endforeach</p>
                                                    <div class="list-price">
                                                        <a href="#">{{ isset($item->property_price) ? '฿ ' . $item->property_price : ' N/A' }}</a>
                                                    </div>
                                            </div>
                                        </td>
                                        <td class="vam text-center">{{ $item->create_datetime }}</td>
                                        <td class="vam text-center">{{ $item->update_datetime }}</td>
                                        <td class="vam text-center">
                                            @if (!is_null($item->id_media) && !is_null($item->id_property))
                                                    @if ($item->property_approve)
                                                            <a href="{{ route('approve', ['id_property' => $item->id_property]) }}" id="approve_property_{{$item->id_property}}" class="m-2 btn-success btn-sm mt-2 text-center d-block" style="white-space: normal; width: fit-content;">{{ GoogleTranslate::trans('อนุมัติ', $locale) }}</a>
                                                        @else
                                                            <a href="{{ route('approve', ['id_property' => $item->id_property]) }}" id="approve_property_{{$item->id_property}}" class="m-2 btn-warning btn-sm mt-2 text-center d-block" style="white-space: normal; width: fit-content;">{{ GoogleTranslate::trans('รออนุมัติ', $locale) }}</a>
                                                    @endif
                                                @else
                                                <a href="javascript:void(0)" class="m-2 btn-danger btn-sm mt-2 text-center d-block" style="white-space: normal; width: fit-content;">{{ GoogleTranslate::trans('ข้อมูลไม่ครบ', $locale) }}</a>
                                            @endif
                                        </td>
                                        <td class="vam text-center">
                                            <div class="row justify-content-center p-2">
                                                <a href="{{ 'addproperty?id_property=' . $item->id_property }}" class="  btn-sm mt-2 fs-20 fa-solid fa-pen-to-square m-2"></a>
                                                {{-- {{dd($item);}} --}}
                                                @if (!is_null($item->id_media) && !is_null($item->id_property))
                                                        <a href="{{ route('deleteProperty', ['id_media' => $item->id_media, 'id_property' => $item->id_property]) }}" class=" m-2 btn-danger btn-sm mt-2 fa-solid fa-trash fs-20 trash-delete"></a>
                                                    @else
                                                        <a href="{{ route('deletenomediaProperty',$item->id_property) }}" class=" m-2 btn-danger btn-sm mt-2 fa-solid fa-trash fs-20 trash-delete"></a>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('dashboard.footerdashboard')
</div>


