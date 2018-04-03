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
			<?php include('header.php');?>
			<div class="content">
				<main class="block-main-form">
			<?php include('pdo.php');
			$evenement = $_GET['id']; ?>
					
					<div class="merciAvis">
						<p> Merci ton avis a bien été pris en compte !</p> 
						<p>Pour revenir à la page de l'événement, <a href='http://localhost/ProjetOSCS/soiree.php?id=<?php echo $evenement;?>'>clique ici !</a></p>
					</div>
	
	<?php 
	$stmt = $connexion -> prepare('INSERT INTO avis (commentaireAvis, idEvenement, idMembre) VALUES (:commentaireAvis, :idEvenement, :idMembre)');
	$stmt->bindValue(':commentaireAvis', $_POST['commentaire']);
	$stmt->bindValue(':idEvenement', $evenement);
	$stmt->bindValue(':idMembre', $profil -> idMembre ); 
	echo '<br />';
	$stmt->execute();
		
			
	
	?>
			</main>
			</div>
		</div>
		<?php include('footer.php');?>
	
	</body>
</html>