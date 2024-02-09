

@extends('layout.master')
@section('content')

    <!-- {{-- ส่วนหัว --}} -->
    <section class="background-grey section-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                        <h2 class="title">New York Homes for Sale</h2>
                        <div class="breadcumb-list"><a href="#">Home</a><a href="#">For Rent</a></div>
                </div>
            </div>
        </div>
    </section>


    
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
                    <div class="list-sidebar-style1">
                        {{-- side-bar --}}
                        <ul class="list-group list-group-flush">
                            <li  class="list-group-item">
                                <h6>Find your home</h6>
                                <input class="form-control form-control-lg rounded-pill" type="text" placeholder="What are you looking for?">

                            </li>

                            <li class="list-group-item">
                                <h6>Listing Status</h6>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        All
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Buy
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Rent
                                    </label>
                                  </div>
                            </li>

                            <li class="list-group-item">
                                <h6 class="list-title">Property Type</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                      All
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                      Houses
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                    Apartments
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Office
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Villa
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Location</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                    </select>
                                  </div>
                            </li>
                            <li class="list-group-item">
                                <h6>Price Range</h6>
                                <div class="text-center">
                                    <input type="range" id="vol" name="vol" min="0" max="50" style="width:300px">

                                </div>

                                    <div class="row">
                                      <div class="col">
                                        <input type="text" class="form-control" placeholder="$20" disabled>
                                      </div>
                                        <h3> - </h3>
                                      <div class="col">
                                        <input type="text" class="form-control" placeholder="$500"disabled>
                                      </div>
                                    </div>                                  
                            </li>
                            <li class="list-group-item">
                                <h6>Bedrooms</h6>
                                <div class="d-flex justify-content-around">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">any</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">+1</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">+2</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">+3</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">+4</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">+4</label>
                                      </div>
                                </div>

                            </li>

                            <li class="list-group-item">
                                <h6>Bathrooms</h6>
                                <div class="d-flex justify-content-around">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">any</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">+1</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">+2</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">+3</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">+4</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">+4</label>
                                      </div>
                                </div>
                            </li>


                            <li class="list-group-item">
                                <h6>Square Feet</h6>
                                <div class="d-flex justify-content-between">
                                    <input type="number" class="form-control" placeholder="Min."
                                    id="minFeet">             
                                    <h3 class=" pl-10 pr-10"> - </h3>                     
                                    <input type="number" class="form-control" placeholder="Max."
                                    id="minFeet">
                                </div>
                            </li>
                            <li class="list-group-item">
                                <h6>Year Built</h6>
                                <div class="d-flex justify-content-between">
                                    <input type="number" class="form-control P-10" placeholder="2019"
                                    id="minFeet">             
                                    <h3 class=" pl-10 pr-10"> - </h3>                     
                                    <input type="number" class="form-control P-10" placeholder="2024"
                                    id="minFeet">
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
                </div>

                <div class="tab-pane fade show active col-lg-8" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"> 
                    {{-- img-grid --}}
                    <div class="card-deck">
                        <div class="card">
                        <img src="https://www.black-beam.com/plans/BB-H2-60002.15_3d1.jpg" alt="listings" class="card-img-top">

                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                        </div>
                        <div class="card">
                            <img src="https://www.black-beam.com/plans/BB-H2-60002.15_3d1.jpg" alt="listings" class="card-img-top">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                        </div>
                    </div>
                    {{-- img-grid end--}}
                </div>


                <div class="tab-pane fade col-lg-8" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" >
            
                    <div class="card mb-3 ">
                        <div class="row h-250">
                            <div class="col-lg-5">
                            <img class="w-100 h-250 rounded-left" src="https://www.black-beam.com/plans/BB-H2-60002.15_3d1.jpg" alt="listings" >
                            </div>
                            <div class="col-lg-7">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3 ">
                        <div class="row h-250">
                            <div class="col-lg-5">
                            <img class="w-100 h-250 rounded-left" src="https://www.black-beam.com/plans/BB-H2-60002.15_3d1.jpg" alt="listings" >
                            </div>
                            <div class="col-lg-7">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3 ">
                        <div class="row h-250">
                            <div class="col-lg-5">
                            <img class="w-100 h-250 rounded-left" src="https://www.black-beam.com/plans/BB-H2-60002.15_3d1.jpg" alt="listings" >
                            </div>
                            <div class="col-lg-7">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3 ">
                        <div class="row h-250">
                            <div class="col-lg-5">
                            <img class="w-100 h-250 rounded-left" src="https://www.black-beam.com/plans/BB-H2-60002.15_3d1.jpg" alt="listings" >
                            </div>
                            <div class="col-lg-7">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>


@endsection

