<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Où sortir ce soir ?</title>
		<link rel="icon" href="Logo/logof.png">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap-grid.min.css">
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
		<script src="menu.js"></script>
		<script src="jquery.min.js"></script>
	</head>

	<body>
		<div class="page">
			<div class="header">
				<header class="block-header">
					<div class="inner">

						<figure class="logo">
							<img src="Logo/logof.png" style="width: 22%">
						</figure>

						<h1 class="connexion">
							<img src="Icones/userf.png">
							<a href="connexion.php"> connexion </a>
						</h1>

					</div>
				</header>
				<nav class="block-nav">
					<div class="inner">
						<div class="action">
							<a href="#menu" id="toggle"><span></span></a>
						</div>
						<div id="my_header">
							<img id="btnClickMe" src="Icones/menublanc.png" width="7%">
							<div id="menu">	
								<ul>
									<div class="menunav hide">
										<div class="titre"><a href="">Menu</a>
										</div>
										<!--<span class="icon"><i class="fa fa-search"></i></span>
										<input type="search" placeholder="Rechercher...">-->
										<form class="form" method="get" role="search">
										<input class="search" type="search" name="q" id="q" placeholder="Rechercher...">

										</form>
										<li><a href="news.html">News</a></li>
										<li><a href="about.html">Bars</a></li>
										<li><a href="concert.html">Concerts</a></li>
										<li><a href="theatre.html">Théâtres</a></li>
										<li><a href="event.html">Evènements</a></li>
										<li><a href="arrond.html">Autour de moi</a></li>
										<li><a href="compte.html">Mon compte</a></li>
										<li><a href="contact.html">Contact</a></li>
									</div>
								</ul>
							</div>
						</div>
					</div>				
				</nav>	

				<header class="block-header-web">
					<div class="titleandlogo">
						<h1>Où sortir ce soir</h1>
						<img class="logo-web" src="Logo/logof.png" alt="logo">
					</div>
				</header>

				<nav class="block-nav-web">
					<div class="inner">
						<ul class="nav justify-content-center">
						  <li class="nav-item">
							<a class="nav-link" href="#">Home</a>
						  </li>
						  <li>|</li>
						  <li class="nav-item">
							<a class="nav-link" href="#">News</a>
						  </li>
						  <li>|</li>
						  <li class="nav-item">
							<a class="nav-link" href="#">Bars</a>
						  </li>
						  <li>|</li>
						  <li class="nav-item">
							<a class="nav-link" href="#">Concerts</a>
						  </li>
						  <li>|</li>
						  <li class="nav-item">
							<a class="nav-link" href="#">Théâtres</a>
						  </li>
						  <li>|</li>
						  <li class="nav-item">
							<a class="nav-link" href="#">Evènements</a>
						  </li>
						  <li>|</li>
						  <li class="nav-item">
							<a class="nav-link" href="#">Autour de moi</a>
						  </li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="content">
				<main class="block-main-inscription">
					<div class="container">
						<div class="row">
							<div class="col-12">
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
												<label for="mail">E-mail</label>
												<input type="email" name="mail" id="mail" size="32" required>
											</p>

											<p>
												<label for="password">Mot de passe</label>
												<input type="password" name="password" id="password" size="32" required>
											</p>

											
											<p> 
												<label for="gender">Sexe</label>
												<input type="radio" required name="gender" id="gender1" value="gender1"><label for="gender1">Féminin</label>
												<input type="radio" required name="gender" id="gender2" value="gender2"><label for="gender2">Masculin</label>
											</p>

											<p> 
												<label for="age">Age</label>
												<input type="radio" required name="age" id="age1" value="age1"><label for="age1">18-25</label>		
												<input type="radio" required name="age" id="age2" value="age2"><label for="age2">26-30</label>
												<input type="radio" required name="age" id="age3" value="age3"><label for="age3">31-50</label>
												<input type="radio" required name="age" id="age4" value="age4"><label for="age4">51 et +</label>
											</p>

											<p>											
												<input id="button" type="submit" value="Créer un compte">
											</p>

										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</main>
			</div>
			<div class="footer">
			<footer class="footer">
				<div class="inner">
   					<hr>
   					<p>Mentions légales | Conditions générales | Politique de confidentialité</p>
   				</div> 
			</footer>
			</div>
		</div>
	</body>
	
</html>
