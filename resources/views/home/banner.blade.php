<section class="home-banner-yuudee p-0 background-white">
    <div class="home-st4 max-width1600 bdr-24 position-relative mr-auto ml-auto">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <div class="inner-banner-st4">
                        <h2 class="hero-title animation-up-1">Easy Way to Find a <br class="d-none d-md-block">Perfect Property</h2>
                        <p class="hero-text fs-15 animation-up-2">From as low as $10 per day with limited time offer discounts</p>
                        
                        <div class="laptop-searchs">
                            @include('home.boxSearchLaptop')
                        </div>

                        <div class="mobile-searchs">
                            @include('home.boxSearch')
                        </div>

                        
                        
                    </div>
                    <div class="advance-character-modal" >
                        <div class="modal fade" id="advanceSeachModal" tabindex="-1" aria-labelledby="advanceSeachModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg"id="advanceSeachMod" >
                                <div class="modal-content">
                                    <div class="modal-header pl-30 pr-30">
                                        <h5 class="modal-title" id="exampleModalLabel">More Filter</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body pb-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                {{-- <div class="widget-wrapper">
                                                    <h6 class="list-title mb-20">Price Range</h6>
                                                    <div class="range-slider-style modal-version">
                                                        <div class="range-wrapper">
                                                            <div aria-disabled="false" class="input-range">
                                                                <span class="input-range__label input-range__label--min">
                                                                    <span class="input-range__label-container"></span>
                                                                </span>
                                                                <div class="input-range__track input-range__track--background">
                                                                    <div class="input-range__track input-range__track--active" style="left: 0.02%; width: 48.817%;"></div>
                                                                    <span class="input-range__slider-container" style="position: absolute; left: 0.02%;">
                                                                        <span class="input-range__label input-range__label--value">
                                                                            <span class="input-range__label-container"></span>
                                                                        </span>
                                                                        <div aria-valuemax="48837"aria-valuemin="0"aria-valuenow="20"class="input-range__slider"draggable="false" role="slider"tabindex="0"></div>
                                                                    </span>
                                                                    <span class="input-range__slider-container"style="position: absolute; left: 48.837%;">
                                                                        <span class="input-range__label input-range__label--value">
                                                                            <span class="input-range__label-container"></span>
                                                                        </span>
                                                                        <div aria-valuemax="100000"aria-valuemin="20"aria-valuenow="48837"class="input-range__slider"draggable="false" role="slider"tabindex="0"></div>
                                                                    </span>
                                                                </div>
                                                                <span class="input-range__label input-range__label--max">
                                                                    <span class="input-range__label-container"></span>
                                                                </span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <span id="slider-range-value1">$20</span>
                                                                <i class="fa-sharp fa-solid fa-minus mx-2 dark-color icon"></i>
                                                                <span id="slider-range-value2">$48837</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="widget-wrapper">
                                                    <h6 class="list-title">Type</h6>
                                                    <div class="form-st2 input-group">
                                                        <div class="select-custom css-custom-container">
                                                            <span id="react-select-2-live-region" class="css-select"></span>
                                                            <span aria-live="polite" aria-atomic="false"aria-relevant="additions text"class="css-select"></span>
                                                            {{-- <div class="select__control css-control">
                                                                <div class="select__value-container select__value-container--has-value css-value">
                                                                    <div class="select__single-value css-singleValue">Bungalow</div>
                                                                    <div class="select__input-container css-input-con" data-value="">
                                                                        <input class="select__input"autocapitalize="none"autocomplete="off" autocorrect="off"id="react-select-2-input"spellcheck="false" tabindex="0"type="text"aria-autocomplete="list"aria-expanded="false"aria-haspopup="true"aria-required="true"role="combobox" value=""style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                                    </div>
                                                                </div>
                                                                <div class="select__indicators css-indicators">
                                                                    <span class="select__indicator-separator css-indicatorSeparator"></span>
                                                                    <div class="select__indicator select__dropdown-indicator css-drop-indicatorSeparator"aria-hidden="true"><svg height="20"width="20" viewBox="0 0 20 20"aria-hidden="true"focusable="false"class="css-icon-down">
                                                                            <path
                                                                                d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                            </path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                                <select class="form-control" id="exampleFormControlSelect1">
                                                                    <option>Houses</option>
                                                                    <option>Loft</option>
                                                                    <option>Office</option>
                                                                    <option>Town home</option>
                                                                </select>
                                                            <input name="colors" type="hidden" value="Bungalow">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="widget-wrapper">
                                                    <h6 class="list-title">Property ID</h6>
                                                    <div class="form-st2">
                                                        <input type="text" class="form-control h-55" placeholder="RT04949213">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="widget-wrapper">
                                                    <h6 class="list-title">Bedrooms</h6>
                                                    <div class="d-flex">
                                                        <div class="selection">
                                                            <input id="xany" name="xbeds" type="radio" checked="">
                                                            <label for="xany">any</label>
                                                        </div>
                                                        <div class="selection">
                                                            <input id="xoneplus" name="xbeds" type="radio" >
                                                            <label for="xoneplus">1+</label>
                                                        </div>
                                                        <div class="selection">
                                                            <input id="xtwoplus"name="xbeds" type="radio">
                                                            <label for="xtwoplus">2+</label>
                                                        </div>
                                                        <div class="selection">
                                                            <input id="xthreeplus"name="xbeds" type="radio">
                                                            <label for="xthreeplus">3+</label>
                                                        </div>
                                                        <div class="selection">
                                                            <input id="xfourplus"name="xbeds" type="radio">
                                                            <label for="xfourplus">4+</label>
                                                        </div>
                                                        <div class="selection">
                                                            <input id="xfiveplus"name="xbeds" type="radio">
                                                            <label for="xfiveplus">5+</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="widget-wrapper">
                                                    <h6 class="list-title">Bathrooms</h6>
                                                    <div class="d-flex">
                                                        <div class="selection">
                                                            <input id="yany"name="ybath" type="radio"checked="">
                                                            <label for="yany">any</label>
                                                        </div>
                                                        <div class="selection">
                                                            <input id="yoneplus"name="ybath" type="radio">
                                                            <label for="yoneplus">1+</label>
                                                        </div>
                                                        <div class="selection">
                                                            <input id="ytwoplus"name="ybath" type="radio">
                                                            <label for="ytwoplus">2+</label>
                                                        </div>
                                                        <div class="selection">
                                                            <input id="ythreeplus" name="ybath" type="radio">
                                                            <label for="ythreeplus">3+</label>
                                                        </div>
                                                        <div class="selection">
                                                            <input id="yfourplus"name="ybath" type="radio">
                                                            <label for="yfourplus">4+</label>
                                                        </div>
                                                        <div class="selection"><input id="yfiveplus"name="ybath" type="radio">
                                                            <label for="yfiveplus">5+</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="widget-wrapper">
                                                    <h6 class="list-title">Location</h6>
                                                    <div class="form-st2 input-group">
                                                        <div class="select-custom css-custom-container">
                                                            <span id="react-select-3-live-region" class="css-select"></span>
                                                            <span aria-live="polite" aria-atomic="false" aria-relevant="additions text"class="css-select"></span>
                                                            {{-- <div class="select__control css-control">
                                                                <div class="select__value-container select__value-container--has-value css-value">
                                                                    <div class="select__single-value css-singleValue">All Cities</div>
                                                                    <div class="select__input-container css-input-con"data-value="">
                                                                        <input class="select__input" autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-3-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" aria-expanded="false" aria-haspopup="true" aria-required="true" role="combobox" value="" style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                                    </div>
                                                                </div>
                                                                <div class="select__indicators css-indicators">
                                                                    <span class="select__indicator-separator css-indicatorSeparator"></span>
                                                                    <div class="select__indicator select__dropdown-indicator css-drop-indicatorSeparator"aria-hidden="true">
                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-icon-down">
                                                                            <path
                                                                                d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                            </path>
                                                                        </svg></div>
                                                                </div>
                                                            </div> --}}
                                                            <select class="form-control" id="exampleFormControlSelect1">
                                                                <option>All Cities</option>
                                                                <option>New Jersy</option>
                                                                <option>New York</option>
                                                                <option>San Diego</option>
                                                            </select>
                                                            <input name="colors" type="hidden" value="All Cities">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="widget-wrapper">
                                                    <h6 class="list-title">Square Feet</h6>
                                                    <div class="space-area">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="form-st1">
                                                                <input type="text" class="form-control" placeholder="Min.">
                                                            </div>
                                                            <span class="dark-color">-</span>
                                                            <div class="form-st1">
                                                                <input type="text" class="form-control" placeholder="Max">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="widget-wrapper mb-0">
                                                    <h6 class="list-title mb-10">Amenities</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="widget-wrapper mb-20">
                                                    <div class="checkbox-st1">
                                                        <label class="custom_checkbox">Attic
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="custom_checkbox">Basketball court
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="custom_checkbox">Air Conditioning
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="custom_checkbox">Lawn
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="widget-wrapper mb-20">
                                                    <div class="checkbox-st1">
                                                        <label class="custom_checkbox">TV Cable
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="custom_checkbox">Dryer
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="custom_checkbox">Outdoor Shower
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="custom_checkbox">Washer
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="widget-wrapper mb-20">
                                                    <div class="checkbox-st1">
                                                        <label class="custom_checkbox">Lake view
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="custom_checkbox">Wine cellar
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="custom_checkbox">Front yard
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="custom_checkbox">Refrigerator
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button class="reset-button">
                                            <i class="fa-solid fa-arrow-turn-down fa-rotate-90 mr-10 mt-1"></i>
                                            {{-- <span class="flaticon-turn-back"></span> --}}
                                            <u>Reset all filters</u>
                                        </button>
                                        <div class="btn-area">
                                            <button data-bs-dismiss="modal" type="submit" class="user-arrow user-btn btn-yuudee add-property rounded-pill text-a ">
                                                {{-- <span class="flaticon-search align-text-top pr10"></span> --}}
                                                <i class="fa-solid fa-magnifying-glass pr-10 ml-0" aria-hidden="true"></i>
                                                Search
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-icon-st mt-30 d-none d-sm-flex animation-up-4">
                        <a class="d-flex align-items-center dark-color ff-heading me-4"href="/grid-full-4-col">
                            <i class=" icon fa-solid fa-house"></i> Houses
                        </a>
                        <a class="d-flex align-items-center dark-color ff-heading me-4"href="/grid-full-4-col">
                            <i class="icon fa-regular fa-building"></i>Apartments
                        </a>
                        <a class="d-flex align-items-center dark-color ff-heading me-4"href="/grid-full-4-col">
                            <i class="icon fa-solid fa-house-laptop"></i>Office
                        </a>
                        <a class="d-flex align-items-center dark-color ff-heading me-4"href="/grid-full-4-col">
                            <i class="icon fa-solid fa-house-flood-water"></i>Villa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>