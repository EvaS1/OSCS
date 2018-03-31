<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Document sans titre</title>
	</head>

	<body>
		<?php
			include('header.php');
			include ('pdo.php');
			
			//Changement âge
			$mail = $_GET['mail2'];
			$queryModif = "UPDATE membres SET emailMembre = :emailMembre WHERE idMembre = :id";
			$statement = $connexion->prepare($queryModif);
			$statement -> bindValue(':id', ($profil -> idMembre));
			$statement -> bindValue(':emailMembre', $mail);
			$statement -> execute();
		?>
	</body>
</html>