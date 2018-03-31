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
			include('pdo.php');?>
			<div class="content">
				<main class="block-main-confirmation-contact">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="title">
									<h2>Confirmation</h2>
								</div>
								
								<?php 
									if (isset($_POST['firstname'])) {
										$prenom = $_POST['firstname'];
										echo $prenom;
									} 

									if (isset($_POST['firstname'])) {
										$nom = $_POST['lastname'];
										echo $nom;
									} 
									//On vérifie que les données ont bien été récupérées
									if (isset($_POST['mail']) && isset($_POST['message'])) {
																
										$mail = $_POST['mail'];
										$message = $_POST['message'];
										
										$queryAjout = "INSERT INTO contact (prenomContact, nomContact, mailContact, messageContact) VALUES(:prenomContact, :nomContact, :mailContact, :messageContact)";
										$statement = $connexion->prepare($queryAjout);
										$statement -> bindValue(':prenomContact', $prenom,PDO::PARAM_STR);
										$statement -> bindValue(':nomContact', $nom,PDO::PARAM_STR);
										$statement -> bindValue(':mailContact', $mail,PDO::PARAM_STR);
										$statement -> bindValue(':messageContact', $message,PDO::PARAM_STR);
										if ($statement -> execute()) {							
											echo "<div class='sent'><p>Ton message a bien été envoyé !  Pour revenir aux nouveautés, <a href='news.php'>clique ici</a>.</p></div>";
										} else {
											echo "<div class='error'><p>Erreur, pour revenir à la page contact, <a href='contact.php'>clique ici</a>.</p></div>";
										}
										
									} else {
										echo "<div class='error'><p>Erreur, pour revenir à la page contact, <a href='contact.php'>clique ici</a>.</p></div>";
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
