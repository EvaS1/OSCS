<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Question1</title>
		<link rel="stylesheet" href="css/styleQ3.css">
		<link rel="icon" href="Logo/logof.png">
		<script src="jquery.min.js"></script>
		<script type ="text/javascript" src="javascript.js"></script>
	</head>

	<body>
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
								<input type="search" placeholder="Search..">-->
								<!--<form class="form" method="get" role="search">
								<input class="search" type="search" name="q" id="q" placeholder="Rechercher...">

								</form>-->
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
		
		<!--<header class="block-header-web">
					<div class="titleandlogo">
						<h1>Où sortir ce soir</h1>
						<img class="logo-web" src="image/logof.png" alt="logo">
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
				</nav>-->
		
		<div class="block-center">
			<div class="inner">
				<main class="block-main">
					<section class="section group">
						<article class="item title">
							<h1 class="title">Question</h1>	
						</article>					
						<article class="item forms">
							<form action="Question2.php">
								<div class="quest">
									<p>Tes soirées, c'est plus :</p>
								</div>
								<div>
								<p>
								<input type="radio" id="Choice1"
								required name="contact" value="event">
								<label for="contactChoice1">Aller chill autour d'un verre </label><br>
								</p>
								<p>
								<input type="radio" id="Choice2"
								required name="contact" value="concert">
								<label for="contactChoice2">Aller à un concert</label><br>
								</p>
								<p>
								<input type="radio" id="Choice3"
								required name="contact" value="theatre">
								<label for="contactChoice3">Aller au théâtre</label><br>
								</p>
								</div>
								<div>
								<button class="btn" type="submit">1/3</button>
								
								</div>
								<input class="end" type="submit" value="Suivant">
							</form>
						</article>
					</section>				
				</main>	
			</div>
		</div>
		<!--<div class="footer">
			<footer class="footer">
				<div class="inner">
   					<hr>
   					<p>Mentions légales | Conditions générales | Politique de confidentialité</p>
   				</div> 
			</footer>
		</div>-->
	</body>
</html>
