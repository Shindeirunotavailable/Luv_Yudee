@csrf
<div class="dashboard__main pl-d-0-md">
    <div class="dashboard__content property-page bgc-f7">
        <div class="row align-items-center pb-d-40">
            <div class="col-lg-12">
                <div class="dashboard_title_area">
                    <h2>Add New Property</h2>
                    <p class="text">We are glad to see you again!</p>
                </div>

            </div>
        </div>
        <div class="row d-flex">
            <div class="col-xl-12">
                <div class="ps-widget bgc-white bdrs12 default-box-shadow2 pt-d-30 mb-6 overflow-hidden position-relative">

                    <div class="navtab-style1">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                                <button class="nav-link-ap active font-weight-600 ms-3" id="nav-item1-tab"
                                    data-toggle="tab" data-target="#nav-item1" type="button" role="tab"
                                    aria-controls="nav-item1" aria-selected="true">
                                    1. Description
                                </button>
                                <button class="nav-link-ap font-weight-600" id="nav-item2-tab" data-toggle="tab"
                                    data-target="#nav-item2" type="button" role="tab" aria-controls="nav-item2"
                                    aria-selected="false">2. Media
                                </button>
                                <button class="nav-link-ap font-weight-600" id="nav-item3-tab" data-toggle="tab"
                                    data-target="#nav-item3" type="button" role="tab" aria-controls="nav-item3"
                                    aria-selected="false">3. Location
                                </button>
                                <button class="nav-link-ap font-weight-600" id="nav-item4-tab" data-toggle="tab"
                                    data-target="#nav-item4" type="button" role="tab" aria-controls="nav-item4"
                                    aria-selected="false">4. Detail
                                </button>
                                <button class="nav-link-ap font-weight-600" id="nav-item5-tab" data-toggle="tab"
                                    data-target="#nav-item5" type="button" role="tab" aria-controls="nav-item5"
                                    aria-selected="false">5. Amenities
                                </button>
                            </div>
                        </nav>

                        <div class="tab-content-ds" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-item1" role="tabpanel"
                                aria-labelledby="nav-item1-tab">
                                <div class="ps-widget bgc-white bdrs12 p-d-30 overflow-hidden position-relative">
                                    <h4 class="title fs-17 mb-6">Property Description</h4>
                                    <form class="form-style1">
                                        <div class="row ">
                                            <div class="col-sm-12">
                                                <div class="mb-d-20">
                                                    <label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Title</label>
                                                    <input type="text" class="form-control-ap"
                                                        placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="mb-d-20">
                                                    <label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Description
                                                    </label>
                                                    @include('CKEditor.editor')
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10">Select
                                                        Category</label>
                                                    <div class="">
                                                        <div id="result-container "></div>
                                                        <div>
                                                            <select id="select1" name="select1" class="form-select "
                                                                style="width: 100%; height: 55px;" multiple>
                                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                    <option value="AK">Alaska</option>
                                                                    <option value="HI">Hawaii</option>
                                                                </optgroup>
                                                                <optgroup label="Pacific Time Zone">
                                                                    <option value="CA">California</option>
                                                                    <option value="NV">Nevada</option>
                                                                    <option value="OR">Oregon</option>
                                                                    <option value="WA">Washington</option>
                                                                </optgroup>
                                                                <optgroup label="Mountain Time Zone">
                                                                    <option value="AZ">Arizona</option>
                                                                    <option value="CO">Colorado</option>
                                                                    <option value="ID">Idaho</option>
                                                                    <option value="MT">Montana</option>
                                                                    <option value="NE">Nebraska</option>
                                                                    <option value="NM">New Mexico</option>
                                                                    <option value="ND">North Dakota</option>
                                                                    <option value="UT">Utah</option>
                                                                    <option value="WY">Wyoming</option>
                                                                </optgroup>
                                                                <optgroup label="Central Time Zone">
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="AR">Arkansas</option>
                                                                    <option value="IL">Illinois</option>
                                                                    <option value="IA">Iowa</option>
                                                                    <option value="KS">Kansas</option>
                                                                    <option value="KY">Kentucky</option>
                                                                    <option value="LA">Louisiana</option>
                                                                    <option value="MN">Minnesota</option>
                                                                    <option value="MS">Mississippi</option>
                                                                    <option value="MO">Missouri</option>
                                                                    <option value="OK">Oklahoma</option>
                                                                    <option value="SD">South Dakota</option>
                                                                    <option value="TX">Texas</option>
                                                                    <option value="TN">Tennessee</option>
                                                                    <option value="WI">Wisconsin</option>
                                                                </optgroup>
                                                                <optgroup label="Eastern Time Zone">
                                                                    <option value="CT">Connecticut</option>
                                                                    <option value="DE">Delaware</option>
                                                                    <option value="FL">Florida</option>
                                                                    <option value="GA">Georgia</option>
                                                                    <option value="IN">Indiana</option>
                                                                    <option value="ME">Maine</option>
                                                                    <option value="MD">Maryland</option>
                                                                    <option value="MA">Massachusetts</option>
                                                                    <option value="MI">Michigan</option>
                                                                    <option value="NH">New Hampshire</option>
                                                                    <option value="NJ">New Jersey</option>
                                                                    <option value="NY">New York</option>
                                                                    <option value="NC">North Carolina</option>
                                                                    <option value="OH">Ohio</option>
                                                                    <option value="PA">Pennsylvania</option>
                                                                    <option value="RI">Rhode Island</option>
                                                                    <option value="SC">South Carolina</option>
                                                                    <option value="VT">Vermont</option>
                                                                    <option value="VA">Virginia</option>
                                                                    <option value="WV">West Virginia</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10">Listed
                                                        in</label>
                                                    <div class="">


                                                        <select id="select2" name="select2" class="form-select  "
                                                            style="width: 100%; height: 55px;" multiple>
                                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                <option value="AK">Alaska</option>
                                                                <option value="HI">Hawaii</option>
                                                            </optgroup>
                                                            <optgroup label="Pacific Time Zone">
                                                                <option value="CA">California</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="WA">Washington</option>
                                                            </optgroup>
                                                            <optgroup label="Mountain Time Zone">
                                                                <option value="AZ">Arizona</option>
                                                                <option value="CO">Colorado</option>
                                                                <option value="ID">Idaho</option>
                                                                <option value="MT">Montana</option>
                                                                <option value="NE">Nebraska</option>
                                                                <option value="NM">New Mexico</option>
                                                                <option value="ND">North Dakota</option>
                                                                <option value="UT">Utah</option>
                                                                <option value="WY">Wyoming</option>
                                                            </optgroup>
                                                            <optgroup label="Central Time Zone">
                                                                <option value="AL">Alabama</option>
                                                                <option value="AR">Arkansas</option>
                                                                <option value="IL">Illinois</option>
                                                                <option value="IA">Iowa</option>
                                                                <option value="KS">Kansas</option>
                                                                <option value="KY">Kentucky</option>
                                                                <option value="LA">Louisiana</option>
                                                                <option value="MN">Minnesota</option>
                                                                <option value="MS">Mississippi</option>
                                                                <option value="MO">Missouri</option>
                                                                <option value="OK">Oklahoma</option>
                                                                <option value="SD">South Dakota</option>
                                                                <option value="TX">Texas</option>
                                                                <option value="TN">Tennessee</option>
                                                                <option value="WI">Wisconsin</option>
                                                            </optgroup>
                                                            <optgroup label="Eastern Time Zone">
                                                                <option value="CT">Connecticut</option>
                                                                <option value="DE">Delaware</option>
                                                                <option value="FL">Florida</option>
                                                                <option value="GA">Georgia</option>
                                                                <option value="IN">Indiana</option>
                                                                <option value="ME">Maine</option>
                                                                <option value="MD">Maryland</option>
                                                                <option value="MA">Massachusetts</option>
                                                                <option value="MI">Michigan</option>
                                                                <option value="NH">New Hampshire</option>
                                                                <option value="NJ">New Jersey</option>
                                                                <option value="NY">New York</option>
                                                                <option value="NC">North Carolina</option>
                                                                <option value="OH">Ohio</option>
                                                                <option value="PA">Pennsylvania</option>
                                                                <option value="RI">Rhode Island</option>
                                                                <option value="SC">South Carolina</option>
                                                                <option value="VT">Vermont</option>
                                                                <option value="VA">Virginia</option>
                                                                <option value="WV">West Virginia</option>
                                                            </optgroup>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-d-20">
                                                    <label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Property
                                                        Status</label>
                                                    <div class="">

                                                        <select id="select3" name="select3" class="form-select  "
                                                            style="width: 100%; height: 55px;" multiple>
                                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                <option value="AK">Alaska</option>
                                                                <option value="HI">Hawaii</option>
                                                            </optgroup>
                                                            <optgroup label="Pacific Time Zone">
                                                                <option value="CA">California</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="WA">Washington</option>
                                                            </optgroup>
                                                            <optgroup label="Mountain Time Zone">
                                                                <option value="AZ">Arizona</option>
                                                                <option value="CO">Colorado</option>
                                                                <option value="ID">Idaho</option>
                                                                <option value="MT">Montana</option>
                                                                <option value="NE">Nebraska</option>
                                                                <option value="NM">New Mexico</option>
                                                                <option value="ND">North Dakota</option>
                                                                <option value="UT">Utah</option>
                                                                <option value="WY">Wyoming</option>
                                                            </optgroup>
                                                            <optgroup label="Central Time Zone">
                                                                <option value="AL">Alabama</option>
                                                                <option value="AR">Arkansas</option>
                                                                <option value="IL">Illinois</option>
                                                                <option value="IA">Iowa</option>
                                                                <option value="KS">Kansas</option>
                                                                <option value="KY">Kentucky</option>
                                                                <option value="LA">Louisiana</option>
                                                                <option value="MN">Minnesota</option>
                                                                <option value="MS">Mississippi</option>
                                                                <option value="MO">Missouri</option>
                                                                <option value="OK">Oklahoma</option>
                                                                <option value="SD">South Dakota</option>
                                                                <option value="TX">Texas</option>
                                                                <option value="TN">Tennessee</option>
                                                                <option value="WI">Wisconsin</option>
                                                            </optgroup>
                                                            <optgroup label="Eastern Time Zone">
                                                                <option value="CT">Connecticut</option>
                                                                <option value="DE">Delaware</option>
                                                                <option value="FL">Florida</option>
                                                                <option value="GA">Georgia</option>
                                                                <option value="IN">Indiana</option>
                                                                <option value="ME">Maine</option>
                                                                <option value="MD">Maryland</option>
                                                                <option value="MA">Massachusetts</option>
                                                                <option value="MI">Michigan</option>
                                                                <option value="NH">New Hampshire</option>
                                                                <option value="NJ">New Jersey</option>
                                                                <option value="NY">New York</option>
                                                                <option value="NC">North Carolina</option>
                                                                <option value="OH">Ohio</option>
                                                                <option value="PA">Pennsylvania</option>
                                                                <option value="RI">Rhode Island</option>
                                                                <option value="SC">South Carolina</option>
                                                                <option value="VT">Vermont</option>
                                                                <option value="VA">Virginia</option>
                                                                <option value="WV">West Virginia</option>
                                                            </optgroup>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-6">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10">Price
                                                        in $</label>
                                                    <input type="text" class="form-control-ap"
                                                        placeholder="Your Name">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-6">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10">Yearly
                                                        Tax Rate</label>
                                                    <input type="text" class="form-control-ap"
                                                        placeholder="Your Name">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-6">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10">After
                                                        Price Label</label>
                                                    <input type="text"class="form-control-ap"
                                                        placeholder="Your Name">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-item2" role="tabpanel"
                                aria-labelledby="nav-item2-tab">
                                <div class="ps-widget bgc-white bdrs12 p-d-30 overflow-hidden position-relative">
                                    <h4 class="title fs-17 mb-6">Upload photos of your property</h4>
                                    <form class="form-style1">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div
                                                    class="upload-img position-relative overflow-hidden bdrs12 text-center mb-6 px-2">
                                                    <div class="icon mb-6">
                                                        <i class="fa-solid fa-file-arrow-up"></i>
                                                    </div>
                                                    <h4 class="title fs-17 mb-d-10">Upload/Drag photos of your property
                                                    </h4>
                                                    <p class="text mb-d-25">Photos must be JPEG or PNG formatand at least
                                                        2048x768</p>
                                                    <label class="btn btn-primary afterButton btn-t-white">Browse Files
                                                        <input id="fileInput" type="file" multiple=""
                                                            class="ud-btn btn-white" style="display: none;">
                                                    </label>
                                                </div>
                                                <div
                                                    class="row profile-box position-relative d-md-flex align-items-end mb-8">
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="title fs-17 mb-6">Video Option</h4>
                                        <div class="row">

                                            <div class="col-sm-12 col-xl-4 mb-4">
                                                {{-- <div class="mb-6">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10">Up Load</label><input type="text" class="form-control-ap"
                                                        placeholder="Your Name">
                                                </div> --}}
                                                <input type="file" class="form-control-ap" id="customFile" />
                                            </div>

                                            {{-- <input type="submit"> --}}
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-item3" role="tabpanel"
                                aria-labelledby="nav-item3-tab">
                                <div class="ps-widget bgc-white bdrs12 p-d-30 overflow-hidden position-relative">
                                    <h4 class="title fs-17 mb-6">Listing Location</h4>
                                    <form class="form-style1">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Address</label><input
                                                        type="text" class="form-control-ap"
                                                        placeholder="Your Name"></div>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-d-20">
                                                    <label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Country /State</label>
                                                    <div class="">

                                                        <select name="provinces" id="provinces" class="form-control-ap">
                                                            <option value="" selected disabled>กรุณาเลือกจังหวัด</option>
                                                            @foreach ($provinces as $value)
                                                                <option value="{{ $value['id'] }}">{{ $value['name_th'] }}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">City</label>
                                                    <div class="">

                                                        <select name="amphures" id="amphures" class="form-control-ap">
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Country</label>
                                                    <div class=" ">

                                                        <select name="districts" id="districts" class="form-control-ap">
                                                        </select><br>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10">Zip</label>
                                                    <input type="text" name="zipcode" id="zipcode" readonly class="form-control-ap"></div>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Neighborhood</label><input
                                                        type="text" class="form-control-ap"
                                                        placeholder="Neighborhood"></div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="mb-d-20 mt30">
                                                    <label class="heading-color ff-heading font-weight-600 mb-6">Place
                                                        the listing pin on the map</label>
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61986.891901766154!2d100.4506952486328!3d13.828182899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29bfbc0283e39%3A0x203d873e226cd556!2zTHV2IERyaXZlIENhciBSZW50IGwg4LmA4Lil4Li04LifIOC5hOC4lOC4o-C5jOC4nyDguITguLLguKPguYzguYDguKPguYnguJnguJfguYwg4Liq4Liz4LiZ4Lix4LiB4LiH4Liy4LiZ4LmD4Lir4LiN4LmI!5e0!3m2!1sth!2sth!4v1705384925758!5m2!1sth!2sth"
                                                        width="100%" height="450" style="border:0;"
                                                        allowfullscreen="" loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade">
                                                    </iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-6"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Latitude</label><input
                                                        type="text" class="form-control-ap"></div>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-6"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Longitude</label><input
                                                        type="text" class="form-control-ap"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-item4" role="tabpanel"
                                aria-labelledby="nav-item4-tab">
                                <div class="ps-widget bgc-white bdrs12 p-d-30 overflow-hidden position-relative">
                                    <h4 class="title fs-17 mb-6">Listing Details</h4>
                                    <form class="form-style1">
                                        <div class="row">
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Property ID
                                                        (only numbers)</label><input type="text"
                                                        class="form-control-ap" placeholder="Your ID">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Property type
                                                        (only numbers)</label><input type="text"
                                                        class="form-control-ap" placeholder="Your Property type">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Property status</label><input
                                                        type="text" class="form-control-ap"
                                                        placeholder="Status"></div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Price</label><input
                                                        type="text" class="form-control-ap"
                                                        placeholder="Price"></div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Rooms</label><input
                                                        type="text" class="form-control-ap"
                                                        placeholder="Rooms"></div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Bedrooms
                                                        </label><input type="text" class="form-control-ap"
                                                        placeholder="Rooms">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Bathrooms</label><input
                                                        type="text" class="form-control-ap"
                                                        placeholder="Rooms"></div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Size
                                                        size</label><input type="text" class="form-control-ap"
                                                        placeholder="SqFt">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Garage
                                                        </label><input type="text" class="form-control-ap"
                                                        placeholder="Garage">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Garage size
                                                        </label><input type="text" class="form-control-ap"
                                                        placeholder="SqFt">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">PSM / sqm
                                                        </label><input type="text" class="form-control-ap"
                                                        placeholder="SqFt">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                    class="heading-color ff-heading font-weight-600 mb-d-10">TYPE
                                                    </label><input type="text" class="form-control-ap"
                                                    placeholder="Family">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Available
                                                        from
                                                        (date)</label><input type="text" class="form-control-ap"
                                                        placeholder="99.aa.yyyy">
                                                </div>
                                            </div>

                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Year build
                                                        </label><input type="text" class="form-control-ap"
                                                        placeholder="Year">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Label</label><input
                                                        type="text" class="form-control-ap"
                                                        placeholder="status"></div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Owner/
                                                        Agent
                                                        nots (not visible on front end)</label>
                                                    <textarea cols="30" rows="5" placeholder="There are many variations of passages."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-item5" role="tabpanel"
                                aria-labelledby="nav-item5-tab">
                                <div class="ps-widget bgc-white bdrs12 p-d-30 overflow-hidden position-relative">
                                    <h4 class="title fs-17 mb-6">Select Amenities</h4>
                                    <div class="row">
                                        <div class="row-ap flex-lg-row flex-wrap">
                                            <div class="col-sm-12 col-md-6 col-lg-4">
                                                <div class="checkbox-style1"><label
                                                        class="custom_checkbox">Attic<input type="checkbox"><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Basketball court<input type="checkbox"
                                                            checked=""><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Air Conditioning<input type="checkbox"
                                                            checked=""><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Lawn<input type="checkbox"
                                                            checked=""><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Swimming Pool<input
                                                            type="checkbox"><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Barbeque<input type="checkbox"><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Microwave<input type="checkbox"><span
                                                            class="checkmark"></span></label></div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-4">
                                                <div class="checkbox-style1"><label class="custom_checkbox">TV
                                                        Cable<input type="checkbox"><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Dryer<input type="checkbox"
                                                            checked=""><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Outdoor Shower<input type="checkbox"
                                                            checked=""><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Washer<input type="checkbox"
                                                            checked=""><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Gym<input type="checkbox"><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Ocean view<input
                                                            type="checkbox"><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Private space<input
                                                            type="checkbox"><span class="checkmark"></span></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-4">
                                                <div class="checkbox-style1"><label class="custom_checkbox">Lake
                                                        view<input type="checkbox"><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Wine cellar<input type="checkbox"
                                                            checked=""><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Front yard<input type="checkbox"
                                                            checked=""><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Refrigerator<input type="checkbox"
                                                            checked=""><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">WiFi<input type="checkbox"><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Laundry<input type="checkbox"><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Sauna<input type="checkbox"><span
                                                            class="checkmark"></span></label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <footer class="dashboard_footer pt-d-30 pb10">
        <div class="container">
            <div class="row items-center justify-content-center justify-content-md-between">
                <div class="col-auto">
                    <div class="copyright-widget">
                        <p class="text">© Homez 2024 <a href="https://themeforest.net/user/ib-themes"
                                target="_blank" rel="noopener noreferrer">ib-themes</a> - All rights reserved</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="footer_bottom_right_widgets text-center text-lg-end">
                        <p><a href="#">Privacy</a> · <a href="#">Terms</a> · <a
                                href="#">Sitemap</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



</div>

