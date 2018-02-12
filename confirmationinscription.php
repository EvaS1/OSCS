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
			<div class="header">
				<header class="block-header">
					<div class="inner">

						<figure class="logo">
							<img src="Logo/logof.png" class="logo-mobile">
						</figure>

						<h1 class="connexion">
							<img src="Icones/userf.png" class="iconeconnexion">
							<a href="connexion.php"> connexion </a>
						</h1>

					</div>
				</header>
				<nav class="block-nav">
					<div class="inner">
						<div class="action">
							<a href="#menu" id="toggle"><span></span></a>
						</div>
						<div id="my_header">
							<img id="btnClickMe" src="Icones/menublanc.png" width="6%">
							<div id="menu">	
								<ul>
									<div class="menunav hide">
										<div class="titre"><a href="">Menu</a>
										</div>
										<!--<span class="icon"><i class="fa fa-search"></i></span>
										<input type="search" placeholder="Rechercher...">-->
										<form class="form" method="get" role="search">
										<input class="search" type="search" name="q" id="q" placeholder="Rechercher...">

										</form>
										<li><a href="news.html">News</a></li>
										<li><a href="about.html">Bars</a></li>
										<li><a href="concert.html">Concerts</a></li>
										<li><a href="theatre.html">Théâtres</a></li>
										<li><a href="event.html">Evènements</a></li>
										<li><a href="arrond.html">Autour de moi</a></li>
										<li><a href="compte.html">Mon compte</a></li>
										<li><a href="contact.html">Contact</a></li>
									</div>
								</ul>
							</div>
						</div>
					</div>				
				</nav>	

				<header class="block-header-web">
					<div class="titleandlogo">
						<h1>Où sortir ce soir</h1>
						<img class="logo-web" src="Logo/logof.png" alt="logo">
					</div>
				</header>

				<nav class="block-nav-web">
					<div class="inner">
						<ul class="nav justify-content-center">
						  <li class="nav-item">
							<a class="nav-link" href="#">Home</a>
						  </li>
						  <li>|</li>
						  <li class="nav-item">
							<a class="nav-link" href="#">News</a>
						  </li>
						  <li>|</li>
						  <li class="nav-item">
							<a class="nav-link" href="#">Bars</a>
						  </li>
						  <li>|</li>
						  <li class="nav-item">
							<a class="nav-link" href="#">Concerts</a>
						  </li>
						  <li>|</li>
						  <li class="nav-item">
							<a class="nav-link" href="#">Théâtres</a>
						  </li>
						  <li>|</li>
						  <li class="nav-item">
							<a class="nav-link" href="#">Evènements</a>
						  </li>
						  <li>|</li>
						  <li class="nav-item">
							<a class="nav-link" href="#">Autour de moi</a>
						  </li>
						</ul>
					</div>
				</nav>
			</div>
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
			
			<div class="footer">
			<footer class="footer">
				<div class="inner">
   					<hr>
   					<p>Mentions légales | Conditions générales | Politique de confidentialité</p>
   				</div> 
			</footer>
			</div>
		</div>
	</body>
	
</html>
