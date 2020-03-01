<?php require_once('../../connexion.php'); ?>
<?php
$nume=null;
if(isset($_POST['nume']))
{
$nume=$_POST['nume'];     
$req=$bd->query("DELETE FROM etudiant WHERE nume='$nume'"); 
$res=$bd->exec($req);
	if($res)
	 	header("Location:setud.php");
	else
	header("Location:setud.php");
}
?>