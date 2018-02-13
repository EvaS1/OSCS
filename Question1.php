<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Question1</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="icon" href="Logo/logof.png">
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap-grid.min.css">
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
		<script src="jquery.min.js"></script>
		<script type ="text/javascript" src="menu.js"></script>
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
			</div>
			<?php include('footer.php');?>
		</div>
	</body>
</html>
