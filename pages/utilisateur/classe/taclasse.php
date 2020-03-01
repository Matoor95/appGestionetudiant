<?php require_once('../../connexion.php');
if(isset($_POST['nom_classe']))
{
$nom_classe=null;
if(isset($_POST['nom_classe']))
$nom_classe=$_POST['nom_classe'];
$nom_filiere=null;
if(isset($_POST['nom_filiere']))
$nom_filiere=$_POST['nom_filiere'];
$nom_dep=null;
if(isset($_POST['nom_dep']))
$nom_dep=$_POST['nom_dep'];

	$req="insert into classe values ('$nom_classe','$nom_filiere','$nom_dep')";
	$res=$bd->exec($req);
	if($res)
	 	header("Location:aclasse.php");
	else
	header("Location:../utilisateur.php");
	 
}?>