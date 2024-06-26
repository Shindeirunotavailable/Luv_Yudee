<?php
$locale = session()->get('locale', 'th');
?>
<div class="advance-search mt-60 mt30-lg mr-auto ml-auto animation-up-3">
    <ul class="nav nav-tabs  p-0 m-0" id="nav-tab">
        <li class="nav-item">
            <button class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-buy" role="tab" aria-controls="nav-buy" aria-selected="true">{{ GoogleTranslate::trans('ซื้อ', $locale) }}</button>
        </li>
        <li class="nav-item">
            <button class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-rent" role="tab" aria-controls="nav-rent" aria-selected="false">{{ GoogleTranslate::trans('เช่า', $locale) }}</button>
        </li>
        <li class="nav-item">
            <button class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-sold" role="tab" aria-controls="nav-sold" aria-selected="false">{{ GoogleTranslate::trans('ขาย', $locale) }}</button>
        </li>
    </ul>
    <div class="tab-content" id="nav-tabContent">
        <div class="active tab-pane" id="nav-buy">
            <div class="advance-content-st1">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="advance-search-field position-relative text-al">
                            <form class="form-search position-relative">
                                <div class="box-search" id="nav-buy">
                                    <i class="icon fa-solid fa-house mtb-2"></i>
                                    <input class="form-control background-f7 bdr12 h-55" type="text" name="search" placeholder="{{ GoogleTranslate::trans('อสังหาริมทรัพย์ที่ต้องการซื้อ', $locale) }}" fdprocessedid="ufm989">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div
                            class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                            <button class="btn-advance-search" type="button" data-toggle="modal"
                                data-target="#advanceSeachModal" fdprocessedid="13esg">
                                <i class="fa-solid fa-list-ul mr-2"></i>{{ GoogleTranslate::trans('ขั้นสูง', $locale) }}
                            </button>
                            <button class="icon-advance-search user-btn btn-search ml-4" type="button"
                                fdprocessedid="5isoj8">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="nav-rent">
            <div class="advance-content-st1">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="advance-search-field position-relative text-al">
                            <form class="form-search position-relative">
                                <div class="box-search" id="nav-rent">
                                    <i class="icon fa-solid fa-house mtb-2"></i>
                                    <input class="form-control background-f7 bdr12 h-55" type="text" name="search"
                                        placeholder="{{ GoogleTranslate::trans('อสังหาริมทรัพย์ที่ต้องการเช่า', $locale) }}">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div
                            class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                            <button class="btn-advance-search" type="button" data-toggle="modal"
                                data-target="#advanceSeachModal">

                                <i class="fa-solid fa-list-ul mr-2"></i>{{ GoogleTranslate::trans('ขั้นสูง', $locale) }}
                            </button>
                            <button class="icon-advance-search user-btn btn-search ml-4" type="button">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="nav-sold">
            <div class="advance-content-st1">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="advance-search-field position-relative text-al">
                            <form class="form-search position-relative">
                                <div class="box-search" id="nav-sold">
                                    <i class="icon fa-solid fa-house mtb-2"></i>
                                    <input class="form-control background-f7 bdr12 h-55" type="text" name="search"
                                        placeholder="{{ GoogleTranslate::trans('อสังหาริมทรัพย์ที่ต้องการขาย', $locale) }}">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div
                            class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                            <button class="btn-advance-search" type="button" data-toggle="modal"
                                data-target="#advanceSeachModal">
                                <i class="fa-solid fa-list-ul mr-2"></i>{{ GoogleTranslate::trans('ขั้นสูง', $locale) }}
                            </button>
                            <button class="icon-advance-search user-btn btn-search ml-4" type="button">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
$('.changeLanguage').change(function(event){
    var url = "{{ route('google.translate.change') }}";
    window.location.href = url+"?lang="+$(this).val()
})
</script>
