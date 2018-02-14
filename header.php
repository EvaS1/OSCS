<div class="header">
	<header class="block-header">
		<div class="inner">
			<img id="btnClickMe" src="Icones/menu.png" width="7%">
			<img class="logo-mobile" src="Logo/logof.png" alt="logo">
			<h1 class="connexion">
				<a href="connexion.php"><img src="Icones/userb.png"></a>
			</h1>

		</div>
	</header>
	<nav class="block-nav">
		<div class="inner">
			<div class="action">
				<a href="#menu" id="toggle"></a>
			</div>
			<div id="my_header">
				<div id="menu">	
					<ul>
						<div class="menunav hide">
							<div class="titre">
								<h2>Menu</h2>
							</div>
							<form class="form" method="get" action="search.php">
								<input class="search" type="search" name="q" id="q" placeholder="Rechercher..." required>
								<input class="button" type="submit" value="" alt="Rechercher">
							</form>
							<li><a href="news.php">News</a></li>
							<li><a href="listing.php?id=1">Bars</a></li>
							<li><a href="listing.php?id=2">Concerts</a></li>
							<li><a href="listing.php?id=3">Théâtres</a></li>
							<li><a href="compte.php">Mon compte</a></li>
							<li><a href="contact.php">Contact</a></li>
						</div>
					</ul>
				</div>
			</div>
		</div>				
	</nav>	

	<header class="block-header-web">
		<div class="topbar">
			<div class="socialmedia">
				<ul>
					<li>
						<a href="https://www.facebook.com">
							<img class="facebook" src="Icones/facebook.png" width="40px" alt="facebook">
						</a>
					</li>
					<li>
						<a href="https://twitter.com/?lang=fr">
							<img class="twitter" src="Icones/twitter-2.png" width="40px" alt="twitter">
						</a>					
					</li>
					<li>
						<a href="https://www.instagram.com">
							<img class="instagram" src="Icones/instagram-2.png" width="40px" alt="instagram">	
						</a>		
					</li>
				</ul>
			</div>
			<div class="connexion">
				<a href="connexion.php">
					<img src="Icones/userb.png">
					<p>Connexion</p>
				</a>
			</div>
		</div>
		<div class="titleandlogo">
			<a href="connexion.php"><h1>Où sortir ce soir</h1></a>
			<img class="logo-web" src="Logo/logof.png" alt="logo">
		</div>
		<div class="search">
			<form method="get" action="search.php">
				<input type="text" name="q" placeholder="Rechercher..." required>
				<input class="button" type="submit" value="" alt="Rechercher">
			</form>
		</div>
	</header>

	<nav class="block-nav-web">
		<div class="inner">
			<ul class="nav justify-content">
			  <li class="nav-item">
				<a class="nav-link" href="connexion.php">Home</a>
			  </li>
			  <li>|</li>
			  <li class="nav-item">
				<a class="nav-link" href="#">News</a>
			  </li>
			  <li>|</li>
			  <li class="nav-item">
				<a class="nav-link" href="listing.php?id=1">Bars</a>
			  </li>
			  <li>|</li>
			  <li class="nav-item">
				<a class="nav-link" href="listing.php?id=2">Concerts</a>
			  </li>
			  <li>|</li>
			  <li class="nav-item">
				<a class="nav-link" href="listing.php?id=3">Théâtres</a>
			  </li>
			  <li>|</li>
			  <li class="nav-item">
				<a class="nav-link" href="contact.php">Contact</a>
			  </li>
			</ul>
		</div>
	</nav>
</div>
