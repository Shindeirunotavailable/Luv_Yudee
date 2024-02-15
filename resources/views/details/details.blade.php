@extends('layout.master')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

    <!-- {{-- ส่วนหัว --}} -->
    <section class="background-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-20">
                    <h2>New York Homes for Sale</h2>
                </div>
            </div>
        </div>
    </section>

    {{-- menu-search --}}
    <section class="background-grey">
        <div class="mobile-media">
            <div class="col-12 pt-30">
                @include('details.search')
            </div>
    
            <div class="col-6">
                <div class="d-flex " onclick="toggleSidebar()">
                    <a class="mobile " data-bs-toggle="offcanvas" href="#" role="button"
                        aria-controls="listingSidebarFilter">
                        <span class="fa-solid fa-sliders"></span> Advance
                    </a>
                </div>
            </div>
    
        </div>
    
        {{-- <div class="mobile-media">
            <div id="mySidebar" class="sidebar">
                @include('details.sidebar')
            </div>
        </div> --}}
    </section>


    <section class="pt-30 background-grey">
        <div class="container">
            <div class="row mb-15">
                {{-- <div class="col-6">
                    <div class="text-center">
                        <p>Showing 1–8 of 25 results</p>
                    </div>
                </div> --}}
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
                            <div class="ml-10 link-effect" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact"
                                type="button" role="tab" aria-controls="nav-contact" aria-selected="false">List </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content row" id="nav-tabContent">
                <div class="col-lg-4 ">
                    <div class="mobile-laptop">
                        {{-- SideBar --}}
                        @include('details.sidebar')
                    </div>
                </div>
                <div class="tab-pane fade show active col-lg-8" id="nav-profile" role="tabpanel"
                    aria-labelledby="nav-profile-tab">
                    {{-- gride --}}
                    @include('details.gride')
                </div>
                <div class="tab-pane fade col-lg-8" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    @include('details.list')
                </div>

            </div>
        </div>
    </section>
@endsection
