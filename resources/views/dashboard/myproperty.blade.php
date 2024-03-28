        <div class="dashboard__main pl-d-0-md ">
            <div class="dashboard__content property-page bg-f7 ">

                <div class="row align-items-center pb-d-40">
                    <div class="col-lg-12">
                        <div class="dashboard_title_area">
                            <h2 class="fw-600">Test My Property</h2>
                            <p class="text-ap">We are glad to see you again!</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="ps-widget bg-white bdrs-12 default-box-shadow2 pt-d-30 mb-6 overflow-hidden position-relative">
                        <div class="row m-3">
                                 {{-- เอาไว้ใช้หน้าsearch_result
                                @foreach ($data['blogs']->unique('id_property') as $item) --}}
                            @foreach ($data['blogs']->where('id', Auth::id())->unique('id_property') as $item)

                                <div class="card m-4 box-shadow-lightblue showcard">
                                    <div class="card-body p-0">
                                        <div class="img-block ">
                                            <div class="block-text text-center ">
                                                <b class="font-size-13">FEATURED</b>
                                            </div>
                                            <div class="text-block text-center">
                                                <a href="javascript:void(0)" class="font-weight-500">฿ {{ $item->property_price }}</a>
                                            </div>
                                            <img src="{{ $item->media_property }}" alt="listings" class="card-img-top img-sell">
                                        </div>
                                        <div class="p-10">
                                            <h6 class="card-title"><a href="javascript:void(0)">{{ $item->property_title }}</a></h6>
                                                <p class="list-text mb-0 text-muted">{{$item->property_address}}</p>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> {{ $item->property_bedrooms }} bed</a>
                                                <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i> {{ $item->property_bathrooms }} bath</a>
                                                <a href="javascript:void(0)" class="mr-10"> <i class="fa-brands fa-uncharted"></i> {{ $item->property_interior_size }} sqft</a>
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
                                    <div class="card-footer bg-transparent">
                                        <a href="{{ 'addproperty?id_property=' . $item->id_property }}" class="  btn-sm mt-2 fs-20 fa-solid fa-pen-to-square "></a>
                                        <a href="{{ route('deleteProperty', ['id_media' => $item->id_media, 'id_property' => $item->id_property]) }}" class="btn-danger btn-sm mt-2 fa-solid fa-trash fs-20 trash-delete"></a>
                                        <a href="{{ 'property/?id_property=' . $item->id_property }}" class="  btn-sm mt-2 fs-20  ">detail</a>
                                    </div>
                                </div>
                            @endforeach

                            <div class="packages_table table-responsive">
                                <table class="table-style3 table at-savesearch">
                                    <thead class="t-head">
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Listing title</th>
                                            <th scope="col">Date Create</th>
                                            <th scope="col">Update Create</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data['blogs']->where('id', Auth::id())->unique('id_property') as $item)
                                        <tbody class="t-body">
                                            <tr>
                                                <th scope="row">
                                                    <div class="listing-style1 dashboard-style d-xxl-flex align-items-center mb-0">
                                                        <div class="list-thumb">
                                                            <img class="showproperty" src="{{ $item->media_property }}" alt="property">
                                                        </div>

                                                    </div>
                                                </th>
                                                <td class="vam">
                                                    <div class="list-content py-0 p-0 mt-2 mt-xxl-0 ps-xxl-4">
                                                        <div class="h6 list-title">
                                                            <a href="#">{{ $item->property_title }}</a>
                                                        </div>
                                                            <p class="list-text mb-0 text-muted">{{$item->property_address}}</p>
                                                            <div class="list-price">
                                                                <a href="#">฿ {{ $item->property_price }}</a>
                                                            </div>
                                                    </div>
                                                </td>
                                                <td class="vam text-center">{{ $item->create_datetime }}</td>
                                                <td class="vam text-center">{{ $item->update_datetime }}</td>
                                                <td class="vam text-center">
                                                    @if ($item->property_approve==true)
                                                            <a href="{{route('approve',['id_property'=>$item->id_property])}}" id="approve_property_{{$item->id_property}}" class="m-2 btn-success btn-sm mt-2 text-center">อนุมัติเเล้ว</a>
                                                        @else
                                                            <a href="{{route('approve',['id_property'=>$item->id_property])}}" id="approve_property_{{$item->id_property}}" class="m-2 btn-warning btn-sm mt-2 text-center">รอการอนุมัติ</a>
                                                        @endif
                                                </td>
                                                <td class="vam text-center">
                                                    <div class="row justify-content-center p-2">
                                                        <a href="{{ 'addproperty?id_property=' . $item->id_property }}" class="  btn-sm mt-2 fs-20 fa-solid fa-pen-to-square m-2"></a>
                                                        <a href="{{ route('deleteProperty', ['id_media' => $item->id_media, 'id_property' => $item->id_property]) }}" class=" m-2 btn-danger btn-sm mt-2 fa-solid fa-trash fs-20 trash-delete"></a>
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


