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
								 <?php echo $evenement -> nomEvenement;?>
								</div>
								<div class="coordonees">
								Coordonées
									<div class="contact">
									Arena Loire 
									131 Rue Ferdinand Vest
									49800 Trélazé
									02 77 79 80 00
									</div>
								</div>
								<div class="map">
										<div id="map"></div>
									<script>
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
									</script>
								</div>
								
								<div class="affiche">
								<img src="Images/Lamomali.jpg" alt="Images">	
								</div>
								
							<?php } ?>
					
				</main>
			</div>
			<?php include('footer.php');?>
		</div>
	</body>
	
</html>
