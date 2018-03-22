<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>
	<?php include('pdo.php');?>
	<form method="post" action="news.php">
    	<p>
        	<label for="commentaire">Votre pseudo :</label>
        	<!--<input type="text" name="commentaire" id="commentaire" placeholder="Ex : Zozor" size="30" maxlength="10" />-->
			<textarea name="ameliorer" id="ameliorer" rows="10" cols="50">
      		</textarea>   
    	</p>
		Tu as <?php echo $_POST['commentaire']; ?> ans.
		<input type="submit" value="Envoyer" />
	</form>	
	<?php 
	$stmt = $connexion -> prepare('INSERT INTO avis (commentaireAvis, noteAvis, idEvenement, idMembre)) VALUES (:CommentaireAvis, :noteAvis, :idEvenement, :idMembre)');
	$stmt->bindValue(':commentaireAvis', $_POST ['commentaireAvis']);
	$stmt->bindValue(':noteAvis', $_POST ['noteAvis']);
	$stmt->bindValue(':idEvenement', $_POST ['idEvenement']);
	$stmt->bindValue(':idMembre', $_POST ['idMembre']);
	$stmt->execute;
	?>
</body>
</html>