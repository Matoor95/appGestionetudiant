<?php require_once('../../connexion.php'); ?>
<?php include "entete.php";
$idparent=null;
if(isset($_POST['idparent']))
$nom_classe=$_POST['idparent'];
$Prenom=null;
if(isset($_POST['Prenom']))
$Prenom=$_POST['Prenom'];
$Nom=null;
if(isset($_POST['Nom']))
$nom=$_POST['Nom'];
$TEL=null;
if(isset($_POST['TEL']))
$TEL=$_POST['TEL'];
$sexe=null;
if(isset($_POST['sexe']))
$sexe=$_POST['sexe'];
$adresse=null;
if(isset($_POST['adresse']))
$adresse=$_POST['adresse'];
$mail=null;
if(isset($_POST['mail']))
$mail=$_POST['mail'];
$password=null;
if(isset($_POST['password']))
$password=$_POST['password'];
 
if($idparent)
{
	$req="insert into parent values ('$idparent','$Prenom','$Nom','$TEL','$mail','$adresse','$sexe','$password')";
	$res=$bd->exec($req);
	if($res)
	 	header("Location:aparent.php");
	else
	header("Location:../utilisateur.php");
	 
}?>
			