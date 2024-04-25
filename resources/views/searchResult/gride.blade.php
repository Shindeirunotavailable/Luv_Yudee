 @foreach ($blogs->where('property_approve', 1)->unique('id_property')->chunk(2) as $chunk)
        <div class="card-deck mb-30">
            @foreach ($chunk as $item)
            <div class="card m-4 box-shadow-lightblue cardresult">
                            <div class="card-body p-0">
                                <div class="img-block ">
                                    {{-- <div class="block-text text-center">
                                        <b class="font-size-13">FEATURED</b>
                                    </div> --}}
                                    <div class="text-block text-center">
                                        <a href="javascript:void(0)" class="font-weight-500">{{ isset($item->property_price) ? '฿ ' . $item->property_price : ' N/A' }}
                                        </a>
                                    </div>
                                    <img src="{{ $item->media_property }}" alt="listings"
                                        class="card-img-top img-sell">
                                </div>

                                <div class="p-10">
                                    <h6 class="card-title"><a href="{{ 'property/?id_property=' . $item->id_property }}">{{ isset($item->property_title) ? $item->property_title : ' N/A' }}</a></h6>
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
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i>
                                            {{ isset($item->property_bedrooms) ? $item->property_bedrooms . ' bed' : ' N/A' }} </a>
                                        <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i>
                                            {{ isset($item->property_bathrooms) ? $item->property_bathrooms . ' bath' : ' N/A' }}</a>
                                        <a href="javascript:void(0)" class="mr-10">
                                            <i class="fa-brands fa-uncharted"></i>
                                            {{ isset($item->property_interior_size) ? $item->property_interior_size . ' sqft' : ' N/A' }}</a>
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
            @endforeach
        </div>
    @endforeach
