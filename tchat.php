<html>
<head>
<title> Message </title>
<script src="jquery-1.3.1.min.js"></script>
<script>
function message(){
	$.ajax({
		url:'lireMessage.php',
		type:'POST',
		success : function(dataRecupMessage) {
			document.getElementById('message').innerHTML=dataRecupMessage;
		}
			
		});
}

function statut(){
	$.ajax({
		url:'statut.php',
		type:'POST',
		success : function(dataRecupStatut) {
			document.getElementById('statut').innerHTML=dataRecupStatut;
		}
		});
}
function envoi(){
	var champ=document.getElementById('msg').value;
	if(champ!=0){
	$.ajax({
		url:'envoi.php',
		type:'POST',
		data:'msg='+document.getElementById('msg').value,
		success: function (dataRecupEnvoi){
			}
		});
		}
	else
		alert ('Le champ est vide');
}

function retour(){
	$.ajax({
		url:'retour.php',
		type:'POST',
		success: function (Retour){
		window.location=('accueil.php');
		}
		});
}
</script>
<script>
setInterval("message()",5000);
setInterval("statut()",5000);
</script>
</head>
<body OnLoad="message();statut();">
<h2>Tchat</h2></br>
<table border="2" cellpadding="0" width="70%">
<tr><td style="border:2px solid black" >
<div id="message" /><?php session_start();
echo $_SESSION['speudo'];
?></td>
<td>
<div id="statut" />
</td></tr></table>
<input type="text" size="40" id="msg"/><input type="button" value="Envoyer" OnClick="javascript:envoi()"/>
<input type="button" value="Deconnecter" onclick="javascript:retour()"/>
</body>
</html>
