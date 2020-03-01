<?php require_once('../../connexion.php'); ?>
<?php
$nom_classe=null;
if(isset($_POST['nom_classe']))
{
$nom_classe=$_POST['nom_classe'];     
$req=$bd->query("DELETE FROM classe WHERE nom_classe='$nom_classe'"); 
$res=$bd->exec($req);
	if($res)
	 	header("Location:sclasse.php");
	else
	header("Location:sclasse.php");
}
?>