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

		<!-- SLIDER -->
		<script src="plugins/slider/js/jquery.min.js"></script>
		<script src="plugins/slider/js/jssor.slider.mini.js"></script>
		<script>
		    jQuery(document).ready(function ($) {
		        var options = { 
				$AutoPlay: true,
				$FillMode: 2,                                           
				$DragOrientation: 3                                
			};
		        var jssor_slider1 = new $JssorSlider$('slider1_container', options);
		         //responsive code begin
		        //you can remove responsive code if you don't want the slider scales
		        //while window resizes
		        function ScaleSlider() {
		            var parentWidth = $('#slider1_container').parent().width();
		            if (parentWidth) {
		                jssor_slider1.$ScaleWidth(parentWidth);
		            }
		            else
		                window.setTimeout(ScaleSlider, 30);
		        }
		        //Scale slider after document ready
		        ScaleSlider();
		                                        
		        //Scale slider while window load/resize/orientationchange.
		        $(window).bind("load", ScaleSlider);
		        $(window).bind("resize", ScaleSlider);
		        $(window).bind("orientationchange", ScaleSlider);
		        //responsive code end
		    });
		</script>

	</head>
	<body>
		<div data-role="page" >

			<div id="panel_right"  data-role="panel" data-display="overlay" data-position="right">
				<div data-role="controlgroup" data-corners="false"> 
					<a href="#" data-role="button">Profile</a>
					<a href="#" data-role="button">Settings</a>
					<a href="#" data-role="button">Logout</a>
				</div>
			</div><!-- end right panel -->

			<?php include("templates/header.php"); ?>

			<div data-role="content" id="slider_content">
				<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height:100%">
				<!-- Slides Container -->
					<div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 600px; height:200px">
						<div><img u="image" src="img/slideshow/2.jpg" /></div>
						<div><img u="image" src="img/slideshow/1.jpg" /></div>
					</div>
				</div>
				 <script>jssor_slider1_starter('slider1_container');</script>
			</div><!-- end content -->
				
			<div data-role="footer" data-position="fixed" >
				<button>Contact Us</button>
				<button>Help</button>
				<button>Forum</button>
				<button>Report Bug</button>
			</div><!-- end footer -->

		</div>

	</body>

</html>

