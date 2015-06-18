<!DOCTYPE html>
<html>
	<head>
		<title>Megumi Enrollment System</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- PLUGINS -->
		
			<?php include('includes/head_default.php'); ?>
		<!-- CUSTOM -->
		<script type="text/javascript" src="js/script.js"></script>
		<link rel="stylesheet" type="text/css" href="css/standard.css">

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

			<div id="header" data-role="header" >
			<div>
				<p style='font-size:27px;float:left;padding-top:5px;font-stretch:ultra-condensed'>MEGUMI<span style='color:#00b0eb'> Academy</span></p>
			</div>
				<a  class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-btn-right" data-position="right" href="#panel_right"><span class='glyphicon glyphicon-user'></span> Account</a>
			</div><!-- end header -->

			<div id="top_menu" class='row' >
				<nav class='navbar'>
						<div class='container-fluid'>
							
					<button data-icon="search" data-theme="a" data-corners="false" class='menu_cl'>Home</button>
					<button data-icon="mail" data-theme="a" data-corners="false" class='menu_cl'>Student</button>
					<button data-icon="user" data-theme="a" data-corners="false" class='menu_cl'>Teacher</button>
					<button data-icon="eye" data-theme="a" data-corners="false" class='menu_cl'>Subject</button>
					<button data-icon="eye" data-theme="a" data-corners="false" class='menu_cl'>Room</button>
					<button data-icon="eye" data-theme="a" data-corners="false" class='menu_cl'>Department</button>

						</div>
				</nav>
			</div>
			<br>

				<div class='panel indicator row' data-role='header' data-theme='a' >
						<div  class='panel-body' >
							Teacher's Page
						</div>
					
				</div>		

			<div data-role="content" class='contents row'>
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

