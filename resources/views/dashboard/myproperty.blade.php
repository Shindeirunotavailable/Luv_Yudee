
<style>
.col-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
}
</style>
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
                <div class="row d-flex">
                    <div class="col-xl-12">
                        <div class="ps-widget bg-white bdrs-12 default-box-shadow2 pt-d-30 mb-6 overflow-hidden position-relative">

                            <tbody>
                                @foreach ($data['blogs'] as $item)
                                    <tr>
                                        <td>{{$item->property_title}}</td>
                                        <textarea id="editor" >{{$item->property_description? json_decode($item->property_description) :""}}</textarea>
                                        <div class="col-2">
                                            <img src="{{ $item->media_property }}" alt="Property Image" style="width: 100%;">
                                        </div>
                                        <td>{{$item->property_title}}</td>
                                        <td>{{$item->property_title}}</td>
                                        <td>{{$item->property_title}}</td>
                                        <td>{{$item->property_title}}</td>
                                        <td>{{$item->property_title}}</td>
                                        <td>{{$item->property_title}}</td>
                                        <td>{{$item->property_title}}</td>
                                        {{-- <td>{{$item->media_property }}</td> --}}


                                    </tr>
                                @endforeach
                            </tbody>

                        </div>
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
    </body>
