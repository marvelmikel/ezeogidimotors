@extends('frontend.master_dashboard')

@section('page-content')
	



 <!-- Slider -->
 @include('frontend.home.home_slider')
<!-- Slider END -->
<!-- New Car Upcoming Cars -->
@include('frontend.home.home_features')
<!-- New Car Upcoming Cars end -->	
<!-- About Us -->
@include('frontend.home.home_aboutus')
<!-- About Us END -->
<!-- For Your Quick Look -->
@include('frontend.home.home_quicklook')
<!-- For Your Quick Look END -->
<!-- Car Find And Sale -->
<div class="section-full bg-gray p-tb20 car-listing">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="find-car box-hover " style="background-image: url({{ asset('frontend/asset/images/blog/default/thum1.jpg') }})">
					<div class="car-box">
						<span class="text-primary">Are You Looking For</span>
						<h2 class="text-uppercase">Big Range of Cars ?</h2>
						<p>Our car marketplace offers an extensive inventory of vehicles from various manufacturers, ensuring that you have a wide range of options to choose from. Whether you're looking for a compact sedan, a spacious SUV, or a sleek sports car, our marketplace has it all</p>
						<a href="#" class="site-button outline">
							View Cars
						</a> 
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="find-car box-hover active" style="background-image: url({{ asset('frontend/asset/images/blog/default/thum2.jpg') }})">
					<div class="car-box">
						<span class="text-primary">Are You Looking For</span>
						<h2 class="text-uppercase">Transparent Firm ?</h2>
						<p>We prioritize transparency and trust in every transaction on our car marketplace. Our platform provides detailed information about each vehicle, including specifications, mileage, maintenance history, and vehicle history reports. We are Tested and Transparent</p>
						<a href="new-car-search.html" class="site-button outline">
							Search Your Car
						</a> 
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="find-car box-hover" style="background-image: url({{ asset('frontend/asset/images/blog/default/thum3.jpg') }})">
					<div class="car-box">
						<span class="text-primary">Are You Looking For Easy</span>
						<h2 class="text-uppercase">Buying Moment ?</h2>
						<p>We understand that purchasing a car can be a complex process. That's why we've invested in creating a seamless buying experience on our marketplace. Our user-friendly interface allows you to easily browse through cars, apply filters to refine your search, and compare different models side by side</p>
						<a href="#" class="site-button outline">
							chaeck reviews
						</a> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Car Find And Sale END -->
