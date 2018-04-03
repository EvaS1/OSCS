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

			
			<div class="content">
				<main class="block-main-soiree">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="inner">
								<?php 
									$idEvenement = $_GET['id'];
									$query = "SELECT * FROM evenement WHERE idEvenement=:id";
									$statementEvenement = $connexion->prepare($query);
									$statementEvenement -> bindValue(':id', $idEvenement);
									$statementEvenement -> execute();
									$i = 0;
									while ($evenement = $statementEvenement -> fetch()) {
										$i++;
								
								?>
								<div class="titre_soiree">
								 <?php echo $evenement -> nomEvenement; ?>
								</div>
								
								<div class="mapcoordonnees">
								
									<div class="map">
											<div id="map"><script>
											function initMap() {
												var angers = {lat: <?php echo $evenement -> latitudeEvenement;?>, lng: <?php echo $evenement -> longitudeEvenement;?>};
												var map = new google.maps.Map(document.getElementById('map'), {
													zoom: 15,
													center: angers
												});
												var marker = new google.maps.Marker({
													position: angers,
													map: map
												});
											}
										</script>
										<script async defer
											src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyytxogOqYAz2Dyz8WRsqZRZ9dABbEN6o&callback=initMap">
										</script></div>
										
									
									</div>
									<div class="coordonnees">
										<strong>Coordonnées</strong>
										<div class="contact">
											<p><?php echo $evenement -> lieuEvenement;?></p> 
											<p><?php echo $evenement -> numeroVoieEvenement	;?> <?php echo $evenement -> typeVoieEvenement;?> <?php echo $evenement -> nomVoieEvenement;?></p>
											<p><?php echo $evenement -> codePostalEvenement;?> <?php echo $evenement -> nomVilleEvenement;?></p>
											<p><?php echo $evenement -> telephoneEvenement;?></p>
											
											<p><a href="<?php echo $evenement -> siteEvenement;?>"> Achetez  vos places </a>	</p>
										</div>
									</div>
								</div>
									
							
									<?php

									// Récupération des commentaires
									$query = "SELECT * FROM avis WHERE idEvenement=:id";
									$statementEvenement = $connexion->prepare($query);
									$statementEvenement -> bindValue(':id', $idEvenement);
									$statementEvenement -> execute();

									$i = 0;
									while ($avis = $statementEvenement -> fetch()) {
										$i++;

										// Récupération des commentaires
										$query = "SELECT * FROM membres WHERE idMembre =" . $avis -> idMembre;
										$statement = $connexion->prepare($query);
										$nom = $statement -> execute();

										$ii = 0;
										while ($nom = $statement -> fetch()) {
										$ii++;
										?>

										<div class="perso">
											<img src="Images/userbleu.png" alt="user" class="userbleu"><br />
											<?php echo $nom -> pseudoMembre;  ?>
											ta note est de <?php echo $avis	-> noteAvis; ?> /5.<br /><br />
											<div class="description">
												<?php echo $avis -> commentaireAvis; ?><br /> <br />
											</div>	
											<p><a href="formpourcomm.php"> Poster votre commentaire </a>	</p>
										</div>
									
									<?
											}
										}
									?>
									
									
									<?php 
										$query ="SELECT * FROM image WHERE idEvenement=:id LIMIT 0,1";
										$statementImage = $connexion->prepare($query);
										$statementImage -> bindValue(':id', $evenement -> idEvenement);
										$statementImage -> execute();
										$image = $statementImage -> fetch ();
										echo "<img class='image' alt='image1' src='Images/".$image-> nomImage."'>";
									?>          
									
									<?php
									} 
								?>
									
							</div>
							<?php include "footer.php"; ?>
					</div>
				</div>
			</div>
		</div>
	</main>
	</div>							
	</body>	
</html>