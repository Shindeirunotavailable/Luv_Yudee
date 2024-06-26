<?php
$locale = session()->get('locale', 'th');
?>
<header class="header-nav nav-homepage l-header menu-home main-menu ">
    <nav class="nav-con">
        <div class="container nav-con menu_bdrt1">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="logos mr-40 mr-md-0">
                            <a class="header-logo logo1" href="{{url("home")}}">
                                <img src="{{ asset('/assets/images/YuuDee2.png') }}" class="s-logo">
                            </a>
                            <a class="header-logo logo2 link-effect" href="{{url("home")}}">
                                <img src="{{ asset('/assets/images/YuuDee2.png') }}" class="s-logo">
                            </a>
                        </div>
                        <ul class="responsive-menu">
                            <li class="v_list dropitem link-li"><a class="list-item"href="{{url("home")}}">
                                <span class="title menuActive">{{ GoogleTranslate::trans('หน้าเเรก', $locale) }}</span>
                            </a>
                            </li>

                            <li class="v_list dropitem link-li">
                                {{-- <a class="list-item link-effect" href="{{url("property")}}"> --}}
                                    <a class="list-item link-effect" href="{{url("search_result")}}">
                                    <span class="title">{{ GoogleTranslate::trans('รายการ ขาย เช่า', $locale) }}</span>
                                </a>
                            </li>
                            <li class="v_list dropitem link-li">
                                <a class="list-item" href="{{url("contact")}}">
                                    <span class="title">{{ GoogleTranslate::trans('ติดต่อเรา', $locale) }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="d-flex align-items-center">
{{-- 
                        <a href="{{url("login")}}" class="login-info d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#loginSignupModal" role="button">
                            <i class="far fa-user-circle fs-25 mr-2 pb-1"></i>
                            <span class="d-xl-block">Login / Register</span>
                        </a> --}}

                    <div class="pcs_dropdown mx-xl-4">
                        <select class="form-select changeLanguage">
                            <option value="th" {{ session()->get('locale') == 'th' ? 'selected' : ''}}>ภาษาไทย</option>
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : ''}}>English</option>
                            <option value="zh-CN" {{ session()->get('locale') == 'zh-CN' ? 'selected' : ''}}>China</option>
                        </select>
                    </div> 
                    @if(session('user_name'))
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                <span>{{ session('user_name') }}</span>
                            </button>
                            <div class="dropdown-menu">
                                <a href="{{ route('logout') }}" class="logout-btn dropdown-item">{{ GoogleTranslate::trans('ออกจากระบบ', $locale) }}</a>                              
                            </div>
                        </div>
                    @else
                        <a href="{{ url("login") }}" class="login-info d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#loginSignupModal" role="button">
                            <i class="far fa-user-circle fs-25 mr-2 pb-1"></i>
                            <span class="d-xl-block">{{ GoogleTranslate::trans('เข้าสู่ระบบ / สมัครสมาชิก', $locale) }}</span>
                        </a>
                    @endif
                    

                    
                        @if(Auth::check() && Auth::user()->Isadmin == 1)
                            <a class="user-arrow user-btn btn-yuudee add-property rounded-pill mx-2 mx-xl-4 text-a ptr-7" href="{{ url("indexadmin") }}" id="btnAddproperty">
                                {{ GoogleTranslate::trans('ลงประกาศ', $locale) }}
                                <i class="fa-solid fa-arrow-right fa-lg"></i>
                            </a>
                        @else
                            <a class="user-arrow user-btn btn-yuudee add-property rounded-pill mx-2 mx-xl-4 text-a ptr-7" href="{{ url("addproperty") }}" id="btnAddproperty">
                                {{ GoogleTranslate::trans('ลงประกาศ', $locale) }}
                                <i class="fa-solid fa-arrow-right fa-lg"></i>
                            </a>
                        @endif

                
                        {{-- <a class="user-arrow user-btn btn-yuudee add-property rounded-pill mx-2 mx-xl-4 text-a ptr-7"href="{{url("addproperty")}}" id="btnAddproperty">
                            Add Property
                            <i class="fa-solid fa-arrow-right fa-lg"></i>
                        </a> --}}
                        <a class="sidemenus-btn filter-btn-right" href="#" id="toggleSidebar" data-bs-toggle="offcanvas" data-bs-target="#SidebarPanel" aria-controls="SidebarPanelLabel"> </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="mobile_header_nav sthome1">
    <div class="mobile-menus">
        <div class="header innerpage-style ptr-1">
            <div class="menus_and_widget">
                <div class="mobile_menus_bar d-flex justify-content-between align-items-center">
                    <a class="menusbar" href="#" id="menubarButton" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                        <img src="{{ asset('/assets/images/mobile-dark-nav-icon.jpg') }}" alt="mobile icon" class="slidebar-logo"></a>
                    </a>
                    <a class="mobile_logo" href="{{url("home")}}">
                        <img src="{{ asset('/assets/images/YuuDee2.png') }}" alt="logo" class="s-logo">
                        <div class="d-flex bd-highlight tab-lets">
                            <a class="p-2 flex-fill bd-highlight"  href="{{url("login")}}"><span class="icon fs-25 far fa-user-circle "></span>
                                <a class="user-arrow user-btn btn-yuudee add-property rounded-pill mx-2 text-a ptr-7"href="{{url("addproperty")}}">
                                    {{ GoogleTranslate::trans('ลงประกาศ', $locale) }}
                                        <i class="fa-solid fa-arrow-right fa-lg"></i>
                                </a>
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas offcanvas-start mobile_menus-canvas" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel" data-bs-scroll="true" aria-modal="true" role="dialog">
        <div class="rside-hidden-bar">
            <div class="hsidebar-header text-left">
                <div class="sidebar-close-icon pt-2 " data-bs-dismiss="offcanvas" aria-label="Close">
                    <a href="javascript:void(0)" class="closebtns">&times;</a>
                </div>
                <img src="{{ asset('/assets/images/YuuDee2.png') }}"width="130px">
            </div>
            <div class="hsidebar-contents ">
                <div class="hbar_navbar_contents">
                    <aside data-testid="sidebar-root-test-id" width="100%" class="sidebar-root custom-class css-sidebar-root pbr-10">
                        <div data-testid="sidebar-container-test-id" class="sidebar-container css-sidebar-container">
                            <nav class="menu-root css-menu-root">
                                <ul class="css-pm">
                                    <li class="menuitem-root submenu-root active css-pw link-li">
                                        <a class="menu-button" data-testid="menu-button-test-id" tabindex="0" href="{{url("home")}}">
                                            <span class="menu-label css-fotw" >{{ GoogleTranslate::trans('หน้าเเรก', $locale) }}</span>
                                            <span class="submenu-expand-icon css-submenu-expand">
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menuitem-root submenu-root css-pw link-li">
                                        <a class="menu-button" data-testid="menu-button-test-id" tabindex="0" href="{{url("property")}}">
                                            <span class="menu-label css-fotw">{{ GoogleTranslate::trans('รายการ ขาย เช่า', $locale) }}</span>
                                            <span class="submenu-expand-icon css-submenu-expand">
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menuitem-root submenu-root css-pw link-li">
                                        <a class="menu-button" data-testid="menu-button-test-id" tabindex="0" href="{{url("contact")}}">
                                            <span class="menu-label css-fotw">{{ GoogleTranslate::trans('ติดต่อเรา', $locale) }}</span>
                                            <span class="submenu-expand-icon css-submenu-expand">
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menuitem-root submenu-root css-pw link-li">
                                        <div class="pcs_dropdown menu-button">
                                            <select class="form-select changeLanguage">
                                                <option value="th" {{ session()->get('locale') == 'th' ? 'selected' : ''}}> ไทย</option>
                                                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : ''}}>English</option>
                                                <option value="zh-CN" {{ session()->get('locale') == 'zh-CN' ? 'selected' : ''}}>China</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </aside>
                    <div class="hbar_footer position-relative bdrt1">
                        <div class="row pt-45 pb-30 pl-30">
                            <div class="col-auto">
                                <div class="contact-info">
                                    <p class="info-title dark-color">Total Free Customer Care</p>
                                    <h6 class="info-phone dark-color"><a href="tel:+012305094502">+(0) 123 050 945 02</a></h6>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="contact-info">
                                    <p class="info-title dark-color">Need Live Support?</p>
                                    <h6 class="info-mail dark-color"><a href="mailto:hi@homez.com">hi@homez.com</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-30 pb-30 bdrt1">
                            <div class="col-auto">
                                <div class="social-style-sidebar d-flex align-items-center pl-30">
                                    <h6 class="me-4 mb-0">Follow us</h6>
                                    <a class="me-3" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="me-3" href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="me-3" href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a class="me-3" href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
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