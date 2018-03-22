<?php
	session_start();
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Où sortir ce soir ?</title>
		<link rel="icon" href="Logo/logof.png">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/eva.css">
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap-grid.min.css">
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
		<script src="jquery.min.js"></script>
		<script src="menu.js"></script>
	</head>

	<body>
		<div class="page">
			<?php include('header.php');
			include('pdo.php');?>			
			<div class="content">
				<main class="block-main-listing">
					<div class="container">
						<div class="row">
							<div class="col-12">
							<?php 
								//On récupère la réponse de la question précédente
								$_SESSION['reponse3'] = $_GET['reponse3'];
								
								$heure1 = 19.50;
								$heure2 = 20.00;
								$heure3 = 20.50;
								$prix1 = 15;
								$prix2 = 30;
								if (isset ($_SESSION['reponse1'])) {	
									
									//Si l'horaire est avant 19h30
									if($_SESSION['reponse2'] == 5) {
										
										//et prix inférieur à 15€
										if ($_SESSION['reponse3'] == 9) {
											$query = "SELECT * FROM evenement WHERE idType=:id AND (heureEvenement <= $heure1) AND (prixEvenement < $prix1)";
										
										//et prix compris entre 15€ et 30€
										} else if ($_SESSION['reponse3'] == 10) {
											$query = "SELECT * FROM evenement WHERE idType=:id AND (heureEvenement <= $heure1) AND (prixEvenement >= $prix1) AND (prixEvenement < $prix2)";
										
										//et prix supérieur à 30€
										} else if ($_SESSION['reponse3'] == 11) {
											$query = "SELECT * FROM evenement WHERE idType=:id AND (heureEvenement <= $heure1) AND (prixEvenement >= $prix2)";
										}
									
									//Si l'horaire est entre 19h30 et 20h00
									} else if ($_SESSION['reponse2'] == 6) {
										
										//et prix inférieur à 15€
										if ($_SESSION['reponse3'] == 9) {
											$query = "SELECT * FROM evenement WHERE idType=:id AND ($heure1 < heureEvenement) AND (heureEvenement <= $heure2) AND (prixEvenement < $prix1)";
										
										//et prix compris entre 15€ et 30€	
										} else if ($_SESSION['reponse3'] == 10) {
											$query = "SELECT * FROM evenement WHERE idType=:id AND ($heure1 < heureEvenement) AND (heureEvenement <= $heure2)  AND (prixEvenement < $prix2)";
											
										//et prix supérieur à 30€
										} else if ($_SESSION['reponse3'] == 11) {
											$query = "SELECT * FROM evenement WHERE idType=:id AND ($heure1 < heureEvenement) AND (prixEvenement >= $prix2)";
										}
									
									//Si l'horaire est entre 20h00 et 20h30
									} else if ($_SESSION['reponse2'] == 7) {
										//et prix inférieur à 15€
										if ($_SESSION['reponse3'] == 9) {
											$query = "SELECT * FROM evenement WHERE idType=:id AND ($heure2 < heureEvenement) AND (heureEvenement <= $heure3) AND (prixEvenement < $prix1)";
										
										//et prix compris entre 15€ et 30€	
										} else if ($_SESSION['reponse3'] == 10) {
											$query = "SELECT * FROM evenement WHERE idType=:id AND ($heure2 < heureEvenement) AND (heureEvenement <= $heure3) AND (prixEvenement < $prix2)";
										
										//et prix supérieur à 30€
										} else if ($_SESSION['reponse3'] == 11) {
											$query = "SELECT * FROM evenement WHERE idType=:id AND ($heure2 < heureEvenement) AND (heureEvenement <= $heure3) AND (prixEvenement >= $prix2)";
										}
									}
									
									$statementEvenement = $connexion->prepare($query);
									$statementEvenement -> bindValue(':id', $_SESSION['reponse1']);
									$statementEvenement -> execute();
									
									
								} else {
									echo "Oula... <a href='debutformulaire.php'> Retour au début du questionnaire</a>"; 
								}
								
								?>
									
								
								
								<div class="title">
									<?php
										echo "<h2>Choisis ta soirée</h2>";
																				
										
									
										
									?>								
								</div>
										
								<?php

									$i = 0;
									while ($evenement = $statementEvenement -> fetch()) {
										$i++;
										
										
											

								?>
								<div class="event">
									<div class="container">
										<div class="row">
											<div class="col-3">
												<div class="inner">
													<?php 
														$query ="SELECT * FROM image WHERE idEvenement=:id LIMIT 0,1";
														$statementImage = $connexion->prepare($query);
														$statementImage -> bindValue(':id', $evenement -> idEvenement);
														$statementImage -> execute();
														$image = $statementImage -> fetch ();
														echo "<img class='image' alt='image1' src='Images/".$image-> nomImage."'>";
													?>
												</div>
											</div>
											<div class="col-9">
												<div class="inner">
													<div class="titleevent">
														<p><?php echo $evenement -> nomEvenement; ?></p>
													</div>
													<div class="subtitleevent">
														<p><?php echo $evenement -> libelleCourtEvenement;?></p>
													</div>
													<div class="descriptionevent">
														<p><?php echo $evenement -> descriptionEvenement;?></p>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="inner">
													<div class="link">
														<a class="lamomali-link" href="soiree.php?id=<?php echo $evenement -> idEvenement;?>">En savoir plus</a>
													</div>
												</div>
											</div>
										</div> 
									</div> 	
								
									<div class="infoevent">
										<div class="dayevent">
											<img src="Icones/calendar.png" alt="Calendar" class="calendarevent1">
											<p><?php 
											$dateUS = $evenement -> dateEvenement; 
											list($annee, $mois, $jour) = explode('-',$dateUS); 
											$dateFR = $jour."/".$mois."/".$annee; 
											echo $dateFR;?></p>
										</div>
										<div class="timeevent">
											<img src="Icones/clock.png" alt="Clock" class="clockevent1">
											<p><?php echo $evenement -> heureEvenement;?></p>
										</div>
										<div class="priceevent">
											<img src="Icones/euro.png" alt="price" class="price">
											<p><?php echo $evenement ->prixEvenement;?> €</p>
										</div>
										<div class="placeevent">
											<img src="Icones/maps-and-flags (1).png" alt="markevent1">
											<p><?php echo $evenement -> nomVilleEvenement;?></p>
										</div>
									</div>
								</div>

							<?php } ?>							

							</div>	
						</div>
					</div>					
				</main>
			</div>
			<?php include('footer.php');?>
		</div>
	</body>
	
</html>
