<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="icon" href="{{asset('asset/img/logo1.png')}}" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Ultimatrue</title>

        
        <link href="{{ asset('asset/styles/bootstrap-4.1.2/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
        
      
        <link href="{{ asset('asset/plugins/colorbox/colorbox.css') }}" rel="stylesheet">
        
        
        <link href="{{ asset('asset/styles/about.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/styles/about_responsive.css') }}" rel="stylesheet">
        

	</head>
    <body>
		<div class="super_container">

			<!--================ Header =================-->
			<header class="header trans_400">
	
				<!-- Logo -->
				<div class="logo">
					<a href="#"><img src="{{asset('asset/img/logo1.png')}}" alt=""></a>
				</div>
	
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
								<nav class="main_nav">
									<ul class="d-flex flex-row align-items-start justify-content-start">
										<li><a href="#">Home</a></li>
										<li><a href="#">About</a></li>
										<li><a href="#">Distributors</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
	
				<!-- Submit & Social -->
				<div class="header_right d-flex flex-row align-items-start justify-content-start">
	
					<!-- Submit -->
					<div class="submit"><a href="#">Join Our Distributors</a></div>
	
					<!-- Social -->
					<div class="social">
						<ul class="d-flex flex-row align-items-start justify-content-start">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>
					</div>
	
					<!-- Hamburger -->
					<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
	
				</div>
			</header>
			<!--================ /Header =================-->
		@yield('content')
	</div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="{{ asset('asset/js/jquery-3.3.1.min.js') }}"></script>
		<script src="{{ asset('asset/styles/bootstrap-4.1.2/popper.js') }}"></script>
		<script src="{{ asset('asset/styles/bootstrap-4.1.2/bootstrap.min.js') }}"></script>
		<script src="{{ asset('asset/plugins/greensock/TweenMax.min.js') }}"></script>
		<script src="{{ asset('asset/plugins/greensock/TimelineMax.min.js') }}"></script>
		<script src="{{ asset('asset/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
		<script src="{{ asset('asset/plugins/greensock/animation.gsap.min.js') }}"></script>
		<script src="{{ asset('asset/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
		<script src="{{ asset('asset/plugins/colorbox/jquery.colorbox-min.js') }}"></script>
		<script src="{{ asset('asset/plugins/easing/easing.js') }}"></script>
		<script src="{{ asset('asset/plugins/progressbar/progressbar.min.js') }}"></script>
		<script src="{{ asset('asset/plugins/parallax-js-master/parallax.min.js') }}"></script>
		<script src="{{ asset('asset/js/about.js') }}"></script>

		@yield('scripts')
		
    </body>
</html>