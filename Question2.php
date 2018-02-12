<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Question2</title>
		<link rel="stylesheet" href="css/styleQ3.css">
		<link rel="icon" href="Logo/logof.png">
		<script src="jquery.min.js"></script>
		<script type ="text/javascript" src="javascript.js"></script>
	</head>

	<body>
		<header class="block-header">
			<div class="inner">
			
				<figure class="logo">
							<img src="Logo/logof.png" class="logo-mobile">
						</figure>

						<h1 class="connexion">
							<img src="Icones/userf.png" class="iconeconnexion">
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
							<img id="btnClickMe" src="Icones/menublanc.png" width="6%">
					<div id="menu">	
						<ul>
							<div class="menunav hide">
								<div class="titre"><a href="">Menu</a>
								</div>
								
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
		<div class="block-center">
			<div class="inner">
				<main class="block-main">
					<section class="section group">
						<article class="item title">
							<h1 class="title">Question</h1>	
						</article>					
						<article class="item forms">
							<form action="Question3.php">
								<div class="quest">
									<p>Tu préfères avoir la vie de :</p>
								</div>
								<div>
								<p>
								<input type="radio" id="event"
								required name="contact" value="email">
								<label for="contactChoice1">Arthur Guinness </label><br>
								</p>
								<p>
								<input type="radio" id="theatre"
								required name="contact" value="theatre">
								<label for="contactChoice3">William Shakespeare</label><br>
								</p>
								<p>
								<input type="radio" id="Choice2"
								required name="contact" value="concerte">
								<label for="contactChoice2">Jimmy Hendricks</label><br>
								</p>	
								</div>
								<div class="pagenumber">
									<button class="btn" type="submit">2/3</button>
									
									<a href="Question1.php"><img src="Icones/back.png" alt="back" width="4%" id="back"></a>
									
								</div>
								<div>
								<input class="end" type="submit" value="Suivant">
								</div>
								
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
