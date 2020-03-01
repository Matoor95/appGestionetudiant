<?php require_once('../connexion.php'); ?>
<?php include "entete.php";
$nom_module=null;
if(isset($_POST['nom_module']))
$nom_module=$_POST['nom_module'];
$titre=null;
if(isset($_POST['titre']))
$titre=$_POST['titre'];
$resume=null;
if(isset($_POST['resume']))
$resume=$_POST['resume'];
$auteur=null;
if(isset($_POST['auteur']))
$auteur=$_POST['auteur'];
$message=null;
if(isset($_POST['message']))
$message=$_POST['message'];
if($titre)
{
	$req="insert into article values (null,'$titre','$resume','$auteur','$message','$nom_module')";
	$res=$bd->exec($req);
	if($res)
	 	header("Location:article.php");
	else
	header("Location:professeur.php");
	 
}?>
			