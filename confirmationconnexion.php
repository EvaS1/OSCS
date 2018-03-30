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
								include('pdo.php');
								$hashpass = $_POST['password'];
								$hashpass = sha1($hashpass);
								$mail = $_POST['mail'];

								//On récupère les membres dont l'adresse mail et le mot de passe correspondent
								$req = $connexion->prepare('SELECT idMembre FROM membres WHERE emailMembre="'.$mail.'" AND passwordMembre="'.$hashpass.'"');
								$req->execute();
								$resultat = $req->fetch();
								

								//S'il n'y a pas de résultat => message d'erreur
								if (!$resultat) {
									echo "Il n'y a pas de compte créé avec cette adresse, pour t'inscrire <a href='inscription.php'>clique ici</a>.";
								//Si l'utilisateur est bien inscrit, on récupère son id pour la session
								}else {
									$_SESSION['id'] = $resultat->idMembre;
									if (isset($_SESSION['id'])) { /*&& ($_SESSION['idMembre'] == $resultat->idMembre) ) {*/
										header('Location: debutformulaire.php');
									}
									else {
										echo "Email ou mot de passe non valide, pour réessayer <a href='connexion.php'>clique ici</a>.";
									}
								} 
								
								?>
								
							</div>
						</div>
					</div>
				</main>
			</div>						
		</div>
		<?php include('footer.php');?>
	</body>
</html>
			
