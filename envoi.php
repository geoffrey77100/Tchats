<?php
	session_start();
	include("connexionBDD.php");
	$msg=$_POST['msg'];
	$speudo=$_SESSION['speudo'];
	$res3=$bdd->prepare('INSERT INTO message (message,heureDateCreation,speudo) 
							VALUES (:msg,NOW(),:speudo)');
	
	$res3->execute(array(':msg'=>$msg,
						 ':speudo'=>$speudo
						 ));
						 
	$res3->closeCursor();
?>
