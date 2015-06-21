<!DOCTYPE html>
<html>
	<head>
		<title>Megumi Enrollment System</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- PLUGINS -->
		<link rel="stylesheet" type="text/css" href="plugins/bs/css/bootstrap.css">
		<link rel="stylesheet" href="plugins/jquery-mobile/jquery.mobile-1.4.4.min.css">
		<link rel="stylesheet" type="text/css" href="plugins/jquery-mobile/themes/enrollment.css">
		<link rel="stylesheet" type="text/css" href="plugins/jquery-mobile/themes/enrollment.min.css">
		<link rel="stylesheet" type="text/css" href="plugins/jquery-mobile/themes/jquery.mobile.icons.min.css">

		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="plugins/jquery-mobile/jquery.mobile-1.4.4.min.js"></script>

			<script type="text/javascript" src='plugins/bs/js/respond.js'></script>
			<script type="text/javascript" src='plugins/bs/js/bootstrap.min.js'></script>

		<!-- CUSTOM -->
		<link rel="stylesheet" type="text/css" href="css/standard.css">
		  <script type="text/javascript" src="js/script.js"></script>
		

		
		<!-- Bootstrap Core CSS SLIDER -->
		<link href="plugins/slider/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS SLIDER -->
		<link href="plugins/slider/css/full-slider.css" rel="stylesheet">

	</head>
	<body>
		<div data-role="page" >

			<div id="panel_right"  data-role="panel" data-display="overlay" data-position="right">
				<div data-role="controlgroup" data-corners="false"> 
					  <img border="0" src="img/favicon.png" 
					  alt="Logo, Megumi" style="width:100%"/>
					  <h1 style="text-align:center">Megumi Academy</h1>
					<input placeholder="username">
					<input placeholder="password">
					<a href="index.php" data-role="button" data-transition="flip">login</a>
				</div>
			</div><!-- end right panel -->

			<?php include("templates/login_header.php"); ?>
			

			<div data-role="content" style="margin:0; padding:0; height:100%;">
				<!-- Full Page Image Background Carousel Header -->
				<header id="myCarousel" class="carousel slide">
				    <!-- Indicators -->
				    <ol class="carousel-indicators">
				        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				        <li data-target="#myCarousel" data-slide-to="1"></li>
				        <li data-target="#myCarousel" data-slide-to="2"></li>
				    </ol>

				    <!-- Wrapper for Slides -->
				    <div class="carousel-inner">
				        <div class="item active">
				            <!-- Set the first background image using inline CSS below. -->
				            <div class="fill" style="background-image:url('img/slideshow/3.jpg');"></div>
				            <div class="carousel-caption">
				               <!--  <h2>Caption 1</h2> -->
				            </div>
				        </div>
				        <div class="item">
				            <!-- Set the second background image using inline CSS below. -->
				            <div class="fill" style="background-image:url('img/slideshow/1.jpg');"></div>
				            <div class="carousel-caption">
				                <!-- <h2>Caption 2</h2> -->
				            </div>
				        </div>
				        <div class="item">
				            <!-- Set the third background image using inline CSS below. -->
				            <div class="fill" style="background-image:url('img/slideshow/2.jpg');"></div>
				            <div class="carousel-caption">
				                <!-- <h2>Caption 3</h2> -->
				            </div>
				        </div>
				    </div>

				    <!-- Controls -->
				    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				        <span class="icon-prev"></span>
				    </a>
				    <a class="right carousel-control" href="#myCarousel" data-slide="next">
				        <span class="icon-next"></span>
				    </a>

				</header>
			</div><!-- end content -->
				
			<div data-role="footer" data-position="fixed" >
				<button>Contact Us</button>
				<button>Help</button>
				<button>Forum</button>
				<button>About Us</button>
			</div><!-- end footer -->

		</div>

		<!-- jQuery -->
		<script src="plugins/slider/js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="plugins/slider/js/bootstrap.min.js"></script>

		<!-- Script to Activate the Carousel -->
		<script>
		$('.carousel').carousel({
		    interval: 1500 //changes the speed
		});
		</script>
	</body>

</html>

