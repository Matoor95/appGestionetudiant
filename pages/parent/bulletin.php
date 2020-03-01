<?php error_reporting(0);

 require_once('../connexion.php'); ?>
<?php include "entete.php";
session_start ();
$nume=$_SESSION['nume'] ;     
$req=$bd->query("select * from etudiant where nume='".$nume."'"); 
$resultat= $req->fetch();
$photo=$resultat['photo'];
?>
 <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>CONSULTATION DES NOTES</h1>
        </div>
        <div class="row">
          <div class="span12">
            <div class="widget-body">
              <div class="rigth-align">
						<p>
<?php

 session_start ();
 $req=$bd->query("select etudiant.nom,etudiant.prenom,note,nom_module,semestre,type_eva,noter.nume from etudiant,noter,parent where etudiant.nume=noter.nume and etudiant.idparent=parent.idparent and semestre=1 and parent.idparent=".$_SESSION['idparent']." "); 


$req->execute();
?>

<table  class="table" border="1">
  <tr>
    <th scope="col" >Nom</th>
    <th scope="col" >Prenom</th>
    <th scope="col" >Type d'evalutation</th>
    <th scope="col" >NOTES</th>
    <th scope="col" > SEMESTRE</th> 
      <th scope="col" > Nom du module</th> 
   
  </tr>
    <tr>
      <?php
      while($ligne=$req->fetch(PDO::FETCH_ASSOC)) 
{
      ?>
    <tr>
    <td scope="col" ><?php echo $ligne['nom'];  ?></td>
    <td scope="col" ><?php echo $ligne['prenom'];  ?></td>
    <td scope="col" ><?php echo $ligne['type_eva'];  ?></td>
    <td scope="col" ><?php echo $ligne['note'];  ?></td>
    <td scope="col" > <?php echo $ligne['semestre'];  ?></td> 
       <td scope="col" > <?php echo $ligne['nom_module'];  ?></td> 
      
       <tr>
      <?php
      }
   ?>
  </tr>
  </tr>

  </table>

 
						</p>

          </div></div></div>          
        </div>
      </div>
    </div>			
            


<?php include "pied.php";?>
	</body>
</html>