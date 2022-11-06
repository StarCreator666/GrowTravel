@extends('layouts.main')

@section('container')
<style>
	.exclude li::before{
		display: none;
	}
	ul.list_ok li:before{
		color: green;
		font-weight: 900; 
	}
</style>
	<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('images/baru1.jpg')}}" data-natural-width="1400" data-natural-height="470">
		<div class="parallax-content-2">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h1>{{ $wisata->judul }}</h1>
						<span>Champ de Mars, 5 Avenue Anatole, 75007 Par.</span>
						<span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small></span>
					</div>
					<div class="col-md-4">
						<div id="price_single_main">
							from/per person <span><sup>$</sup>52</span>
						</div>
					</div>
				</div>
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
					<li><a href="#">Category</a>
					</li>
					<li>{{ $wisata->judul }}</li>
				</ul>
			</div>
		</div>
		<!-- End Position -->

		<div class="collapse" id="collapseMap">
			<div id="map" class="map"></div>
		</div>
		<!-- End Map -->

		<div class="container margin_60">
			<div class="row">
				<div class="col-lg-8" id="single_tour_desc">
					<div id="single_tour_feat">
						<ul>
							<li><i class="icon_set_1_icon-4"></i>Museum</li>
							<li><i class="icon_set_1_icon-83"></i>3 Hours</li>
							<li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
							<li><i class="icon_set_1_icon-82"></i>144 Likes</li>
							<li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
							<li><i class="icon_set_1_icon-97"></i>Audio guide</li>
							<li><i class="icon_set_1_icon-29"></i>Tour guide</li>
						</ul>
					</div>

					<p class="d-block d-lg-none"><a class="btn_map" data-bs-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a></p>
					<!-- Map button for tablets/mobiles -->

					<div id="Img_carousel" class="slider-pro">
						<div class="sp-slides">

							<div class="sp-slide">
				<img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="{{ asset('img/slider_single_tour/1_medium.jpg') }}" data-small="{{ asset('img/slider_single_tour/1_small.jpg') }}" data-medium="{{ asset('img/slider_single_tour/1_medium.jpg') }}" data-large="{{ asset('img/slider_single_tour/1_large.jpg') }}" data-retina="{{ asset('img/slider_single_tour/1_large.jpg') }}">
							</div>
							<div class="sp-slide">
				<img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="{{ asset('img/slider_single_tour/2_medium.jpg') }}" data-small="{{ asset('img/slider_single_tour/2_small.jpg') }}" data-medium="{{ asset('img/slider_single_tour/1_medium.jpg') }}" data-large="{{ asset('img/slider_single_tour/2_large.jpg') }}" data-retina="{{ asset('img/slider_single_tour/2_large.jpg') }}">
							</div>

							<div class="sp-slide">
				<img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="{{ asset('img/slider_single_tour/3_medium.jpg') }}" data-small="{{ asset('img/slider_single_tour/3_small.jpg') }}" data-medium="{{ asset('img/slider_single_tour/1_medium.jpg') }}" data-large="{{ asset('img/slider_single_tour/3_large.jpg') }}" data-retina="{{ asset('img/slider_single_tour/3_large.jpg') }}">
							</div>

							<div class="sp-slide">
				<img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="{{ asset('img/slider_single_tour/4_medium.jpg') }}" data-small="{{ asset('img/slider_single_tour/4_small.jpg') }}" data-medium="{{ asset('img/slider_single_tour/1_medium.jpg') }}" data-large="{{ asset('img/slider_single_tour/4_large.jpg') }}" data-retina="{{ asset('img/slider_single_tour/4_large.jpg') }}">
							</div>

							<div class="sp-slide">
				<img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="{{ asset('img/slider_single_tour/5_medium.jpg') }}" data-small="{{ asset('img/slider_single_tour/5_small.jpg') }}" data-medium="{{ asset('img/slider_single_tour/1_medium.jpg') }}" data-large="{{ asset('img/slider_single_tour/5_large.jpg') }}" data-retina="{{ asset('img/slider_single_tour/5_large.jpg') }}">
							</div>

							<div class="sp-slide">
				<img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="{{ asset('img/slider_single_tour/6_medium.jpg') }}" data-small="{{ asset('img/slider_single_tour/6_small.jpg') }}" data-medium="{{ asset('img/slider_single_tour/1_medium.jpg') }}" data-large="{{ asset('img/slider_single_tour/6_large.jpg') }}" data-retina="{{ asset('img/slider_single_tour/6_large.jpg') }}">
							</div>

							<div class="sp-slide">
				<img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="{{ asset('img/slider_single_tour/7_medium.jpg') }}" data-small="{{ asset('img/slider_single_tour/7_small.jpg') }}" data-medium="{{ asset('img/slider_single_tour/1_medium.jpg') }}" data-large="{{ asset('img/slider_single_tour/7_large.jpg') }}" data-retina="{{ asset('img/slider_single_tour/7_large.jpg') }}">
							</div>

							<div class="sp-slide">
				<img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="{{ asset('img/slider_single_tour/8_medium.jpg') }}" data-small="{{ asset('img/slider_single_tour/8_small.jpg') }}" data-medium="{{ asset('img/slider_single_tour/1_medium.jpg') }}" data-large="{{ asset('img/slider_single_tour/8_large.jpg') }}" data-retina="{{ asset('img/slider_single_tour/8_large.jpg') }}">
							</div>

							<div class="sp-slide">
				<img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="{{ asset('img/slider_single_tour/9_medium.jpg') }}" data-small="{{ asset('img/slider_single_tour/9_small.jpg') }}" data-medium="{{ asset('img/slider_single_tour/1_medium.jpg') }}" data-large="{{ asset('img/slider_single_tour/9_large.jpg') }}" data-retina="{{ asset('img/slider_single_tour/9_large.jpg') }}">
							</div>
						</div>
						<div class="sp-thumbnails">
							<img alt="Image" class="sp-thumbnail" src="{{ asset('img/slider_single_tour/1_medium.jpg') }}">
							<img alt="Image" class="sp-thumbnail" src="{{ asset('img/slider_single_tour/2_medium.jpg') }}">
							<img alt="Image" class="sp-thumbnail" src="{{ asset('img/slider_single_tour/3_medium.jpg') }}">
							<img alt="Image" class="sp-thumbnail" src="{{ asset('img/slider_single_tour/4_medium.jpg') }}">
							<img alt="Image" class="sp-thumbnail" src="{{ asset('img/slider_single_tour/5_medium.jpg') }}">
							<img alt="Image" class="sp-thumbnail" src="{{ asset('img/slider_single_tour/6_medium.jpg') }}">
							<img alt="Image" class="sp-thumbnail" src="{{ asset('img/slider_single_tour/7_medium.jpg') }}">
							<img alt="Image" class="sp-thumbnail" src="{{ asset('img/slider_single_tour/8_medium.jpg') }}">
							<img alt="Image" class="sp-thumbnail" src="{{ asset('img/slider_single_tour/9_medium.jpg') }}">
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-lg-3">
							<h3>Description</h3>
						</div>
						<div class="col-lg-9">
							<h4>Mount Bromo</h4>
							<p>
								Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi. Eu ponderum mediocrem has, vitae adolescens in pro. Mea liber ridens inermis ei, mei legendos vulputate an, labitur tibique te qui.
							</p>
							<h4>What's include dan exclude</h4>
							<p>
								Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
							</p>
							<div class="row">
								<div class="col-md-6">
									<ul class="list_ok">
										<li>Lorem ipsum dolor sit amet</li>
										<li>No scripta electram necessitatibus sit</li>
										<li>Quidam percipitur instructior an eum</li>
										<li>Ut est saepe munere ceteros</li>
										<li>No scripta electram necessitatibus sit</li>
										<li>Quidam percipitur instructior an eum</li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="list_ok exclude">
										<li><i class="icon-cancel-1" style="font-style: normal;font-weight: 700; font-size: 18px;color: red;position: absolute;left: 0;top: -1px;"></i>Lorem ipsum dolor sit amet</li>
										<li><i class="icon-cancel-1" style="font-style: normal;font-weight: 700; font-size: 18px;color: red;position: absolute;left: 0;top: -1px;"></i>No scripta electram necessitatibus sit</li>
										<li><i class="icon-cancel-1" style="font-style: normal;font-weight: 700; font-size: 18px;color: red;position: absolute;left: 0;top: -1px;"></i>Quidam percipitur instructior an eum</li>
										<li><i class="icon-cancel-1" style="font-style: normal;font-weight: 700; font-size: 18px;color: red;position: absolute;left: 0;top: -1px;"></i>No scripta electram necessitatibus sit</li>
									</ul>
								</div>
							</div>
							<!-- End row  -->
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-2">
							<h3>Schedule</h3>
						</div>
						<div class="col-lg-10">

							<div class="table-responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<th colspan="2">
												Day 1: Surabaya – Mount Bromo Area
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td style="width: 16%">
												10.00 - 17.30
											</td>
											<td>
												Pick up from <b> Surabaya Juanda International Airport</b> or Train station on your arrival time. If you already at Surabaya, we will pick up at your hotel in Surabaya at 9am.
											</td>
										</tr>
										<tr>
											<td>
												10.00 - 17.30
											</td>
											<td>
												Travel to Mount Bromo area, around 3-4 hours driving distance.
											</td>
										</tr>
										<tr>
											<td>
												10.00 - 17.30
											</td>
											<td>
												Head to Madakaripura Waterfall to enjoy the magnificent natural sight (if you arrive after 12 noon, we will move waterfall to day 2 after Bromo sunrise).
											</td>
										</tr>
										<tr>
											<td>
												10.00 - 17.30
											</td>
											<td>
												Check into Bromo Terrace Hotel (if this hotel is not available, we will use another same standard 4-star hotel). You will stay here for 1 night.
											</td>
										</tr>
										<tr>
											<td>
												10.00 - 17.30
											</td>
											<td>
												(You can add-on Milky Way with extra SGD50/pax. We will pick you up at around 10pm instead of 3am. You will go to Bromo Park to see the Milky way first, then continue to sunrise viewpoint.) 
											</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="table-responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<th colspan="2">
												1st November to 28th February
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												Monday
											</td>
											<td>
												10.00 - 17.30
											</td>
										</tr>
										<tr>
											<td>
												Tuesday
											</td>
											<td>
												09.00 - 17.30
											</td>
										</tr>
										<tr>
											<td>
												Wednesday
											</td>
											<td>
												09.00 - 17.30
											</td>
										</tr>
										<tr>
											<td>
												Thursday
											</td>
											<td>
												<span class="label label-danger">Closed</span>
											</td>
										</tr>
										<tr>
											<td>
												Friday
											</td>
											<td>
												09.00 - 17.30
											</td>
										</tr>
										<tr>
											<td>
												Saturday
											</td>
											<td>
												09.00 - 17.30
											</td>
										</tr>
										<tr>
											<td>
												Sunday
											</td>
											<td>
												10.00 - 17.30
											</td>
										</tr>
										<tr>
											<td>
												<strong><em>Last Admission</em></strong>
											</td>
											<td>
												<strong>17.00</strong>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-3">
							<h3>Reviews </h3>
							<a href="#" class="btn_1 add_bottom_30" data-bs-toggle="modal" data-bs-target="#myReview">Leave a review</a>
						</div>
						<div class="col-lg-9">
							<div id="general_rating">11 Reviews
								<div class="rating">
									<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
								</div>
							</div>
							<!-- End general_rating -->
							<div class="row" id="rating_summary">
								<div class="col-md-6">
									<ul>
										<li>Position
											<div class="rating">
												<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
											</div>
										</li>
										<li>Tourist guide
											<div class="rating">
												<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
											</div>
										</li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul>
										<li>Price
											<div class="rating">
												<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
											</div>
										</li>
										<li>Quality
											<div class="rating">
												<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- End row -->
							<hr>
							<div class="review_strip_single">
								<img src="{{ asset('img/avatar1.jpg') }}" alt="Image" class="rounded-circle">
								<small> - 10 March 2015 -</small>
								<h4>Jhon Doe</h4>
								<p>
									"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
								</p>
								<div class="rating">
									<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
								</div>
							</div>
							<!-- End review strip -->

							<div class="review_strip_single">
								<img src="{{ asset('img/avatar3.jpg') }}" alt="Image" class="rounded-circle">
								<small> - 10 March 2015 -</small>
								<h4>Jhon Doe</h4>
								<p>
									"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
								</p>
								<div class="rating">
									<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
								</div>
							</div>
							<!-- End review strip -->

							<div class="review_strip_single last">
								<img src="{{ asset('img/avatar2.jpg') }}" alt="Image" class="rounded-circle">
								<small> - 10 March 2015 -</small>
								<h4>Jhon Doe</h4>
								<p>
									"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
								</p>
								<div class="rating">
									<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
								</div>
							</div>
							<!-- End review strip -->
						</div>
					</div>
				</div>
				<!--End  single_tour_desc-->

				<aside class="col-lg-4" id="sidebar">
					<p class="d-none d-xl-block d-lg-block">
						<a class="btn_map" data-bs-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
					</p>
					<div class="theiaStickySidebar">
						<div class="box_style_1 expose" id="booking_box" style="margin-top: 10px">
							<h3 class="inner">- Booking -</h3>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group scroll-fix">
										<label><i class="icon-calendar-7"></i> Date</label>
										<input class="date-pick form-control" type="text">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<label>Adults</label>
										<div class="numbers-row">
											<input type="text" value="1" id="adults" class="qty2 form-control" name="quantity">
										</div>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label>Children</label>
										<div class="numbers-row">
											<input type="text" value="0" id="children" class="qty2 form-control" name="quantity">
										</div>
									</div>
								</div>
							</div>
							<br>
							<table class="table table_summary">
								<tbody>
									<tr>
										<td>
											Adults
										</td>
										<td class="text-end">
											2
										</td>
									</tr>
									<tr>
										<td>
											Children
										</td>
										<td class="text-end">
											0
										</td>
									</tr>
									<tr>
										<td>
											Total amount
										</td>
										<td class="text-end">
											3x $52
										</td>
									</tr>
									<tr class="total">
										<td>
											Total cost
										</td>
										<td class="text-end">
											$154
										</td>
									</tr>
								</tbody>
							</table>
							<div class="coupon-code">
								<div class="form-group">
									<div class="field-group" 	style="width:60%; display:inline-block;">
										<input type="text" name="code" value="" placeholder="Coupon Code" class="form-control">
									</div>
									<div class="field-group btn-field" style="width:40%; display:inline;">
										<button type="submit" class="btn_cart_outine">Apply</button>
									</div>
								</div>
							</div>
							<a class="btn_full" href="/cart">Book now</a>
							<a class="btn_full_outline" href="#"><i class=" icon-heart"></i> Add to whislist</a>
						</div>
						<!--/box_style_1 -->
					</div>
					<!--/sticky -->

				</aside>
			</div>
			<!--End row -->
		</div>
		<!--End container -->
        
        <div id="overlay"></div>
		<!-- Mask on input focus -->
        
	</main>
    
	<!-- End main -->
@endsection