@extends('layout.master')
@section('content')

    <!-- {{-- ส่วนหัว --}} -->
    <section class="background-grey pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <h2>{{ GoogleTranslate::trans('บ้านเพื่อขาย', $locale) }}</h2> --}}
                    <h2>บ้านเพื่อขาย</h2>
                </div>
            </div>
        </div>
    </section>
    {{-- menu-mobile --}}
    <section class="pt-20 ">
        <div class="container">
            <div class="mobile-media pb-15">
                {{-- <h5 >Find your home</h5>
                    @include('searchResult.search') --}}
                <div class="d-flex justify-content-end pt-2">
                    <div class="d-flex align-items-center" onclick="toggleSidebar()">
                        <button type="button" class="btn btn-primary mobile" data-bs-toggle="offcanvas">
                            <span> <i class="fa-solid fa-magnifying-glass text-white"></i></span> <b
                                class="text-white">ค้นหา</b>
                        </button>

                    </div>
                </div>

                <div id="mySidebar" class="sidebar">
                    @include('searchResult.sidebar-mobile')
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="mobile-laptop">
                <div class="row mb-15">
                    <div class="col-12 col-lg-12">
                        <div class=" d-flex justify-content-end">
                            <div class="pcs_dropdown">
                                <label class="mr-10">เรียงตาม</label>
                                <select class="form-select">
                                    <option>ขายดี</option>
                                    <option>การจับคู่ที่ดีที่สุด</option>
                                    <option>ราคาต่ำ</option>
                                    <option>ราคาสูง</option>
                                </select>
                            </div>
                            <label class="ml-10 border-right"></label>

                            <div class="nav" id="nav-tab" role="tablist">
                                <div class="ml-10 mr-10 link-effect active" id="nav-profile-tab" data-toggle="tab"
                                    data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="true"> กลุ่ม</div>
                                <label class="border-right"></label>
                                <div class="ml-10 link-effect" id="nav-contact-tab" data-toggle="tab"
                                    data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">รายการ </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="tab-content row" id="nav-tabContent">
                    <div class="col-lg-4 ">
                        @include('searchResult.sidebar')
                    </div>
                    <div class="tab-pane fade col-lg-8 show active " id="nav-profile" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        @include('searchResult.gride')
                    </div>
                    <div class="tab-pane fade col-lg-8 " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        @include('searchResult.list')
                    </div>
                </div>
            </div>
            <div class="list-mobile">
                @include('searchResult.list')
            </div>
            <div class="grid-mobile">
                @include('searchResult.gride')
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
$('.changeLanguage').change(function(event){
    var url = "{{ route('google.translate.change') }}";
    window.location.href = url+"?lang="+$(this).val()
});
</script>
@endsection
