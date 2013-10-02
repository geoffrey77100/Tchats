<?php
	if(!empty ($_POST['speudo']) && !empty($_POST['mdp'])){
	session_start();
	$speudo=$_POST["speudo"];
	$mdp=$_POST["mdp"];
	include("connexionBDD.php");
	$res=$bdd->query("select * from utilisateur where speudo='$speudo' and password ='$mdp'");
		if($res){
			$ligne=$res->fetch();
			if($ligne){
				$_SESSION["speudo"]=$speudo;
				header ('location:tchat.php');
				}
			else
				header('location:accueil.php?erreur1=1');
		}
		else
			header('location:accueil.php?erreur2=1');
	}
	else
		header('location:accueil.php?erreur3=1');
?>
