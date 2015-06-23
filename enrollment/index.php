<?php include("includes/database.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Megumi Enrollment System</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- PLUGINS -->
		
			<?php include('includes/head_default.php'); ?>
			<script src="js/admin_script.js"></script>

	</head>
	<body>
		<div data-role="page" >

			<?php include("templates/sidebar.admin.php") ?>

			<?php include("templates/header.php") ?>
		
			<div data-role="content" class='row'>
					
				<?php include($_GET['file']); ?>
			</div><!-- end content -->
				
			<?php include('templates/popup.php');?>
		</div>



	</body>

</html>
