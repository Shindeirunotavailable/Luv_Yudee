<div class="advance-search mt-60 mt30-lg mr-auto ml-auto animation-up-3">
    <ul class="nav nav-tabs  p-0 m-0" id="nav-tab">
        <li class="nav-item">
            <button class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-buy-m" role="tab" aria-controls="nav-buy-m" aria-selected="true">Buy</button>
        </li>
        <li class="nav-item">
            <button class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-rent-m" role="tab" aria-controls="nav-rent-m" aria-selected="false">Rent</button>
        </li>
        <li class="nav-item">
            <button class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-sold-m" role="tab" aria-controls="nav-sold-m" aria-selected="false">Sold</button>
        </li>
    </ul>
    <div class="tab-content" id="nav-tabContent">
        <div class="active tab-pane" id="nav-buy-m">
            <div class="advance-content-st1">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="advance-search-field position-relative text-al">
                            <form class="form-search position-relative">
                                <div class="box-search d-flex" id="nav-buy-m">
                                    <i class="icon fa-solid fa-house mtb-2"></i>
                                    <input class="form-control background-f7 bdr12 h-55" type="text" name="search" placeholder="Search Products for Buy">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                            <button class="btn-advance-search" type="button" data-toggle="modal" data-target="#advanceSeachModal">
                                <i class="fa-solid fa-list-ul mr-2"></i>Advanced
                            </button>
                            <button class="color-search add-search rounded-pill mx-2 text-a mt-1"href="{{url("/")}}">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="nav-rent-m">
            <div class="advance-content-st1">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="advance-search-field position-relative text-al">
                            <form class="form-search position-relative">
                                <div class="box-search d-flex" id="nav-rent-m">
                                    <i class="icon fa-solid fa-house mtb-2"></i>
                                    <input class="form-control background-f7 bdr12 h-55" type="text" name="search" placeholder="Search Products for Rent">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div
                            class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                            <button class="btn-advance-search" type="button" data-toggle="modal" data-target="#advanceSeachModal">
                                <i class="fa-solid fa-list-ul mr-2"></i>Advanced
                            </button>
                            <button class="color-search add-search rounded-pill mx-2 text-a mt-1"href="{{url("/")}}">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="nav-sold-m">
            <div class="advance-content-st1">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="advance-search-field position-relative text-al">
                            <form class="form-search position-relative">
                                <div class="box-search d-flex" id="nav-sold-m">
                                    <i class="icon fa-solid fa-house mtb-2"></i>
                                    <input class="form-control background-f7 bdr12 h-55" type="text" name="search" placeholder="Search Products for Sold">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                            <button class="btn-advance-search" type="button" data-toggle="modal" data-target="#advanceSeachModal">
                                <i class="fa-solid fa-list-ul mr-2"></i>Advanced
                            </button>
                            
                            <button class="color-search add-search rounded-pill mx-2 text-a mt-1"href="{{url("/")}}">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>