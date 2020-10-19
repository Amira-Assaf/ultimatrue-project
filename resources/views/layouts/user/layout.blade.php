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
		<!--================Header Area =================-->
		<header class="main_header_area">
			<div class="header_top_area">
				<div class="container">
					<div class="pull-left">
						<a href="#"><i class="fa fa-phone"></i>(0100) - 123 4567</a>
						<a href="#"><i class="fa fa-map-marker"></i>12 Nasr City, Egypt</a>
						<a href="#"><i class="mdi mdi-clock"></i>08 AM - 06 PM</a>
					</div>
					<div class="pull-right">
						<ul class="header_social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="main_menu_area">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#"><img src="{{asset('asset/img/logo1.png')}}" alt=""></a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown submenu">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
									<ul class="dropdown-menu">
										<!--<li><a href="index.html">Home 01</a></li>
										<li><a href="index-2.html">Home 02</a></li>-->
									</ul>
								</li>
								<li class="dropdown submenu">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects</a>
									<ul class="dropdown-menu">
										<!--<li><a href="project-full-width.html">Project Full Width</a></li>
										<li><a href="project-grid-three-column.html">Project Grid 01</a></li>
										<li><a href="project-grid-two-column.html">Project Grid 02</a></li>
										<li><a href="project-three-column.html">Project Grid 03</a></li>
										<li><a href="project-single.html">Single Project</a></li>-->
									</ul>
								</li>
								<li class="active"><a href="#">Distributors</a></li>
								<li><a href="#">about us</a></li>
								<li><a href="#">blog</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>
				</div>
			</div>
		</header>
		<!--================Header Area =================-->
        @yield('content')
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