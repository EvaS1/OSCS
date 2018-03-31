<?php session_start(); ?>
<!doctype html>
<html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Question 1</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="icon" href="Logo/logof.png">
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap-grid.min.css">
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
		<script src="jquery.min.js"></script>
		<script type ="text/javascript" src="menu.js"></script>
	</head>

	<body>
		<div class="page">
			<?php 
				include('header.php');
			
				//Script connexion à la base de données
				include('pdo.php');
			
				//Requête pour la table question
				$idQuestion = 1;
				$query = "SELECT * FROM question WHERE idQuestion=:id LIMIT 0,1";
				$statementQuestion = $connexion->prepare($query);
				$statementQuestion -> bindValue(':id', $idQuestion);
				$statementQuestion -> execute();
			
			?>
			<div class="content">
				<div class="block-center">
					<div class="inner">
						<main class="block-main">
							<section class="section group">
								<article class="item title">
									<h2 class="title">Question <?php echo $idQuestion;?></h2>	
								</article>					
								<article class="item forms">

									<?php 
									//Passage à la question suivante
									if ($idQuestion == 1) {
										echo "<form method='get' action='Question2.php'>";


									//Si erreur, redirection vers début du formulaire
									} else {
										echo "Erreur, pour revenir au début du formulaire, <a href='debutformulaire.php'>cliquez-ici</a>";
									}
									?>


										<div class="quest">
											<?php
											//Affichage de la question
											while ($question = $statementQuestion -> fetch()) {
												echo "<p>".$question -> texteQuestion."</p>";
											?>
										</div>
										<div class="answers">
											<?php 	
												//Requête pour la table réponse
												$query = "SELECT * FROM reponse WHERE idQuestion=:id";
												$statementReponse = $connexion->prepare($query);
												$statementReponse -> bindValue(':id', $idQuestion);
												$statementReponse -> execute();


												//Affichage des réponses correspondantes
												$i=0;
												while ($reponse = $statementReponse -> fetch()) {
													$i++;
													echo "<p><input id='reponse".$i."' name='reponse1' type='radio' value ='".$reponse -> idReponse."'required><label for='reponse".$i."'>".$reponse -> texteReponse."</label></p>";		

												} 

											}
											?>
										</div>
										<div class="next">
											<input class="button" name="submit" type="submit" value="Valider">
										</div>
									</form>
								</article>
							</section>				
						</main>
					</div>
				</div>	
			</div>
		</div>
		<?php include('footer.php');?>		
	</body>
</html>

			

			