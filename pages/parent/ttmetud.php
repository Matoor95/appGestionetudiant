<?php require_once('../connexion.php'); 
$idparent=null;
if(isset($_POST['idparent']))
$nume=$_POST['idparent'];
$Nom=null;
if(isset($_POST['Nom']))
$Nom=$_POST['Nom'];
$Prenom=null;
if(isset($_POST['Prenom']))
$Prenom=$_POST['Prenom'];
$sexe=null;
if(isset($_POST['sexe']))
$sexe=$_POST['sexe'];
$adresse=null;
if(isset($_POST['adresse']))
$adresse=$_POST['adresse'];
$TEL=null;
if(isset($_POST['TEL']))
$TEL=$_POST['TEL'];
$mail=null;
if(isset($_POST['mail']))
$mail=$_POST['mail'];
$password=null;
if(isset($_POST['password']))
$password=$_POST['password'];
 
  
if($idparent)
{
	$req="UPDATE parent SET idparent='$idparent',Nom='$Nom',Prenom='$Prenom',sexe='$sexe',adresse='$adresse',TEL='$TEL',mail='$mail',password='$password' where idparent='$idparent'";
	$res=$bd->exec($req);
	if($res)
	 	header("Location:tmparent.php");
	else
	header("Location:parent.php");
	 
}?>
			