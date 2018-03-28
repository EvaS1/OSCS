<?php session_start(); ?>
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
				<main class="block-main-profil">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="title">									
									<h2>Mon compte</h2>						
								</div>
								<div class="bloc">
									<div class="picture">
										<img src="Icones/userb.png" alt="picture">
									</div>
									<div class="info">									
										<div class="name">
											<?php echo "<p>Mon pseudo : ".$profil -> pseudoMembre."</p>"; ?>
											<button method="get" id='edit' name="edit" class="edit" value=""></button>
											
											<?php 
											if (isset($_GET['edit'])) {
												echo "hey !";
											} 
											?>
											
										</div>
										<div class="age">
											<?php 
											if ($profil -> ageMembre == "age1") {
												echo "<p>Ma tranche d'âge : 18-25 ans</p>";
											} else if ($profil -> ageMembre == "age2") {
												echo "<p>Ma tranche d'âge : 26-30 ans</p>";
											} else if ($profil -> ageMembre == "age3") {
												echo "<p>Ma tranche d'âge : 31-50 ans</p>";
											} else {
												echo "<p>Ma tranche d'âge : 51 ans et +</p>";
											} ?>
											<button class="edit"></button>
										</div>
										<div class="mail">
											<?php echo "<p>Mon adresse email : ".$profil -> emailMembre."</p>" ?>
											<button class="edit"></button>
										</div>						 							
									</div>	
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
