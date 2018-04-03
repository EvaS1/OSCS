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
			<div class="content">
				<main class="block-main-form">
					<?php $evenement = $_GET['id']; ?>

					<form method="post" action="comm.php?id=<?php echo $evenement ?>" class="formulaireComm" >
						<label for="commentaire">Ton commentaire :</label>
						<textarea name="commentaire" id="commentaire" placeholder="Écris ici..." rows="5" required></textarea>						
						<input id="button" type="submit" value="Envoyer" />
					</form>	
				</main>
			</div>
		</div>
		<?php include('footer.php');?>
		
	</body>
</html>	