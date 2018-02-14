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
								<div class="event<?php echo $i;?>">
									
									<?php 
									
									while($evenement= $stmt-> fetch()){
										
									?>
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
														echo "<img class='image".$i."'alt='image1' src='Images/".$image-> nomImage."'>";
													?>
												</div>
											</div>
											<div class="col-9">
												<div class="inner">
													<div class="titleevent<?php echo $i;?>">
														<p><?php echo $evenement -> nomEvenement; ?></p>
													</div>
													<div class="subtitleevent<?php echo $i;?>">
														<p><?php echo $evenement -> libelleCourtEvenement;?></p>
													</div>
													<div class="descriptionevent<?php echo $i;?>">
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
										
								
									<div class="infoevent<?php echo $i;?>">
										<div class="dayevent<?php echo $i;?>">
											<img src="Icones/calendar.png" alt="Calendar" class="calendarevent1">
											<p><?php echo $evenement -> dateEvenement;?></p>
										</div>
										<div class="timeevent<?php echo $i;?>">
											<img src="Icones/clock.png" alt="Clock" class="clockevent1">
											<p><?php echo $evenement -> heureEvenement; ?></p>
										</div>
										<div class="placeevent<?php echo $i;?>">
											<img src="Icones/maps-and-flags (1).png" alt="markevent1">
											<p><?php echo $evenement -> nomVilleEvenement;?></p>
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
