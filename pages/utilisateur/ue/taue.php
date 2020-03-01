<?php require_once('../../connexion.php');
if(isset($_POST['nom_ue']))
{
$nom_ue=null;
if(isset($_POST['nom_ue']))
$nom_ue=$_POST['nom_ue'];
$credit_ue=null;
if(isset($_POST['credit_ue']))
$credit_ue=$_POST['credit_ue'];
$coef_ue=null;
if(isset($_POST['coef_ue']))
$coef_ue=$_POST['coef_ue'];

	$req="insert into ue values ('$nom_ue','$credit_ue','$coef_ue')";
	$res=$bd->exec($req);
	if($res)
	 	header("Location:aue.php");
	else
	header("Location:../utilisateur.php");
	 
}?>
<?php
if(isset($_POST['nom_module']))
{
$nom_ue_mod=null;
if(isset($_POST['nom_ue_mod']))
$nom_ue_mod=$_POST['nom_ue_mod'];
$nom_module=null;
if(isset($_POST['nom_module']))
$nom_module=$_POST['nom_module'];
$credit_module=null;
if(isset($_POST['credit_module']))
$credit_module=$_POST['credit_module'];
$coef_module=null;
if(isset($_POST['coef_module']))
$coef_module=$_POST['coef_module'];

	$req2="insert into module values ('$nom_module','$credit_module','$coef_module','$nom_ue_mod')";
	$res2=$bd->exec($req2);
	if($res2)
	 	header("Location:aue.php");
	else
	header("Location:../utilisateur.php");
	 
}?>
			