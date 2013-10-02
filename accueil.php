<html>
<head>
<title>Connexion</title>
<script src="jquery-1.3.1.min.js"></script>
</head>
<body>
<form action="verifSpeudoMdp.php" method="post">
<h2>Connexion </h2></br>
<?php
	session_start();
	if(isset ($_SESSION['speudo'])){
	?> 
<?php
	if(isset($_GET["erreur1"])){
		echo "Identifiants de connexion incorrect, resaisir.";
		}
	if(isset($_GET["erreur2"])){
		echo "PB BDD!";	
	}
	if(isset($_GET["erreur3"])){
		echo "Champs manquant";
	}
	echo $_SESSION['speudo'];
?>
<table>
<tr><td>Pseudo: </td><td><input type="text" name="speudo"/></td></tr>
<tr><td>Mot de passe: </td><td><input type="password" name="mdp"/></td></tr>
</table>
<input type="submit" value="Connexion"/>
<a href='Inscription.php'>Vous n'etes pas inscrit ?</a>
</form>
<?php
}
else {
header('location:tchat.php');
}
	?>
</body>
</html>
