<?php require_once('../../connexion.php');
include "../entete.php";
$nom_classe=null;
if(isset($_POST['nom_classe']))
$nom_classe=$_POST['nom_classe'];
$nom_filiere=null;
if(isset($_POST['nom_filiere']))
$nom_filiere=$_POST['nom_filiere'];
$nom_dep=null;
if(isset($_POST['nom_dep']))
$nom_dep=$_POST['nom_dep'];
if($nom_classe)
{
	$req="UPDATE classe SET nom_classe='$nom_classe',nom_filiere='$nom_filiere',nom_dep='$nom_dep' where nom_classe='$nom_classe'";
	$res=$bd->exec($req);
	if($res)
	 	header("Location:mclasse.php");
	else
	header("Location:../utilisateur.php");
	 
}?>