<!-- For Your Quick Look -->
<div class="section-full bg-white content-inner car-listing ">
	<div class="container">
		<div class="section-head">
			<h3 class="h3 text-uppercase">Used Cars</h3>
			<ul class="nav theme-tabs">
				<li role="presentation" class="active"><a data-toggle="tab"  aria-controls="by-city"  href="#by-city">BY CITY</a></li>
				<li role="presentation" ><a data-toggle="tab"  aria-controls="by-price" href="#by-price">BY PRICE</a></li>
			</ul>
		</div>
		<div class="section-content ">
			<div class="row">	
				<div class="dlab-tabs">
					<div class="tab-content">
						<div id="by-city"  class="tab-pane active clearfix city-list">
							<div class="col-md-12 owl-carousel owl-btn-style-2 city-item" id="da-thumbs">
								<div class="item">
									<div class="city-box">
										<div class="glyph-icon flaticon-university"></div>
										<div class="city-info">
											<span>Used Cars In </span>
											<a href="used-car-search-result.html">United Kingdom</a>
										</div>
										<div class="dlab-move"></div>
									</div>
									<div class="city-box">
										<div class="glyph-icon flaticon-office-1"></div>
										<div class="city-info">
											<span>Used Cars In </span>
											<a href="used-car-search-result.html">United Kingdom</a>
										</div>
										<div class="dlab-move"></div>
									</div>
								</div>
								<div class="item">
									<div class="city-box">
										<div class="glyph-icon flaticon-school"></div>
										<div class="city-info">
											<span>Used Cars In </span>
											<a href="used-car-search-result.html">United Kingdom</a>
										</div>
										<div class="dlab-move"></div>
									</div>
									<div class="city-box">
										<div class="glyph-icon flaticon-cityscape"></div>
										<div class="city-info">
											<span>Used Cars In </span>
											<a href="used-car-search-result.html">United Kingdom</a>
										</div>
										<div class="dlab-move"></div>
									</div>
								</div>
								<div class="item">
									<div class="city-box">
										<div class="glyph-icon flaticon-holidays-1"></div>
										<div class="city-info">
											<span>Used Cars In </span>
											<a href="used-car-search-result.html">United Kingdom</a>
										</div>
										<div class="dlab-move"></div>
									</div>
									<div class="city-box">
										<div class="glyph-icon flaticon-building"></div>
										<div class="city-info">
											<span>Used Cars In </span>
											<a href="used-car-search-result.html">United Kingdom</a>
										</div>
										<div class="dlab-move"></div>
									</div>
								</div>
								<div class="item">
									<div class="city-box">
										<div class="glyph-icon flaticon-construction"></div>
										<div class="city-info">
											<span>Used Cars In </span>
											<a href="used-car-search-result.html">United Kingdom</a>
										</div>
										<div class="dlab-move"></div>
									</div>
									<div class="city-box">
										<div class="glyph-icon flaticon-holidays"></div>
										<div class="city-info">
											<span>Used Cars In </span>
											<a href="used-car-search-result.html">United Kingdom</a>
										</div>
										<div class="dlab-move"></div>
									</div>
								</div>
								<div class="item">
									<div class="city-box">
										<div class="glyph-icon flaticon-monument-1"></div>
										<div class="city-info">
											<span>Used Cars In </span>
											<a href="used-car-search-result.html">United Kingdom</a>
										</div>
										<div class="dlab-move"></div>
									</div>
									<div class="city-box">
										<div class="glyph-icon flaticon-skyscraper"></div>
										<div class="city-info">
											<span>Used Cars In </span>
											<a href="used-car-search-result.html">United Kingdom</a>
										</div>
										<div class="dlab-move"></div>
									</div>
								</div>
								<div class="item">
									<div class="city-box">
										<div class="glyph-icon flaticon-office"></div>
										<div class="city-info">
											<span>Used Cars In </span>
											<a href="used-car-search-result.html">United Kingdom</a>
										</div>
										<div class="dlab-move"></div>
									</div>
									<div class="city-box">
										<div class="glyph-icon flaticon-city-hall"></div>
										<div class="city-info">
											<span>Used Cars In </span>
											<a href="used-car-search-result.html">United Kingdom</a>
										</div>
										<div class="dlab-move"></div>
									</div>
								</div>
							</div>
						</div>
						
						<div id="by-price"  class="tab-pane clearfix fade">
							<div class="col-md-12 owl-carousel owl-btn-style-2 quick-look">
								<div class="item">
									<div class="dlab-feed-list">
										<div class="dlab-media"> 
											<a href="used-car-search-result.html"><img src="{{ asset('frontend/asset/images/our-work/work/pic1.jpg') }}" alt=""></a> 
										</div>
										<div class="dlab-info">
											<h4 class="dlab-title"><a href="used-car-search-result.html">Hyundai santa fe sport </a></h4>
											<div class="dlab-separator bg-black"></div>
											<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
										</div>
										<div class="icon-box-btn text-center">
											<ul class="clearfix">
												<li>2019</li>
												<li>Manual</li>
												<li>210 hp </li>
											</ul>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="dlab-feed-list">
										<div class="dlab-media"> 
											<a href="used-car-search-result.html"><img src="{{ asset('frontend/asset/images/our-work/work/pic2.jpg') }}" alt=""></a> 
										</div>
										<div class="dlab-info">
											<h4 class="dlab-title"><a href="used-car-search-result.html">Hyundai santa fe sport </a></h4>
											<div class="dlab-separator bg-black"></div>
											<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
										</div>
										<div class="icon-box-btn text-center">
											<ul class="clearfix">
												<li>2019</li>
												<li>Manual</li>
												<li>210 hp </li>
											</ul>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="dlab-feed-list">
										<div class="dlab-media"> 
											<a href="used-car-search-result.html"><img src="{{ asset('frontend/asset/images/our-work/work/pic3.jpg') }}" alt=""></a> 
										</div>
										<div class="dlab-info">
											<h4 class="dlab-title"><a href="used-car-search-result.html">Hyundai santa fe sport </a></h4>
											<div class="dlab-separator bg-black"></div>
											<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
										</div>
										<div class="icon-box-btn text-center">
											<ul class="clearfix">
												<li>2019</li>
												<li>Manual</li>
												<li>210 hp </li>
											</ul>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="dlab-feed-list">
										<div class="dlab-media"> 
											<a href="used-car-search-result.html"><img src="{{ asset('frontend/ssets/images/our-work/work/pic4.jpg') }}a" alt=""></a> 
										</div>
										<div class="dlab-info">
											<h4 class="dlab-title"><a href="used-car-search-result.html">Hyundai santa fe sport </a></h4>
											<div class="dlab-separator bg-black"></div>
											<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
										</div>
										<div class="icon-box-btn text-center">
											<ul class="clearfix">
												<li>2019</li>
												<li>Manual</li>
												<li>210 hp </li>
											</ul>
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
<!-- For Your Quick Look END -->
<!-- Testimonial -->
@include('frontend.home.home_testimonial')
<!-- Testimonial -->
<!-- Latest News -->
@include('frontend.home.home_blog')
<!-- Latest News End -->


	<!-- discount-offers -->
	<div class="section-full content-inner-1 bg-dis-offers overlay-black-dark">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-head style-1 left light-gray opacity" data-name="R">
						<div class="row display-align">
							<div class="col-lg-8 col-md-9 col-sm-8 col-xs-12">
								<div class="title-sm text-uppercase text-white">New Member discount</div>
								<h2 class="h2 text-primary">Reserved Now & Get <span class="font-weight-800">50%</span> Off for Audi & Mercedes Only. Cars Dealers</h2>
								<div class="sep"></div>
							</div>
							<div class="col-lg-4 col-md-3 col-sm-4 col-xs-12">
								<button class="site-button text-uppercase pull-right" type="button"><span class="m-r5"><i class="fa fa-user"></i></span> Sign up now</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="owl-carousel clearfix offers owl-none">
						<div class="item">
							<div class="discount-box text-white">
								<div>
									<figure>
										<img src="images/offers/pic1.jpg" alt="">
									</figure>
								</div>
								<div class="right-part">
									<ul class="star m-b0">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<h4 class="font-22 m-tb5"><a href="car-details-overview.html"><span class="font-weight-700">Audi Cabriolet</span> R8</a></h4>
									<p class="discount-price m-b10 font-14"><del>$40,152</del> <span class="font-weight-800">25.00 USD</span> per day</p>
									<ul class="discount-link list-inline m-b0">
										<li><a href="javascript:;"><i class="flaticon-settings"></i> Mannual</a></li>
										<li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
										<li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3K CC</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="discount-box text-white">
								<div>
									<figure>
										<img src="{{ asset('frontend/asset/images/offers/pic2.jpg') }}" alt="">
									</figure>
								</div>
								<div class="right-part">
									<ul class="star m-b0">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<h4 class="font-22 m-tb5"><a href="car-detail-pictures.html"><span class="font-weight-700">Mercedes Benz</span> I7</a></h4>
									<p class="discount-price m-b10 font-14"><del>$40,152</del> <span class="font-weight-800">25.00 USD</span> per day</p>
									<ul class="discount-link list-inline m-b0">
										<li><a href="javascript:;"><i class="flaticon-settings"></i> Mannual</a></li>
										<li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
										<li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3K CC</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="discount-box text-white">
								<div>
									<figure>
										<img src="{{ asset('frontend/asset/images/offers/pic3.jpg') }}" alt="">
									</figure>
								</div>
								<div class="right-part">
									<ul class="star m-b0">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<h4 class="font-22 m-tb5"><a href="car-detail-specifications.html"><span class="font-weight-700">Audi Cabriolet</span> R8</a></h4>
									<p class="discount-price m-b10 font-14"><del>$40,152</del> <span class="font-weight-800">25.00 USD</span> per day</p>
									<ul class="discount-link list-inline m-b0">
										<li><a href="javascript:;"><i class="flaticon-settings"></i> Mannual</a></li>
										<li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
										<li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3K CC</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="discount-box text-white">
								<div>
									<figure>
										<img src="{{ asset('frontend/asset/images/offers/pic1.jpg') }}" alt="">
									</figure>
								</div>
								<div class="right-part">
									<ul class="star m-b0">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<h4 class="font-22 m-tb5"><a href="new-car-upcoming.html"><span class="font-weight-700">Mercedes Benz</span> I7</a></h4>
									<p class="discount-price m-b10 font-14"><del>$40,152</del> <span class="font-weight-800">25.00 USD</span> per day</p>
									<ul class="discount-link list-inline m-b0">
										<li><a href="javascript:;"><i class="flaticon-settings"></i> Mannual</a></li>
										<li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
										<li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3K CC</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="discount-box text-white">
								<div>
									<figure>
										<img src="{{ asset('frontend/asset/images/offers/pic3.jpg') }}" alt="">
									</figure>
								</div>
								<div class="right-part">
									<ul class="star m-b0">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<h4 class="font-22 m-tb5"><a href="new-car-popular.html"><span class="font-weight-700">Audi Cabriolet</span> R8</a></h4>
									<p class="discount-price m-b10 font-14"><del>$40,152</del> <span class="font-weight-800">25.00 USD</span> per day</p>
									<ul class="discount-link list-inline m-b0">
										<li><a href="javascript:;"><i class="flaticon-settings"></i> Mannual</a></li>
										<li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
										<li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3K CC</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="discount-box text-white">
								<div>
									<figure>
										<img src="{{ asset('frontend/asset/images/offers/pic1.jpg') }}" alt="">
									</figure>
								</div>
								<div class="right-part">
									<ul class="star m-b0">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<h4 class="font-22 m-tb5"><a href="new-car-latest.html"><span class="font-weight-700">Mercedes Benz</span> I7</a></h4>
									<p class="discount-price m-b10 font-14"><del>$40,152</del> <span class="font-weight-800">25.00 USD</span> per day</p>
									<ul class="discount-link list-inline m-b0">
										<li><a href="javascript:;"><i class="flaticon-settings"></i> Mannual</a></li>
										<li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
										<li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3K CC</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- discount-offers end -->

	
	<!-- testimonial -->
	@include('frontend.home.home_testify')
	<!-- testimonial end -->
	<!-- team -->
	<div class="section-full content-inner-1 bg-team">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="advertise">
						<img src="{{ asset('frontend/asset/images/add.jpg') }}" alt=""/>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="section-head style-1 text-center light-gray opacity" data-name="S">
					<div class="title-sm text-uppercase text-white">Our Professional Staff</div>
					<h2 class="h2 text-white">Cars Dealer <span class="font-weight-800">Drives</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="team-box bg-white" style="background-image: url({{ asset('frontend/asset/images/team/pic1.jpg') }});">
						<div class="team-about">
							<div>
								<h4><a href="javascript:;">Luis <br>Henrique</a></h4>
								<p>5 Years Experience</p>
							</div>
							<ul class="list-inline">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="team-box bg-white" style="background-image: url({{ asset('frontend/asset/images/team/pic2.jpg') }});">
						<div class="team-about">
							<div>
								<h4><a href="javascript:;">Robertho <br>Garcia</a></h4>
								<p>5 Years Experience</p>
							</div>
							<ul class="list-inline">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="team-box bg-white" style="background-image: url({{ asset('frontend/asset/images/team/pic3.jpg') }});">
						<div class="team-about">
							<div>
								<h4><a href="javascript:;">Daniel <br>Quaresma</a></h4>
								<p>5 Years Experience</p>
							</div>
							<ul class="list-inline">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
					<a href="javascript:;" class="site-button text-uppercase" style="width: 100%;">View All Drivers</a>
				</div>
			</div>
		</div>
	</div>
	<!-- team end -->
	<!-- brands -->
	@include('frontend.home.home_brands')
	<!-- brands end -->
	<!-- faq -->
	@include('frontend.home.home_faqs')
	<!-- faq end -->
	<!-- counter -->
	<div class="section-full bg-primary text-white counter-sc">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="counter-box">
						<div class="icon-lg"><i class="fa fa-user-o"></i></div>
						<div class="">
							<span class="counter font-weight-800">1,172,700</span>
							<p class="font-14 text-uppercase font-weight-600 m-b0">Happy customers</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="counter-box">
						<div class="icon-lg"><i class="flaticon-steering-wheel"></i></div>
						<div class="">
							<span class="counter font-weight-800">2,450</span>
							<p class="font-14 text-uppercase font-weight-600 m-b0">Cars in garage</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="counter-box">
						<div class="icon-lg"><i class="fa fa-flag-checkered"></i></div>
						<div class="">
							<span class="counter font-weight-800">1,211,100</span>
							<p class="font-14 text-uppercase font-weight-600 m-b0">Total kilometer/Mil</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="counter-box no-bdr">
						<div class="icon-lg"><i class="flaticon-customer-service"></i></div>
						<div class="">
							<span class="counter font-weight-800">47,250</span>
							<p class="font-14 text-uppercase font-weight-600 m-b0">Car center solutions</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- counter end -->
