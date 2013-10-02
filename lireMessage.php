<?php
	include("connexionBDD.php");
	$res=$bdd->query("select speudo,message from message ORDER BY idMessage DESC LIMIT 0,5");
	if($res){
			while($ligne=$res->fetch())
			{
				echo "<p><strong>".$ligne['speudo']."</strong> : ".$ligne['message']."</p>";
			}
	}
		
	$res->closeCursor();
?>
