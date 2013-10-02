<?php
	session_start();
	include("connexionBDD.php");
	if($_POST['mdp']==$_POST['mdp2']){
	$mdp=$_POST['mdp'];
	$speudo=$_POST['speudo'];
	$res4=$bdd->query("SELECT speudo,password FROM utilisateur WHERE speudo='$speudo' AND password='$mdp'");
	if(!$res4){	
	$res3=$bdd->prepare('INSERT INTO utilisateur (speudo,password,statut,heureDateCreation,topAdmin) 
							VALUES (:speudo,:mdp,"1",NOW(),"0")');
	
	$res3->execute(array(':speudo'=>$speudo,
						 ':mdp'=>$mdp
						 ));
						 
	$res3->closeCursor();
	header('location:accueil.php');
}
else {
	header('location:Inscription.php?erreur=1');
	}
}
else { 
	header('location:Inscription.php?erreur2=1');
}
?>
