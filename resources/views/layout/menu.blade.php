<header class="header-nav nav-homepage l-header menu-home main-menu ">
    <nav class="nav-con">
        <div class="container nav-con menu_bdrt1">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="logos mr-40">
                            <a class="header-logo logo1" href="{{url("home")}}">
                                <img src="{{ asset('/assets/images/YuuDee2.png') }}"width="150px">
                            </a>
                            <a class="header-logo logo2 link-effect" href="{{url("home")}}">
                                <img src="{{ asset('/assets/images/YuuDee2.png') }}"width="150px">
                            </a>
                        </div>
                        <ul class="responsive-menu">
                            <li class="v_list dropitem link-li"><a class="list-item"href="{{url("home")}}">
                                <span class="title menuActive">Home</span>
                            </a>
                            </li>
                            
                            <li class="v_list dropitem link-li">
                                <a class="list-item link-effect" href="{{url("property")}}">
                                    <span class="title">Property</span>
                                </a>
                            </li>
                            <li class="v_list dropitem link-li">
                                <a class="list-item" href="{{url("contact")}}">
                                    <span class="title">Contact Us</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="d-flex align-items-center">
                        <a href="{{url("login")}}" class="login-info d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#loginSignupModal" role="button">
                            <i class="far fa-user-circle fs-25 mr-2 pb-1"></i> 
                            <span class="d-xl-block">Login / Register</span>
                        </a>
                        <button class="user-arrow user-btn btn-yuudee add-property rounded-pill mx-2 mx-xl-4 text-a "href="{{url("addproperty")}}">
                            Add Property
                            <i class="fal fa-arrow-right-long"></i>
                        </button>
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
                        <img src="{{ asset('/assets/images/mobile-dark-nav-icon.jpg') }}" alt="mobile icon" width="30px"></a>
                    </a>
                    <a class="mobile_logo" href="{{url("home")}}">
                        <img src="{{ asset('/assets/images/YuuDee2.png') }}" alt="logo" width="150px">
                        <a href="{{url("login")}}"><span class="icon fs-25 far fa-user-circle "></span></a>
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
                                            <span class="menu-label css-fotw" >Home</span>
                                            <span class="submenu-expand-icon css-submenu-expand">
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menuitem-root submenu-root css-pw link-li">
                                        <a class="menu-button" data-testid="menu-button-test-id" tabindex="0" href="{{url("property")}}">
                                            <span class="menu-label css-fotw">Property</span>
                                            <span class="submenu-expand-icon css-submenu-expand">
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menuitem-root submenu-root css-pw link-li">
                                        <a class="menu-button" data-testid="menu-button-test-id" tabindex="0" href="{{url("contact")}}">
                                            <span class="menu-label css-fotw">Contact Us</span>
                                            <span class="submenu-expand-icon css-submenu-expand">
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menuitem-root submenu-root css-pw link-li">
                                        <a class="menu-button" data-testid="menu-button-test-id" tabindex="0" href="{{url("addproperty")}}">
                                            <span class="menu-label css-fotw">Add Property</span>
                                            <span class="submenu-expand-icon css-submenu-expand">
                                            </span>
                                        </a>
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