<?php require_once('../../connexion.php'); ?>
<?php include "../entete.php";
$nom_ue=null;
if(isset($_POST['nom_ue']))
$nom_ue=$_POST['nom_ue'];
$credit_ue=null;
if(isset($_POST['credit_ue']))
$credit_ue=$_POST['credit_ue'];
$coef_ue=null;
if(isset($_POST['coef_ue']))
$coef_ue=$_POST['coef_ue'];
if($nom_ue)
{
	$req="UPDATE ue SET nom_ue='$nom_ue',credit_ue='$credit_ue',coef_ue='$coef_ue' where nom_ue='$nom_ue'";
	$res=$bd->exec($req);
	if($res)
	 	header("Location:mue.php");
	else
	header("Location:../utilisateur.php");
	 
}?>