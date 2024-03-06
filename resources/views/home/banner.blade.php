<section class="home-banner-yuudee p-0 background-white">
    <div class="home-st4 max-width1460-con position-relative mr-auto ml-auto">
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
                            @include('home.boxSearchMobile')
                        </div>
                        
                        
                        
                    </div>
                    <div class="advance-character-modal" >
                        <div class="modal fade" id="advanceSeachModal" tabindex="-1" aria-labelledby="advanceSeachModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg"id="advanceSeachMod" >
                                <div class="modal-content">
                                    <div class="modal-header pl-30 pr-30">
                                        <h5 class="modal-title" id="exampleModalLabel">Advanced</h5>
                                        <a type="button"  data-dismiss="modal" aria-label="Close">
                                            <i class="fa-solid fa-xmark"></i>
                                        </a>
                                    </div>
                                    <div class="modal-body pb-0">
                                        <ul class="list-group  list-sidebar-style">
                                            <li class="list-group-item border-0">
                                                <h6 class="font-weight-600">Find your home</h6>
                                                <div class="search_area">
                                                    <input type="text" class="form-control form-control-text " placeholder="What are you looking for?"><span>
                                                    <i class="fa-solid fa-magnifying-glass"></i></span>
                                                </div>
                                            </li>
                                    
                                            <li class="list-group-item border-0">
                                                <h6 class="font-weight-600">Listing Status</h6>
                                                <div class="radio-element">
                                                
                                                    <div class="form-check">
                                                        <input class="form-check-input radio-style" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                                                            checked>
                                                        <label class="form-check-label font-style" for="exampleRadios1">
                                                            All
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input radio-style" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                        <label class="form-check-label font-style" for="exampleRadios2">
                                                            Buy
                                                        </label>
                                                    </div>
                                                    <div class="form-check ">
                                                        <input class="form-check-input radio-style" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                                        <label class="form-check-label font-style" for="exampleRadios3">
                                                            Rent
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                    
                                            <li class="list-group-item border-0">
                                                <h6 class="font-weight-600">Property Type</h6>
                                    
                                                <div class="form-check  custom-checkbox">
                                                    <input class="form-check-input  checkboox-all custom-control-input " type="checkbox" value="" id="All"  onclick="selectAll()">
                                                    <label class="form-check-label custom-control-label font-style" for="All">
                                                        All
                                                    </label>
                                                </div>
                                                <div class="form-check custom-checkbox">
                                                    <input class="form-check-input  checkboox-all custom-control-input " type="checkbox" value="" id="Houses" onclick="checkAll()">
                                                    <label class="form-check-label custom-control-label font-style" for="Houses">
                                                        Houses
                                                    </label>
                                                </div>
                                                <div class="form-check custom-checkbox">
                                                    <input class="form-check-input checkboox-all custom-control-input " type="checkbox" value="" id="Apartments" onclick="checkAll()">
                                                    <label class="form-check-label custom-control-label font-style" for="Apartments">
                                                        Apartments
                                                    </label>
                                                </div>
                                                <div class="form-check  custom-checkbox">
                                                    <input class="form-check-input checkboox-all custom-control-input " type="checkbox" value="" id="Office" onclick="checkAll()">
                                                    <label class="form-check-label custom-control-label font-style" for="Office">
                                                        Office
                                                    </label>
                                                </div>
                                                <div class="form-check custom-checkbox">
                                                    <input class="form-check-input checkboox-all custom-control-input " type="checkbox" value="" id="Villa" onclick="checkAll()">
                                                    <label class="form-check-label custom-control-label font-style" for="Villa">
                                                        Villa
                                                    </label>
                                                </div>
                                    
                                            </li>
                                            <li class="list-group-item border-0">
                                                <h6 class="font-weight-600">Price Range</h6>
                                                  
                                                  <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-check  custom-checkbox">
                                                            <input class="form-check-input custom-control-input checkboox-price " type="checkbox" value="" id="averageAll" onclick="priceAll()" >
                                                            <label class="form-check-label custom-control-label font-style" for="averageAll">
                                                                All
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-check  custom-checkbox">
                                                            <input class="form-check-input custom-control-input checkboox-price" type="checkbox" value="" id="1Million" onclick="checkPrice()" >
                                                            <label class="form-check-label custom-control-label font-style" for="1Million">
                                                                ฿1,000,000
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-check  custom-checkbox">
                                                            <input class="form-check-input custom-control-input checkboox-price" type="checkbox" value="" id="5Million"  onclick="checkPrice()" >
                                                            <label class="form-check-label custom-control-label font-style" for="5Million">
                                                                ฿1,000,001 - ฿5,000,000
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-check  custom-checkbox">
                                                            <input class="form-check-input custom-control-input checkboox-price" type="checkbox" value="" id="10Million"  onclick="checkPrice()" >
                                                            <label class="form-check-label custom-control-label font-style" for="10Million">
                                                                ฿5,000,000 - ฿10,000,000
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-check  custom-checkbox">
                                                            <input class="form-check-input custom-control-input checkboox-price" type="checkbox" value="" id="10MillionUp"  onclick="checkPrice()" >
                                                            <label class="form-check-label custom-control-label font-style" for="10MillionUp">
                                                                ฿10,000,001
                                                            </label>
                                                        </div>
                                                    </div>
                                                  </div>
                                            </li>
                                            <li class="list-group-item border-0">
                                                  <div class="form-group">
                                                    <h6 class="font-weight-600">Location</h6>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                      <option>bangkok</option>
                                                      <option>Pathum Thani</option>
                                                      <option>Nonthaburi</option>
                                                      <option>Ayutthaya</option>
                                                    </select>
                                                  </div>
                                            </li>
                                    
                                            <li class="list-group-item border-0">
                                                <h6 class="font-weight-600">Bedrooms</h6>
                                                <div class="d-flex ">
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
                                    
                                            <li class="list-group-item border-0">
                                                <h6 class="font-weight-600">Bathrooms</h6>
                                                <div class="d-flex ">
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
                                       
                                            <li class="list-group-item border-0">
                                          
                                                <button type="submit"
                                                class="btn btn-primary afterButton rounded-pill w-100 "
                                                id="submitModal"> 
                                                <i class="fa-solid fa-magnifying-glass"></i> search
                                                </button>
                                        </ul>
                                    <div class="modal-footer justify-content-between">
                                        <a class="reset-button" href="#">
                                            <span class="fa fa-repeat"></span>
                                            <u>Reset all filters</u>
                                        </a>
                                        <a class="reset-button" href="#">
                                            <span class="fa fa-star"></span>
                                                        <u>Save Search</u>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-icon-st mt-30 d-none d-sm-flex animation-up-4">
                        <a class="d-flex align-items-center dark-color ff-heading me-4"href="#">
                            <i class=" icon fa-solid fa-house"></i> Houses
                        </a>
                        <a class="d-flex align-items-center dark-color ff-heading me-4"href="#">
                            <i class="icon fa-regular fa-building"></i>Apartments
                        </a>
                        <a class="d-flex align-items-center dark-color ff-heading me-4"href="#">
                            <i class="icon fa-solid fa-house-laptop"></i>Office
                        </a>
                        <a class="d-flex align-items-center dark-color ff-heading me-4"href="#">
                            <i class="icon fa-solid fa-house-flood-water"></i>Villa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>