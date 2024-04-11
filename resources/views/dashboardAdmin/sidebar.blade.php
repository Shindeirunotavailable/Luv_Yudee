<?php $locale = session()->get('locale', 'th'); ?>

            <div class="dashboard__sidebar  d-side-block" >
                <div class="dashboard_sidebar_list" role="tablist">
                    <div id="v-tabs-tab" role="tablist" >
                        <p class="fs-15 font-weight-normal ff-heading mt-d-30">MANAGE LISTINGS</p>
                        <div class="sidebar_list_item ">
                            <a class="items-center-db -is-active active" >
                                <i class="fa-solid fa-file-circle-plus mr-d-15"></i>Add New Property
                            </a>
                        </div>
                        <div class="sidebar_list_item">
                            <a class="items-center-db">
                                <i class="fa-solid fa-message mr-d-15"></i>Reviews
                            </a>
                        </div>
                    </div>
                    <p class="fs-15 font-weight-normal ff-heading mt-d-30">MANAGE ACCOUNT</p>
                    <div class="sidebar_list_item"><a class="items-center-db    " href="#">
                            <i class="fa-solid fa-file-contract mr-d-15"></i>My Package</a>
                    </div>
                    <div class="sidebar_list_item">
                        <a class="items-center-db">
                            <i class="fa-solid fa-circle-user mr-d-15"></i>{{ GoogleTranslate::trans('โปรไฟล์ผู้ใช้งาน', $locale) }}
                        </a>
                    </div>
                    @if(session('user_name'))
                        <div class="sidebar_list_item">
                            <a class="items-center-db" href="{{ route('logout') }}">
                                <i class="fa-solid fa-right-from-bracket mr-d-15"></i>Logout
                            </a>
                        </div>
                    @endif
                </div>
            </div>





