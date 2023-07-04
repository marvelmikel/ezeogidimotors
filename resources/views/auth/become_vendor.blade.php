<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="description" content="" />
<meta name="format-detection" content="telephone=no">
<!-- Favicons Icon -->
<link rel="icon" href=" {{ asset('frontend/asset/images/favicon.ico') }}" type="image/x-icon" />
<link rel="shortcut icon" type="image/x-icon" href=" {{ asset('frontend/asset/images/favicon.png') }}" />
<!-- Page Title Here -->
<title>Become Vendor Page - Register as a Vendor</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif]-->

<link rel="stylesheet" type="text/css" href="{{ asset('frontend/asset/css/plugins.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/asset/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/asset/css/template.css') }}">
<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('frontend/asset/css/skin/skin-1.css') }}">
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 
</head>
<body id="bg">
<div class="page-wraper">
    <!-- header -->
    <header class="site-header">
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="dlab-topbar-left">
						<ul>
							<li><i class="fa fa-envelope-o m-r5"></i> info@example.com</li>
							<li><i class="fa fa-phone m-r5"></i> +(001) 237 2372</li>
						</ul>
					</div>
					<div class="dlab-topbar-right topbar-social">
						<ul>
							<li><a href="#" class="site-button-link facebook hover"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="site-button-link google-plus hover"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="site-button-link twitter hover"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="site-button-link instagram hover"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="site-button-link linkedin hover"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="site-button-link youtube hover"><i class="fa fa-youtube-play"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="">
			
		</div>
		<!-- main header -->
		<div class="sticky-header main-bar-wraper header dark">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                        <!-- Stylesheets -->


                    <div class="logo-header mostion">
						<a href="index.html"><img src="{{ asset('frontend/asset/images/logo-light.png') }}" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed" aria-expanded="false" > 
						<i class="fa fa-bars"></i>
					</button>
                    
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell ">
                            <button id="quik-search-btn" type="button" class="site-button-link"><i class="fa fa-search"></i></button>
                            <div class="shop-cart navbar-right">
								<button type="button" class="site-button-link cart-btn">
									<i class="fa fa-shopping-bag"></i><span class="badge bg-primary">3</span>
								</button>
								<ul class="dropdown-menu cart-list">
									<li class="cart-item">
										<div class="media"> 
											<div class="media-left"> 
												<a href="#"> 
													<img alt="" class="media-object" src="{{ asset('frontend/asset/images/product/thumb3.jpg') }}"> 
												</a> 
											</div> 
											<div class="media-body"> 
												<h6><a href="#" class="media-heading">Tshirt Dress</a></h6>
												<span>$19.99</span>
												<span class="item-close">X</span>
											</div> 
										</div>
									</li>
                              
									<li class="cart-item">
										<div class="media"> 
											<div class="media-left"> 
												<a href="#"> 
													<img alt="" class="media-object" src="{{ asset('frontend/asset/images/product/thumb2.jpg') }}"> 
												</a> 
											</div> 
											<div class="media-body"> 
												<h6><a href="#" class="media-heading">Tshirt Dress</a></h6>
												<span>$19.99</span>
												<span class="item-close">X</span>
											</div> 
										</div>
									</li>
									<li class="cart-item">
										<div class="media"> 
											<div class="media-left"> 
												<a href="#"> 
													<img alt="" class="media-object" src="{{ asset('frontend/asset/images/product/thumb1.jpg') }}"> 
												</a> 
											</div> 
											<div class="media-body"> 
												<h6><a href="#" class="media-heading">Tshirt Dress</a></h6>
												<span>$19.99</span>
												<span class="item-close">X</span>
											</div> 
										</div>
									</li>
									<li class="cart-item text-center">
										<h5 class="text-black m-a0">Totle = $500</h5>
									</li>
									<li class="text-center">
										<button class="site-button radius-xl m-r5">View Cart</button>
										<button class="site-button radius-xl outline black">Checkout</button>
									</li>
								</ul>
							</div>
						</div>
                    </div>
                    <div class="dlab-quik-search bg-primary ">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span id="quik-search-remove"><i class="flaticon-close"></i></span>
                        </form>
                    </div>
					<!-- Quik search -->
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse">
                        <ul class="nav navbar-nav">	
							<li class="active"><a href="index.html">Home<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="../index.html">Home 1</a></li>
									<li><a href="../index-2.html">Home 2</a></li>
									<li><a href="../index-3.html">Home 3</a></li>
									<li><a href="index.html">Car Shop</a></li>
									<li><a href="../car-blog/index.html">Car Blog</a></li>
									<li><a href="../shortcode/index.html">Car Shortcode</a></li>
								</ul>
							</li>
							<li> <a href="javascript:;">Shop <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="product.html">Product</a></li>
									<li><a href="product-2.html">Product 2</a></li>
									<li><a href="product-details.html">Product Details</a></li>
									<li><a href="shopping-cart.html">Shopping Cart</a></li>
									<li><a href="wishlist.html">Wishlist</a></li>
									<li><a href="my-account.html">My Account</a></li>
                                    <li><a href="#">Become a Vendor</a></li>
								</ul>
							</li>
							<li> <a href="product.html">Product</a></li>
							<li> <a href="contact.html">Conatct Us</a></li>
						</ul>	
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content  bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr  shop-bnr overlay-black-middle" style="background-image:url({{ asset('frontend/asset/images/banner/bnr1.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">My Account</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<div class="container">
							<ul class="list-inline">
								<li><a href="#">Home</a></li>
								<li>My Account</li>
							</ul>
						</div>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        
        <!-- contact area -->
			<div class="section-full content-inner-1">
				<!-- Product details -->
				<div class="container" style="width: fit-content; margin-bottom: 20px;">
					<div class="login-form ">
						<div class="tab-content bg-gray">
							<div id="login" class="tab-pane active text-center">
                        
                             
		
						
							<div id="developement-1" class="tab-pane">
                                <form method="POST" action="{{ route('vendor.register') }}" class="p-a30 dlab-form text-center">
                                    @csrf                            

									<h3 class="form-title m-t0">Sign Up</h3>
									<div class="dlab-separator-outer m-b5">
										<div class="dlab-separator bg-primary style-liner"></div>
									</div>
									<p>Enter your personal details below: </p>
									<div class="form-group">
										<input name="name" required=""  id="name"  class="form-control" placeholder="Shop Name" type="text"/>
									</div>

                                    <div class="form-group">
										<input name="username" required=""  id="username"  class="form-control" placeholder="User Name" type="text"/>
									</div>

                                    <div class="form-group">
										<input name="email" required="" id="email" class="form-control" placeholder="Email Id" type="email"/>
									</div>

                                    <div class="form-group">
										<input name="text" required=""  id="phone"  class="form-control" placeholder="Phone Numbers" type="phone"/>
									</div>
                                    

                                    <div class="form-group">
                                        <select name="vendor_join" class="form-select mb-3" aria-label="Default select example">
                                           <option selected="">Open this select Join Date</option>
                                           <option value="2022">2022</option>
                                           <option value="2023">2023</option>
                                           <option value="2024">2024</option>
                                           <option value="2025">2025</option>
                                           <option value="2026">2026</option>
                                       </select>
                                   </div>
                                    
									<div class="form-group">
										<input name="password" id="password" required="" class="form-control" placeholder="Password" type="password"/>
									</div>
									<div class="" style="margin-bottom: 30px">
										<input name="password_confirmation" required=""  id="password_confirmation" class="form-control" placeholder="Re-type Your Password" type="password"/>
									</div>
									<div class="m-b30 text-left">
										<input id="check2" type="checkbox"/>
										<label for="check2">I agree to the <a href="#">Terms of Service </a>& <a href="#">Privacy Policy</a> </label>
									</div>
									<div class="form-group text-left "> 
										<a class="site-button outline gray" href="{{ route('vendor.login') }}">Already Have V.A</a>
										<button class="site-button pull-right">Become A Vendor</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Product details -->
			</div>
        <!-- contact area  END -->
		<!-- Newslatter -->
			<div class="section-full content-inner-1 bg-primary text-white overlay-primary-dark bg-img-fix" style="background-image:url(asset/images/background/bg1.jpg);">
				<div class="container">
					<div class="row dzseth">
						<div class="col-md-7 col-sm-6">
							<h2 class="font-30 font-weight-600 m-b10 m-t0">Get the Latest News Delivered Daily.</h2>
							<h5 class="font-18">Give us your email and you will be daily updated with the latest events, in detail.</h5>
						</div>
						<div class="col-md-5 col-sm-6 dis-tbl">
							<form action="https://carzone.dexignlab.com/xhtml/script/mailchamp.php" method="post" class="dis-tbl-cell dzSubscribe">
								<div class="dzSubscribeMsg"></div>
								<div class="input-group">
									<input name="dzEmail" required="required" type="email" class="form-control" placeholder="Enter Your Email">
									<span class="input-group-btn">
										<button name="submit" value="Submit" type="submit" class="site-button black m-l10">Subscribe</button>
									</span>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- Newslatter	 End -->
    </div>
    <!-- Content END-->
    <!-- Footer -->
	<footer class="site-footer">
        <div class="footer-top">
             <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6 footer-col-4">
                        <div class="widget widget_about">
                            <div class="logo-footer"><img src=" {{ asset('frontend/asset/images/logo-light.png') }}" alt=""></div>
                            <p class="m-tb20"><strong>CarZone</strong> is simply dummy text of the print ing and in type setting industry. Lorem Ipsum has bee the industry's standard...</p>
                            
							<ul class="dlab-contact-info">
                                <li><i class="flaticon-placeholder"></i>Demo Address #8901 Marmora Road Chi Minh City, Vietnam</li>
                                <li><i class="flaticon-customer-service"></i>Phone : 0800-123456 (24/7 Support Line)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 footer-col-4">
                        <div class="widget widget_services">
                            <h4 class="m-b15 text-uppercase">Useful Links</h4>
                            <div class="dlab-separator bg-primary"></div>
                            <ul>
                                <li><a href="new-car-latest.html">Latest Cars</a></li>
                                <li><a href="new-car-upcoming.html">Upcoming Cars</a></li>
                                <li><a href="used-car-search.html">Search Used Car</a></li>
                                <li><a href="used-car-sell.html">Car Sell</a></li>
                                <li><a href="compare-car.html">Compare Car</a></li>
                                <li><a href="car-review.html">Car Review</a></li>
                            </ul>
                        </div>
                    </div>
					<div class="col-md-3 col-sm-6 col-xs-6 footer-col-4">
                        <div class="widget recent-posts-entry">
                            <h4 class="m-b15 text-uppercase">recent posts </h4>
                            <div class="dlab-separator bg-primary"></div>
                            <div class="widget-post-bx">
                                <div class="widget-post clearfix">
                                    <div class="dlab-post-media"> <img src=" {{ asset('frontend/asset/images/blog/recent-blog/pic1.jpg') }}" alt="" width="200" height="143"> </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-header">
                                            <h5><a href="blog-single.html">Time to change...</a></h5>
                                        </div>
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-author">By Admin</li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="dlab-post-media"> <img src="{{ asset('frontend/asset/images/blog/recent-blog/pic2.jpg') }}" alt="" width="200" height="160"> </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-header">
                                            <h5><a href="blog-single.html">Time to change...</a></h5>
                                        </div>
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-author">By Admin</li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="dlab-post-media"> <img src="{{ asset('frontend/asset/images/blog/recent-blog/pic3.jpg') }}" alt="" width="200" height="160"> </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-header">
                                            <h5><a href="blog-single.html">Time to change...</a></h5>
                                        </div>
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-author">By Admin</li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 footer-col-4">
                        <div class="widget ">
                            <h4 class="m-b15 text-uppercase">Newsletter </h4>
                            <div class="dlab-separator bg-primary"></div>
                            <p class="m-tb20">Keep up on our always evolving products features and technology. Enter your e-mail and subscribe to our newsletter.</p>
							<form action="https://carzone.dexignlab.com/xhtml/script/mailchamp.php" method="post" class="dlab-subscribe-form dzSubscribe">
								<div class="dzSubscribeMsg"></div>
								<div class="input-group m-b15">
									<input name="dzEmail" required="required" type="email" class="form-control" placeholder="Enter Your Email">
								</div>
								<div class="input-group">
									<button name="submit" value="Submit" type="submit" class="site-button btn-block">
										SUBSCRIBE <i class="fa fa-angle-right font-18 m-l10"></i>
									</button>
								</div>
							</form>
                        </div>
                    </div>
                </div>
				<div class="clearfix">
					<ul class="full-social-icon clearfix">
						<li class="fb col-md-3 col-sm-6 col-xs-6 m-b30">
							<a href="#"><i class="fa fa-facebook"></i> Share On Facebook </a>
						</li>
						<li class="tw col-md-3 col-sm-6 col-xs-6 m-b30">
							<a href="#"><i class="fa fa-twitter"></i> Tweet About it </a>
						</li>
						<li class="gplus col-md-3 col-sm-6 col-xs-6 m-b30">
							<a href="#"><i class="fa fa-google-plus"></i> Google Plus | 78+ </a>
						</li>
						<li class="linkd col-md-3 col-sm-6 col-xs-6 m-b30">
							<a href="#"><i class="fa fa-linkedin"></i> Linkedin | 21k </a>
						</li>
					</ul>
				</div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 text-left"> © Copyright 2021 Car Dealer Developed By <a href="http://dexignlab.com/" target="_blank">DexignLab</a> </div>
                    <div class="col-md-6 col-sm-6 text-right "> 
						<a href="page-about.html"> About Us</a> | 
						<a href="page-privacy-policy.html"> Contact Us</a> | 
						<a href="page-about.html"> Privacy Policy</a> 
					</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <button class="scroltop fa fa-arrow-up" ></button>
</div>
<!-- JavaScript  files ========================================= -->
<script src="{{ asset('frontend/asset/js/jquery.min.js') }}"></script>
<!-- jquery.min js -->
<script src="{{ asset('frontend/asset//js/wow.js') }}"></script>
<!-- wow.min js -->
<script src="{{ asset('frontend/asset/js/bootstrap.min.js') }}"></script>
<!-- bootstrap.min js -->
<script  src="{{ asset('frontend/asset/js/bootstrap-select.min.js') }}"></script>
<!-- Form js -->
<script src="{{ asset('frontend/asset/js/jquery.bootstrap-touchspin.js') }}"></script>
<!-- Form js -->
<script src="{{ asset('frontend/asset/js/magnific-popup.js') }}"></script>
<!-- magnific-popup js -->
<script src="{{ asset('frontend/asset/js/waypoints-min.js') }}"></script>
<!-- waypoints js -->
<script src="{{ asset('frontend/asset/js/counterup.min.js') }}"></script>
<!-- counterup js -->
<script src="{{ asset('frontend/asset/js/imagesloaded.js') }}"></script>
<!-- masonry  -->
<script src="{{ asset('frontend/asset/js/masonry-3.1.4.js') }}"></script>
<!-- masonry  -->
<script src="{{ asset('frontend/asset/js/masonry.filter.js') }}"></script>
<!-- masonry  -->
<script src="{{ asset('frontend/asset/js/owl.carousel.js') }}"></script>
<!-- OWL  Slider  -->
<script src="{{ asset('frontend/asset/js/dz.carousel.min.js') }}"></script>
<!-- sortcode fuctions  -->
<script src="{{ asset('frontend/asset/js/dz.ajax.js') }}"></script>
<!-- contact-us js -->
<script src="{{ asset('frontend/asset/js/modernizr.custom.js') }}"></script>
<script src="{{ asset('frontend/asset/js/jquery.hoverdir.js') }}"></script>
<script src="{{ asset('frontend/asset/js/custom.min.js') }}"></script>
</body>
</html>
