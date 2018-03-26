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
		
	</head>

	<body>
		<div class="page">
			<?php include('header.php');?>
			<div class="content">
				<main class="block-main-connexion">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="title">
									<h2>Connexion</h2>
								</div>
								<div class="form">
									<form action="confirmationconnexion.php" method="post">
										<fieldset>										
											<p>
												<label for="mail">E-mail</label>
												<input type="mail" name="mail" id="mail" size="32" required>
											</p>

											<p>
												<label for="password">Mot de passe</label>
												<input type="password" name="password" id="password" size="32" required>
											</p>							

											<p>											
												<input id="button" type="submit" value="Se connecter">
											</p>

										</fieldset>
									</form>
								</div>
								<div class="line">
									<hr>
								</div>
								<div class="noplan">
									<p>Rien de prévu ce soir ?</p>				
								</div>
								<div class="register">
									<a href="inscription.php" class="registerlink">Inscris-toi !</a>
								</div>
							</div>
						</div>
					</div>
				</main>
			</div>
			<?php include('footer.php');?>
		</div>
	</body>
	
</html>
