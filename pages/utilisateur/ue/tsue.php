<?php require_once('../../connexion.php'); ?>
<?php
$nom_ue=null;
if(isset($_POST['nom_ue']))
{
$nom_ue=$_POST['nom_ue'];     
$req=$bd->query("DELETE FROM ue WHERE nom_ue='$nom_ue'"); 
$res=$bd->exec($req);
	if($res)
	 	header("Location:sue.php");
	else
	header("Location:sue.php");
}
?>