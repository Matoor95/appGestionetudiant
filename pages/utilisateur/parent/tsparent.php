<?php require_once('../../connexion.php'); ?>
<?php
$idparent=null;
if(isset($_POST['idparent']))
{
$idparent=$_POST['idparent'];     
$req=$bd->query("DELETE FROM parent WHERE idparent='$idparent'"); 
$res=$bd->exec($req);
	if($res)
	 	header("Location:sparent.php");
	else
	header("Location:sparent.php");
}
?>