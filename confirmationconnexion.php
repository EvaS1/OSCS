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
				<main class="block-main-confirmationconnexion">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="titleconfirmationconnexion">
									<h2>Connexion</h2>
								</div>
								<div messageconfirmationconnexion>
									<?php 

										/*On définit les variables de message*/
										$erreur='';
										$msg='';

										/*On se connecte à la base de données*/
										$link = mysqli_connect("localhost", "EvaS", "sydney", "ou_sortir_ce_soir");

										/*Si la connexion a échoué : affichage des messages d'erreur*/
										if (!$link) {
										echo "Error: Unable to connect to MySQL." . PHP_EOL;
										echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
										echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
										exit;
										}

										/*On récupère les pseudos et les mots de passe de la base de données*/
										$query = "SELECT pseudoMembre, passwordMembre FROM membres";

										if ($stmt = mysqli_prepare($link, $query)){
											mysqli_stmt_execute($stmt);

											mysqli_stmt_bind_result($stmt,$pseudo, $password);

											echo('<div class"success">');

											while(mysqli_stmt_fetch($stmt)){
												echo('<p>Pseudo = ' . $pseudo . ', Password = ' . $password . '</p>');
											}
										} else {
											echo('<p class="error">Error</p>');
										}

										//$hash = '$2y$10$o6eVjOYvi/0JCWvVpUW7weilL3AyMay.iWYgoe2d3qPQKxxJcf4GS';
										/*On vérifie que le pseudo et le mot de passe correspondent à un compte enregistré dans la base de données*/
										if(($_POST['pseudo']==$pseudo) && (password_verify($_POST['password'], $password))) {
											header ('Location: debutformulaire.php'); //On redirige vers le formulaire
										} else if($_POST['pseudo']!==$pseudo) {
											echo "<div class='erreurpseudo'>" . "<p>" . "Pseudo erroné" . "</p>" . "</div>";
										} else {
											echo  "<div class='erreurpassword'>" ."<p>" . "Mot de passe erroné" . "</p>" . "</div>";
										}
										
										/*if (password_verify($_POST['password'], $hash)) {
											echo 'Le mot de passe est valide !';
										} else {
											echo 'Le mot de passe est invalide.';
										}*/
						
										/*On se déconnecte de la base de données*/
										mysqli_close($link);				
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
