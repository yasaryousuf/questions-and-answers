<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from templates.scriptsbundle.com/knowledge/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Nov 2018 17:37:15 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="ScriptsBundle">
	<title>Knowledge Q&A Dashboard Template</title>
	<!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
	<link rel="icon" href="{{asset('/')}}front/images/favicon.ico" type="image/x-icon" />
	<!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
	<link rel="stylesheet" href="{{asset('/')}}front/css/bootstrap.css">
	<!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
	<link rel="stylesheet" href="{{asset('/')}}front/css/style.css">
	<!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
	<link rel="stylesheet" href="{{asset('/')}}front/css/font-awesome.css">
	<!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
	<link rel="stylesheet" href="{{asset('/')}}front/css/et-line-fonts.css">
	<!-- =-=-=-=-=-=-= Google Fonts =-=-=-=-=-=-= -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
	<!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
	<link rel="stylesheet" type="text/css" href="{{asset('/')}}front/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="{{asset('/')}}front/css/owl.style.css">
	<!-- =-=-=-=-=-=-= Highliter Css =-=-=-=-=-=-= -->
	<link type="text/css" rel="stylesheet" href="{{asset('/')}}front/css/styles/shCoreDefault.css" />
    <!-- =-=-=-=-=-=-= Css Animation =-=-=-=-=-=-= -->
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}front/css/animate.min.css" />
    <!-- =-=-=-=-=-=-= Hover Dropdown =-=-=-=-=-=-= -->
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}front/css/bootstrap-dropdownhover.min.css" />
	<!-- JavaScripts -->
	<script src="{{asset('/')}}front/js/modernizr.js"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    @include('front.includes.header')
    @yield('body')
@include('front.includes.social-media')
	<!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
@include('front.includes.footer')
	<!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
	<script src="{{asset('/')}}front/js/jquery.min.js"></script>
	<!-- Bootstrap Core Css  -->
	<script src="{{asset('/')}}front/js/bootstrap.min.js"></script>
	<!-- Jquery Smooth Scroll  -->
	<script src="{{asset('/')}}front/js/jquery.smoothscroll.js"></script>
	<!-- Jquery Easing -->
	<script type="text/javascript" src="{{asset('/')}}front/js/easing.js"></script>
	<!-- Jquery Counter -->
	<script src="{{asset('/')}}front/js/jquery.countTo.js"></script>
	<!-- Jquery Waypoints -->
	<script src="{{asset('/')}}front/js/jquery.waypoints.js"></script>
	<!-- Jquery Appear Plugin -->
	<script src="{{asset('/')}}front/js/jquery.appear.min.js"></script>
	<!-- Carousel Slider  -->
	<script src="{{asset('/')}}front/js/carousel.min.js"></script>
	<!-- Jquery Parallex -->
	<script src="{{asset('/')}}front/js/jquery.stellar.min.js"></script>
	<!--Style Switcher -->
	<script src="{{asset('/')}}front/js/bootstrap-dropdownhover.min.js"></script>
	<!-- Include jQuery Syntax Highlighter -->
	<script type="text/javascript" src="{{asset('/')}}front/scripts/shCore.js"></script>
	<script type="text/javascript" src="{{asset('/')}}front/scripts/shBrushPhp.js"></script>
	<!-- Template Core JS -->
	<script src="{{asset('/')}}front/js/custom.js"></script>
</body>
</html>