<?php require_once('../../connexion.php'); ?>
<?php
$nom_module=null;
if(isset($_POST['nom_module']))
{
$nom_module=$_POST['nom_module'];     
$req=$bd->query("DELETE FROM module WHERE nom_module='$nom_module'"); 
$res=$bd->exec($req);
	if($res)
	 	header("Location:sue.php");
	else
	header("Location:../utilisateur.php");
}
?>