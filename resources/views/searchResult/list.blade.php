{{-- <div class="card mb-3 box-shadow-lightblue">
    <div class="card-body p-0">
        <div class="d-flex">
            <div class="col-lg-5 p-0">
                <div class="img-block ">
                    <div class="block-text text-center">

                        <b class="font-size-13">FEATURED</b>
                    </div>
                    <div class="text-list text-center">
                        <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                    </div>
                    <img class="img-list card-img-top" src="{{ asset('/assets/images/as-1.jpg') }}" alt="listings">
                </div>
            </div>

            <div class="col-lg-7 pt-15">
                <div class="d-flex align-items-start flex-column bd-highlight">
                    <div class="mb-auto bd-highlight">
                        <h6 class="card-title">Equestrian Family Home</h6>
                        <p class="list-text">San Diego City, CA, USA</p>
                    </div>
                    <div class="bd-highlight pt-30">
                        <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> 5 bed</a>
                        <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i> 4 bath</a>
                        <a href="javascript:void(0)" class="mr-10"> <i class="fa-brands fa-uncharted"></i> 900 sqft</a>
                    </div>
                </div>
                <div class="card-footer bg-transparent p-0">
                    <div class="row pt-18">
                        <div class="flex-grow-1">
                            <label class="label-700 ml-15">For Rent</label>
                        </div>
                        <div class="flex-row-reverse mr-20">
                            <i class="fa-regular fa-share-from-square blue p-1"aria-hidden="true"></i>
                            <i class="fa fa-heart-o red p-1" aria-hidden="true"></i>
                            <i class="fa-regular fa-square-plus green p-1" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> --}}

@foreach ($blogs->where('property_approve', 1)->unique('id_property') as $item)
    <div class="card mb-3 box-shadow-lightblue ">
        <div class="card-body p-0">
            <div class="d-flex">
                <div class="col-lg-5 p-0">
                    <div class="img-block ">
                        <div class="text-list text-center">
                            <a href="javascript:void(0)" class="font-weight-500">{{ isset($item->property_price) ? '฿ ' . $item->property_price : ' N/A' }}</a>
                        </div>
                        <img class="img-list card-img-top" src="{{ $item->media_property }}" alt="listings">
                    </div>
                </div>

                <div class="col-lg-7 pt-15">
                    <div class="d-flex align-items-start flex-column bd-highlight">
                        <div class="mb-auto bd-highlight">
                            <h6 class="card-title"><a href="{{ 'property/?id_property=' . $item->id_property }}">{{ isset($item->property_title) ? $item->property_title : ' N/A' }}</h6>
                            <p class="list-text">
                                @foreach($provinces as $province)
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
                                            @endforeach
                            </p>
                        </div>
                        <div class="bd-highlight pt-30">
                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i>
                                {{ isset($item->property_bedrooms) ? $item->property_bedrooms . ' bed' : ' N/A' }} </a>
                            <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i>
                                {{ isset($item->property_bathrooms) ? $item->property_bathrooms . ' bath' : ' N/A' }}</a>
                            <a href="javascript:void(0)" class="mr-10"> <i class="fa-brands fa-uncharted"></i>
                                {{ isset($item->property_interior_size) ? $item->property_interior_size . ' sqft' : ' N/A' }}</a>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent p-0">
                        <div class="row pt-18">
                            <div class="flex-grow-1">
                                <label class="label-700 ml-15">For Rent</label>
                            </div>
                            <div class="flex-row-reverse mr-20">
                                <i class="fa-regular fa-share-from-square blue "aria-hidden="true"></i>
                                <i class="fa fa-heart-o red p-1" aria-hidden="true"></i>
                                <i class="fa-regular fa-square-plus green " aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endforeach

