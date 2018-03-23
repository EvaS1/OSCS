<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>
	<?php include('pdo.php');?>
	
	<?php 
	echo $_POST['pseudo'], '<br/>'; 
	echo $_POST['commentaire'], '<br/>';
	echo $_POST['event'], '<br/>';
	echo $_POST['note'];
	?>
	
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