<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Où sortir ce soir ?</title>
		<link rel="icon" href="Logo/logof.png">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap-grid.min.css">
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
		<script src="jquery.min.js"></script>
		<script src="menu.js"></script>
	</head>

	<body>
		<div class="page">
			<?php include('header.php');
			include('pdo.php')?>
			<div class="content">
				<main class="block-main-debutformulaire">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="title">
									<h2>Questionnaire</h2>
								</div>
								<div class="introduction">
									<p>Pour que nous puissions te proposer des évènements qui te correspondent, merci de répondre à ces quelques questions !</p>
								</div>
								<div class="buttonbegin">
									<a class="button2" href="Question1.php" role="button">Je commence !</a>									
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
