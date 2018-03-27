<?php session_start();
	/*CONNEXION*/
require 'pdo.php';



//On initialise des erreurs
$errors = [];


//Si aucune erreur n'et detectée
if(empty($errors)){

	$hashpass=$_POST['password'];
  	$hashpass=sha1($hashpass);
	$mail = $_POST['email'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];

	$stmt = $connexion->prepare('INSERT INTO membres (pseudoMembre, emailMembre, passwordMembre, genderMembre, ageMembre)
	VALUES (:pseudoMembre, :emailMembre, :passwordMembre, :genderMembre, :ageMembre)');
	$stmt->bindValue(':pseudoMembre', $_POST['pseudo']);
	$stmt->bindValue(':emailMembre', $_POST['email']);
	$stmt->bindValue(':passwordMembre', $hashpass);
	$stmt->bindValue(':genderMembre', $gender);
	$stmt->bindValue(':ageMembre', $age);	
	$stmt->execute();

	
	$_SESSION['id'] = $stmt -> idMembre;
	

	header('Location: debutformulaire.php');


//Si au moins une erreur est detectée on affiche les erreurs
} else {

    echo "<pre>";
    print_r($errors);
    echo "</pre>";
}

?>
