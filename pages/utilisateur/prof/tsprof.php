<?php require_once('../../connexion.php'); ?>
<?php
$matricule=null;
if(isset($_POST['matricule']))
{
$matricule=$_POST['matricule'];     
$req=$bd->query("DELETE FROM professeur WHERE matricule='$matricule'"); 
$res=$bd->exec($req);
	if($res)
	 	header("Location:sprof.php");
	else
	header("Location:sprof.php");
}
?>