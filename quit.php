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
			
			$sql = "DELETE FROM membres WHERE idMembre = :idMembre";
			$stmt = $connexion->prepare($sql);
			$stmt->bindValue(':idMembre', ($profil -> idMembre));   
			$stmt->execute();
			
			unset($_SESSION['id']);
		
		?>
	</body>
</html>