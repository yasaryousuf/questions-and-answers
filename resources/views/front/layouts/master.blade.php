<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="ScriptsBundle">
	<title>Knowledge - Q&A</title>
	<link rel="icon" href="{{asset('/')}}front/images/favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="{{asset('/')}}front/css/bootstrap.css">
	<link rel="stylesheet" href="{{asset('/')}}front/css/tags-input.css">
	<link rel="stylesheet" href="{{asset('/')}}front/css/style.css">
	<link rel="stylesheet" href="{{asset('/')}}front/css/style-02.css">
	<link rel="stylesheet" href="{{asset('/')}}front/css/font-awesome.css">
	<link rel="stylesheet" href="{{asset('/')}}front/css/et-line-fonts.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('/')}}front/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="{{asset('/')}}front/css/owl.style.css">
	<link type="text/css" rel="stylesheet" href="{{asset('/')}}front/css/styles/shCoreDefault.css" />
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}front/css/animate.min.css" />
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}front/css/toastr.min.css" />
	<link type="text/css" rel="stylesheet" href="{{asset('/')}}front/css/bootstrap-dropdownhover.min.css" />
	@yield('style')
	<script src="{{asset('/')}}front/js/jquery.min.js"></script>
	<script src="{{asset('/')}}front/js/modernizr.js"></script>
</head>

<body>
    @include('front.includes.header')
    @yield('body')
	@include('front.includes.footer')

	@yield('script')
	<script src="{{asset('/')}}front/js/bootstrap.min.js"></script>
	<script src="{{asset('/')}}front/js/jquery.smoothscroll.js"></script>
	<script type="text/javascript" src="{{asset('/')}}front/js/easing.js"></script>
	<script src="{{asset('/')}}front/js/jquery.countTo.js"></script>
	<script src="{{asset('/')}}front/js/jquery.waypoints.js"></script>
	<script src="{{asset('/')}}front/js/jquery.appear.min.js"></script>
	<script src="{{asset('/')}}front/js/tags-input.js"></script>
	<script src="{{asset('/')}}front/js/carousel.min.js"></script>
	<script src="{{asset('/')}}front/js/toastr.min.js"></script>
	<script src="{{asset('/')}}front/js/wow.min.js"></script>
	<script src="{{asset('/')}}front/js/jquery.stellar.min.js"></script>
	<script src="{{asset('/')}}front/js/bootstrap-dropdownhover.min.js"></script>
	<script type="text/javascript" src="{{asset('/')}}front/scripts/shCore.js"></script>
	<script type="text/javascript" src="{{asset('/')}}front/scripts/shBrushPhp.js"></script>
	<script src="{{asset('/')}}front/js/custom.js"></script>
	<script src="{{asset('/')}}front/js/script.js"></script>
</body>
</html>