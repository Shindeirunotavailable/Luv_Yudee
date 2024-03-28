@extends('layout.master')
@section('content')

    <div class="container {{--pb-d-40--}} d-nav-none ">
        <div class="col-lg-12">
            <div class="dashboard-navigation d-block">
                <div>
                    <div id="v-tabs1-tab" role="tablist" >
                        <button class="dropbtn dashboard-navigation-header">
                            <i class="fa-solid fa-bars pr-d-5"> </i>
                            <a href="#" class="dashboard-navigation-header"> Dashboard Navigation</a>
                        </button>
                        <ul class="dropdown-content show">
                            {{-- <div>
                                <p class="fs-15 font-weight-normal ff-heading mt-d-30 pl-d-30 mt-0">MAIN</p>
                                <div class="sidebar_list_item"><a class="items-center-db    " href="#"><i
                                            class="fa-solid fa-chart-line mr-d-15"></i>Dashboard</a>
                                </div>
                                <div class="sidebar_list_item"><a class="items-center-db    " href="#"><i
                                            class="fa-solid fa-comment-dots mr-d-15"></i>Message</a>
                                </div>
                            </div> --}}
                            <div>
                                <p class="fs-15 font-weight-normal ff-heading mt-d-30 pl-d-30 mt-d-30">MANAGE LISTINGS</p>
                                <div class="sidebar_list_item ">
                                    <a class="items-center-db -is-active active" id="v-add-property-tab" data-toggle="tab"
                                    data-target="#v-add-property" role="tab" aria-controls="v-add-property"
                                    aria-selected="false" href="#v-add-property">
                                    <i class="fa-solid fa-file-circle-plus mr-d-15"></i>Add New Property</a>
                                </div>

                                {{-- <div class="sidebar_list_item">
                                    <a class="items-center-db " id="v-myproperty-tab" data-toggle="tab"
                                    data-target="#v-myproperty" role="tab" aria-controls="v-myproperty"
                                    aria-selected="false" href="#v-myproperty">
                                        <i class="fa-solid fa-house-chimney mr-d-15"></i>My Properties</a>
                                </div> --}}

                                {{-- <div class="sidebar_list_item"><a class="items-center-db    " href="#"><i
                                            class="fa-solid fa-heart mr-d-15"></i>My Favorites</a>
                                </div>
                                <div class="sidebar_list_item"><a class="items-center-db    " href="#"><i
                                            class="fa-solid fa-magnifying-glass mr-d-15"></i>Saved Search</a>
                                </div> --}}
                                <div class="sidebar_list_item"><a class="items-center-db    " id="v-review-tab"
                                    data-toggle="tab" data-target="#v-review" role="tab" aria-controls="v-review"
                                    aria-selected="false" href="#v-review">
                                    <i class="fa-solid fa-message mr-d-15"></i>Reviews</a>
                                </div>
                            </div>
                            <div>
                                <p class="fs-15 font-weight-normal ff-heading mt-d-30 pl-d-30 mt-d-30">MANAGE ACCOUNT</p>
                                {{-- <div class="sidebar_list_item"><a class="items-center-db    " href="#"><i
                                            class="fa-solid fa-file-contract mr-d-15"></i>My Package</a>
                                </div> --}}

                                <div class="sidebar_list_item">
                                    <a class="items-center-db    " id="v-profile-tab" data-toggle="tab"
                                        data-target="#v-profile" role="tab" aria-controls="v-profile"
                                        aria-selected="false" href="#v-profile">
                                        <i class="fa-solid fa-circle-user mr-d-15"></i>My Profile</a>
                                </div>

                                <div class="sidebar_list_item"><a class="items-center-db" href="#">
                                    <i class="fa-solid fa-right-from-bracket mr-d-15"></i>Logout</a>
                                </div>

                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <aside>

        <div class="dashboard_content_wrapper">
            <div class="dashboard dashboard_wrapper  pr-d-0-md">
                <div class="dashboard__sidebar  d-side-block ">
                    <div class="dashboard_sidebar_list" role="tablist">

                        <div id="v-tabs-tab" role="tablist" >

                            <div>
                                {{-- <p class="fs-15 font-weight-normal ff-heading mt-0">MAIN</p> --}}
                                {{-- <div class="sidebar_list_item"><a class="items-center-db    " href="#">
                                        <i class="fa-solid fa-chart-line mr-d-15"></i>Dashboard</a>
                                </div>

                                <div class="sidebar_list_item"><a class="items-center-db    " href="#">
                                        <i class="fa-solid fa-comment-dots mr-d-15"></i>Message</a>
                                </div> --}}

                            </div>
                            <div>
                                <p class="fs-15 font-weight-normal ff-heading mt-d-30">MANAGE LISTINGS</p>

                                <div class="sidebar_list_item ">
                                    <a class="items-center-db -is-active active" id="v-add-property-tab" data-toggle="tab"
                                        data-target="#v-add-property" role="tab" aria-controls="v-add-property"
                                        aria-selected="false" href="#v-add-property">
                                        <i class="fa-solid fa-file-circle-plus mr-d-15"></i>Add New Property
                                    </a>
                                </div>

                                {{-- <div class="sidebar_list_item">
                                    <a class="items-center-db " id="v-myproperty-tab" data-toggle="tab"
                                    data-target="#v-myproperty" role="tab" aria-controls="v-myproperty"
                                    aria-selected="false" href="#v-myproperty">
                                        <i class="fa-solid fa-house-chimney mr-d-15"></i>My Properties</a>
                                </div> --}}
                                {{-- <div class="sidebar_list_item"><a class="items-center-db    " href="#">
                                        <i class="fa-solid fa-heart mr-d-15"></i>My Favorites</a>
                                </div>
                                <div class="sidebar_list_item"><a class="items-center-db    " href="#">
                                        <i class="fa-solid fa-magnifying-glass mr-d-15"></i>Saved Search</a>
                                </div> --}}

                                <div class="sidebar_list_item"><a class="items-center-db    " id="v-review-tab"
                                    data-toggle="tab" data-target="#v-review" role="tab" aria-controls="v-review"
                                    aria-selected="false" href="#v-review">
                                        <i class="fa-solid fa-message mr-d-15"></i>Reviews</a></div>
                                </div>
                            <div>
                                <p class="fs-15 font-weight-normal ff-heading mt-d-30">MANAGE ACCOUNT</p>
                                {{-- <div class="sidebar_list_item"><a class="items-center-db    " href="#">
                                        <i class="fa-solid fa-file-contract mr-d-15"></i>My Package</a>
                                </div> --}}
                                <div class="sidebar_list_item">
                                    <a class="items-center-db    " id="v-profile-tab" data-toggle="tab"
                                        data-target="#v-profile" role="tab" aria-controls="v-profile"
                                        aria-selected="false" href="#v-profile">
                                        <i class="fa-solid fa-circle-user mr-d-15"> </i>My Profile</a>
                                </div>
                                @if(session('user_name'))
                                <div class="sidebar_list_item"><a class="items-center-db" href="{{ route('logout') }}">
                                        <i class="fa-solid fa-right-from-bracket mr-d-15"></i>Logout</a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-content-ds" id="v-tabs-tabContent">

                    <div class="tab-pane fade active show " id="v-add-property" role="tabpanel"
                        aria-labelledby="v-add-property-tab" tabindex="0">
                        @include('dashboard.addproperty')
                    </div>

                    {{-- <div class="tab-pane fade" id="v-myproperty" role="tabpanel"
                        aria-labelledby="v-myproperty-tab" tabindex="0">
                        @include('dashboard.myproperty')
                    </div> --}}

                    <div class="tab-pane fade" id="v-profile" role="tabpanel" aria-labelledby="v-profile-tab"
                        tabindex="0">
                        @include('dashboardAdmin.adminProfile')
                    </div>

                    {{-- <div class="tab-pane fade" id="v-review" role="tabpanel" aria-labelledby="v-review-tab"
                        tabindex="0">
                        @include('dashboard.review')
                    </div> --}}
                </div>

            </div>
        </div>
    </aside>

@endsection
