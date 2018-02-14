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
			<?php include('header.php');
			include('pdo.php');?>

			
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
									$idType = 3;
									$query = "SELECT * FROM evenement WHERE idType=:id";
									$statementEvenement = $connexion->prepare($query);
									$statementEvenement -> bindValue(':id', $idType);
									$statementEvenement -> execute();
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
											<p><?php echo $evenement -> dateEvenement;?></p>
										</div>
										<div class="timeevent">
											<img src="Icones/clock.png" alt="Clock" class="clockevent1">
											<p><?php echo $evenement -> heureEvenement;?></p>
										</div>
										<div class="placeevent">
											<img src="Icones/maps-and-flags (1).png" alt="markevent1">
											<p><?php echo $evenement -> nomVilleEvenement;?></p>
										</div>
									</div>
									</div>

								<?php } ?>
							
								<!-- <div class="event2">
									<div class="container">
										<div class="row">
											<div class="col-3">
												<div class="inner">
													<img src="Images/Gala.png" alt="Gala" class="image2">
												</div>
											</div>
											<div class="col-9">
												<div class="inner">
													<div class="titleevent2">
														<p>Gala</p>
													</div>
													<div class="subtitleevent2">
														<p>Soirée de Noël de l'ESPL</p>
													</div>
													<div class="descriptionevent2">
														<p>Ce gala est organisé par la promotion Evènementiel et Communication de l'ESPL et propose un cocktail dînatoire et des animations.</p>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="inner">
													<div class="link">
														<a class="gala-link" href="#">En savoir plus</a>
													</div>
												</div>
											</div>
										</div> 
									</div> 	
								
									<div class="infoevent2">
										<div class="dayevent2">
											<img src="Icones/calendar.png" alt="Calendar" class="calendarevent2">
											<p>21/12/17</p>
										</div>
										<div class="timeevent2">
											<img src="Icones/clock.png" alt="Clock" class="clockevent2">
											<p>20h00</p>
										</div>
										<div class="placeevent2">
											<img src="Icones/maps-and-flags (1).png" alt="markevent2">
											<p>Espace Longuenée</p>
										</div>
									</div>
								</div> -->
									
								</div>	
								
								
							</div>
						</div>
					
				</main>
			</div>
			<?php include('footer.php');?>
		</div>
	</body>
	
</html>
