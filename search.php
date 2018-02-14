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
				<div class="block-content-search">
					<div class="inner">


					<?php
						$hostname = "localhost";
						$dbname = "ou_sortir_ce_soir";
						$username = "root";
						$userpass = "";
						$connexionStr = "mysql:host=$hostname;dbname=$dbname;charset=utf8";

						try {
							//paramètres : chaîne de connexion, identifiant, mot de passe
							$connexion = new PDO($connexionStr, $username, $userpass);
							//S'il y a un problème, il est géré sous forme d'exception
							$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							//Fonctionnement en UTF8
							$connexion -> setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
							//Récupération automatique sous forme d'objet
							$connexion -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

							//Récupération colonnes de la table produit
							$query = "SELECT * FROM evenement  WHERE idEvenement=:id ORDER BY idEvenement ASC";
							$statementEvenement = $connexion->prepare($query);
							$statementEvenement -> bindValue(':id', 'idEvenement');
							$statementEvenement -> execute();


							//S'il y a une recherche
							if(isset($_GET['q']) AND !empty($_GET['q'])) {
								$q = htmlspecialchars($_GET['q']);
								$query = 'SELECT * FROM evenement WHERE CONCAT(nomEvenement,libelleCourtEvenement, descriptionEvenement) LIKE "%'.$q.'%" ORDER BY idEvenement ASC';
								$statementEvenement = $connexion->prepare($query);
								$statementEvenement -> bindValue(':id', 'idEvenement');
								$statementEvenement -> execute();
							}

							//S'il y a au moins un résultat : affichage du nombre de résultat(s)
							if ($statementEvenement -> rowCount() > 0) { 
							 echo "<div class='results'>Votre recherche pour '".$q."' a donné ".$statementEvenement -> rowCount();
								if ($statementEvenement -> rowCount() > 1) {
									echo " résultats : </div>";
								} else {
									echo " résultat : </div>";
								} ?>

								<!--Affichage du ou des résultat(s)-->
								<ul>
									<?php while($evenement = $statementEvenement->fetch()) { 


									//Récupération des images
									$query ="SELECT * FROM image WHERE idEvenement=:id LIMIT 0,1";
									$statementImage = $connexion->prepare($query);
									$statementImage -> bindValue(':id', $evenement -> idEvenement);
									$statementImage -> execute();
									$image = $statementImage -> fetch (); ?>

									<li>
									<a href="detail.php?id=<?php echo $evenement -> nomEvenement?>"><?php echo "<img alt='image1' src='images/".$image-> nomImage."'>";?></a><br />
									<?php echo $evenement -> nomEvenement?>			
									<?php echo "<div class='description'>".$evenement -> libelleCourtEvenement."</div>"; ?>								
									<?php } ?>
									</li>
								</ul>

								<!--S'il n'y a pas de résultats-->
								<?php } else { ?>
									<div class='results'>Aucun résultat pour "<?php echo $q?>"...</div>
								<?php } 

						} catch(Exception $e) {
							echo '<p>Erreur n° : '.$e->getCode().' : '. $e->getMessage().'</p>';
							echo '<p>Dans : '.$e->getFile().' ('.$e->getLine().') </p>';
							echo "<pre>"; //Pour que le var dump s'affiche mieux
							var_dump($e->getTrace());
							echo "</pre>";
						}

					?>



					</div>
				 </div>
			 </div>
			<?php include('footer.php');?>
		</div>
	</body>
</html>