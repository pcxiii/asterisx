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

			<?php include("templates/header.php") ?>
		
			<div data-role="content" class='row'>
					
				<?php include($_GET['file']); ?>
			</div><!-- end content -->
				
			<?php include('templates/popup.php');?>
		</div>



	</body>

</html>
