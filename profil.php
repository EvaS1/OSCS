<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Où sortir ce soir ?</title>
		<link rel="icon" href="Logo/logof.png">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/eva.css">
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap-grid.min.css">
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
		<script src="jquery.min.js"></script>
		<script src="menu.js"></script>
	</head>

	<body>
		<div class="page">
			<?php include('header.php');
			include('pdo.php');?>			
			<div class="content">
				<main class="block-main-listing">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="title">									
									<h2>Mon profil</h2>						
								</div>
								<div class="event">
									<div class="container">
										
									</div> 									
								</div>	
							</div>	
						</div>
					</div>					
				</main>
			</div>
			<?php include('footer.php');?>
		</div>
	</body>
	
</html>
