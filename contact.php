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
				<main class="block-main-contact">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="title">
									<h2>Contact</h2>
								</div>
								
								<div class="send">
									<p>Merci de remplir ce formulaire pour nous envoyer un petit message !</p>
								</div>
								<div class="form">
									<form action="confirmationconnexion.php" method="post">
										<fieldset>										
											<p>
												<label for="firstname">Prénom</label>
												<input type="text" name="firstname" id="firstname"  maxlength="20" size="32">
											</p>

											<p>
												<label for="lastname">Nom</label>
												<input type="text" name="lastname" id="lastname" size="32">
											</p>
																
											<p>
												<label for="mail">Mail *</label>
												<input type="email" name="mail" id="mail" size="32" required>
											</p>	
																	
											<p>
												<label for="message">Message *</label>
												<textarea name="message" id="message" cols="35" rows="8" required></textarea>
											</p>	
												
											<p>											
												<input id="button" type="submit" value="Envoyer">
											</p>

										</fieldset>
									</form>
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
