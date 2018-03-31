<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans nom</title>
</head>

<body>
<?php include('pdo.php') ?>
<?php

	// Récupération des commentaires
	$query = 'SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE idEvenement=:id ORDER BY date_commentaire';
	$statementCommentaire =  $connexion-> prepare($query);
	$statementCommentaire -> bindvalue(':id', $evenement ->idEvenement);
	$statementCommentaire->execute();

	while ($donnees = $req->fetch())
	{
	?>
	<p><strong><?php echo htmlspecialchars($donnees['auteur']); ?></strong> le <?php echo $donnees['date_commentaire_fr']; ?></p>
	<p><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?></p>
	<?php
	} 
?>
</body>
</html>
