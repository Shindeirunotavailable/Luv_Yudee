<div class="list-sidebar-style1">
    {{-- side-bar --}}
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <h6>Find your home</h6>
            <div class="search_area">
                <input type="text" class="form-control form-control-text" placeholder="What are you looking for?"><span>
                <i class="fa-solid fa-magnifying-glass"></i></span>
            </div>
        </li>

        <li class="list-group-item">
            <h6>Listing Status</h6>
            <div class="radio-element">
            
                <div class="form-check">
                    <input class="form-check-input radio-style" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                        checked>
                    <label class="form-check-label" for="exampleRadios1">
                        All
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input radio-style" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Buy
                    </label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input radio-style" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                    <label class="form-check-label" for="exampleRadios3">
                        Rent
                    </label>
                </div>
            </div>
        </li>

        <li class="list-group-item">
            <h6 class="list-title">Property Type</h6>

            <div class="form-check  custom-checkbox">
                <input class="form-check-input custom-control-input " type="checkbox" value="" id="All">
                <label class="form-check-label custom-control-label" for="All">
                    All
                </label>
            </div>
            <div class="form-check custom-checkbox">
                <input class="form-check-input custom-control-input " type="checkbox" value="" id="Houses">
                <label class="form-check-label custom-control-label" for="Houses">
                    Houses
                </label>
            </div>
            <div class="form-check custom-checkbox">
                <input class="form-check-input custom-control-input " type="checkbox" value="" id="Apartments">
                <label class="form-check-label custom-control-label" for="Apartments">
                    Apartments
                </label>
            </div>
            <div class="form-check  custom-checkbox">
                <input class="form-check-input custom-control-input " type="checkbox" value="" id="Office">
                <label class="form-check-label custom-control-label" for="Office">
                    Office
                </label>
            </div>
            <div class="form-check custom-checkbox">
                <input class="form-check-input custom-control-input " type="checkbox" value="" id="Villa">
                <label class="form-check-label custom-control-label" for="Villa">
                    Villa
                </label>
            </div>

        </li>
        <li class="list-group-item">
            <h6>Price Range</h6>
            {{-- <input type="range" class="form-control-range" id="formControlRange input-range min-price form-control-range radioname" value="100" min="10" max="1500" step="10"> --}}

            <div class="range-slider pb-3">
                
                <div class="range-fill"></div>
                <input type="range" class="input-range min-price form-control-range radioname" value="100" min="10" max="500" step="10" />
                <input type="range" class="input-range max-price form-control-range radioname" value="250" min="10" max="500" step="10" />
            </div>

            <div class="row">
                <div class="col-lg-5">
                    <label class="form-control background-grey" id="min-value">$50</label>
                </div>
                <h3> - </h3>
                <div class="col-lg-5">
                    <label class="form-control background-grey" id="max-value" > $250</label>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="form-group">
                <h6 class="list-title">Location</h6>

                <select class="form-control" id="choices-multiple-remove-button" multiple>
                    <option value="Houses" class="option-color">Houses</option>
                    <option value="Apartments">Apartments</option>
                    <option value="Office">Office</option>
                    <option value="Villa">Villa</option>
                    <option value="Condo">Condo</option>
                    <option value="test">test</option>
              
                </select>
              </div>
        </li>

        <li class="list-group-item">
            <h6 class="list-title">Bedrooms</h6>
            <div class="d-flex justify-content-center">
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
        </li>

        <li class="list-group-item">
            <h6 class="list-title">Bathrooms</h6>
            <div class="d-flex justify-content-center">
                <div class="selection">
                    <input type="radio" id="anyBathrooms" name="Bathrooms" checked>
                    <label for="anyBathrooms">any</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus1Bathrooms" name="Bathrooms">
                    <label for="plus1Bathrooms">+1</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus2Bathrooms" name="Bathrooms">
                    <label for="plus2Bathrooms">+2</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus3Bathrooms" name="Bathrooms">
                    <label for="plus3Bathrooms">+3</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus4Bathrooms" name="Bathrooms">
                    <label for="plus4Bathrooms">+4</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus5Bathrooms" name="Bathrooms">
                    <label for="plus5Bathrooms">+5</label>
                </div>
            </div>
        </li>
   


        <li class="list-group-item">
            <h6>Square Feet</h6>
            <div class="d-flex justify-content-between">
                <input type="number" class="form-control" placeholder="Min." id="minFeet">
                <h3 class=" pl-10 pr-10"> - </h3>
                <input type="number" class="form-control" placeholder="Max." id="minFeet">
            </div>
        </li>
        <li class="list-group-item">
            <h6>Year Built</h6>
            <div class="d-flex justify-content-between">
                <input type="number" class="form-control P-10" placeholder="2019" id="minFeet">
                <h3 class=" pl-10 pr-10"> - </h3>
                <input type="number" class="form-control P-10" placeholder="2024" id="minFeet">
            </div>
        </li>
        <li class="list-group-item">
            <button type="submit" class="btn btn-primary btn-lg btn-block afterButton" id="submitModalBtn">
                <i class="fa-solid fa-magnifying-glass"></i> search
            </button>
        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between">

                <a href="javascript:void(0)">
                    <span class="fa fa-repeat"></span>
                    <u>Reset all filters</u>
                </a>
                <a href="javascript:void(0)">
                    <span class="fa fa-star"></span>
                    <u>Save Search</u>
                </a>

            </div>
        </li>

    </ul>
    {{-- end side-bar --}}
</div>

