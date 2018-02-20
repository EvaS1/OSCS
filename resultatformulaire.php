<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Document sans titre</title>
	</head>

	<body>
	
		<?php 
			session_start();
				
			//Script connexion à la base de données
			include('pdo.php');
			
			//Requête pour la table question
			$idQuestion = $_GET['id'];
			$query = "SELECT * FROM question WHERE idQuestion=:id";
			$statementQuestion = $connexion->prepare($query);
			$statementQuestion -> bindValue(':id', $idQuestion);
			$statementQuestion -> execute();	
		?>
		

			<?php 
		
			//Passage à la question suivante
			if (($idQuestion == 1) || ($idQuestion == 2) ) {
				echo "<form method='post' action='resultatformulaire.php?id=".($idQuestion +1)."'>";
				
			//Redirection vers résultats
			} else if ($idQuestion == 3) {
				echo "<form method='post' action='choix.php'>";
				
			//Si erreur, redirections vers début du formulaire
			} else {
				echo "Erreur, pour revenir au début du formulaire, <a href='debutformulaire.php'>cliquez-ici</a>";
			}

				//Affichage de la question
				while ($question = $statementQuestion -> fetch()) {
					echo "<h4>".$question -> texteQuestion."</h4>";

				

					//Requête pour la table réponse
					$query = "SELECT * FROM reponse WHERE idQuestion=:id";
					$statementReponse = $connexion->prepare($query);
					$statementReponse -> bindValue(':id', $idQuestion);
					$statementReponse -> execute();


					//Affichage des réponses correspondantes
					$i=0;
					while ($reponse = $statementReponse -> fetch()) {
						$i++;
						echo "<input id='reponse".$i."' name='reponse' type='radio' value ='".$reponse -> idType."'required><label for='reponse".$i."'>".$reponse -> texteReponse."</label><br />";
						
					} 
}
					?>

					<input class="button" name="submit" type="submit" value="Valider">
			</form> <br />
					
				
				<?php
				
					$_SESSION['bar'] = 0;
					$concert = 0;
					$theatre = 0;
					if (isset($_POST['submit'])) { 
						if ($_POST['reponse'] == 1) {
							$_SESSION['bar'] ++;
						} else if ($_POST['reponse'] == 2) {
							$concert++;
						} else {
							$theatre++;
						}
					}
					
				?>


				<?php
					
				//Compter le nombre de réponses pour chaque type d'événement
				

				echo "Bar : ".$_SESSION['bar']."<br />";
				echo "Concert : ".$concert."<br />";
				echo "Théâtre : ".$theatre."<br />";
				
				// } Fin de la boucle while
		
				
			
			//Comparaison des résultats

			//Si un type d'événements se démarque
			/*if ($bar > $concert && $bar > $theatre) {
				echo "Bars";
			} else if ($concert > $bar && $concert > $theatre) {
				echo "Concerts";
			} else if ($theatre > $bar && $theatre > $concert) {
				echo "Théâtre";

			//Si deux types d'événements sont à égalité
			} else if ($bar = $concert && $bar > $theatre) {
				echo "Bars + Concerts";
			} else if ($bar = $theatre && $bar > $concert) {
				echo "Bars + Théâtre";
			} else if ($concert = $theatre && $bar > $theatre) {
				echo "Concerts + Théâtre";

			//Si les trois types d'événements sont à égalité
			} else {
				echo "Bars + Concerts + Théâtre";
			}
		*/
		
		
		?>
	</body>
</html>