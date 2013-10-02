<?php
	
	include('connexionBDD.php');
	$res2=$bdd->query("select speudo from utilisateur where statut='1'");
	if($res2){
		while($ligne=$res2->fetch()){
			echo "<p><strong>".$ligne['speudo']."</strong></p>";
		}
	}
?>
