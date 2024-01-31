

@extends('layout.master')
@section('content')

    <!-- {{-- ส่วนหัว --}} -->
    <section class="bgc-f7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-style1">
                        <h2 class="title">New York Homes for Sale</h2>
                        <div class="breadcumb-list"><a href="#">Home</a><a href="#">For Rent</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        {{-- <div class="burger">
            <div id="mySidebar" class="sidebar">
                @include('details.sitebar')
            </div>
        </div> --}}


    <div class="burger">
        <div class="bgc-f7">
            <div class="container">
                <div class="search_area">
                    <h6 class="list-title">Find your home</h6>
                    @include('details.search')
                </div>
            </div>
        </div>
    </div>

    <section class="pt0 pb90 bgc-f7">
        <div class="row align-items-center mb20 container d-flex">
            <div class="page_control_shorting d-flex justify-content-between  mt-2">
                <!-- Advance section -->
                <div class="burger">
                    <div class="d-flex " onclick="toggleSidebar()">
                        <a class="mobile " data-bs-toggle="offcanvas" href="#" role="button"
                            aria-controls="listingSidebarFilter">
                            <span class="fa-solid fa-sliders"></span> Advance
                        </a>
                    </div>
                </div>
                <!-- View options section (Grid/List) -->
                <div class="nav  align-items-center justify-content-end col-lg-12 " id="nav-tab" role="tablist">

                    <div class="screnn_grid_list">
                        <div class="pcs_dropdown pr10 d-flex align-items-center">
                            <span style="min-width: 60px;">Sort by</span>
                            <select class="form-select">
                                <option>Newest</option>
                                <option>Best Seller</option>
                                <option>Best Match</option>
                                <option>Price Low</option>
                                <option>Price High</option>
                            </select>
                        </div>
                    </div>
                    <!-- Sort by section -->

                    <div class="pl15 pr15 bdrl1 bdrr1 d-none d-md-block cursor active" id="nav-home-tab" data-toggle="tab"
                        href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Grid</div>
                    <div class="pl15 d-none d-md-block cursor" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                        role="tab" aria-controls="nav-profile" aria-selected="false">List</div>

                    {{-- <div class="pl15 pr15 bdrl1 bdrr1 d-none d-md-block cursor active" id="home-tab" data-toggle="tab"
                        href="#home" role="tab" aria-controls="home" aria-selected="true">Grid</div>
                    <div class="pl15 d-none d-md-block cursor" id="profile-tab" data-toggle="tab" href="#profile"
                        role="tab" aria-controls="profile" aria-selected="false">List</div> --}}

                </div>
            </div>
        </div>

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
            </div>
          </nav>


        {{-- <div class="screen_grid_list">
            <div class="container">
                <div class="wrapper d-flex align-items-stretch">
                    <div class="container">
                        <div class="row">
                            <div class="tab-content" id="nav-tabContent">
                                <div id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    @include('details.sitebar')
                                </div>
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"> 
                                    @include('details.gird')
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    @include('details.list')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        
          <div class="screen_grid_list">
            <div class="container">
                <div class="wrapper d-flex align-items-stretch">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="container row">
                            <div class="gx-xl-12">
                                <div class="row">
                                    <div class="col-lg-4">  
                                        <div class="" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            @include('details.sitebar')
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            @include('details.gird')
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            @include('details.list')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div> 



            {{-- ขนาดจอเล็กกว่า 720px --}}
                <div class="burger">
                    <div class="screen_grid">
                        <div class="container">
                            <div class="row gx-xl-5">
                                <div class="col-lg-4 d-none d-lg-block">
                                    @include('details.sitebar')
                                </div>
                                <div class="col-lg-8">
                                    @include('details.gird')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </section>
    <div class="scrollToHome" style="cursor: pointer;">
        <i class="fas fa-angle-up"></i>
    </div>

@endsection

