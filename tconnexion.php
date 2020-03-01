<?php require_once('pages/connexion.php'); 

if (isset($_POST['login'])&&isset($_POST['pass']))
{ 
	$login = $_POST['login']; 
	$pass = $_POST['pass'];
	//$pass=md5($pass);
	$type_connection = $_POST['type_connection'];

	if ($type_connection=="utilisateur")
     $requete="select login,pass from ".$type_connection." where login='$login' and pass='$pass'";

 if ($type_connection=="professeur")
$requete="select matricule,pass from professeur where matricule='$login' and pass='$pass'"; 

if ($type_connection=="etudiant")
$requete="select nume,pass from etudiant where nume='$login' and pass='$pass'"; 

if ($type_connection=="parent")
$requete="select idparent,password from parent where idparent='$login' and password='$pass'"; 

$req = $bd->prepare($requete);
$req->execute();
$array = $req->fetchALL();
$nb = count($array);

	 if ($nb>=1) {
	 	echo 3;
	        session_start ();
    		$_SESSION['login'] = $_POST['login'];
    		$_SESSION['pass'] = $_POST['pass'];
    		if ($type_connection=="parent")
    		{
    		$requete2="select idparent,password from parent where idparent='$login' and password='$pass'"; 
    		$req = $bd->prepare($requete2);
             $req->execute();	
    		while($ligne=$req->fetch(PDO::FETCH_ASSOC)) $_SESSION['idparent'] = $ligne['idparent'];
    		}
    		
    	
		header("Location:pages/".$type_connection."/".$type_connection.".php"); }
	 
	
else {
		header("Location:index.php?req=e")   ; 

		
	 }
	}
?>
