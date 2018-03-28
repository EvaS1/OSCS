<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>
	<form method="post" action="comm.php">
    	<p>
        	<label for="commentaire">Votre commentaires:</label>
        	<input type="text" name="commentaire" id="commentaire" placeholder="Votre comm" />
			<label for="note">note</label>
      		<input type="text" name="note" id="note" placeholder="" />
			<label for="pseudo">Votre pseudo :</label>
      		<input type="text" name="pseudo" id="pseudo" placeholder="ton nom" />
			<label for="event">id evenement: </label>
      		<input type="text" name="event" id="event" placeholder="Event?" />
		</p>
		<input type="submit" value="Envoyer" />
	</form>	
</body>
</html>