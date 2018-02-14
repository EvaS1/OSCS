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
							<?php 
								$idType = $_GET['id'];
								$query = "SELECT * FROM evenement WHERE idType=:id";
								$statementEvenement = $connexion->prepare($query);
								$statementEvenement -> bindValue(':id', $idType);
								$statementEvenement -> execute();?>
								
								
								<div class="title">
									<?php
										if ($idType == 1) {
											echo "<h2>Les bars</h2>";
										} else if ($idType == 2) {
											echo "<h2>Les concerts</h2>";
										} else if ($idType == 3) {
											echo "<h2>Les pièces de théâtre</h2>";
										}
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
							
								
									
								</div>	
								
								
							</div>
						</div>
					
				</main>
			</div>
			<?php include('footer.php');?>
		</div>
	</body>
	
</html>