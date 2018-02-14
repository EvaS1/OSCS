<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Question2</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="icon" href="Logo/logof.png">
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap-grid.min.css">
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
		<script src="jquery.min.js"></script>
		<script type ="text/javascript" src="javascript.js"></script>
	</head>

	<body>
		<?php include('header.php');?>
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
									<a href="Question1.php"><img src="Icones/back.png" alt="back" width="4%" id="back"></a>
									<button class="btn" type="submit">2/3</button>							
									
									
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
		<?php include('footer.php');?>
	</body>
</html>
