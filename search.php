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
	</head>

	<body>
		<div class="page">
			<?php include('header.php');
			include('pdo.php');?>
			<div class="content">		
				<div class="block-content-search">
					<div class="inner">


					<?php

					function str_to_noaccent($str) {
					    $mot = $str;
					    $mot = preg_replace('#Ç#', 'C', $mot);
					    $mot = preg_replace('#ç#', 'c', $mot);
					    $mot = preg_replace('#è|é|ê|ë#', 'e', $mot);
					    $mot = preg_replace('#È|É|Ê|Ë#', 'E', $mot);
					    $mot = preg_replace('#à|á|â|ã|ä|å#', 'a', $mot);
					    $mot = preg_replace('#@|À|Á|Â|Ã|Ä|Å#', 'A', $mot);
					    $mot = preg_replace('#ì|í|î|ï#', 'i', $mot);
					    $mot = preg_replace('#Ì|Í|Î|Ï#', 'I', $mot);
					    $mot = preg_replace('#ð|ò|ó|ô|õ|ö#', 'o', $mot);
					    $mot = preg_replace('#Ò|Ó|Ô|Õ|Ö#', 'O', $mot);
					    $mot = preg_replace('#ù|ú|û|ü#', 'u', $mot);
					    $mot = preg_replace('#Ù|Ú|Û|Ü#', 'U', $mot);
					    $mot = preg_replace('#ý|ÿ#', 'y', $mot);
					    $mot = preg_replace('#Ý#', 'Y', $mot);
					     
					    return ($mot);
					}
						
					//Récupération colonnes de la table événement
					$query = "SELECT * FROM evenement  WHERE idEvenement=:id ORDER BY idEvenement ASC";
					$statementEvenement = $connexion->prepare($query);
					$statementEvenement -> bindValue(':id', 'idEvenement');
					$statementEvenement -> execute();


					//S'il y a une recherche
					if(isset($_GET['q']) AND !empty($_GET['q'])) {
						$q = $_GET['q'];
						$qsa = str_to_noaccent($q);
						/*$query = 'SELECT * FROM evenement WHERE CONCAT(nomEvenement,libelleCourtEvenement, descriptionEvenement) LIKE "%'.$q.'%" ORDER BY idEvenement ASC';*/
						$query = 'SELECT * FROM evenement WHERE LOWER(nomEvenement) LIKE "%'.strtolower($qsa).'%" OR LOWER(libelleCourtEvenement) LIKE "%'.strtolower($qsa).'%" OR LOWER(descriptionEvenement) LIKE "%'.strtolower($qsa).'%"';
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
								<a href="soiree.php?id=<?php echo $evenement -> idEvenement?>"><?php echo "<img alt='image1' src='images/".$image-> nomImage."'>";?><br />
								<?php echo "<div class='name'>".$evenement -> nomEvenement."</div>";?>			
								<?php echo "<div class='description'>".$evenement -> libelleCourtEvenement."</div>"; ?>	</a>							
								<?php } ?>
							</li>
						</ul>

						<!--S'il n'y a pas de résultats-->
						<?php } else { ?>
							<div class='results'>Aucun résultat pour "<?php echo $q?>"...</div>
						<?php } 

						
					?>



					</div>
				 </div>				 
			 </div>
		</div>
		<?php include('footer.php');?>
	</body>
</html>