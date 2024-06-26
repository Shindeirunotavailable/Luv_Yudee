<?php
$locale = session()->get('locale', 'th');
?>
<div class="backg-container pt-5 pt-0">
    <section class="pt-0 mx20-lg">
        <div class="max-width1460-con position-relative mr-auto ml-auto">
            <div class="row wow fadeInUp" data-wow-delay="100ms">
                <div class="col-lg-6">
                    <div class="main-title-2">
                        <h2 class="title">{{ GoogleTranslate::trans('อสังหาริมทรัพย์ที่ขาย', $locale) }}</h2>
                        {{-- <p class="par">Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit</p> --}}
                    </div>
                </div>
                <div class="col-lg-6 my-3 pr-4">
                    <div class="d-flex home-icon-st flex-wrap d-sm-flex justify-content-start justify-content-md-end justify-content-lg-end">
                        <a class="d-flex align-items-center dark-color  me-2" href="#">
                            <i class=" icons fa-solid fa-house" aria-hidden="true"></i>{{ GoogleTranslate::trans('บ้าน', $locale) }}
                        </a>
                        <a class="d-flex align-items-center dark-color  me-2 md-me-2" href="#">
                            <i class="icons fa-regular fa-building" aria-hidden="true"></i>{{ GoogleTranslate::trans('อพาร์ตเมนต์', $locale) }}
                        </a>
                        <a class="d-flex align-items-center dark-color  me-2 md-me-2" href="#">
                            <i class="icons fa-solid fa-house-laptop" aria-hidden="true"></i>{{ GoogleTranslate::trans('สำนักงาน', $locale) }}
                        </a>
                        <a class="d-flex align-items-center dark-color  md-me-2" href="#">
                            <i class="icons fa-solid fa-house-flood-water" aria-hidden="true"></i>{{ GoogleTranslate::trans('วิลล่า', $locale) }}
                        </a>
                    </div>
                </div>
            </div>

            {{-- test1 --}}

            <div class="row">
                <div class="col-lg-12 aos-init aos-animate pl-0 pr-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="pro-city-slider position-relative ">
                        <div class="swipers swiper-initialized swiper-horizontal swiper-pointer swiper-backface-hidden">
                            <div class="swiper-wrapper pb-20">
                                @foreach ($blogs->where('property_approve', 1)->where('property_type', 1)->unique('id_property') as $item)
                                    <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active">
                                        <div class="card box-shadow-lightblue mb-30">
                                            <div class="card-body p-0">
                                                <div class="img-block ">
                                                    <div class="block-text text-center">
                                                        <b class="font-size-13">{{ GoogleTranslate::trans('โดดเด่น', $locale) }}</b>
                                                    </div>
                                                    <div class="text-block text-center">
                                                        <a href="javascript:void(0)" class="font-weight-500">{{ isset($item->property_price) ? '฿ ' . $item->property_price : ' N/A' }}</a>
                                                    </div>
                                                    <img src="{{ $item->media_property }}" alt="listings"
                                                        class="card-img-top img-sell">
                                                </div>

                                                <div class="p-10">
                                                    <h6 class="card-title"><a href="{{ 'property/?id_property=' . $item->id_property }}">{{ isset($item->property_title) ? Str::limit($item->property_title, 40) : ' N/A' }}</a></h6>
                                                    <p class="list-text">@foreach($provinces as $province)
                                                        @if($item->property_provinces == $province->id)
                                                        <a class="text-muted">{{ $province->name_th }}</a>
                                                        @else
                                                            <a class="text-muted"> N/A</a>
                                                        @endif
                                                        @break
                                                    @endforeach

                                                    @foreach($amphures as $amphure)
                                                        @if($item->property_amphures == $amphure->id)
                                                        <a class="text-muted">{{ $amphure->name_th }}</a>
                                                        @endif
                                                    @endforeach

                                                    @foreach($districts as $district)
                                                        @if($item->property_districts == $district->id)
                                                        <a class="text-muted">{{ $district->name_th }}</a>

                                                        @endif
                                                    @endforeach

                                                    @foreach($districts as $district)
                                                        @if($item->property_districts == $district->id)
                                                        <a class="text-muted">{{ $district->zip_code }}</a>
                                                        @endif
                                                    @endforeach</p>
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i>
                                                            {{ isset($item->property_bedrooms) ? $item->property_bedrooms . ' bed' : ' N/A' }} </a>
                                                        <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i>
                                                            {{ isset($item->property_bathrooms) ? $item->property_bathrooms . ' bath' : ' N/A' }}</a>
                                                        <a href="javascript:void(0)" class="mr-10"> <i
                                                                class="fa-brands fa-uncharted"></i>
                                                                {{ isset($item->property_interior_size) ? $item->property_interior_size . ' sqft' : ' N/A' }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-transparent">
                                                <div class="d-flex ">
                                                    <div class="flex-grow-1">
                                                        <label class="label-700">{{ GoogleTranslate::trans('ขาย', $locale) }}</label>
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
                                @endforeach

                                {{-- <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                    <div class="card box-shadow-lightblue mb-30">
                                        <div class="card-body p-0">
                                            <div class="img-block ">
                                                <div class="text-block text-center">
                                                    <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                </div>
                                                <img src="{{ asset('/assets/images/as-4.jpg') }}" alt="listings"
                                                    class="card-img-top img-sell">
                                            </div>

                                            <div class="p-10">
                                                <h6 class="card-title"><a href="javascript:void(0)">New Project | 89 Residence</a>
                                                </h6>
                                                <p class="list-text">{{ GoogleTranslate::trans('กรุงเทพมหานคร เขตห้วยขวาง 10310', $locale) }}</p>
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
                                                    <label class="label-700">{{ GoogleTranslate::trans('ขาย', $locale) }}</label>
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
                                                    <b class="font-size-13">{{ GoogleTranslate::trans('โดดเด่น', $locale) }}</b>
                                                </div>
                                                <div class="text-block text-center">
                                                    <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                </div>
                                                <img src="{{ asset('/assets/images/as-3.jpg') }}" alt="listings"
                                                    class="card-img-top img-sell">
                                            </div>

                                            <div class="p-10">
                                                <h6 class="card-title"><a href="javascript:void(0)">Nice Duplex Room around Sathorn Road</a></h6>
                                                <p class="list-text">{{ GoogleTranslate::trans('กรุงเทพมหานคร เขตยานนาวา 10120', $locale) }}</p>
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
                                                    <label class="label-700">{{ GoogleTranslate::trans('ขาย', $locale) }}</label>
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
                                                    <b class="font-size-13">{{ GoogleTranslate::trans('โดดเด่น', $locale) }}</b>
                                                </div>
                                                <div class="text-block text-center">
                                                    <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                </div>
                                                <img src="{{ asset('/assets/images/as-1.jpg') }}" alt="listings"
                                                    class="card-img-top img-sell">
                                            </div>

                                            <div class="p-10">
                                                <h6 class="card-title"><a href="javascript:void(0)">{{ GoogleTranslate::trans('Pool Villa บ้านพูลวิลล่า ห้วยใหญ่ ', $locale) }}</a></h6>
                                                <p class="list-text">{{ GoogleTranslate::trans('ชลบุรี บางละมุง หนองปรือ 20150', $locale) }}</p>
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
                                                    <label class="label-700">{{ GoogleTranslate::trans('ขาย', $locale) }}</label>
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
                                                <img src="{{ asset('/assets/images/as-2.jpg') }}" alt="listings"
                                                    class="card-img-top img-sell">
                                            </div>

                                            <div class="p-10">
                                                <h6 class="card-title"><a href="javascript:void(0)">{{ GoogleTranslate::trans('บ้านเดี่ยว โครงการ The City รามอินทรา', $locale) }}</a></h6>
                                                <p class="list-text">{{ GoogleTranslate::trans('กรุงเทพมหานคร เขตสายไหม ออเงิน 10220', $locale) }}</p>
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
                                                    <label class="label-700">{{ GoogleTranslate::trans('ขาย', $locale) }}</label>
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
                                                    <b class="font-size-13">{{ GoogleTranslate::trans('โดดเด่น', $locale) }}</b>
                                                </div>
                                                <div class="text-block text-center">
                                                    <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                </div>
                                                <img src="{{ asset('/assets/images/as-1.jpg') }}" alt="listings"
                                                    class="card-img-top img-sell">
                                            </div>

                                            <div class="p-10">
                                                <h6 class="card-title"><a href="javascript:void(0)">Casa Premium On Nut-Wongwaen</a></h6>
                                                <p class="list-text">{{ GoogleTranslate::trans('กรุงเทพมหานคร เขตประเวศ ดอกไม้ 10250', $locale) }}</p>
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
                                                    <label class="label-700">{{ GoogleTranslate::trans('ขาย', $locale) }}</label>
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
                                                    <b class="font-size-13">{{ GoogleTranslate::trans('โดดเด่น', $locale) }}</b>
                                                </div>
                                                <div class="text-block text-center">
                                                    <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                </div>
                                                <img src="{{ asset('/assets/images/as-3.jpg') }}" alt="listings"
                                                    class="card-img-top img-sell">
                                            </div>

                                            <div class="p-10">
                                                <h6 class="card-title"><a href="javascript:void(0)">{{ GoogleTranslate::trans('บ้านเดี่ยว ฮาบิเทีย ออร์บิต หทัยราษฎร์', $locale) }}</a></h6>
                                                <p class="list-text">{{ GoogleTranslate::trans('กรุงเทพมหานคร เขตคลองสามวา 10510', $locale) }}</p>
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
                                                    <label class="label-700">{{ GoogleTranslate::trans('ขาย', $locale) }}</label>
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
                                                <img src="{{ asset('/assets/images/as-4.jpg') }}" alt="listings"
                                                    class="card-img-top img-sell">
                                            </div>

                                            <div class="p-10">
                                                <h6 class="card-title"><a href="javascript:void(0)">New Project | 89 Residence</a>
                                                </h6>
                                                <p class="list-text">{{ GoogleTranslate::trans('กรุงเทพมหานคร เขตห้วยขวาง  10310', $locale) }}</p>
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
                                                    <label class="label-700">{{ GoogleTranslate::trans('ขาย', $locale) }}</label>
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
                                                    <b class="font-size-13">{{ GoogleTranslate::trans('โดดเด่น', $locale) }}</b>
                                                </div>
                                                <div class="text-block text-center">
                                                    <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                </div>
                                                <img src="{{ asset('/assets/images/as-1.jpg') }}" alt="listings"
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
                                                    <label class="label-700">{{ GoogleTranslate::trans('ขาย', $locale) }}</label>
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

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $('.changeLanguage').change(function(event){
        var url = "{{ route('google.translate.change') }}";
        window.location.href = url+"?lang="+$(this).val()
    })
    </script>
