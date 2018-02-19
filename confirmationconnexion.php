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
									
										$query = 'SELECT * FROM membres WHERE pseudoMembre=\''.$_POST['pseudo'].'\'';
										$statement = $connexion->prepare($query);
										$statement -> execute();
										$password = $statement -> passwordMembre;
										/*$statement = $connexion->query('SELECT * FROM membres WHERE pseudoMembre=\''.$_POST['pseudo'].'\' AND passwordMembre=\''.$_POST['password'].'\''); // Je choisis de la base de donné login le champ login*/

										while ($donnees = $statement ->fetch()) {
										   	if(password_verify($_POST['password'], $password) == true) {
												echo "connexion réussie";
											/*if($donnees !== false){
											   var_dump($donnees);
											   echo 'connexion réussie';
												header("location: debutformulaire.php");
*/
										   } else {
												echo"Votre pseudo et/ou votre mot de passe sont incorrects";}
										}

										$statement->closeCursor(); 
											
										/*On vérifie que le pseudo et le mot de passe correspondent à un compte enregistré dans la base de données*/
										/*if(($_POST['pseudo']==$pseudo) && (password_verify($_POST['password'], $password))) {
											/*header ('Location: debutformulaire.php'); //On redirige vers le formulaire
										} else if($_POST['pseudo']!==$pseudo) {
											echo "<div class='erreurpseudo'>" . "<p>" . "Pseudo erroné" . "</p>" . "</div>";
										} else {
											echo  "<div class='erreurpassword'>" ."<p>" . "Mot de passe erroné" . "</p>" . "</div>";
										}*/
											
														
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
