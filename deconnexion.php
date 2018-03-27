<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>
<?php session_destroy(); 
	echo "Tu as bien été déconnecté(e), pour te reconnecter <a href='connexion.php'>clique ici</a>.";?>

</body>
</html>