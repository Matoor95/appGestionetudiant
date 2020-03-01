<?php require_once('../../connexion.php'); ?>
<?php include "../entete.php";
$matricule=null;
if(isset($_POST['matricule']))
$matricule=$_POST['matricule'];
$nom=null;
if(isset($_POST['nom']))
$nom=$_POST['nom'];
$prenom=null;
if(isset($_POST['prenom']))
$prenom=$_POST['prenom'];
$dnaiss=null;
if(isset($_POST['dnaiss']))
$dnaiss=$_POST['dnaiss'];
$lnaiss=null;
if(isset($_POST['lnaiss']))
$lnaiss=$_POST['lnaiss'];
$adr=null;
if(isset($_POST['adr']))
$adr=$_POST['adr'];
$sexe=null;
if(isset($_POST['sexe']))
$sexe=$_POST['sexe'];
$email=null;
if(isset($_POST['email']))
$email=$_POST['email'];
$tel=null;
if(isset($_POST['tel']))
$tel=$_POST['tel'];
$photo=null;
if(isset($_POST['photo']))
$photo=$_POST['photo'];
$nation=null;
if(isset($_POST['nation']))
$nation=$_POST['nation'];
$specialite=null;
if(isset($_POST['specialite']))
$specialite=$_POST['specialite'];
$pass=null;
if(isset($_POST['pass']))
$pass=$_POST['pass'];
if($_FILES['photo']['name'])
 {
 
 $extensions_valides = array( 'jpg','png','gif');
$extension_upload = strtolower(  substr(  strrchr($_FILES['photo']['name'], '.')  ,1)  );
if ( in_array($extension_upload,$extensions_valides) ) 
{
$uploaddir = 'images/';
$uploadfile = $uploaddir . basename($_FILES['photo']['name']);
echo '<pre>';
if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
 echo "<table><tr><td></td><td><img src='images/".$_FILES['photo']['name']."' width='90px' /></td></tr></table>";	
$photo=$_FILES['photo']['name']; 
$nomphoto=$_FILES['photo']['tmp_name']; 
} else {
    echo "Le telechargement n'est de la photo n'est pas correctement effectué veuillez le refaire:\n";
}
echo '</pre>';
} else echo"Vous ne pouvez pas envoyer ce type de fichier <br>seuls les photos sont permises";
}
if($matricule)
{
	$req="UPDATE professeur SET matricule='$matricule',nom='$nom',prenom='$prenom',lnaiss='$lnaiss',dnaiss='$dnaiss',adr='$adr',sexe='$sexe',tel='$tel',email='$email',photo='$photo',nation='$nation',specialite='$specialite',pass='pass' where matricule='$matricule'";
	$res=$bd->exec($req);
	if($res)
	 	header("Location:mprof.php");
	else
	header("Location:../utilisateur.php");
	 
}?>
			