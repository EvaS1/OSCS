<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Question3</title>
		<link rel="stylesheet" href="css/styleQ3.css">
		<link rel="icon" href="Logo/logof.png">
		<script src="jquery.min.js"></script>
		<script type ="text/javascript" src="javascript.js"></script>
		<link rel="icon" type="image/png" href="Logo/logof.png" /> 
	</head>

	<body>
		<header class="block-header">
			<div class="inner">
			
				<figure class="logo">
					<img src="Logo/logof.png" style="width:22%">
				</figure>
				
				<h1 class="connexion">
					<img src="Icones/userf.png">
					<a href="connexion.html"> connexion </a>
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
		<div class="block-center">
			<div class="inner">
				<main class="block-main">
					<section class="section group">
						<article class="item title">
							<h1 class="title">Question</h1>	
						</article>					
						<article class="item forms">
							<form action="choix.php" >
								<div class="quest">
									<p>Pour un premier rendez-vous, le lieu le plus approprié est:</p>
								</div>
								<div id="allchoice">
								<p>
								<input type="radio" required name="contact" id="concert" value="concert">
								<label for="contactChoice2">Un concert, hell yeah!</label><br>
								</p>	
								<p>
								<input type="radio" required name="contact" id="theatre"
								 value="theatre" >
								<label for="contactChoice3">Le théâtre</label><br>
								</p>
								<p>
								<input type="radio" required name="contact" id="event"
								 value="email">
								<label for="contactChoice1">Un bar</label><br>
								</p>	
								</div>
								<div>
									<button class="btn" type="submit">3/3</button>
									<a href="Question2.php"><img src="Icones/back.png" alt="Back" width="6%" id="back"></a>
								</div>
								
									<input class="end" type="submit" value="Fin du formulaire">
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
