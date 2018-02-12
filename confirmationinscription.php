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
			<?php include('header.php');?>
			<div class="content">
				<main class="block-main-confirmationinscription">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="titleconfirmation">
									<h2>Inscription</h2>
								</div>
								<div class="confirmation">
									<p>Ton compte a bien été créé !</p>
								</div>
								<div class="buttonlink">													
									<a href="debutformulaire.php" class="beginlink">Suivant</a>
								</div>
							</div>
						</div>
					</div>
				</main>
			</div>
			<?php 
				/*On définit les variables*/
				$pseudo = $_POST['pseudo'];
				$mail = $_POST['mail'];
				$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
				$gender = $_POST['gender'];
				$age = $_POST['age'];	

				/*On se connecte à la base de données*/
				$link = mysqli_connect("localhost", "EvaS", "sydney", "ou_sortir_ce_soir");
				
				/*Messages d'erreur en cas de mauvaise connexion à la base de données*/
				if (!$link) {
				echo "Error: Unable to connect to MySQL." . PHP_EOL;
				echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
				echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
				exit;
				}

				
				/*On intègre les infos dans la base de données*/
				$sql2 = "INSERT INTO membres (pseudoMembre, emailMembre, passwordMembre, genderMembre, ageMembre)
				VALUES ('" . $pseudo . "', '" . $mail . "', '" . $password . "', '" . $gender . "', '" . $age . "')";

				

				if (mysqli_query($link, $sql2)) {
					/*echo "Votre compte a bien été créé";*/
				} else {
					/*echo "Error: " . $sql2 . "<br>" . mysqli_error($link);*/
				}
			?>
			
			<?php include('footer.php');?>
		</div>
	</body>
	
</html>
