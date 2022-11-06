@extends('layouts.main')
@section('container')
<style>
    .lokasi-filter:after{
        font-family: "fontello";
        content: "\e89b";
        position: absolute;
        right: 15px;
        top: 15px;
    }
</style>

<section class="parallax-window" data-parallax="scroll" data-image-src="img/satu.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
        <div class="animated fadeInDown">
            <h1>All tours</h1>
            <p>Cursus neque cursus curae ante scelerisque vehicula</p>
        </div>
    </div>
</section>
<!-- End section -->

<main>

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Tours</a>
                </li>
                <li>Page active</li>
            </ul>
        </div>
    </div>
    <!-- Position -->

    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div>
    <!-- End Map -->


    <div class="container margin_60">

        <div class="row">
            <aside class="col-lg-3">
                <p>
                    <a class="btn_map" data-bs-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                </p>
                {{-- <form action="{{ route('user.wisata') }}">
                    <div>
                        <select class="form-control lokasi-filter" name="lokasi" style="padding: 6px 10px 6px 20px;background: #f9f9f9; color: #111; height:51px;">
                            <option value="" style="display: block; padding: 15px 10px;"></i>All tours <span>(141)</span></option>
                            @foreach($lokasis as $l)
                                <option style="display: block; padding: 15px 10px;" value="{{ $l->name }}" @if($lokasi == $l->name) selected @endif>{{ $l->name }} tours <span>(41)</span></option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" style="border: 1px solid blue; background:white; ">Search</button>
                </form> --}}

                <div class="box_style_cat">
                    <ul id="cat_nav">
                        <li>
                            <a href="/wisata" id="active" style="padding-left: 20px;"></i>All tours <span>(141)</span></a>
                        </li>
                        @foreach($lokasis as $l)
                            <li>
                                <a href="wisata?lokasi={{ $l->name }}" id="active" style="padding-left: 20px;"></i>{{ $l->name }} tours <span>(41)</span></a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div id="filters_col">
                    <a data-bs-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Filters</a>
                    <div class="collapse show" id="collapseFilters">
                        <div class="filter_type">
                            <h6>Price</h6>
                            <input type="text" id="range" name="range" value="">
                        </div>
                        <div class="filter_type">
                            <h6>Rating</h6>
                            <ul>
                                <li>
                                    <label class="container_check">
                                        <span class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                        </span>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">
                                        <span class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                        </span>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">
                                        <span class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        </span>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">
                                        <span class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        </span>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">
                                        <span class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        </span>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="filter_type">
                            <h6>Facility</h6>
                            <ul class="mb-0">
                                <li>
                                    <label class="container_check">
                                        Pet allowed
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">
                                        Groups allowed
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">
                                        Tour guides
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">
                                        Access for disabled
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End collapse -->
                </div>
                <!--End filters col-->
                <div class="box_style_2 d-none d-sm-block">
                    <i class="icon_set_1_icon-57"></i>
                    <h4>Need <span>Help?</span></h4>
                    <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                    <small>Monday to Friday 9.00am - 7.30pm</small>
                </div>
            </aside>
            <!--End aside -->
            <div class="col-lg-9">

                <div id="tools">
                    <div class="row justify-content-between">
                        <div class="col-md-3 col-sm-4">
                            <div class="styled-select-filters">
                                <select name="sort_price" id="sort_price">
                                    <option value="" selected>Sort by price</option>
                                    <option value="lower">Lowest price</option>
                                    <option value="higher">Highest price</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4 d-none d-sm-block text-end">
                            <span style="padding: 0 10px 0 0; line-height: 40px; color: #888;display: inline-block;" class="bt_filters"><i class=" icon-list"></i></span>
                        </div>

                    </div>
                </div>
                <!--/tools -->

                {{-- <div class="boxs" style="padding:0;">
                  <div class="item" style="text-align:right; padding:1rem;">
                    <img src="{{ asset(''.$w->gambar) }}" style="border-radius:0%; width:200px; height:133px; border-radius:5px 5px 0 0" alt="">
                  </div>
                  <div class="item" style="text-align:left; padding:1rem; margin-left:1rem;">
                    <h3 style="margin: 10px">{{ $w->judul }}</h3>
                    <p style="margin:10px; font-size:13px;"><i class="fas fa-map-marker-alt" style="padding-right: 2px;"></i> {{ $w->lokasi }} <i class="fas fa-stopwatch" style="padding-left: 7px;"></i> {{ $w->hari}} Days</p>
                  </div>
                  <div class="item"  style="padding:1rem;">
                    <p style="margin-top: 3%;"><span class="heading" style="font-weight:600; font-size:2.3rem;">{{ $w->harga_awal }}$</span><span style=" font-size:1.3rem; font-weight:600; color:rgb(104, 113, 118);">/pax</span> .</p> 
                    <a href="{{ url('show/'.$w->judul) }}" class="btn" style="margin-top: 5px;">Book now</a>
                  </div>


                </div> --}}

                @foreach($wisata as $w)
                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 position-relative">
                            <div class="ribbon_3 popular"><span>Popular</span>
                            </div>
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div>
                            <div class="img_list">
                                <a href="{{ url('show/'.$w->judul) }}"><img src="{{ asset(''.$w->gambar) }}" alt="Image">
                                    <div class="short_info"><i class="icon_set_1_icon-37"></i>{{ $w->lokasi }}</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="tour_list_desc">
                                <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile"></i><small>(75)</small>
                                </div>
                                <h3><strong> {{ $w->judul }}</strong> tour</h3>
                                <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum ex, qui adipisci maiestatis inciderint no, eos in elit dicat.....</p>
                                <ul class="add_info">
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                                            <div class="tooltip-content">
                                                <h4>Scheduleee</h4>
                                                <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                <br>
                                                <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                <br>
                                                <strong>Sunday</strong> <span class="label label-danger">Closed</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>
                                            <div class="tooltip-content">
                                                <h4>Address</h4> Musée du Louvre, 75058 Paris - France
                                                <br>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-97"></i></span>
                                            <div class="tooltip-content">
                                                <h4>Languages</h4> English - French - Chinese - Russian - Italian
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-27"></i></span>
                                            <div class="tooltip-content">
                                                <h4>Parking</h4> 1-3 Rue Elisée Reclus
                                                <br> 76 Rue du Général Leclerc
                                                <br> 8 Rue Caillaux 94923
                                                <br>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-25"></i></span>
                                            <div class="tooltip-content">
                                                <h4>Transport</h4>
                                                <strong>Metro: </strong>Musée du Louvre station (line 1)
                                                <br>
                                                <strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95
                                                <br>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="price_list">
                                <div><sup>$</sup>{{ $w->harga_awal }}*<span class="normal_price_list">${{ $w->harga_akhir }}</span><small>*Per person</small>
                                    <p><a href="{{ url('show/'.$w->judul) }}" class="btn_1">Details</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--End strip -->

                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><span class="page-link">1</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- end pagination-->

            </div>
            <!-- End col lg-9 -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</main>
<!-- End main -->
@endsection