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
			
			//Changement pseudo
			$pseudo = $_GET['pseudo2'];
			$queryModif = "UPDATE membres SET pseudoMembre = :pseudoMembre WHERE idMembre = :id";
			$statement = $connexion->prepare($queryModif);
			$statement -> bindValue(':id', ($profil -> idMembre));
			$statement -> bindValue(':pseudoMembre', $pseudo);
			$statement -> execute();
		
		?>
	</body>
</html>