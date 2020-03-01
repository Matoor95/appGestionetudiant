<?php
error_reporting(0);
$recherche=null;
if(isset($_POST['rech']))
	if($_POST['rech']!="")
	{
		$Rechercher=$_POST['Rechercher'];
	}
?>
<?php require_once('../../connexion.php'); ?>
<?php include "entete.php";?>
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>RESULTAT DE LA RECHERCHE</h1>
        </div>
        <div class="row">
          <div class="span9">
            <div class="widget-body">
              <div class="rigth-align">
<p>
<?php 
// il permet de rechercher un parent dans la liste des parents//
if( isset($_POST[rechercher]))
{
	$rechercher=$_POST[rechercher];
$req=$bd->query("select Nom,Prenom,TEL,adresse,mail from parent where PRENOM like '%".$rechercher."%' or nom like '%".$rechercher."%' order by Nom,Prenom"); 

// IL PERMET DE VOIR SI ON A UN RESULTAT SI C OUI 
$req2=$bd->query("select Nom,Prenom,TEL,adresse,mail from parent where Prenom like '%".$rechercher."%' or Nom like '%".$rechercher."%' order by Nom,Prenom"); 

}
else 
{
$req=$bd->query("select Nom,Prenom,TEL,mail,adresse,sexe from parent order by Nom,Prenom"); 
$req2=$bd->query("select Nom,Prenom,TEL,mail,adresse,sexe from parent order by Nom,Prenom"); 

}
 //il permer DE RECUPERER LE NOMBRE DE RESULTAT//
$row=$req2->fetchAll();
$nombre=count($row);

if($nombre==0)
echo "aucun resultat ne correspond à: ".$rechercher;

?>
 
<?php 
if ($nombre!=0)
{
?> 
  <table class="table table-striped" >
    <thead>
    <th scope="col">NOM</th>
    <th scope="col">PRENOM</th>
    <th scope="col">TELEPHONE</th>
    <th scope="col">ADRESSE</th>
    <th scope="col">SEXE</th>
    <th scope="col">EMAIL</th>
  </thead>
    <tbody>
<?php 
while($ligne= $req->fetch()) {
echo "<tr><th scope='row'>".$ligne['Prenom']."</th><th scope='row'>".$ligne['Nom']."</th><td>".$ligne['TEL']."</td><td>".$ligne['mail']."</td> <td>".$ligne['sexe']."</td><td>".$ligne['adresse']."</td></tr>";}
?>
    </tbody>
  </table>
	<?php 

}
?> 					</p>

          </div></div></div>
          <div class="span3 pull-right sidebar">
            <form class="form-search" action="reparent.php" method="post">
              <div class="input-append">
              <legend>Rechercher</legend>
              <input type="text" class="span2 search-query" name="rechercher" placeholder="Rechercher ">
              <button type="submit" class="btn">Rechercher</button>
              </div>
            </form>
<?php include "menudroite.php";?>
                                                   
          </div>          
        </div>
      </div>
    </div>			
            
            
            
          
<?php include "../pied.php";?>
	</body>
</html>