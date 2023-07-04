<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from carzone.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 May 2023 08:57:30 GMT -->
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
<!-- Page Title Here -->
<title>Ezeogidi Motors - Contact Us</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif]-->
<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/asset/css/plugins.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/asset/css/style.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/asset/css/templete.min.css') }}">
<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('frontend/asset/css/skin/skin-1.css') }}">
<!-- Revolution Slider Css -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/asset/plugins/revolution/v5.4.3/css/settings.css') }}">
<!-- Revolution Navigation Style -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/asset/plugins/revolution/v5.4.3/css/navigation.css') }}">
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 
</head>
<body id="bg">

<div class="page-wraper">

    <!-- header -->
   @include('frontend.body.header')
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
       @yield('page-content')

 <!-- inner page banner -->
 <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url({{ asset('frontend/asset/images/background/bg4.jpg') }});">
    <div class="container">
        <div class="dlab-bnr-inr-entry">
            <h1 class="text-white">Contact Us</h1>
        </div>
    </div>
</div>
<!-- inner page banner END -->
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Home</a></li>
            <li>Contact us</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb row END -->
<!-- contact area -->
<!-- contact area -->
<div class="section-full content-inner bg-white contact-style-1">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 m-b30">
                <div class="icon-bx-wraper bx-style-1 p-a30 center">
                    <div class="icon-xl text-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                    <div class="icon-content">
                        <h5 class="dlab-tilte text-uppercase">Address</h5>
                        <p>123 West Street, Melbourne Victoria 3000 Australia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 m-b30">
                <div class="icon-bx-wraper bx-style-1 p-a30 center">
                    <div class="icon-xl text-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                    <div class="icon-content">
                        <h5 class="dlab-tilte text-uppercase">Email</h5>
                        <p>obiajulu@ezeogidimotors.com <br/> info@ezeogidimotors.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 m-b30">
                <div class="icon-bx-wraper bx-style-1 p-a30 center">
                    <div class="icon-xl text-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                    <div class="icon-content">
                        <h5 class="dlab-tilte text-uppercase">Phone</h5>
                        <p>+61 3 8376 6284 <br/> +23 123 456 7890</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 m-b30">
                <div class="icon-bx-wraper bx-style-1 p-a30 center">
                    <div class="icon-xl text-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa-fax"></i></a> </div>
                    <div class="icon-content">
                        <h5 class="dlab-tilte text-uppercase">Content title</h5>
                        <p>+61 3 8376 6284 <br/> +23 123 456 7890</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Left part start -->
            <div class="col-md-6">
                <div class="p-a30 bg-gray clearfix m-b30 ">
                    <h2>Send Message Us</h2>
                    <div class="dzFormMsg"></div>
                    <form method="post" class="dzForm" action="https://carzone.dexignlab.com/xhtml/script/contact.php">
                    <input type="hidden" value="Contact" name="dzToDo" >
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="dzName" type="text" required class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group"> 
                                        <input name="dzEmail" type="email" class="form-control" required  placeholder="Your Email Id" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="dzOther[Phone]" type="text" required class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="dzOther[Subject]" type="text" required class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <textarea name="dzMessage" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                    <input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Left part END -->
            <!-- right part start -->
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.3825624477!2d75.65046970649679!3d26.88544791796718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1500819483219" style="border:0; width:100%; height:450px;" allowfullscreen></iframe>
            </div>
            <!-- right part END -->
        </div>
    </div>
</div>
<!-- contact area  END -->
<!-- contact area  END -->
</div>
<!-- Content END-->

    </div>
	<!-- End Content -->



    <!-- Footer -->
	@include('frontend.body.footer')
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-chevron-up" ></button>
</div>
<!-- JavaScript  files ========================================= -->
<script  src="{{ asset('frontend/asset/js/jquery.min.js') }}"></script>
<!-- jquery.min js -->
<script src="{{ asset('frontend/asset/js/wow.js') }}"></script>
<!-- wow.min js -->
<script  src="{{ asset('frontend/asset/js/bootstrap.min.js') }}"></script>
<!-- bootstrap.min js -->
<script  src="{{ asset('frontend/asset/js/bootstrap-select.min.js') }}"></script>
<!-- Form js -->
<script  src="{{ asset('frontend/asset/js/jquery.bootstrap-touchspin.js') }}"></script>
<!-- Form js -->
<script  src="{{ asset('frontend/asset/js/magnific-popup.js') }}"></script>
<!-- magnific-popup js -->
<script  src="{{ asset('frontend/asset/js/waypoints-min.js') }}"></script>
<!-- waypoints js -->
<script  src="{{ asset('frontend/asset/js/counterup.min.js') }}"></script>
<!-- counterup js -->
<script src="{{ asset('frontend/asset/js/imagesloaded.js') }}"></script>
<!-- masonry  -->
<script src="{{ asset('frontend/asset/js/masonry-3.1.4.js') }}"></script>
<!-- masonry  -->
<script src="{{ asset('frontend/asset/js/masonry.filter.js') }}"></script>
<!-- masonry  -->
<script src="{{ asset('frontend/asset/js/owl.carousel.js') }}"></script>
<!-- OWL Slider -->
<script  src="{{ asset('frontend/asset/js/dz.carousel.js') }}"></script>
<!-- sortcode fuctions  -->
<script src="{{ asset('frontend/asset/js/dz.ajax.js') }}"></script>
<!-- contact-us js -->
<!-- revolution JS FILES -->
<script src="{{ asset('frontend/asset/plugins/revolution/v5.4.3/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('frontend/asset/plugins/revolution/v5.4.3/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('frontend/asset/plugins/revolution/v5.4.3/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('frontend/asset/plugins/revolution/v5.4.3/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/asset/plugins/revolution/v5.4.3/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('frontend/asset/plugins/revolution/v5.4.3/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('frontend/asset/plugins/revolution/v5.4.3/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('frontend/asset/plugins/revolution/v5.4.3/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('frontend/asset/plugins/revolution/v5.4.3/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('frontend/asset/plugins/revolution/v5.4.3/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script  src="{{ asset('frontend/asset/js/rev.slider.js') }}"></script>
<script src="{{ asset('frontend/asset/js/modernizr.custom.js') }}"></script>
<script src="{{ asset('frontend/asset/js/jquery.hoverdir.js') }}"></script>
<script  src="{{ asset('frontend/asset/js/custom.min.js') }}"></script>
<!-- custom fuctions  -->
<script>
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_1();
});	/*ready*/
</script>
</script>
</body>
</html>