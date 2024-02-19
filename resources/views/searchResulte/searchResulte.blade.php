@extends('layout.master')
@section('content')

    <!-- {{-- ส่วนหัว --}} -->
    <section class="background-grey pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>New York Homes for Sale</h2>
                </div>
            </div>
        </div>
    </section>


    {{-- menu-mobile --}}
    <section class="pt-20" >
        <div class="container">
            <div class="mobile-media pb-30">
                <h5 class="ml-15">Find your home</h5>
                    @include('searchResulte.search')
                <div class="row pt-10 ml-15">
                    <div class="d-flex justify-content-start" onclick="toggleSidebar()">
                        <a class="mobile " data-bs-toggle="offcanvas" href="#" role="button"
                            aria-controls="listingSidebarFilter">
                            <span class="fa-solid fa-sliders"></span> Advance
                        </a>
                    </div>
                </div>
                
                <div id="mySidebar" class="sidebar">
                    @include('searchResulte.sidebar-mobile')
                </div>
            </div>
        </div>
    </section>


    <section >
        <div class="container">
            <div class="mobile-laptop">
                <div class="row mb-15">
                    <div class="col-12 col-lg-12">
                        <div class=" d-flex justify-content-end">
                            <div class="pcs_dropdown">
                                <label class="mr-10">Sort by</label>
                                <select class="form-select">
                                    <option>Best Seller</option>
                                    <option>Best Match</option>
                                    <option>Price Low</option>
                                    <option>Price High</option>
                                </select>
                            </div>
                            <label class="ml-10 border-right"></label>

                            <div class="nav" id="nav-tab" role="tablist">
                                <div class="ml-10 mr-10 link-effect active" id="nav-profile-tab" data-toggle="tab"
                                    data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="true"> Grid </div>
                                <label class="border-right"></label>
                                <div class="ml-10 link-effect" id="nav-contact-tab" data-toggle="tab"
                                    data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">List </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="tab-content row" id="nav-tabContent">
                    <div class="col-lg-4 ">
                            @include('searchResulte.sidebar')
                    </div>
                    <div class="tab-pane fade col-lg-8 show active " id="nav-profile" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        @include('searchResulte.gride')
                    </div>
                    <div class="tab-pane fade col-lg-8 " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        @include('searchResulte.list')
                    </div>
                </div>
            </div>
                <div class="list-mobile">
                    @include('searchResulte.list')
                </div>
                <div class="grid-mobile">
                    @include('searchResulte.gride')
                </div>
        </div>

        {{-- จอ iPad 768px  --}}
        {{-- <div class="list-mobile">
            <div class="container">
                @include('searchResulte.list')
            </div>
        </div> --}}

        {{-- จอมือถือ 425px  --}}
        {{-- <div class="grid-mobile">
            <div class="container">
                @include('searchResulte.gride')
            </div>
        </div> --}}

    </section>
@endsection