<!-- Latest News END-->
<div class="section-full bg-white content-inner-1 bg-img-fix overlay-black-dark dlab-blog-cat-list" style="background-image: url({{ asset('frontend/asset/images/background/bg2.jpg') }});">
	<div class="container">
		<div class="m-b30 text-center head-1 text-white">
			<h3 class="h3 text-uppercase m-t0">You might be interested in</h3>
			<ul class="nav theme-tabs m-t20">
				<li role="presentation" class="active"><a data-toggle="tab"  aria-controls="expert-reviews"  href="#expert-reviews">EXPERT REVIEWS</a></li>
				<li role="presentation" ><a data-toggle="tab"  aria-controls="featured-stories" href="#featured-stories">FEATURED STORIES</a></li>
				<li role="presentation" ><a data-toggle="tab"  aria-controls="videos" href="#videos">VIDEOS</a></li>
			</ul>
		</div>
		<div class="section-content ">
			<div class="clearfix">	
				<div class="">
					<div class="tab-content">
						<div id="expert-reviews"  class="tab-pane active clearfix">
							<div id="reviews" class="carousel slide blog-stories mycarousel" data-ride="carousel">
								<!-- Wrapper for slides -->
								<div class="carousel-inner">
									<div class="item active">
										<div class="dlab-media"> 
											<a href="#"><img src="{{ asset('frontend/asset/images/our-work/work1/pic2.jpg') }}" alt=""></a> 
										</div>
										<div class="carousel-caption">
											<h4 class="dlab-tilte"><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting dustry. Lorem Ipsum has been the industry..</a></h4> 
										</div>
									</div>
									<div class="item">
										<div class="dlab-media"> 
											<a href="#"><img src="{{ asset('frontend/asset/images/our-work/work1/pic1.jpg') }}" alt=""></a> 
										</div>
										<div class="carousel-caption">
											<h4 class="dlab-tilte"><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting dustry. Lorem Ipsum has been the industry..</a></h4> 
										</div>
									</div>
									<div class="item">
										<div class="dlab-media"> 
											<a href="#"><img src="{{ asset('frontend/asset/images/our-work/work1/pic3.jpg') }}" alt=""></a> 
										</div>
										<div class="carousel-caption">
											<h4 class="dlab-tilte"><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting dustry. Lorem Ipsum has been the industry..</a></h4> 
										</div>
									</div>	
								</div>
								<ul class="nav nav-pills nav-justified blog-nav-list">
									<li data-target="#reviews" data-slide-to="0" class="active">
										<a class="media">
											<div class="media-left">
												<img class="media-object" src="{{ asset('frontend/asset/images/our-work/work1/thumb2.jpg') }}" alt="">
											</div>
											<div class="media-body p-l15">
												<h4 class="dlab-title">Porche Release New Model</h4>
											</div>
										</a>
									</li>
									<li data-target="#reviews" data-slide-to="1">
										<a class="media">
											<div class="media-left">
												<img class="media-object" src="{{ asset('frontend/asset/images/our-work/work1/thumb1.jpg') }}" alt="">
											</div>
											<div class="media-body p-l15">
												<h4 class="dlab-title">Porche Release New Model</h4>
											</div>
										</a>
									</li>
									<li data-target="#reviews" data-slide-to="2">
										<a class="media">
											<div class="media-left">
												<img class="media-object" src="{{ asset('frontend/asset/images/our-work/work1/thumb3.jpg') }}" alt="">
											</div>
											<div class="media-body p-l15">
												<h4 class="dlab-title">Porche Release New Model</h4>
											</div>
										</a>
									</li>
								</ul>
							</div><!-- End Carousel -->
						</div>
						<div id="featured-stories"  class="tab-pane clearfix fade">
							<div id="featured" class="carousel slide blog-stories mycarousel" data-ride="carousel">
								<!-- Wrapper for slides -->
								<div class="carousel-inner">
									<div class="item active">
										<div class="dlab-media"> 
											<a href="#"><img src="{{ asset('frontend/asset/images/our-work/work1/pic1.jpg') }}" alt=""></a> 
										</div>
										<div class="carousel-caption">
											<h4 class="dlab-tilte"><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting dustry. Lorem Ipsum has been the industry..</a></h4> 
										</div>
									</div>
									<div class="item ">
										<div class="dlab-media"> 
											<a href="#"><img src="{{ asset('frontend/asset/images/our-work/work1/pic2.jpg') }}" alt=""></a> 
										</div>
										<div class="carousel-caption">
											<h4 class="dlab-tilte"><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting dustry. Lorem Ipsum has been the industry..</a></h4> 
										</div>
									</div>
									<div class="item">
										<div class="dlab-media"> 
											<a href="#"><img src="{{ asset('frontend/asset/images/our-work/work1/pic3.jpg') }}" alt=""></a> 
										</div>
										<div class="carousel-caption">
											<h4 class="dlab-tilte"><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting dustry. Lorem Ipsum has been the industry..</a></h4> 
										</div>
									</div>	
								</div>
								<ul class="nav nav-pills nav-justified blog-nav-list">
									<li data-target="#featured" data-slide-to="1" >
										<a class="media">
											<div class="media-left">
												<img class="media-object" src="{{ asset('frontend/asset/images/our-work/work1/thumb1.jpg') }}" alt="">
											</div>
											<div class="media-body p-l15">
												<h4 class="dlab-title">Porche Release New Model</h4>
											</div>
										</a>
									</li>
									<li data-target="#featured" data-slide-to="0" >
										<a class="media">
											<div class="media-left">
												<img class="media-object" src="{{ asset('frontend/asset/images/our-work/work1/thumb2.jpg') }}" alt="">
											</div>
											<div class="media-body p-l15">
												<h4 class="dlab-title">Porche Release New Model</h4>
											</div>
										</a>
									</li>
									<li data-target="#featured" data-slide-to="2">
										<a class="media">
											<div class="media-left">
												<img class="media-object" src="{{ asset('frontend/asset/images/our-work/work1/thumb3.jpg') }}" alt="">
											</div>
											<div class="media-body p-l15">
												<h4 class="dlab-title">Porche Release New Model</h4>
											</div>
										</a>
									</li>
								</ul>
							</div><!-- End Carousel -->
						</div>
						<div id="videos"  class="tab-pane clearfix fade">
							<div id="video" class="carousel slide blog-stories mycarousel" data-ride="carousel">
								<!-- Wrapper for slides -->
								<div class="carousel-inner">
									<div class="item active">
										<div class="dlab-media"> 
											<a href="#"><img src="{{ asset('frontend/asset/images/our-work/work1/pic3.jpg') }}" alt=""></a> 
										</div>
										<div class="carousel-caption">
											<h4 class="dlab-tilte"><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting dustry. Lorem Ipsum has been the industry..</a></h4> 
										</div>
									</div>	
									<div class="item ">
										<div class="dlab-media"> 
											<a href="#"><img src="{{ asset('frontend/asset/images/our-work/work1/pic2.jpg') }}" alt=""></a> 
										</div>
										<div class="carousel-caption">
											<h4 class="dlab-tilte"><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting dustry. Lorem Ipsum has been the industry..</a></h4> 
										</div>
									</div>
									<div class="item">
										<div class="dlab-media"> 
											<a href="#"><img src="{{ asset('frontend/asset/images/our-work/work1/pic1.jpg') }}a" alt=""></a> 
										</div>
										<div class="carousel-caption">
											<h4 class="dlab-tilte"><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting dustry. Lorem Ipsum has been the industry..</a></h4> 
										</div>
									</div>
								</div>
								<ul class="nav nav-pills nav-justified blog-nav-list">
									<li data-target="#video" data-slide-to="2" class="active">
										<a class="media">
											<div class="media-left">
												<img class="media-object" src="{{ asset('frontend/asset/images/our-work/work1/thumb3.jpg') }}" alt="">
											</div>
											<div class="media-body p-l15">
												<h4 class="dlab-title">Porche Release New Model</h4>
											</div>
										</a>
									</li>
									<li data-target="#video" data-slide-to="0" >
										<a class="media">
											<div class="media-left">
												<img class="media-object" src="{{ asset('frontend/asset/images/our-work/work1/thumb2.jpg') }}" alt="">
											</div>
											<div class="media-body p-l15">
												<h4 class="dlab-title">Porche Release New Model</h4>
											</div>
										</a>
									</li>
									<li data-target="#video" data-slide-to="1">
										<a class="media">
											<div class="media-left">
												<img class="media-object" src="{{ asset('frontend/asset/images/our-work/work1/thumb1.jpg') }}" alt="">
											</div>
											<div class="media-body p-l15">
												<h4 class="dlab-title">Porche Release New Model</h4>
											</div>
										</a>
									</li>
								</ul>
							</div><!-- End Carousel -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Client logo Carousel -->
@include('frontend.home.home_client')
<!-- Client logo Carousel END -->
<!-- Content END-->

@endsection