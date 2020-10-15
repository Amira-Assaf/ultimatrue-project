<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="imgs/logo1.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Ultimatrue</title>

        <!-- Icon css link -->
        <link href="{{ asset('asset/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/css/materialdesignicons.min.css') }}" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="{{ asset('asset/vendors/revolution/css/settings.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/vendors/revolution/css/layers.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/vendors/revolution/css/navigation.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/vendors/animate-css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/vendors/owl-carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
		<link href="{{ asset('asset/vendors/flex-slider/flexslider.css') }}" rel="stylesheet">
		<link href="{{ asset('asset/vendors/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('asset/css/custom.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet">

      
    
	
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
        <script src="{{ asset('asset/js/jquery-2.2.4.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
        <!-- Rev slider js -->
        <script src="{{ asset('asset/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('asset/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('asset/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
        <script src="{{ asset('asset/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('asset/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('asset/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        
        <script src="{{ asset('asset/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('asset/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('asset/vendors/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('asset/vendors/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('asset/vendors/counterup/waypoints.min.js') }}"></script>
        <script src="{{ asset('asset/vendors/counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('asset/vendors/flex-slider/jquery.flexslider-min.js') }}"></script>
        
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="{{ asset('asset/js/gmaps.min.js') }}"></script>
        
        <script src="{{ asset('asset/js/theme.js') }}"></script>

		
    </body>
</html>