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
				<main class="block-main-inscription">
					<div class="container">
						<div class="title">
							<h2>Inscription</h2>
						</div>
						<div class="form">
							<form action="confirmationinscription.php" method="post">
								<fieldset>
									<p>
										<label for="pseudo">Pseudo</label>
										<input type="text" name="pseudo" id="pseudo"  maxlength="20" size="32" required>
									</p>

									<p>
										<label for="email">E-mail</label>
										<input type="email" name="email" id="email" size="32" required>
									</p>

									<p>
										<label for="password">Mot de passe</label>
										<input type="password" name="password" id="password" size="32" required>
									</p>


									<p> 
										<label for="gender" id="radio">Sexe</label>
										<input type="radio" required name="gender" id="gender1" value="gender1"><label for="gender1" id="gender">Féminin</label>
										<input type="radio" required name="gender" id="gender2" value="gender2"><label for="gender2" id="gender">Masculin</label>
									</p>

									<p> 
										<label for="age" id="radio">Age</label>
										<input type="radio" required name="age" id="age1" value="age1"><label for="age1" id="age">18-25</label>		
										<input type="radio" required name="age" id="age2" value="age2"><label for="age2" id="age">26-30</label>
										<input type="radio" required name="age" id="age3" value="age3"><label for="age3" id="age">31-50</label>
										<input type="radio" required name="age" id="age4" value="age4"><label for="age4" id="age">51 et +</label>
									</p>

									<p>											
										<input id="button" type="submit" value="Créer un compte">
									</p>

								</fieldset>
							</form>
						</div>
					</div>
				</main>
			</div>
		</div>
		<?php include('footer.php');?>
	</body>
	
</html>
