

@extends('layout.master')
@section('content')

    <!-- {{-- ส่วนหัว --}} -->
    {{-- <section class="background-grey section-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                        <h2 class="title">New York Homes for Sale</h2>
                        <div class="breadcumb-list"><a href="#">Home</a><a href="#">For Rent</a></div>
                </div>
            </div>
        </div>
    </section> --}}


    
                {{-- list Gride --}}
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true">grid</button>
                      <button class="nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">list</button>
                    </div>
                </nav>
{{-- 
                  <div class="tab-content row" id="nav-tabContent">
                    <div class="col-lg-4">Sit-bar</div>
                    <div class="tab-pane fade show active col-lg-8" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"> <span style="background-color: red">grid</span> </div>
                    <div class="tab-pane fade active col-lg-8" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">list</div>
                  </div> --}}


    <section class="pt-30">
        <div class="container">
            <div class="tab-content row" id="nav-tabContent" style="background-color: transparent">
                <div class="col-lg-4">
                    {{-- SideBar --}}
                    @include('details.sidebar')
                </div>


                <div class="tab-pane fade show active col-lg-8" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"> 
                    {{-- gride --}}
                    @include('details.gride')
                </div>


                <div class="tab-pane fade col-lg-8" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" >
                    @include('details.list')
                </div>

            </div>
        </div>
    </section>


@endsection

