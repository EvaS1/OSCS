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
			include('pdo.php');?>
			<div class="content">
				<main class="block-main-confirmationconnexion">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="titleconfirmationconnexion">
									<h2>Connexion</h2>
								</div>
								<div messageconfirmationconnexion>
									<?php 
										$message='';
										$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
										$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';
										session_start();
									
										/*Si l'utilisateur est déjà connecté*/
										if ($id!=0) {
											echo "Erreur, déjà connecté";
										}
									
										/*Si le pseudo n'est pas rempli*/
										if (!isset($_POST['pseudo'])) {
											echo "<a href='connexion.php'>Retour page connexion</a>";
										}
									
										$query='SELECT * FROM membres';
										$statementMembre = $connexion->prepare($query);/*
										$statementMembre->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);*/
										$statementMembre->execute();
										$data=$statementMembre->fetch();
											if (password_verify($_POST['password'], $data->passwordMembre) == true) // Acces OK !
												
											{
												echo "password ok";
												$_SESSION['pseudo'] = $data -> pseudoMembre;
												$_SESSION['id'] = $data -> idMembre;
												$message = '<p>Bienvenue '.$data['pseudoMembre'].', 
													vous êtes maintenant connecté!</p>
													<p>Cliquez <a href="./index.php">ici</a> 
													pour revenir à la page d accueil</p>'; 
												echo $message;
											}
											else // Acces pas OK !
											{
												$message = '<p>Une erreur s\'est produite 
												pendant votre identification.<br /> Le mot de passe ou le pseudo 
													entré n\'est pas correcte.</p><p>Cliquez <a href="connexion.php">ici</a> 
												pour revenir à la page précédente';
												echo $message;
											}
											
									

									?>
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
