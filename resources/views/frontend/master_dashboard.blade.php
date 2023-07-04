<!DOCTYPE html>

<!--[if IE 7 ]>  <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>  <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>  <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!-- Meta -->
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
<title>Ezeogidi Motors - Your favourite Car Dealer</title>
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

<!-- Mirrored from carzone.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 May 2023 08:58:54 GMT -->
</html>