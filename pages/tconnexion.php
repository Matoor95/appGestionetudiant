<?php require_once('./connexion.php'); 

if (isset($_POST['login'])&&isset($_POST['motdepasse']))
{ 
	$login = $_POST['login']; 
	$pass = $_POST['motdepasse']; 
     $req=$bd->query("select login,motdepasse from administrateur where login='$login' and motdepasse='$motdepasse'"); 
     $resultat = $req->fetch();
	 if ($resultat) 
		header("Location: acueill.php"); 
	  
	            else    
		        header("Location:index.php"); 
	           }
	       
?>
