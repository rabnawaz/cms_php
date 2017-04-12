
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Bootstrap 101 Template</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/all.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<!--Top Bar-->
	<div class="top_bar">
		<div class="container">
			This is topbar
		</div>
	</div>
	<!--Top HEADER TOP-->
		<div>
			<?php include("includes/header.php")  ?>
		</div>
		<!--Top MENU-->
        <div>
			<?php include("includes/nav.php")  ?>
		</div>
		<!--MAIN SECTION-->
		<div id="main" role="main">
			<div class="container">
				<div class="row">
					<div>
						<?php include("includes/post_body.php")  ?>
					</div>
					<div>
						<?php include("includes/side_bar.php")  ?>
					</div>
				</div>
				</div>
		</div>
		<!--Top FOOTER-->
		<footer class="footer text-center">
			<p>Copy right by malal....</p>
		</footer>
	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>