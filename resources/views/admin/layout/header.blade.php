<style>
    .header-top{
        background: grey !important ;
    }
</style>
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header flex-column  header-fixed ">
                    <!--begin::Top-->
                    <div class="header-top">
                        <!--begin::Container-->
                        <div class=" container ">
                            <!--begin::Left-->
                            <div class="d-none d-lg-flex align-items-center mr-3">
                                <!--begin::Logo-->
                                <a href="index.html" class="mr-20">
                                    <img alt="Logo" src="images/logo-gt.png" class="max-h-35px" />
                                </a>
                                <!--end::Logo-->

                                <!--begin::Desktop Search-->
                                <div class="quick-search quick-search-inline ml-4 w-300px" id="kt_quick_search_inline">
                                    <!--begin::Form-->
                                    <form method="get" class="quick-search-form">
                                        <div class="input-group rounded bg-light">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <span class="svg-icon svg-icon-lg">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path
                                                                    d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                <path
                                                                    d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                    fill="#000000" fill-rule="nonzero" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span> </span>
                                            </div>

                                            <input type="text" class="form-control h-45px" placeholder="Search..." />

                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="quick-search-close ki ki-close icon-sm"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                    <!--end::Form-->

                                    <!--begin::Search Toggle-->
                                    <div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,1px"></div>
                                    <!--end::Search Toggle-->

                                    <!--begin::Dropdown-->
                                    <div
                                        class="dropdown-menu dropdown-menu-left dropdown-menu-lg dropdown-menu-anim-up">
                                        <div class="quick-search-wrapper scroll" data-scroll="true" data-height="350"
                                            data-mobile-height="200">
                                        </div>
                                    </div>
                                    <!--end::Dropdown-->
                                </div>
                                <!--end::Desktop Search-->
                            </div>
                            <!--end::Left-->

                            <!--begin::Topbar-->
                            <div class="topbar">
                                <!--begin::Tablet & Mobile Search-->
                                <div class="dropdown d-flex d-lg-none">
                                    <!--begin::Toggle-->
                                    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                        <div class="btn btn-icon btn-hover-transparent-white btn-lg btn-dropdown mr-1">
                                            <span class="svg-icon svg-icon-xl">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                    </div>
                                    <!--end::Toggle-->

                                    <!--begin::Dropdown-->
                                    <div
                                        class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                                        <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                                            <!--begin:Form-->
                                            <form method="get" class="quick-search-form">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <span class="svg-icon svg-icon-lg">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                            fill="#000000" fill-rule="nonzero"
                                                                            opacity="0.3" />
                                                                        <path
                                                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                            fill="#000000" fill-rule="nonzero" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span> </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Search..." />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i
                                                                class="quick-search-close ki ki-close icon-sm text-muted"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--end::Form-->

                                            <!--begin::Scroll-->
                                            <div class="quick-search-wrapper scroll" data-scroll="true"
                                                data-height="325" data-mobile-height="200">
                                            </div>
                                            <!--end::Scroll-->
                                        </div>
                                    </div>
                                    <!--end::Dropdown-->
                                </div>
                                <!--end::Tablet & Mobile Search-->
                                <!--begin::User-->
                                <div class="topbar-item">
                                    <div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2"
                                        id="kt_quick_user_toggle">
                                        <div class="d-flex flex-column text-right pr-3">
                                            <span
                                                class="text-white opacity-50 font-weight-bold font-size-sm d-none d-md-inline">John WIck</span>
                                            <span
                                                class="text-white font-weight-bolder font-size-sm d-none d-md-inline">
                                                Ordinary man</span>
                                        </div>
                                        <span class="symbol symbol-35">
                                            <span
                                                class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30">S</span>
                                        </span>
                                    </div>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Top-->

                    <!--begin::Bottom-->
                    <div class="header-bottom">
                        <!--begin::Container-->
                        <div class=" container ">
                            <!--begin::Header Menu Wrapper-->
                            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                                <!--begin::Header Menu-->
                                <div id="kt_header_menu"
                                    class="header-menu header-menu-left header-menu-mobile  header-menu-layout-default ">
                                    <!--begin::Header Nav-->
                                    <ul class="menu-nav ">
                                        <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover"
                                            aria-haspopup="true"><a href="javascript:;"
                                                class="menu-link menu-toggle"><span
                                                    class="menu-text">Dashboard</span><span class="menu-desc">Recent
                                                    Updates & Reports</span><i class="menu-arrow"></i></a>
                                            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a href="index.html"
                                                            class="menu-link "><span class="menu-text">Latest
                                                                Updated</span><span class="menu-desc"></span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a target="_blank"
                                                            href="https://preview.keenthemes.com/metronic/preview/demo9/builder.html"
                                                            class="menu-link "><span class="menu-text">Layout
                                                                Builder</span><span class="menu-desc"></span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover"
                                            aria-haspopup="true">
                                            <a href="admin/wisata" class="menu-link"><span
                                                    class="menu-text">Wisata</span><span class="menu-desc">Destinasi
                                                    & Tour</span><i class="menu-arrow"></i>
                                            </a>
                                            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                                                <ul class="menu-subnav">
                                                    <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                        aria-haspopup="true"><a href="/admin/wisata/tambah"
                                                            class="menu-link"><span
                                                                class="svg-icon menu-icon">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <path
                                                                            d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                                            fill="#000000" fill-rule="nonzero"
                                                                            opacity="0.3" />
                                                                        <path
                                                                            d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                                            fill="#000000" fill-rule="nonzero" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span><span class="menu-text">Tambah Wisata</span></a>
                                                    </li>

                                                    <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                        aria-haspopup="true"><a href="admin/wisata/lokasi"
                                                        class="menu-link"><span
                                                        class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Files/Pictures1.svg--><svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            width="24px" height="24px" viewBox="0 0 24 24"
                                                            version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path
                                                                    d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z"
                                                                    fill="#000000" opacity="0.3" />
                                                                <polygon fill="#000000" opacity="0.3"
                                                                    points="4 19 10 11 16 19" />
                                                                <polygon fill="#000000"
                                                                    points="11 19 15 14 19 19" />
                                                                <path
                                                                    d="M18,12 C18.8284271,12 19.5,11.3284271 19.5,10.5 C19.5,9.67157288 18.8284271,9 18,9 C17.1715729,9 16.5,9.67157288 16.5,10.5 C16.5,11.3284271 17.1715729,12 18,12 Z"
                                                                    fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span><span class="menu-text">Tambah Provinsi</span></a>
                                                    </li>

                                                    <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                        aria-haspopup="true"><a href="admin/wisata/inclusion"
                                                        class="menu-link"><span
                                                        class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Files/Pictures1.svg--><svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            width="24px" height="24px" viewBox="0 0 24 24"
                                                            version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path
                                                                    d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z"
                                                                    fill="#000000" opacity="0.3" />
                                                                <polygon fill="#000000" opacity="0.3"
                                                                    points="4 19 10 11 16 19" />
                                                                <polygon fill="#000000"
                                                                    points="11 19 15 14 19 19" />
                                                                <path
                                                                    d="M18,12 C18.8284271,12 19.5,11.3284271 19.5,10.5 C19.5,9.67157288 18.8284271,9 18,9 C17.1715729,9 16.5,9.67157288 16.5,10.5 C16.5,11.3284271 17.1715729,12 18,12 Z"
                                                                    fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span><span class="menu-text">Tambah Inclusion</span></a>
                                                    </li>

                                                    <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                        aria-haspopup="true"><a href="admin/wisata/exclusion"
                                                        class="menu-link"><span
                                                        class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Files/Pictures1.svg--><svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            width="24px" height="24px" viewBox="0 0 24 24"
                                                            version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path
                                                                    d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z"
                                                                    fill="#000000" opacity="0.3" />
                                                                <polygon fill="#000000" opacity="0.3"
                                                                    points="4 19 10 11 16 19" />
                                                                <polygon fill="#000000"
                                                                    points="11 19 15 14 19 19" />
                                                                <path
                                                                    d="M18,12 C18.8284271,12 19.5,11.3284271 19.5,10.5 C19.5,9.67157288 18.8284271,9 18,9 C17.1715729,9 16.5,9.67157288 16.5,10.5 C16.5,11.3284271 17.1715729,12 18,12 Z"
                                                                    fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span><span class="menu-text">Tambah Exclusion</span></a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover"
                                            aria-haspopup="true"><a href="javascript:;"
                                                class="menu-link menu-toggle"><span class="menu-text">Rental Mobil</span><span
                                                    class="menu-desc">Records & Form Entries</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                                                <ul class="menu-subnav">
                                                    <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                        aria-haspopup="true"><a href="javascript:;"
                                                            class="menu-link menu-toggle"><span
                                                                class="svg-icon menu-icon">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                                            fill="#000000" />
                                                                        <path
                                                                            d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                                            fill="#000000" opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span><span class="menu-text">Forms & Controls</span><i
                                                                class="menu-arrow"></i></a>
                                                        <div
                                                            class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item  menu-item-submenu"
                                                                    data-menu-toggle="hover" aria-haspopup="true"><a
                                                                        href="javascript:;"
                                                                        class="menu-link menu-toggle"><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Form Controls</span><i
                                                                            class="menu-arrow"></i></a>
                                                                    <div
                                                                        class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/controls/base.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Base
                                                                                        Inputs</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/controls/input-group.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Input
                                                                                        Groups</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/controls/checkbox.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Checkbox</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/controls/radio.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Radio</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/controls/switch.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Switch</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/controls/option.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Mega
                                                                                        Options</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="menu-item  menu-item-submenu"
                                                                    data-menu-toggle="hover" aria-haspopup="true"><a
                                                                        href="javascript:;"
                                                                        class="menu-link menu-toggle"><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Form Widgets</span><i
                                                                            class="menu-arrow"></i></a>
                                                                    <div
                                                                        class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/widgets/bootstrap-datetimepicker.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Datetimepicker</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/widgets/bootstrap-datepicker.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Datepicker</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/widgets/bootstrap-timepicker.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Timepicker</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/widgets/bootstrap-daterangepicker.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Daterangepicker</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/widgets/tagify.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Tagify</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/widgets/bootstrap-touchspin.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Touchspin</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/widgets/bootstrap-maxlength.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Maxlength</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/widgets/bootstrap-switch.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Switch</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/widgets/bootstrap-multipleselectsplitter.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Multiple
                                                                                        Select Splitter</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/widgets/bootstrap-select.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Bootstrap
                                                                                        Select</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/widgets/select2.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Select2</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/widgets/typeahead.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Typeahead</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="menu-item  menu-item-submenu"
                                                                    data-menu-toggle="hover" aria-haspopup="true"><a
                                                                        href="javascript:;"
                                                                        class="menu-link menu-toggle"><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Form Widgets 2</span><i
                                                                            class="menu-arrow"></i></a>
                                                                    <div
                                                                        class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/widgets/nouislider.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">noUiSlider</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/widgets/form-repeater.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Form
                                                                                        Repeater</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/widgets/ion-range-slider.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Ion Range
                                                                                        Slider</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/widgets/input-mask.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Input
                                                                                        Masks</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/widgets/autosize.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Autosize</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/widgets/clipboard.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Clipboard</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/widgets/recaptcha.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Google
                                                                                        reCaptcha</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="menu-item  menu-item-submenu"
                                                                    data-menu-toggle="hover" aria-haspopup="true"><a
                                                                        href="javascript:;"
                                                                        class="menu-link menu-toggle"><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Form Text Editors</span><i
                                                                            class="menu-arrow"></i></a>
                                                                    <div
                                                                        class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/editors/tinymce.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">TinyMCE</span></a>
                                                                            </li>
                                                                            <li class="menu-item  menu-item-submenu"
                                                                                data-menu-toggle="hover"
                                                                                aria-haspopup="true"><a
                                                                                    href="javascript:;"
                                                                                    class="menu-link menu-toggle"><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">CKEditor</span><i
                                                                                        class="menu-arrow"></i></a>
                                                                                <div
                                                                                    class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                                    <ul class="menu-subnav">
                                                                                        <li class="menu-item "
                                                                                            aria-haspopup="true"><a
                                                                                                href="crud/forms/editors/ckeditor-classic.html"
                                                                                                class="menu-link "><i
                                                                                                    class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                                    class="menu-text">CKEditor
                                                                                                    Classic</span></a>
                                                                                        </li>
                                                                                        <li class="menu-item "
                                                                                            aria-haspopup="true"><a
                                                                                                href="crud/forms/editors/ckeditor-inline.html"
                                                                                                class="menu-link "><i
                                                                                                    class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                                    class="menu-text">CKEditor
                                                                                                    Inline</span></a>
                                                                                        </li>
                                                                                        <li class="menu-item "
                                                                                            aria-haspopup="true"><a
                                                                                                href="crud/forms/editors/ckeditor-balloon.html"
                                                                                                class="menu-link "><i
                                                                                                    class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                                    class="menu-text">CKEditor
                                                                                                    Balloon</span></a>
                                                                                        </li>
                                                                                        <li class="menu-item "
                                                                                            aria-haspopup="true"><a
                                                                                                href="crud/forms/editors/ckeditor-balloon-block.html"
                                                                                                class="menu-link "><i
                                                                                                    class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                                    class="menu-text">CKEditor
                                                                                                    Balloon
                                                                                                    Block</span></a>
                                                                                        </li>
                                                                                        <li class="menu-item "
                                                                                            aria-haspopup="true"><a
                                                                                                href="crud/forms/editors/ckeditor-document.html"
                                                                                                class="menu-link "><i
                                                                                                    class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                                    class="menu-text">CKEditor
                                                                                                    Document</span></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/editors/quill.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Quill Text
                                                                                        Editor</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/editors/summernote.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Summernote
                                                                                        WYSIWYG</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/editors/bootstrap-markdown.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Markdown
                                                                                        Editor</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="menu-item  menu-item-submenu"
                                                                    data-menu-toggle="hover" aria-haspopup="true"><a
                                                                        href="javascript:;"
                                                                        class="menu-link menu-toggle"><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Form Layouts</span><i
                                                                            class="menu-arrow"></i></a>
                                                                    <div
                                                                        class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/layouts/default-forms.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Default
                                                                                        Forms</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/layouts/multi-column-forms.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Multi Column
                                                                                        Forms</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/layouts/action-bars.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Basic Action
                                                                                        Bars</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/layouts/sticky-action-bar.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Sticky Action
                                                                                        Bar</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="menu-item  menu-item-submenu"
                                                                    data-menu-toggle="hover" aria-haspopup="true"><a
                                                                        href="javascript:;"
                                                                        class="menu-link menu-toggle"><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Form Validation</span><i
                                                                            class="menu-arrow"></i></a>
                                                                    <div
                                                                        class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/validation/states.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Validation
                                                                                        States</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/validation/form-controls.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Form
                                                                                        Controls</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/forms/validation/form-widgets.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Form
                                                                                        Widgets</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                        aria-haspopup="true"><a href="javascript:;"
                                                            class="menu-link menu-toggle"><span
                                                                class="svg-icon menu-icon">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z"
                                                                            fill="#000000" />
                                                                        <path
                                                                            d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z"
                                                                            fill="#000000" opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span><span class="menu-text">KTDatatable</span><i
                                                                class="menu-arrow"></i></a>
                                                        <div
                                                            class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item  menu-item-submenu"
                                                                    data-menu-toggle="hover" aria-haspopup="true"><a
                                                                        href="javascript:;"
                                                                        class="menu-link menu-toggle"><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Base</span><i
                                                                            class="menu-arrow"></i></a>
                                                                    <div
                                                                        class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/ktdatatable/base/data-local.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Local
                                                                                        Data</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/ktdatatable/base/data-json.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">JSON
                                                                                        Data</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/ktdatatable/base/data-ajax.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Ajax
                                                                                        Data</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/ktdatatable/base/html-table.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">HTML
                                                                                        Table</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/ktdatatable/base/local-sort.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Local
                                                                                        Sort</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/ktdatatable/base/translation.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Translation</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="menu-item  menu-item-submenu"
                                                                    data-menu-toggle="hover" aria-haspopup="true"><a
                                                                        href="javascript:;"
                                                                        class="menu-link menu-toggle"><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Advanced</span><i
                                                                            class="menu-arrow"></i></a>
                                                                    <div
                                                                        class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/ktdatatable/advanced/record-selection.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Record
                                                                                        Selection</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/ktdatatable/advanced/row-details.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Row
                                                                                        Details</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/ktdatatable/advanced/modal.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Modal
                                                                                        Examples</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/ktdatatable/advanced/column-rendering.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Column
                                                                                        Rendering</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/ktdatatable/advanced/column-width.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Column
                                                                                        Width</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/ktdatatable/advanced/vertical.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Vertical
                                                                                        Scrolling</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="menu-item  menu-item-submenu"
                                                                    data-menu-toggle="hover" aria-haspopup="true"><a
                                                                        href="javascript:;"
                                                                        class="menu-link menu-toggle"><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Child Datatables</span><i
                                                                            class="menu-arrow"></i></a>
                                                                    <div
                                                                        class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/ktdatatable/child/data-local.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Local
                                                                                        Data</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/ktdatatable/child/data-ajax.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Remote
                                                                                        Data</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="menu-item  menu-item-submenu"
                                                                    data-menu-toggle="hover" aria-haspopup="true"><a
                                                                        href="javascript:;"
                                                                        class="menu-link menu-toggle"><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">API</span><i
                                                                            class="menu-arrow"></i></a>
                                                                    <div
                                                                        class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/ktdatatable/api/methods.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">API
                                                                                        Methods</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/ktdatatable/api/events.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Events</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                        aria-haspopup="true"><a href="javascript:;"
                                                            class="menu-link menu-toggle"><span
                                                                class="svg-icon menu-icon">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Gift.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M4,6 L20,6 C20.5522847,6 21,6.44771525 21,7 L21,8 C21,8.55228475 20.5522847,9 20,9 L4,9 C3.44771525,9 3,8.55228475 3,8 L3,7 C3,6.44771525 3.44771525,6 4,6 Z M5,11 L10,11 C10.5522847,11 11,11.4477153 11,12 L11,19 C11,19.5522847 10.5522847,20 10,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,12 C4,11.4477153 4.44771525,11 5,11 Z M14,11 L19,11 C19.5522847,11 20,11.4477153 20,12 L20,19 C20,19.5522847 19.5522847,20 19,20 L14,20 C13.4477153,20 13,19.5522847 13,19 L13,12 C13,11.4477153 13.4477153,11 14,11 Z"
                                                                            fill="#000000" />
                                                                        <path
                                                                            d="M14.4452998,2.16794971 C14.9048285,1.86159725 15.5256978,1.98577112 15.8320503,2.4452998 C16.1384028,2.90482849 16.0142289,3.52569784 15.5547002,3.83205029 L12,6.20185043 L8.4452998,3.83205029 C7.98577112,3.52569784 7.86159725,2.90482849 8.16794971,2.4452998 C8.47430216,1.98577112 9.09517151,1.86159725 9.5547002,2.16794971 L12,3.79814957 L14.4452998,2.16794971 Z"
                                                                            fill="#000000" fill-rule="nonzero"
                                                                            opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span><span class="menu-text">Datatables.net</span><i
                                                                class="menu-arrow"></i></a>
                                                        <div
                                                            class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item  menu-item-submenu"
                                                                    data-menu-toggle="hover" aria-haspopup="true"><a
                                                                        href="javascript:;"
                                                                        class="menu-link menu-toggle"><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Basic</span><i
                                                                            class="menu-arrow"></i></a>
                                                                    <div
                                                                        class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/basic/basic.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Basic
                                                                                        Tables</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/basic/scrollable.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Scrollable
                                                                                        Tables</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/basic/headers.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Complex
                                                                                        Headers</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/basic/paginations.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Pagination
                                                                                        Options</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="menu-item  menu-item-submenu"
                                                                    data-menu-toggle="hover" aria-haspopup="true"><a
                                                                        href="javascript:;"
                                                                        class="menu-link menu-toggle"><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Advanced</span><i
                                                                            class="menu-arrow"></i></a>
                                                                    <div
                                                                        class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/advanced/column-rendering.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Column
                                                                                        Rendering</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/advanced/multiple-controls.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Multiple
                                                                                        Controls</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/advanced/column-visibility.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Column
                                                                                        Visibility</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/advanced/row-callback.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Row
                                                                                        Callback</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/advanced/row-grouping.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Row
                                                                                        Grouping</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/advanced/footer-callback.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Footer
                                                                                        Callback</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="menu-item  menu-item-submenu"
                                                                    data-menu-toggle="hover" aria-haspopup="true"><a
                                                                        href="javascript:;"
                                                                        class="menu-link menu-toggle"><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Data sources</span><i
                                                                            class="menu-arrow"></i></a>
                                                                    <div
                                                                        class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/data-sources/html.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">HTML</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/data-sources/javascript.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Javascript</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/data-sources/ajax-client-side.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Ajax
                                                                                        Client-side</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/data-sources/ajax-server-side.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Ajax
                                                                                        Server-side</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="menu-item  menu-item-submenu"
                                                                    data-menu-toggle="hover" aria-haspopup="true"><a
                                                                        href="javascript:;"
                                                                        class="menu-link menu-toggle"><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Search Options</span><i
                                                                            class="menu-arrow"></i></a>
                                                                    <div
                                                                        class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/search-options/column-search.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Column
                                                                                        Search</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/search-options/advanced-search.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Advanced
                                                                                        Search</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="menu-item  menu-item-submenu"
                                                                    data-menu-toggle="hover" aria-haspopup="true"><a
                                                                        href="javascript:;"
                                                                        class="menu-link menu-toggle"><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Extensions</span><i
                                                                            class="menu-arrow"></i></a>
                                                                    <div
                                                                        class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/extensions/buttons.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Buttons</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/extensions/colreorder.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">ColReorder</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/extensions/keytable.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">KeyTable</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/extensions/responsive.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Responsive</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/extensions/rowgroup.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">RowGroup</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/extensions/rowreorder.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">RowReorder</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/extensions/scroller.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Scroller</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="crud/datatables/extensions/select.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                                        class="menu-text">Select</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                        aria-haspopup="true"><a href="javascript:;"
                                                            class="menu-link menu-toggle"><span
                                                                class="svg-icon menu-icon">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Gift.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M4,6 L20,6 C20.5522847,6 21,6.44771525 21,7 L21,8 C21,8.55228475 20.5522847,9 20,9 L4,9 C3.44771525,9 3,8.55228475 3,8 L3,7 C3,6.44771525 3.44771525,6 4,6 Z M5,11 L10,11 C10.5522847,11 11,11.4477153 11,12 L11,19 C11,19.5522847 10.5522847,20 10,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,12 C4,11.4477153 4.44771525,11 5,11 Z M14,11 L19,11 C19.5522847,11 20,11.4477153 20,12 L20,19 C20,19.5522847 19.5522847,20 19,20 L14,20 C13.4477153,20 13,19.5522847 13,19 L13,12 C13,11.4477153 13.4477153,11 14,11 Z"
                                                                            fill="#000000" />
                                                                        <path
                                                                            d="M14.4452998,2.16794971 C14.9048285,1.86159725 15.5256978,1.98577112 15.8320503,2.4452998 C16.1384028,2.90482849 16.0142289,3.52569784 15.5547002,3.83205029 L12,6.20185043 L8.4452998,3.83205029 C7.98577112,3.52569784 7.86159725,2.90482849 8.16794971,2.4452998 C8.47430216,1.98577112 9.09517151,1.86159725 9.5547002,2.16794971 L12,3.79814957 L14.4452998,2.16794971 Z"
                                                                            fill="#000000" fill-rule="nonzero"
                                                                            opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span><span class="menu-text">File Upload</span><i
                                                                class="menu-arrow"></i></a>
                                                        <div
                                                            class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="crud/file-upload/image-input.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Image Input</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="crud/file-upload/dropzonejs.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">DropzoneJS</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="crud/file-upload/uppy.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Uppy</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover"
                                            aria-haspopup="true"><a href="javascript:;"
                                                class="menu-link menu-toggle"><span class="menu-text">List-wisata</span><span
                                                    class="menu-desc">Starter Applications</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                                                <ul class="menu-subnav">
                                                    <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                        aria-haspopup="true"><a href="javascript:;"
                                                            class="menu-link menu-toggle"><span
                                                                class="svg-icon menu-icon">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Address-card.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z"
                                                                            fill="#000000" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span><span class="menu-text">Users</span><i
                                                                class="menu-arrow"></i></a>
                                                        <div
                                                            class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/user/list-default.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">List - Default</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/user/list-datatable.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">List -
                                                                            Datatable</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/user/list-columns-1.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">List - Columns
                                                                            1</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/user/list-columns-2.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">List - Columns
                                                                            2</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/user/add-user.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Add User</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/user/edit-user.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Edit User</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                        aria-haspopup="true"><a href="javascript:;"
                                                            class="menu-link menu-toggle"><span
                                                                class="svg-icon menu-icon">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Address-card.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z"
                                                                            fill="#000000" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span><span class="menu-text">Profile</span><i
                                                                class="menu-arrow"></i></a>
                                                        <div
                                                            class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item  menu-item-submenu"
                                                                    data-menu-toggle="hover" aria-haspopup="true"><a
                                                                        href="javascript:;"
                                                                        class="menu-link menu-toggle"><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Profile 1</span><i
                                                                            class="menu-arrow"></i></a>
                                                                    <div
                                                                        class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="custom/apps/profile/profile-1/overview.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                        class="menu-text">Overview</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="custom/apps/profile/profile-1/personal-information.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                        class="menu-text">Personal
                                                                                        Information</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="custom/apps/profile/profile-1/account-information.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                        class="menu-text">Account
                                                                                        Information</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="custom/apps/profile/profile-1/change-password.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                        class="menu-text">Change
                                                                                        Password</span></a></li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="custom/apps/profile/profile-1/email-settings.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                        class="menu-text">Email
                                                                                        Settings</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/profile/profile-2.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Profile 2</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/profile/profile-3.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Profile 3</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/profile/profile-4.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Profile 4</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                        aria-haspopup="true"><a href="javascript:;"
                                                            class="menu-link menu-toggle"><span
                                                                class="svg-icon menu-icon">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Adress-book1.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M17,2 L19,2 C20.6568542,2 22,3.34314575 22,5 L22,19 C22,20.6568542 20.6568542,22 19,22 L17,22 L17,2 Z"
                                                                            fill="#000000" opacity="0.3" />
                                                                        <path
                                                                            d="M4,2 L16,2 C17.6568542,2 19,3.34314575 19,5 L19,19 C19,20.6568542 17.6568542,22 16,22 L4,22 C3.44771525,22 3,21.5522847 3,21 L3,3 C3,2.44771525 3.44771525,2 4,2 Z M11.1176481,13.709585 C10.6725287,14.1547043 9.99251947,14.2650547 9.42948307,13.9835365 C8.86644666,13.7020183 8.18643739,13.8123686 7.74131803,14.2574879 L6.2303083,15.7684977 C6.17542087,15.8233851 6.13406645,15.8902979 6.10952004,15.9639372 C6.02219616,16.2259088 6.16377615,16.5090688 6.42574781,16.5963927 L7.77956724,17.0476658 C9.07965249,17.4810276 10.5130001,17.1426601 11.4820264,16.1736338 L15.4812434,12.1744168 C16.3714821,11.2841781 16.5921828,9.92415954 16.0291464,8.79808673 L15.3965752,7.53294436 C15.3725414,7.48487691 15.3409156,7.44099843 15.302915,7.40299777 C15.1076528,7.20773562 14.7910703,7.20773562 14.5958082,7.40299777 L13.0032662,8.99553978 C12.5581468,9.44065914 12.4477965,10.1206684 12.7293147,10.6837048 C13.0108329,11.2467412 12.9004826,11.9267505 12.4553632,12.3718698 L11.1176481,13.709585 Z"
                                                                            fill="#000000" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span><span class="menu-text">Contacts</span><i
                                                                class="menu-arrow"></i></a>
                                                        <div
                                                            class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/contacts/list-columns.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">List - Columns</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/contacts/list-datatable.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">List -
                                                                            Datatable</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/contacts/view-contact.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">View Contact</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/contacts/add-contact.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Add Contact</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/contacts/edit-contact.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Edit Contact</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                        aria-haspopup="true"><a href="javascript:;"
                                                            class="menu-link menu-toggle"><span
                                                                class="svg-icon menu-icon">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z"
                                                                            fill="#000000" opacity="0.3" />
                                                                        <path
                                                                            d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z"
                                                                            fill="#000000" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span><span class="menu-text">Chat</span><i
                                                                class="menu-arrow"></i></a>
                                                        <div
                                                            class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/chat/private.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Private</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/chat/group.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Group</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/chat/popup.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Popup</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                        aria-haspopup="true"><a href="javascript:;"
                                                            class="menu-link menu-toggle"><span
                                                                class="svg-icon menu-icon">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                                            fill="#000000" />
                                                                        <path
                                                                            d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                                            fill="#000000" opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span><span class="menu-text">Projects</span><i
                                                                class="menu-arrow"></i></a>
                                                        <div
                                                            class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/projects/list-columns-1.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">List - Columns
                                                                            1</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/projects/list-columns-2.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">List - Columns
                                                                            2</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/projects/list-columns-3.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">List - Columns
                                                                            3</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/projects/list-columns-4.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">List - Columns
                                                                            4</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/projects/list-datatable.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">List -
                                                                            Datatable</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/projects/view-project.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">View Project</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/projects/add-project.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Add Project</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/projects/edit-project.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Edit Project</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                        aria-haspopup="true"><a href="javascript:;"
                                                            class="menu-link menu-toggle"><span
                                                                class="svg-icon menu-icon">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Shield-check.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                                                            fill="#000000" opacity="0.3" />
                                                                        <path
                                                                            d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z"
                                                                            fill="#000000" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span><span class="menu-text">Support Center</span><i
                                                                class="menu-arrow"></i></a>
                                                        <div
                                                            class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/support-center/home-1.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Home 1</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/support-center/home-2.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Home 2</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/support-center/faq-1.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">FAQ 1</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/support-center/faq-2.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">FAQ 2</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/support-center/faq-3.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">FAQ 3</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/support-center/feedback.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Feedback</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/support-center/license.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">License</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                        aria-haspopup="true"><a href="javascript:;"
                                                            class="menu-link menu-toggle"><span
                                                                class="svg-icon menu-icon">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-list.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                                            fill="#000000" opacity="0.3" />
                                                                        <path
                                                                            d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                                            fill="#000000" />
                                                                        <rect fill="#000000" opacity="0.3" x="10" y="9"
                                                                            width="7" height="2" rx="1" />
                                                                        <rect fill="#000000" opacity="0.3" x="7" y="9"
                                                                            width="2" height="2" rx="1" />
                                                                        <rect fill="#000000" opacity="0.3" x="7" y="13"
                                                                            width="2" height="2" rx="1" />
                                                                        <rect fill="#000000" opacity="0.3" x="10" y="13"
                                                                            width="7" height="2" rx="1" />
                                                                        <rect fill="#000000" opacity="0.3" x="7" y="17"
                                                                            width="2" height="2" rx="1" />
                                                                        <rect fill="#000000" opacity="0.3" x="10" y="17"
                                                                            width="7" height="2" rx="1" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span><span class="menu-text">Todo</span><i
                                                                class="menu-arrow"></i></a>
                                                        <div
                                                            class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/todo/tasks.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Tasks</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/todo/docs.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Docs</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/todo/files.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Files</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                        aria-haspopup="true"><a href="javascript:;"
                                                            class="menu-link menu-toggle"><span
                                                                class="svg-icon menu-icon">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-list.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                                            fill="#000000" opacity="0.3" />
                                                                        <path
                                                                            d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                                            fill="#000000" />
                                                                        <rect fill="#000000" opacity="0.3" x="10" y="9"
                                                                            width="7" height="2" rx="1" />
                                                                        <rect fill="#000000" opacity="0.3" x="7" y="9"
                                                                            width="2" height="2" rx="1" />
                                                                        <rect fill="#000000" opacity="0.3" x="7" y="13"
                                                                            width="2" height="2" rx="1" />
                                                                        <rect fill="#000000" opacity="0.3" x="10" y="13"
                                                                            width="7" height="2" rx="1" />
                                                                        <rect fill="#000000" opacity="0.3" x="7" y="17"
                                                                            width="2" height="2" rx="1" />
                                                                        <rect fill="#000000" opacity="0.3" x="10" y="17"
                                                                            width="7" height="2" rx="1" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span><span class="menu-text">Education</span><i
                                                                class="menu-arrow"></i></a>
                                                        <div
                                                            class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item  menu-item-submenu"
                                                                    data-menu-toggle="hover" aria-haspopup="true"><a
                                                                        href="javascript:;"
                                                                        class="menu-link menu-toggle"><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">School</span><i
                                                                            class="menu-arrow"></i></a>
                                                                    <div
                                                                        class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="custom/apps/education/school/dashboard.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                        class="menu-text">Dashboard</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="custom/apps/education/school/statistics.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                        class="menu-text">Statistics</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="custom/apps/education/school/calendar.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                        class="menu-text">Calendar</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="custom/apps/education/school/library.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                        class="menu-text">Library</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="custom/apps/education/school/teachers.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                        class="menu-text">Teachers</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="custom/apps/education/school/students.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                        class="menu-text">Students</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="menu-item  menu-item-submenu"
                                                                    data-menu-toggle="hover" aria-haspopup="true"><a
                                                                        href="javascript:;"
                                                                        class="menu-link menu-toggle"><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Student</span><i
                                                                            class="menu-arrow"></i></a>
                                                                    <div
                                                                        class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="custom/apps/education/student/dashboard.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                        class="menu-text">Dashboard</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="custom/apps/education/student/profile.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                        class="menu-text">Profile</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="custom/apps/education/student/calendar.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                        class="menu-text">Calendar</span></a>
                                                                            </li>
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="custom/apps/education/student/classmates.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                        class="menu-text">Classmates</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="menu-item  menu-item-submenu"
                                                                    data-menu-toggle="hover" aria-haspopup="true"><a
                                                                        href="javascript:;"
                                                                        class="menu-link menu-toggle"><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">Class</span><i
                                                                            class="menu-arrow"></i></a>
                                                                    <div
                                                                        class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item " aria-haspopup="true">
                                                                                <a href="custom/apps/education/class/dashboard.html"
                                                                                    class="menu-link "><i
                                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                                        class="menu-text">Dashboard</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/inbox.html" class="menu-link "><span
                                                                class="svg-icon menu-icon">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Shield-check.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                                                            fill="#000000" opacity="0.3" />
                                                                        <path
                                                                            d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z"
                                                                            fill="#000000" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span><span class="menu-text">Inbox</span><span
                                                                class="menu-label"><span
                                                                    class="label label-danger label-inline">new</span></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                            aria-haspopup="true"><a href="javascript:;"
                                                class="menu-link menu-toggle"><span class="menu-text">Coming Soon</span><span
                                                    class="menu-desc">Wait..</span><i class="menu-arrow"></i></a>
                                            <div class="menu-submenu  menu-submenu-fixed menu-submenu-center"
                                                style="width:1150px">
                                                <div class="menu-subnav">
                                                    <ul class="menu-content">
                                                        <li class="menu-item ">
                                                            <h3 class="menu-heading menu-toggle"><span
                                                                    class="menu-text">Pricing Tables</span><i
                                                                    class="menu-arrow"></i></h3>
                                                            <ul class="menu-inner">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/pricing/pricing-1.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Pricing Tables
                                                                            1</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/pricing/pricing-2.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Pricing Tables
                                                                            2</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/pricing/pricing-3.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Pricing Tables
                                                                            3</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/pricing/pricing-4.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Pricing Tables
                                                                            4</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item ">
                                                            <h3 class="menu-heading menu-toggle"><span
                                                                    class="menu-text">Wizards</span><i
                                                                    class="menu-arrow"></i></h3>
                                                            <ul class="menu-inner">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/wizard/wizard-1.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Wizard 1</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/wizard/wizard-2.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Wizard 2</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/wizard/wizard-3.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Wizard 3</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/wizard/wizard-4.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Wizard 4</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/wizard/wizard-5.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Wizard 5</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/wizard/wizard-6.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Wizard 6</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item ">
                                                            <h3 class="menu-heading menu-toggle"><i
                                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                    class="menu-text">Invoices</span><i
                                                                    class="menu-arrow"></i></h3>
                                                            <ul class="menu-inner">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/invoices/invoice-1.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Invoice 1</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/invoices/invoice-2.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Invoice 2</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item ">
                                                            <h3 class="menu-heading menu-toggle"><i
                                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                    class="menu-text">Login</span><i
                                                                    class="menu-arrow"></i></h3>
                                                            <ul class="menu-inner">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/login-1.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Login 1</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/login-2.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Login 2</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/login-3/signup.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Login 3</span><span
                                                                            class="menu-label"><span
                                                                                class="label label-inline label-info">Wizard</span></span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/login-4/signup.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Login 4</span><span
                                                                            class="menu-label"><span
                                                                                class="label label-inline label-info">Wizard</span></span></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item ">
                                                            <h3 class="menu-heading menu-toggle"><i
                                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                    class="menu-text">Classic Login</span><i
                                                                    class="menu-arrow"></i></h3>
                                                            <ul class="menu-inner">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/classic/login-1.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Login 1</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/classic/login-2.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Login 2</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/classic/login-3.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Login 3</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/classic/login-4.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Login 4</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/classic/login-5.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Login 5</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/classic/login-6.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Login 6</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item ">
                                                            <h3 class="menu-heading menu-toggle"><i
                                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                    class="menu-text">Error Pages</span><i
                                                                    class="menu-arrow"></i></h3>
                                                            <ul class="menu-inner">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/error/error-1.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Error 1</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/error/error-2.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Error 2</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/error/error-3.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Error 3</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/error/error-4.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Error 4</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/error/error-5.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Error 5</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/error/error-6.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">Error 6</span></a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!--end::Header Nav-->
                                </div>
                                <!--end::Header Menu-->
                            </div>
                            <!--end::Header Menu Wrapper-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Bottom-->
                </div>
