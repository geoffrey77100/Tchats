<html>
<head>
<title>Inscription</title>
<script src="jquery-1.3.1.min.js"></script>
<script>
function Inscr(){
	$.ajax({
		url:'Inscr.php',
		type:'POST',
		data:"speudo="+document.getElementById('speudo').value+ " & mdp="+document.getElementById('mdp').value
			+"& mdp2="+document.getElementById('mdp2').value,
		success: function(dataRecupInscr){
		
		}
	});
}	
</script>		
</head>
<body>
<h2>Inscription </h2></br>
<?php
	if(isset($_GET["erreur1"])){
		echo "Utilisateur deja existant.";
		}
	if(isset($_GET["erreur2"])){
		echo "Les mots de passes sont differents.";	
	}
?>
<table>
<tr><td>Pseudo: </td><td><input type="text" id="speudo"/></td></tr>
<tr><td>Mot de passe: </td><td><input type="password" id="mdp"/></td></tr>
<tr><td>Confirmer le Mot de passe: </td><td><input type="password" id="mdp2"/></td></tr>
</table>
<input type="submit" value="S'inscrire" OnClick="javascript:Inscr();" />
</form>
</body>
</html>
