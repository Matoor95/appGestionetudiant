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
// il permet de rechercher un etudiant dans la liste des eutiant//
if( isset($_POST[rechercher]))
{
	$rechercher=$_POST[rechercher];
$req=$bd->query("select nom,prenom,tel,email,photo from etudiant where prenom like '%".$rechercher."%' or nom like '%".$rechercher."%' order by nom,prenom"); 

// IL PERMET DE VOIR SI ON A UN RESULTAT SI C OUI 
$req2=$bd->query("select nom,prenom,tel,email,photo from etudiant where prenom like '%".$rechercher."%' or nom like '%".$rechercher."%' order by nom,prenom"); 

}
else
{
$req=$bd->query("select nom,prenom,tel,email,photo from etudiant order by nom,prenom"); 
$req2=$bd->query("select nom,prenom,tel,email,photo from etudiant order by nom,prenom"); 

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
    <th scope="col">PHOTO</th>
    <th scope="col">PRENOM</th>
    <th scope="col">NOM</th>
    <th scope="col">TELEPHONE</th>
    <th scope="col">EMAIL</th>
  </thead>
    <tbody>
<?php 
while($ligne= $req->fetch()) {
echo "<tr><td><img src='images/".$ligne['photo']."' width='70' height='70' class='img-circle' /></td><th scope='row'>".$ligne['prenom']."</th><th scope='row'>".$ligne['nom']."</th><td>".$ligne['tel']."</td><td>".$ligne['email']."</td></tr>";
}
?>
    </tbody>
  </table>
	<?php 

}
?> 					</p>

          </div></div></div>
          <div class="span3 pull-right sidebar">
            <form class="form-search" action="retud.php" method="post">
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