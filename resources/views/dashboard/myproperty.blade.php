    <body>
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
                                        {{-- @foreach ($data['blogs']->unique('id_property') as $item)
                                            <div class="card m-5 p-4" style="width: 20rem;">
                                                <img class="showimagemedia" src="{{ $item->media_property }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title ">{{$item->property_title}}</h5>
                                                    <h4 class="card-title">Description</h4>
                                                    <p class="card-text">{!! $item->property_description ? json_decode($item->property_description) : "" !!}</p>
                                                    <a href="#" class="afterButton rounded-pill btn-lg mt-2 float-right fw-600 detail-button" data-id="{{ $item->id_property }}">Detail</a>
                                                    <a href="#" class="afterButton rounded-pill btn-lg mt-2 float-right fw-600" >Edit</a>
                                                </div>
                                            </div>
                                        @endforeach --}}
                                @foreach ($data['blogs']->where('id', Auth::id())->unique('id_property') as $item)
                                    {{-- @foreach ($data['blogs']->where('id', Auth::id()) as $item) --}}
                                        <div class="card m-4 box-shadow-lightblue showcard">
                                            <div class="card-body p-0">
                                                <div class="img-block ">
                                                    {{-- <div class="block-text text-center ">
                                                        <b class="font-size-13">FEATURED</b>
                                                    </div> --}}
                                                    <div class="text-block text-center">
                                                        <a href="javascript:void(0)" class="font-weight-500">฿ {{$item->property_price}}</a>
                                                    </div>
                                                    <img src="{{ $item->media_property }}" alt="listings"
                                                        class="card-img-top img-sell">
                                                </div>

                                                <div class="p-10">
                                                    <h6 class="card-title"><a href="javascript:void(0)">{{$item->property_title}}</a></h6>
                                                    <p class="list-text">{!! $item->property_description ? json_decode($item->property_description) : "" !!}</p>
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> {{$item->property_bedrooms}} bed</a>
                                                        <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i> {{$item->property_bathrooms}} bath</a>
                                                        <a href="javascript:void(0)" class="mr-10"> <i
                                                                class="fa-brands fa-uncharted"></i> {{$item->property_interior_size}} sqft</a>
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
                                            <a href="{{'addproperty?id_property=' . $item->id_property}}" class="afterButton rounded-pill btn-lg mt-2 float-right fw-600 detail-button">Edit</a>
                                            <a href="{{ route('deleteProperty', ['id_media' => $media->id_media, 'id_property' => $item->id_property]) }}" class=" btn-danger btn-sm mt-2 fa-solid fa-trash fs-20 trash-delete"></a>

                                            {{-- <a href="{{ route('deleteProperty',$item->id_property) }}" class=" btn-danger btn-sm mt-2 fa-solid fa-trash fs-20 trash-delete"></a> --}}
                                        </div>
                                    @endforeach
                        </div>
                    </div>

            </div>
                <footer class="mb-1 pt-30 m-0 mt-footer ">
                    <div class="container">
                        <div class="row items-center justify-content-center justify-content-md-between">
                            <div class="col-auto ">
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
        </div>
    </body>
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function () {
            // ค้นหาปุ่มทั้งหมดที่มีคลาส "detail-button"
            var detailButtons = document.querySelectorAll('.detail-button');

            // วนลูปผ่านปุ่มทั้งหมด
            detailButtons.forEach(function (button) {
                // เพิ่มการตรวจจับการคลิก
                button.addEventListener('click', function (event) {
                    // ดึงค่า id_property จากแอตทริบิวต์ data-id
                    var idProperty = button.getAttribute('data-id');
                    // แสดง id_property ใน alert
                    alert('id_property: ' + idProperty);
                    // หรือสามารถทำส่วนอื่น ๆ ตามที่ต้องการได้
                });
            });
        });
    </script> --}}
