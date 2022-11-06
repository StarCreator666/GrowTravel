	<!-- Header================================================== -->
    <style>
    .main-menu ul, .main-menu ul li{
        padding: 0 0 0 20px;
    }
    </style>
	<header>
		<div id="top_line" class="visible_on_mobile">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-5"><i class="icon-phone"></i><strong>0045 043204434</strong>
					</div>

					<div class="col-sm-6 col-7">
						<ul id="top_links">
							{{-- <li><a href="#sign-in-dialog" id="access_link">Sign in</a></li> --}}
                            @if(Auth::user())
                           <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button style="background: none; border: none; color: white; font-weight: 600;">Log Out</button>
                                </form>
                           </li>
                           @else
                           <li><a href="{{ url('login') }}" ><i style="font-size: 14px;" class="icon-login-1"></i> Sign in</a></li>
                           @endif
                            
							<li>
								<div class="dropdown dropdown-mini">
									<a href="#" data-bs-toggle="dropdown" id="lang_link">English</a>
									<div class="dropdown-menu">
										<ul id="lang_menu">
											<li><a href="#0">English</a>
											</li>
											<li><a href="#0">Indonesian</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- End Dropdown access -->
							</li>
						</ul>
					</div>
				</div>
				<!-- End row -->
			</div>
			<!-- End container-->
		</div>
		<!-- End top line-->

		<div class="container">
            <div class="row">
                <div class="col-3">
                    <div id="logo_home">
                    	<h1><a href="index.html" title="City tours travel template" style="width:160px; height:50px; background-image:url({{asset('images/logo-gt.png')}}); background-size:150px 50px;">City Tours travel template</a></h1>
                    </div>
                </div>
                <nav class="col-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="{{asset('images/logo-gt.png')}}" width="160" height="50" alt="City tours">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                         <ul >
                            <li class="submenu">
                                <a href="/" class="show-submenu">Home </a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Tours <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="/wisata">All tours list</a></li>
                                    <li><a href="wisata?lokasi=Malang">Tours Malang</a></li>
                                    <li><a href="wisata?lokasi=Blitar">Tours Blitar</a></li>
                                    <li><a href="wisata?lokasi=Surabaya">Tours Surabaya </a></li>
                                </ul>
                            </li>
                             <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Rent Car <i class="icon-down-open-mini"></i></a><ul>
                                    <li><a href="all_hotels_list.html">Rent Car</a></li>
                                    <li><a href="all_hotels_grid.html">Rent Bus</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Info Travel <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="all_transfer_list.html">All Travel</a></li>
                                    <li><a href="all_transfer_grid.html">Travel Malang</a></li>
                                    <li><a href="all_transfer_grid_masonry.html">Travel Surabaya</a></li>
                                </ul>
                            </li>
                              <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">About Us <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="all_restaurants_list.html">About</a></li>
                                    <li><a href="confirmation_restaurant.html">Contact Us</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- End main-menu -->
                    <ul id="top_tools">
                        <li>
                            <a href="javascript:void(0);" class="search-overlay-menu-btn"><i class="icon_search"></i></a>
                        </li>
                        <li>
                            <div class="dropdown dropdown-cart">
                                <a href="#0" data-bs-toggle="dropdown" class="cart_bt"><i class="icon_bag_alt"></i><strong>3</strong></a>
                                <ul class="dropdown-menu" id="cart_items">
                                    <li>
                                        <div class="image"><img src="img/thumb_cart_1.jpg" alt="image"></div>
                                        <strong><a href="#">Louvre museum</a>1x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div class="image"><img src="img/thumb_cart_2.jpg" alt="image"></div>
                                        <strong><a href="#">Versailles tour</a>2x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div class="image"><img src="img/thumb_cart_3.jpg" alt="image"></div>
                                        <strong><a href="#">Versailles tour</a>1x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div>Total: <span>$120.00</span></div>
                                        <a href="cart.html" class="button_drop">Go to cart</a>
                                        <a href="payment.html" class="button_drop outline">Check out</a>
                                    </li>
                                </ul>
                            </div><!-- End dropdown-cart-->
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!-- container -->
	</header>
	<!-- End Header -->