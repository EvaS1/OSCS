<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Question3</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="icon" href="Logo/logof.png">
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap-grid.min.css">
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
		<script src="jquery.min.js"></script>
		<script type ="text/javascript" src="menu.js"></script>
		<link rel="icon" type="image/png" href="Logo/logof.png" /> 
	</head>

	<body>
		<div class="page">
			<?php include('header.php');?>
			<div class="content">
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
											<a href="Question2.php"><img src="Icones/back.png" alt="Back" width="6%" id="back"></a>
											<button class="btn" type="submit">3/3</button>
										</div>

											<input class="end" type="submit" value="Fin du formulaire">
									</form>
								</article>
							</section>				
						</main>	
					</div>
				</div>
			</div>
			<?php include('footer.php');?>
		</div>
	</body>
</html>

