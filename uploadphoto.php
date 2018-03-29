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
			$picture = $_GET['photo2'];
			$queryModif = "UPDATE membres SET photoMembre = :photoMembre WHERE idMembre = :id";
			$statement = $connexion->prepare($queryModif);
			$statement -> bindValue(':id', ($profil -> idMembre));
			$statement -> bindValue(':photoMembre', $picture);
			$statement -> execute();
		
		?>
	</body>
</html>