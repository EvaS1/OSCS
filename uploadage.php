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
			$age = $_GET['age2'];
			$queryModif = "UPDATE membres SET ageMembre = :ageMembre WHERE idMembre = :id";
			$statement = $connexion->prepare($queryModif);
			$statement -> bindValue(':id', ($profil -> idMembre));
			$statement -> bindValue(':ageMembre', $age);
			$statement -> execute();
		?>
	</body>
</html>