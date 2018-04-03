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
		<style>
			#map {
     		height: 400px;
    	    width: 100%;
      		}
   		</style>
	</head>

	<body>
		<div class="page">
			<?php include('header.php');
			include('pdo.php');?>

	<p class="merciAvis"> Merci votre avis à bien était pris en compte</p>
	
	<?php 
	$stmt = $connexion -> prepare('INSERT INTO avis (commentaireAvis, idEvenement, idMembre) VALUES (:commentaireAvis, :idEvenement, :idMembre)');
	$stmt->bindValue(':commentaireAvis', $_POST['commentaire']);
	$stmt->bindValue(':idEvenement', $_POST['event']);
	$stmt->bindValue(':idMembre', $profil -> idMembre ); 
	echo '<br />';
	$stmt->execute();
		
			
	
	?>
	<?php include('footer.php');?>
	
	</body>
</html>