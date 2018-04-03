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
			<?php include('header.php');
			include('pdo.php');?>			
			<div class="content">
				<main class="block-main-profil">
					<div class="container">
						<div class="title">									
							<h2>Mon compte</h2>						
						</div>
						<div class="bloc">
							<div class="picture">
								<img src="<?php if(($profil -> photoMembre)=='') { echo 'Icones/photob.png'; } else { echo 'Images/'.$profil -> photoMembre; }?>" alt="picture" id="picture">
								<div class="action">						
									<input type="button" id='edit0' name="edit" class="edit">
									<input type="button" id='cancel0' name="cancel1" class="cancel1">
								</div>
								<script>
										$(function() {

											//Bouton annuler caché
											$('#cancel0').hide();

											//Quand on clique sur modifier
											$('#edit0').click(function() {

												//Affichage input
												$('.picture .action').prepend('<input type="file" id="change-picture" name="change-picture" accept="image/*" value="<?php echo $profil -> photoMembre;?>" required>');

												//Disposition input et croix
												$('.picture .action').css('justify-content', 'space-between');

												//Affichage icône annuler
												$('#cancel0').show();	
												$('#edit0').hide();					
											});

											//Quand on clique sur annuler
											$('#cancel0').click(function() {

												//Enlève l'input
												$('#change-picture').remove();

												//Centrage icône modifier
												$('.picture .action').css('justify-content', 'center');

												//Affichage icône modifier
												$('#edit0').show();
												$('#cancel0').hide();
											});



										});
									</script>
								<!--<input type="file">-->
							</div>
							<div class="info">									
								<div class="name">
									<?php 
									echo "<p>Mon pseudo : <span id='pseudo'>".$profil -> pseudoMembre."</span></p>"; ?>
									<div class="action">						
										<input type="button" id='edit' name="edit" class="edit">
										<input type="button" id='cancel1' name="cancel1" class="cancel1">
									</div>

									<script>
										$(function() {

											//Bouton annuler caché
											$('#cancel1').hide();

											//Quand on clique sur modifier
											$('#edit').click(function() {

												//Affichage input
												$('#pseudo').replaceWith('<input method="post" type="text" id="change-pseudo" name="change-pseudo" value="<?php echo $profil -> pseudoMembre;?>" required>');				

												//Affichage icône annuler
												$('#cancel1').show();	
												$('#edit').hide();					
											});

											//Quand on clique sur annuler
											$('#cancel1').click(function() {

												//Remet le pseudo à zéro
												$('#change-pseudo').replaceWith('<span id="pseudo"><?php echo $profil -> pseudoMembre;?></span>');

												//Affichage icône modifier
												$('#edit').show();
												$('#cancel1').hide();
											});
										});
									</script>

								</div>
								<div class="age">
									<?php 
									if ($profil -> ageMembre == "age1") {
										echo "<p>Ma tranche d'âge : <span id='age'>18-25 ans</span></p>";
									} else if ($profil -> ageMembre == "age2") {
										echo "<p>Ma tranche d'âge : <span id='age'>26-30 ans</span></p>";
									} else if ($profil -> ageMembre == "age3") {
										echo "<p>Ma tranche d'âge : <span id='age'>31-50 ans</span></p>";
									} else if ($profil -> ageMembre == "age4"){
										echo "<p>Ma tranche d'âge : <span id='age'> 51 ans et +</span></p>";
									} ?>
									<input type="button" id='edit2' name="edit" class="edit">
									<input type="button" id='cancel2' name="cancel1" class="cancel1">

									<script>
										$(function() {

											//Bouton annuler caché
											$('#cancel2').hide();

											//Quand on clique sur modifier
											$('#edit2').click(function() {

												//Affichage liste déoulante
												$('#age').replaceWith('<select method="post" id="change-age"><option value="age1">18-25 ans</option><option value="age2">26-30 ans</option><option value="age3">31-50 ans</option><option value="age4">51 ans et +</option></select>');

												//Affichage icône annuler
												$('#cancel2').show();	
												$('#edit2').hide();	
											});

											//Quand on clique sur annuler
											$('#cancel2').click(function() {

												//Remet l'âge à zéro
												$('#change-age').replaceWith('<?php 
												if ($profil -> ageMembre == "age1") { 
													echo "<span id=\'age\'>18-25 ans</span>"; 
												} else if ($profil -> ageMembre == "age2") {
													echo "<span id=\'age\'>26-30 ans</span>";
												} else if ($profil -> ageMembre == "age3") {
													echo "<span id=\'age\'>31-50 ans</span>";
												} else {
													echo "<span id=\'age\'> 51 ans et +</span>";
												}
												?>');

												//Affichage icône modifier
												$('#edit2').show();
												$('#cancel2').hide();
											});
										});
									</script>

								</div>
								<div class="mail">
									<?php echo "<p>Mon adresse email : <span id='mail'>".$profil -> emailMembre."</span></p>"; ?>
									<input type="button" id='edit3' name="edit" class="edit">
									<input type="button" id='cancel3' name="cancel1" class="cancel1">

									<script>
										$(function() {

											//Bouton annuler caché
											$('#cancel3').hide();

											//Quand on clique sur modifier
											$('#edit3').click(function() {

												//Affichage input
												$('#mail').replaceWith('<input method="post" type="mail" id="change-mail" value="<?php echo $profil -> emailMembre;?>" required>');

												//Affichage icône annuler
												$('#cancel3').show();
												$('#edit3').hide();									
											});

											//Quand on clique sur annuler
											$('#cancel3').click(function() {

												//Remet le mail à zéro
												$('#change-mail').replaceWith('<span id="mail"><?php echo $profil -> emailMembre?></span>');

												//Affichage icône modifier
												$('#edit3').show();
												$('#cancel3').hide();				
											});
										});
									</script>
								</div>

								<div class="buttons">
									<div class="cancel">
										<button class="btn-cancel">Annuler</button>
										<script>
											$(function() {																
												//Quand on clique sur le bouton annuler
												$('.btn-cancel').click(function() {

													//Remet le pseudo à zéro
													$('#change-pseudo').replaceWith('<span id="pseudo"><?php echo $profil -> pseudoMembre;?></span>');
													$('#edit').show();
													$('#cancel1').hide();	

													//Remet l'âge à zéro
													$('#change-age').replaceWith('<?php 
													if ($profil -> ageMembre == "age1") { 
														echo "<span id=\'age\'>18-25 ans</span>"; 
													} else if ($profil -> ageMembre == "age2") {
														echo "<span id=\'age\'>26-30 ans</span>";
													} else if ($profil -> ageMembre == "age3") {
														echo "<span id=\'age\'>31-50 ans</span>";
													} else {
														echo "<span id=\'age\'> 51 ans et +</span>";
													}
													?>');
													$('#edit2').show();
													$('#cancel2').hide();	

													//Remet le mail à zéro
													$('#change-mail').replaceWith('<span id="mail"><?php echo $profil -> emailMembre?></span>');		
													$('#edit3').show();
													$('#cancel3').hide();	
												});
											});
										</script>
									</div>	
									<div class="save">
										<button class="btn-save">Sauvegarder</button>
										<script>
											$(function() {																
												//Quand on clique sur le bouton sauvegarder
												$('.btn-save').click(function() {
													var nbChangements;
													nbChangements = 0;

													//Si le pseudo n'a pas été changé
													if ($("#change-pseudo").val() == '<?php echo $profil -> pseudoMembre;?>' || (typeof($("#change-pseudo").val()) == 'undefined')) {

														//Remet le pseudo à zéro
														$('#change-pseudo').replaceWith('<span id="pseudo"><?php echo $profil -> pseudoMembre;?></span>');
														$('#edit').show();
														$('#cancel1').hide();	

													//Si le pseudo a été changé
													} else {
														var pseudo;
														pseudo = $("#change-pseudo").val();
														console.log('pseudo défini : ' + pseudo);
														nbChangements +=1;

														//Fonction Téo
														function sendQuery(query){
														   console.log('Function sendQuery');
														   console.log("query : " + query);

														   //instance de l'objet
														   xhttp = new XMLHttpRequest();
														   xhttp.onreadystatechange=function() {
															   if (this.readyState == 4 && this.status == 200) {
																   console.log("ShowMessage response = ");
																  /* console.log(this.responseText);*/
															   }
														   };

														   xhttp.open("GET",query , true);
														   xhttp.send();
														}

														sendQuery('upload.php?pseudo2='+pseudo+'&from=root');

														//Remet le pseudo à zéro
														$('#change-pseudo').replaceWith('<span id="pseudo">'+pseudo+'</span>');
														$('#edit').show();
														$('#cancel1').hide();	
													}

													//Si l'âge n'a pas été changé ou a été vidé
													if ($("#change-age").val() == '<?php echo $profil -> ageMembre;?>' || (typeof($("#change-age").val()) == 'undefined')) {

														//Remet l'âge à zéro
														$('#change-age').replaceWith('<?php 
														if ($profil -> ageMembre == "age1") { 
															echo "<span id=\'age\'>18-25 ans</span>"; 
														} else if ($profil -> ageMembre == "age2") {
															echo "<span id=\'age\'>26-30 ans</span>";
														} else if ($profil -> ageMembre == "age3") {
															echo "<span id=\'age\'>31-50 ans</span>";
														} else if ($profil -> ageMembre == "age4") {
															echo "<span id=\'age\'>51 ans et +</span>";
														}
														?>');
														$('#edit2').show();
														$('#cancel2').hide();

													//Si l'âge a été changé	
													} else {
														var age;
														age = $("#change-age").val();
														console.log('age défini : ' + age);
														nbChangements +=1;

														//Fonction Téo
														function sendQuery(query){
														   console.log('Function sendQuery');
														   console.log("query : " + query);

														   //instance de l'objet
														   xhttp = new XMLHttpRequest();
														   xhttp.onreadystatechange=function() {
															   if (this.readyState == 4 && this.status == 200) {
																   console.log("ShowMessage response = ");
																   console.log(this.responseText);
															   }
														   };

														   xhttp.open("GET",query , true);
														   xhttp.send();
														}

														sendQuery('uploadage.php?age2='+age+'&from=root');

														//Remet l'âge à zéro
														if (age=='age1') {
															$('#change-age').replaceWith('<span id=\'age\'>18-25 ans</span>');
														} else if (age=='age2') {
															$('#change-age').replaceWith('<span id=\'age\'>26-30 ans</span>');
														} else if (age=='age3') {
															$('#change-age').replaceWith('<span id=\'age\'>31-50 ans</span>');
														} else if (age=='age4') {
															$('#change-age').replaceWith('<span id=\'age\'>51 ans et +</span>');
														}


														$('#edit2').show();
														$('#cancel2').hide();
														}

													//Si le mail n'a pas été changé
													if (($("#change-mail").val() == '<?php echo $profil -> emailMembre;?>') || (typeof($("#change-mail").val()) == 'undefined')) {

														//Remet le mail à zéro
														$('#change-mail').replaceWith('<span id="mail"><?php echo $profil -> emailMembre?></span>');		
														$('#edit3').show();
														$('#cancel3').hide();

													//Si le mail a été changé
													} else {
														var mail;
														mail = $("#change-mail").val();
														console.log('mail défini : ' + mail);
														nbChangements += 1;

														//Fonction Téo
														function sendQuery(query){
														   console.log('Function sendQuery');
														   console.log("query : " + query);

														   //instance de l'objet
														   xhttp = new XMLHttpRequest();
														   xhttp.onreadystatechange=function() {
															   if (this.readyState == 4 && this.status == 200) {
																   console.log("ShowMessage response = ");
																   console.log(this.responseText);
															   }
														   };

														   xhttp.open("GET",query , true);
														   xhttp.send();
														}

														sendQuery('uploadmail.php?mail2='+mail+'&from=root');

														//Remet le mail à zéro
														$('#change-mail').replaceWith('<span id="mail">'+mail+'</span>');		
														$('#edit3').show();
														$('#cancel3').hide();
													}


													console.log($("#change-picture").val());
													//Si la photo n'a pas été changée
													if (($("#change-picture").val() == '<?php echo $profil -> photoMembre;?>') || (typeof($("#change-picture").val()) == 'undefined')) {

														//Remet à zéro
														//Enlève l'input
														$('#change-picture').remove();

														//Centrage icône modifier
														$('.picture .action').css('justify-content', 'center');

														//Affichage icône modifier
														$('#edit0').show();
														$('#cancel0').hide();


													//Si la photo a été changée
													} else {
														var picture;
														picture = $("#change-picture").val();
														console.log('mail défini : ' + picture);

														var name;
														var slash = "\\";
														name = picture.split(slash);
														name=name[2];
														nbChangements += 1;

														//Fonction Téo
														function sendQuery(query){
														   console.log('Function sendQuery');
														   console.log("query : " + query);

														   //instance de l'objet
														   xhttp = new XMLHttpRequest();
														   xhttp.onreadystatechange=function() {
															   if (this.readyState == 4 && this.status == 200) {
																   console.log("ShowMessage response = ");
																   console.log(this.responseText);
															   }
														   };

														   xhttp.open("GET",query , true);
														   xhttp.send();
														}

														sendQuery('uploadphoto.php?photo2='+name+'&from=root');

														//Remet à zéro
														//Enlève l'input
														$('#change-picture').remove();

														//Centrage icône modifier
														$('.picture .action').css('justify-content', 'center');

														//Affichage icône modifier
														$('#edit0').show();
														$('#cancel0').hide();
													}


													if (nbChangements == 0) {										
														console.log('Aucun changement à sauvegarder !');
													} else if (nbChangements == 1) {
														alert('Le changement a bien été sauvegardé !')
														location.reload();
													} else if ((nbChangements == 2) || (nbChangements == 3) || (nbChangements == 4)){
														alert('Les changements ont bien été sauvegardés !')
														location.reload();
													}

												});


											});
										</script>
									</div>						 					
								</div>	


								<a href="connexion.php" class="delete" id="delete">
									<img src="Icones/remove-user.png" id="icon">
									<p id="quit">Supprimer mon compte</p>
									<script>
										$(function() {	
											$('#quit').mouseover(function() {
												$('#icon').replaceWith('<img src="Icones/remove-user-g.png" id="icon">');
												$("#icon").cursor("pointer");
											});

											$('#quit').mouseout(function() {
												$('#icon').replaceWith('<img src="Icones/remove-user.png" id="icon">');
											});

											$('#delete').click(function() {
												//Fonction Téo
												function sendQuery(query){
												   console.log('Function sendQuery');
												   console.log("query : " + query);

												   //instance de l'objet
												   xhttp = new XMLHttpRequest();
												   xhttp.onreadystatechange=function() {
													   if (this.readyState == 4 && this.status == 200) {
														   console.log("ShowMessage response = ");
														   console.log(this.responseText);
													   }
												   };

												   xhttp.open("GET",query , true);
												   xhttp.send();
												}

												sendQuery('quit.php');
											});

										});
									</script>
								</a>

							</div>	
						</div>	
					</div>					
				</main>
			</div>
		</div>
		<?php include('footer.php');?>		
	</body>
	
</html>
