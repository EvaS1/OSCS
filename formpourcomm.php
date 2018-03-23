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
        	<input type="text" name="commentaire" id="commentaire" placeholder="Votre comm" size="30" maxlength="10" />
			<label for="note">note</label>
      		<input type="text" name="note" id="note" placeholder="" size="1" maxlength="10" />
			<label for="pseudo">Votre pseudo :</label>
      		<input type="text" name="pseudo" id="pseudo" placeholder="ton nom" size="14" maxlength="10" />
			<label for="event">id evenement: </label>
      		<input type="text" name="event" id="event" placeholder="Event?" size="30" maxlength="10" />
			

    	</p>
		<input type="submit" value="Envoyer" />
	</form>	
</body>
</html>