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
				<main class="block-main-connexion">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="title">
									<h2>Connexion</h2>
								</div>
								<?php
								session_start();
								include('pdo.php');
								$hashpass=$_POST['password'];
								$hashpass=sha1($hashpass);
								$mail = $_POST['mail'];

								//echo ('Query = ' . 'SELECT ID_membre FROM membres WHERE emailMembre="' .$mail.'" AND passwordMembre="'.$hashpass.'"');
								/*$req = 'SELECT idMembre FROM membres WHERE emailMembre="' .$mail.'" AND passwordMembre="'.$hashpass.'"';
								$req = $connexion->prepare($req);
								$req->execute();
								$resultat = $req->fetch();*/

								$req = $connexion->prepare('SELECT idMembre FROM membres WHERE emailMembre="' .$mail.'" AND passwordMembre="'.$hashpass.'"');
								$req->execute();
								$resultat = $req->fetch();

								if (!$resultat) {
									echo "Email ou mot de passe non valide, pour réessayer <a href='connexion.php'>clique ici</a>.";
								}else {

									if (isset($_SESSION['idMembre']) && ($_SESSION['idMembre'] == $resultat->idMembre) ) {
										$_SESSION['id'] = $resultat->idMembre;
										header('Location: debutformulaire.php');
										//echo $_SESSION['id'];
									}
									else {
										echo "email ou mdp non valide";
									}
								} ?>
								
							</div>
						</div>
					</div>
				</main>
			</div>						
		<?php include('footer.php'); ?>
		</div>
	</body>
</html>
			
