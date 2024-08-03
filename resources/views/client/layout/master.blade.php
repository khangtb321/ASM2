<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/babify/babify/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 06:10:17 GMT -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<title>Babify - Kids Store & Baby Shop Template</title>

	<meta name="robots" content="noindex, follow" />
	<meta name="description" content="Babify - Kids Store & Baby Shop Template" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}" />

<!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->
<link rel="stylesheet" href="{{asset('assets/css/giulia-plain.css')}}" />

<!-- Vendor CSS (Bootstrap & Icon Font) -->
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/lastudioicon.css')}}" />

<!-- Plugins CSS (All Plugins Files) -->
<link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/glightbox.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/nice-select2.css')}}" />

<!-- Style CSS -->
<link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}" />
</head>


<body>
	<!-- Header Start -->
	<header class="header bg-white header-height">
		<!-- Header Top Start -->
		@include('client.layout.patials.header-top')
		<!-- Header Top End -->

		<!-- Header Middle Start -->
		@include('client.layout.patials.header-middle')
		<!-- Header Middle End -->

		<!-- Header Main Start -->
		@include('client.layout.patials.header-main')
		<!-- Header Main End -->
	</header>

	<!-- Header End -->

	@yield('content')

	<!-- Footer Start -->
	<footer class="footer-section">
		@include('client.layout.patials.footer')
	</footer>

	<!-- Footer End -->

	
	
	<!-- JS -->
	
	<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Plugins JS -->
<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/js/nice-select2.js')}}"></script>

<!-- Activation JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>


<!-- Mirrored from htmldemo.net/babify/babify/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 06:10:40 GMT -->

</html>