

<div class="col-lg-4">
    <div class="list-sidebar-style1">
        <div class="burger">
            <a href="javascript:void(0)" class="closebtn" onclick="toggleSidebar()">&times;</a>
        </div>
        <div class="widget-wrapper">
            <h6 class="list-title">Find your home</h6>
            <div class="search_area">
                <input type="text" class="form-control" placeholder="What are you looking for?">
                <label>
                    <span class="fa fa-search "aria-hidden="true" style="padding-top: "></span>
                </label>
            </div>
        </div>
    
        <div class="widget-wrapper">
            <h6 class="list-title">Listing Status</h6>
            <div class="radio-element">
    
                <div class="form-check d-flex align-items-center mb10">
                    <input class="form-check-input" type="radio" checked="" name="Listing"> <a
                        class="form-check-label">All</a>
                </div>
                <div class="form-check d-flex align-items-center mb10">
                    <input class="form-check-input" type="radio" checked="" name="Listing"> <a
                        class="form-check-label">Buy</a>
                </div>
                <div class="form-check d-flex align-items-center mb10">
                    <input class="form-check-input" type="radio" checked="" name="Listing"> <a
                        class="form-check-label">Rent</a>
                </div>
            </div>
    
        </div>
        <div class="widget-wrapper">
            <h6 class="list-title">Property Type</h6>
            <div class="checkbox-style1"><label class="custom_checkbox">All<input type="checkbox" checked=""><span
                        class="checkmark"></span></label><label class="custom_checkbox">Houses<input type="checkbox"><span
                        class="checkmark"></span></label><label class="custom_checkbox">Apartments<input
                        type="checkbox"><span class="checkmark"></span></label><label class="custom_checkbox">Office<input
                        type="checkbox"><span class="checkmark"></span></label><label class="custom_checkbox">Villa<input
                        type="checkbox"><span class="checkmark"></span></label>
            </div>
        </div>
        <div class="widget-wrapper">
            <h6 class="list-title">Price Range</h6>
            <div class="range-slider-style1">
                <div class="range-wrapper">
                    <div aria-disabled="false" class="input-range"><span
                            class="input-range__label input-range__label--min"><span
                                class="input-range__label-container"></span></span>
                        <div class="input-range__track input-range__track--background">
                            <div class="input-range__track input-range__track--active" style="left: 0%; width: 100%;"></div>
                            <span class="input-range__slider-container" style="position: absolute; left: 0%;"><span
                                    class="input-range__label input-range__label--value"><span
                                        class="input-range__label-container"></span></span>
                                <div aria-valuemax="100000" aria-valuemin="0" aria-valuenow="0" class="input-range__slider"
                                    draggable="false" role="slider" tabindex="0">
                                </div>
                            </span><span class="input-range__slider-container" style="position: absolute; left: 100%;"><span
                                    class="input-range__label input-range__label--value"><span
                                        class="input-range__label-container"></span></span>
                                <div aria-valuemax="100000" aria-valuemin="0" aria-valuenow="100000"
                                    class="input-range__slider" draggable="false" role="slider" tabindex="0">
                                </div>
                            </span>
                        </div><span class="input-range__label input-range__label--max"><span
                                class="input-range__label-container"></span></span>
                    </div>
                    <div class="d-flex align-items-center"><span id="slider-range-value1">$20</span><i
                            class="fa-sharp fa-solid fa-minus mx-2 dark-color icon"></i><span
                            id="slider-range-value2">$70987</span></div>
                </div>
            </div>
        </div>
    
        <div class="widget-wrapper row">
            <h6 class="list-title">Bedrooms</h6>
    
            <div class="d-flex">
                <div class="selection">
                    <input type="radio" id="any" name="Bedrooms" checked>
                    <label for="any">any</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus1" name="Bedrooms">
                    <label for="plus1">+1</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus2" name="Bedrooms">
                    <label for="plus2">+2</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus3" name="Bedrooms">
                    <label for="plus3">+3</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus4" name="Bedrooms">
                    <label for="plus4">+4</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus5" name="Bedrooms">
                    <label for="plus5">+5</label>
                </div>
            </div>
        </div>
        <div class="widget-wrapper row">
            <h6 class="list-title">Bathrooms</h6>
    
            <div class="d-flex">
                <div class="selection">
                    <input type="radio" id="Bathany" name="Bathrooms" checked>
                    <label for="Bathany">any</label>
                </div>
                <div class="selection">
                    <input type="radio" id="Bath2" name="Bathrooms">
                    <label for="Bath2">+1</label>
                </div>
                <div class="selection">
                    <input type="radio" id="Bath3" name="Bathrooms">
                    <label for="Bath3">+2</label>
                </div>
                <div class="selection">
                    <input type="radio" id="Bath4" name="Bathrooms">
                    <label for="Bath4">+3</label>
                </div>
                <div class="selection">
                    <input type="radio" id="Bath5" name="Bathrooms">
                    <label for="Bath5">+4</label>
                </div>
                <div class="selection">
                    <input type="radio" id="Bath6" name="Bathrooms">
                    <label for="Bath6">+5</label>
                </div>
            </div>
        </div>
        {{--     
        <div class="widget-wrapper">
            <h6 class="list-title">Bedrooms</h6>
            <div class="d-flex">
                <div class="selection">
                    <label for="any">any</label>
                    <input type="radio">
                </div>
                <div class="selection">
                    <label for="any">+1</label>
                    <input type="radio">
                </div>
                <div class="selection">
                    <label for="any">+2</label>
                    <input type="radio">
                </div>
                <div class="selection">
                    <label for="any">+3</label>
                    <input type="radio">
                </div>
                <div class="selection">
                    <label for="any">+4</label>
                    <input type="radio">
                </div>
                <div class="selection">
                    <label for="any">+5</label>
                    <input type="radio">
                </div>
    
                {{-- <div class="selection">
                    <input id="any" type="radio" checked="">
                    <label for="any">any</label>
                </div>
    
                <div class="selection">
                    <input id="oneplus" type="radio" name="Bedrooms">
                    <label for="oneplus">1+</label>
                </div>
                <div class="selection">
                    <input id="twoplus" type="radio" name="Bedrooms">
                    <label for="twoplus">2+</label>
                </div>
                <div class="selection">
                    <input id="threeplus" type="radio" name="Bedrooms">
                    <label for="threeplus">3+</label>
                </div>
                <div class="selection">
                    <input id="fourplus" type="radio" name="Bedrooms">
                    <label for="fourplus">4+</label>
                </div>
                <div class="selection">
                    <input id="fiveplus" type="radio" name="Bedrooms">
                    <label for="fiveplus">5+</label>
                </div> --}}
    
        {{-- </div>
        </div>  --}}
    
    
        {{-- <div class="widget-wrapper">
                <h6 class="list-title">Bathrooms</h6>
            <div class="d-flex">
                <div class="selection">
                    <label for="any">any</label>
                    <input type="radio" id="any">
                </div>
                <div class="selection">
                    <label for="any">+1</label>
                    <input type="radio" id="any">
                </div>
                <div class="selection">
                    <label for="any">+2</label>
                    <input type="radio" id="any">
                </div>
                <div class="selection">
                    <label for="any">+3</label>
                    <input type="radio" id="any">
                </div>
                <div class="selection">
                    <label for="any">+4</label>
                    <input type="radio" id="any">
                </div>
                <div class="selection">
                    <label for="any">+5</label>
                    <input type="radio" id="any">
                </div>
            </div>
        </div> --}}
    
    
        <div class="widget-wrapper advance-feature-modal">
            <h6 class="list-title">Location</h6>
            <div class="form-style2 input-group">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option> กรุงเทพ </option>
                    <option> ปทุมธานี</option>
                    <option> สระบุรี</option>
                </select>
    
                {{-- <div class="select-custom filterSelect css-b62m3t-container"><span
                        id="react-select-2-live-region"
                        class="css-7pg0cj-a11yText"></span><span aria-live="polite"
                        aria-atomic="false" aria-relevant="additions text"
                        class="css-7pg0cj-a11yText"></span>
                    <div class="select__control css-13cymwt-control">
                        <div
                            class="select__value-container select__value-container--has-value css-hlgwow">
                            <div class="select__single-value css-1dimb5e-singleValue">
                                All Cities</div>
                            <div class="select__input-container css-19bb58m"
                                data-value=""><input class="select__input"
                                    autocapitalize="none" autocomplete="off"
                                    autocorrect="off" id="react-select-2-input"
                                    spellcheck="false" tabindex="0" type="text"
                                    aria-autocomplete="list" aria-expanded="false"
                                    aria-haspopup="true" aria-required="true"
                                    role="combobox" value=""
                                    style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                            </div>
                        </div>
                        <div class="select__indicators css-1wy0on6"><span
                                class="select__indicator-separator css-1u9des2-indicatorSeparator"></span>
                            <div class="select__indicator select__dropdown-indicator css-1xc3v61-indicatorContainer"
                                aria-hidden="true"><svg height="20" width="20"
                                    viewBox="0 0 20 20" aria-hidden="true"
                                    focusable="false" class="css-8mmkcg">
                                    <path
                                        d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                    </path>
                                </svg></div>
                        </div>
                    </div><input name="colors" type="hidden" value="All Cities">
                </div> --}}
            </div>
        </div>
        <div class="widget-wrapper">
            <h6 class="list-title">Square Feet</h6>
            <div class="space-area">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="form-style1"><input type="number" class="form-control filterInput" placeholder="Min."
                            id="minFeet"></div><span class="dark-color">-</span>
                    <div class="form-style1"><input type="number" id="maxFeet" class="form-control filterInput"
                            placeholder="Max"></div>
                </div>
            </div>
        </div>
        <div class="widget-wrapper">
            <h6 class="list-title">Year Built</h6>
            <div class="space-area">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="form-style1"><input type="number" class="form-control filterInput" placeholder="2019"
                            id="minFeet2"></div><span class="dark-color">-</span>
                    <div class="form-style1"><input type="number" class="form-control filterInput" placeholder="2022"
                            id="maxFeet2"></div>
                </div>
            </div>
        </div>
        <div class="widget-wrapper">
            <div class="feature-accordion">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item border-none">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button border-none p-0 after-none feature-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                <span class="fa-solid fa-bars"></span> Other Features</button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body p-0 mt15">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkbox-style1"><label class="custom_checkbox">Attic<input
                                                    type="checkbox"><span class="checkmark"></span></label><label
                                                class="custom_checkbox">Basketball
                                                court<input type="checkbox"><span class="checkmark"></span></label><label
                                                class="custom_checkbox">Air
                                                Conditioning<input type="checkbox"><span
                                                    class="checkmark"></span></label><label
                                                class="custom_checkbox">Lawn<input type="checkbox"><span
                                                    class="checkmark"></span></label><label class="custom_checkbox">TV
                                                Cable<input type="checkbox"><span class="checkmark"></span></label><label
                                                class="custom_checkbox">Dryer<input type="checkbox"><span
                                                    class="checkmark"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkbox-style1"><label class="custom_checkbox">Outdoor
                                                Shower<input type="checkbox"><span class="checkmark"></span></label><label
                                                class="custom_checkbox">Washer<input type="checkbox"><span
                                                    class="checkmark"></span></label><label class="custom_checkbox">Lake
                                                view<input type="checkbox"><span class="checkmark"></span></label><label
                                                class="custom_checkbox">Wine
                                                cellar<input type="checkbox"><span class="checkmark"></span></label><label
                                                class="custom_checkbox">Front
                                                yard<input type="checkbox"><span class="checkmark"></span></label><label
                                                class="custom_checkbox">Refrigerator<input type="checkbox"><span
                                                    class="checkmark"></span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-wrapper mb20">
            <div class="btn-area d-grid align-items-center"><button class="ud-btn btn-thm"><span
                        class="fa-solid fa-magnifying-glass align-text-top pr10"></span>Search</button>
            </div>
        </div>
        <div class="reset-area d-flex align-items-center justify-content-between">
            <div class="reset-button cursor" href="#"><span class="fa fa-repeat" aria-hidden="true"></span>
                <u>Reset all filters</u>
            </div><a class="reset-button" href="#"><span class="fa fa-star"></span><u>Save Search</u></a>
        </div>
    </div>
</div>