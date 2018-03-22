<!--<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>

	<form action="soiree.php?id=2" method="post">
		<p>ton avis : <input type="text" name="avis" /></p>
		<p>ta note sur 5: <input type="text" name="note" /></p>
		<p><input type="submit" value="OK"></p>
	</form>
	
</body>
</html>-->


<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Document sans titre</title>
	</head>

	<body>
	
		<?php 
			include('pdo.php');
		
			$idQuestion = 1;
			$query = "SELECT * FROM question WHERE idQuestion=:id";
			$statementQuestion = $connexion->prepare($query);
			$statementQuestion -> bindValue(':id', $idQuestion);
			$statementQuestion -> execute();	
		?>
		
		<form method="post">

		<?php 

			$bar = 0;
			$concert = 0;
			$theatre = 0;

			while ($question = $statementQuestion -> fetch()) {
				echo "<h4>".$question -> texteQuestion."</h4>";
			
			}
		
			$query = "SELECT * FROM reponse WHERE idQuestion=:id";
			$statementReponse = $connexion->prepare($query);
			$statementReponse -> bindValue(':id', $idQuestion);
			$statementReponse -> execute();
			
			echo "<ul>";
			$i=0;
			while ($reponse = $statementReponse -> fetch()) {
				$i++;
				echo "<input id='reponse".$i."' name='reponse' type='radio' value ='".$i."'><label for='reponse".$i."'>".$reponse -> texteReponse."</label><br />";
			
			} 
			
			?>
			
			<input class="button" name="submit" type="submit" value="Valider">
			
			</form>
			
			
			<?php
		
			if (isset($_POST['reponse'])) {
				echo "<br>".$_POST['reponse']."</br>";
			}
		
		
			/*//Boucle while pour afficher les questions {
		
				//Compter le nombre de réponses pour chaque type d'événement
				if ($_POST[id] == 1) {
					$bar = $bar ++;
				} else if ($_POST[id] == 2) {
					$concert = $concert ++;
				} else {
					$theatre = $theatre ++;
				}
			
			// } Fin de la boucle while
		

			//Comparaison des résultats

			//Si un type d'événements se démarque
			if ($bar > $concert && $bar > $theatre) {
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