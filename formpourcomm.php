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
		<style>
			#map {
     		height: 400px;
    	    width: 100%;
      		}
   		</style>
	</head>

	<body>
		<div class="page">
			<?php include('header.php');?>

	
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>
	<form method="post" action="comm.php" class="formulaireComm">
    	<p>
        	<label for="commentaire">Votre commentaires:</label>
        	<input type="text" name="commentaire" id="commentaire" placeholder="Votre comm" />
			<label for="event">id evenement: </label>
      		<input type="text" name="event" id="event" placeholder="Event?" />
		</p>
		<input type="submit" value="Envoyer" />
	</form>	
<?php include('footer.php');?>
	
	</body>
</html>	