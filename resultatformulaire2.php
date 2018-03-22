<?php 
	session_start();

?>


<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Document sans titre</title>
	</head>

	<body>
	
		<?php 				
			//Script connexion à la base de données
			include('pdo.php');
			
			//Requête pour la table question
			$idQuestion = 1;
			$query = "SELECT * FROM question WHERE idQuestion=:id LIMIT 0,1";
			$statementQuestion = $connexion->prepare($query);
			$statementQuestion -> bindValue(':id', $idQuestion);
			$statementQuestion -> execute();	
	
		
			//Passage à la question suivante
			if ($idQuestion == 1) {
				echo "<form method='get' action='resultatformulaire2-q2.php'>";
				
			
			//Si erreur, redirection vers début du formulaire
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
						echo "<input id='reponse".$i."' name='reponse1' type='radio' value ='".$reponse -> idReponse."'required><label for='reponse".$i."'>".$reponse -> texteReponse."</label><br />";
						
						
					} 
					
				}
					?>

					<input class="button" name="submit" type="submit" value="Valider">
			</form> <br />
					
					<?php
					
						/*if ($idQuestion == 1) {
							if ($idReponse ==1) {
								echo "reponse1";
							}
						}*/
	?>
				
				
		
	</body>
</html>