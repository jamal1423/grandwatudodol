<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Grand Watu Dodol | Pantai Bangsring, Wisata Banyuwangi, Wisata Pantai, Pantai Banyuwangi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Pantai Bangsring, Watudodol, Grand Watudodol, Wisata Banyuwangi, Bangsring, Pantai, Pulau Tabuhan, Pulau Menjangan, Rumah Apung, Wisata Jawa Timur, Diving, Snorkeling"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('website/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('website/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('website/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('website/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('website/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
	<link rel="stylesheet" type="text/css" media="all" href="{{ asset('website/css/floating-whatsapp.css') }}"/>
	@if(Request::is('home') || Request::is('/'))
    <style>
        .bg-header
		{
			background-image: url('image-komponen/bg_c.jpg');
		}
		
		@media(max-width:820px)
		{
			.bg-header-mobile
			{
				background-image: url('image-komponen/bg_c.jpg');
				background-size: 100% 40%;
			}
			
			.txt-header-mobile
			{
				top:-200px;
			}
			
			.jarak-bawah-mobile
			{
				margin-bottom:-400px;
			}
			
		}
	</style>
    @endif
	@if(Request::is('destinasi-wisata'))
    <style>
		.bg-header
		{
			background-image: url('image-komponen/bg_b.jpg');
		}
		
		@media(max-width:820px)
		{
			.bg-header-mobile
			{
				background-image: url('image-komponen/bg_b.jpg');
				background-size: 100% 40%;
			}
			
			.txt-header-mobile
			{
				top:-355px;
			}
			
			.jarak-bawah-mobile
			{
				margin-bottom:-400px;
			}
		}
	</style>
    @endif
	@if(Request::is('paket-wisata'))
    <style>
		.bg-header
		{
			background-image: url('image-komponen/bg_e.jpg');
		}
		
		@media(max-width:820px)
		{
			.bg-header-mobile
			{
				background-image: url('image-komponen/bg_e.jpg');
				background-size: 100% 40%;
			}
			
			.txt-header-mobile
			{
				top:-355px;
			}
			
			.jarak-bawah-mobile
			{
				margin-bottom:-400px;
			}
		}
	</style>
    @endif
	@if(Request::is('detail-paket-wisata/*'))
    <style>
		.bg-header
		{
			background-image: url('../../image-komponen/bg_e.jpg');
		}
		
		@media(max-width:820px)
		{
			.bg-header-mobile
			{
				background-image: url('../../image-komponen/bg_e.jpg');
				background-size: 100% 40%;
			}
			
			.txt-header-mobile
			{
				top:-355px;
			}
			
			.jarak-bawah-mobile
			{
				margin-bottom:-400px;
			}
		}
	</style>
    @endif
	@if(Request::is('galeri'))
    <style>
		.bg-galeri
		{
			background-image: url('image-komponen/bg_galeri.jpg');
		}
		
		@media(max-width:820px)
		{
			.bg-galeri-mobile
			{
				background-image: url('image-komponen/bg_galeri.jpg');
				background-size: 100% 40%;
			}
			
			.txt-header-mobile
			{
				top:-355px;
			}
			
			.jarak-bawah-mobile
			{
				margin-bottom:-400px;
			}
		}
	</style>
    @endif
	@if(Request::is('kontak'))
    <style>
		.bg-kontak
		{
			background-image: url('image-komponen/bgg.jpg');
		}
		
		@media(max-width:820px)
		{
			.bg-kontak-mobile
			{
				background-image: url('image-komponen/bgg.jpg');
				background-size: 100% 40%;
			}
			
			.txt-header-mobile
			{
				top:-355px;
			}
			
			.jarak-bawah-mobile
			{
				margin-bottom:-400px;
			}
		}
	</style>
    @endif
    </head>
    <body>
        
        <!-- HEADER -->
        @include('website.partial.menu-header')

        <!-- CONTENT -->
        @yield('content')
        
        <!--FOOTER-->
        @include('website.partial.menu-footer')

        <script src="{{ asset('website/js/jquery.min.js') }}"></script>
        <script src="{{ asset('website/js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('website/js/popper.min.js') }}"></script>
        <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('website/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('website/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('website/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('website/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('website/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('website/js/aos.js') }}"></script>
        <script src="{{ asset('website/js/jquery.animateNumber.min.js') }}"></script>
        <script src="{{ asset('website/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('website/js/scrollax.min.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="{{ asset('website/js/google-map.js') }}"></script>
        <script src="{{ asset('website/js/main.js') }}"></script>
    
        <script type="text/javascript" src="{{ asset('website/js/jquery-2.1.4.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('website/js/floating-wpp.min.js') }}"></script>
        @stack('script')
    
    </body>
</html>