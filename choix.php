<?php include "pdo.php"; 
$stmt= $connexion->prepare('SELECT * FROM evenement');
$stmt->execute();
$stmt= $connexion->prepare('SELECT * FROM image');
$stmt->execute();				
?>

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
			<?php include('header.php');?>
			<div class="content">
				<main class="block-main-choix">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="title">
									<h2>Choisis ta soirée</h2>
								</div>
								<div class="selection">
									<p>Ta sélection personnalisée :</p>
								</div>
								
									
									<?php 
									
									while($evenement= $stmt-> fetch()){
										
									?>
									
								<div class="event1">
									<div class="container">
										<div class="row">
											<div class="col-3">
												<div class="inner">
													<img src="Images/Lamomali.jpg" alt="Lamomali" class="image1">
												</div>
											</div>
											<div class="col-9">
												<div class="inner">
													<div class="titleevent1">
														<p><?php echo $evenement -> 	nomEvenement; ?></p>
													</div>
													<div class="subtitleevent1">
														<p><?php echo $evenement -> 	libelleCourtEvenement; ?></p>
													</div>
													<div class="descriptionevent1">
														<p><?php echo $evenement -> 	descriptionEvenement; ?></p>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="inner">
													<div class="link">
														<a class="lamomali-link" href="#">En savoir plus</a>
													</div>
												</div>
											</div>
										</div> 
									</div> 
										
								
									<div class="infoevent1">
										<div class="dayevent1">
											<img src="Icones/calendar.png" alt="Calendar" class="calendarevent1">
											<p><?php echo $evenement -> dateEvenement; ?></p>
										</div>
										<div class="timeevent1">
											<img src="Icones/clock.png" alt="Clock" class="clockevent1">
											<p><?php echo $evenement -> heureEvenement; ?></p>
										</div>
										<div class="placeevent1">
											<img src="Icones/maps-and-flags (1).png" alt="markevent1">
											<p>Arena Loire Trélazé</p>
										</div>
									</div>
								</div>
								
								<?php
								}
								?>
								
								</div>	
							</div>
						</div>
					</div>
				</main>
			</div>
			<?php include('footer.php');?>
		</div>
	</body>
	
</html>
