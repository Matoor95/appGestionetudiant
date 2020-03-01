<?php require_once('../../connexion.php'); ?>
<?php include "../entete.php";
$nom_module=null;
if(isset($_POST['nom_module']))
$nom_module=$_POST['nom_module'];
$credit_module=null;
if(isset($_POST['credit_module']))
$credit_module=$_POST['credit_module'];
$coef_module=null;
if(isset($_POST['coef_module']))
$coef_module=$_POST['coef_module'];
$nom_ue=null;
if(isset($_POST['nom_ue']))
$nom_ue=$_POST['nom_ue'];
if($nom_module)
{
	$req="UPDATE module SET nom_module='$nom_module',credit_module='$credit_module',coef_module='$coef_module',nom_ue='$nom_ue' where nom_module='$nom_module'";
	$res=$bd->exec($req);
	if($res)
	 	header("Location:mue.php");
	else
	header("Location:../utilisateur.php");
	 
}?>
			