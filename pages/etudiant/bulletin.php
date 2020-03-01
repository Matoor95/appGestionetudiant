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
<?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,type_eva,noter.nume from etudiant,noter where '$nume'=noter.nume and semestre=1 and noter.nume='".$nume."'"); 


?>

<table  class="table" border="1">
  <tr>
    <th scope="col" colspan="5" >NOTES</th>
  </tr>
  <tr>
    <td scope="col" >UNITE D'ENSEIGNEMENT</td>
    <th scope="col" >TD</th>
    <th scope="col" >TP</th>
    <th scope="col" >DEVOIR</th>
    <th scope="col" >EXAMEN</th> 
  </tr>
    <tr>
    <th scope="col" colspan="5" >UE1 BASE DE DONNEES ET ALGORITHME</th>
  </tr>
  <tr>
    <td scope="col" >Base de donnees</td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='td' and semestre=1 and noter.nume='".$nume."' and nom_module='BD'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='tp' and semestre=1 and noter.nume='".$nume."' and nom_module='BD'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='devoir' and semestre=1 and noter.nume='".$nume."' and nom_module='BD'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='examen' and semestre=1 and noter.nume='".$nume."' and nom_module='BD'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td> 
  </tr>
    <tr>
    <td scope="col" >Langage C</td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='td' and semestre=1 and noter.nume='".$nume."' and nom_module='ALGO'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='tp' and semestre=1 and noter.nume='".$nume."' and nom_module='ALGO'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='devoir' and semestre=1 and noter.nume='".$nume."' and nom_module='ALGO'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='examen' and semestre=1 and noter.nume='".$nume."' and nom_module='ALGO'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td> 
  </tr>
    <tr>
    <th scope="col" colspan="5" >UE2 DEVELOPPEMENT DE LOGICIELS</th>
  </tr>
    <tr>
    <td scope="col" >java</td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='td' and semestre=1 and noter.nume='".$nume."' and nom_module='java'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='tp' and semestre=1 and noter.nume='".$nume."' and nom_module='java'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='devoir' and semestre=1 and noter.nume='".$nume."' and nom_module='java'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='examen' and semestre=1 and noter.nume='".$nume."' and nom_module='java'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td> 
  </tr>
    <tr>
    <td scope="col" >Developpement web</td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='td' and semestre=1 and noter.nume='".$nume."' and nom_module='web'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='tp' and semestre=1 and noter.nume='".$nume."' and nom_module='web'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='devoir' and semestre=1 and noter.nume='".$nume."' and nom_module='web'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='examen' and semestre=1 and noter.nume='".$nume."' and nom_module='web'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td> 
  </tr>
    <tr>
    <td scope="col" >UML</td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='td' and semestre=1 and noter.nume='".$nume."' and nom_module='uml'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='tp' and semestre=1 and noter.nume='".$nume."' and nom_module='uml'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='devoir' and semestre=1 and noter.nume='".$nume."' and nom_module='uml'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='examen' and semestre=1 and noter.nume='".$nume."' and nom_module='uml'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td> 
  </tr>
      <tr>
    <th scope="col" colspan="5" >UE3 MATHEMATIQUES</th>
  </tr>
    <tr>
    <td scope="col" >Calcul numerique</td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='td' and semestre=1 and noter.nume='".$nume."' and nom_module='calnum'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='tp' and semestre=1 and noter.nume='".$nume."' and nom_module='calnum'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='devoir' and semestre=1 and noter.nume='".$nume."' and nom_module='calnum'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='examen' and semestre=1 and noter.nume='".$nume."' and nom_module='calnum'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td> 
  </tr>
    <tr>
    <td scope="col" >Statistiques</td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='td' and semestre=1 and noter.nume='".$nume."' and nom_module='stat'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='tp' and semestre=1 and noter.nume='".$nume."' and nom_module='stat'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='devoir' and semestre=1 and noter.nume='".$nume."' and nom_module='stat'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='examen' and semestre=1 and noter.nume='".$nume."' and nom_module='stat'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td> 
  </tr>
    <tr>
    <th scope="col" colspan="5" >UE4 SYSTEMES RESEAU ET TELECOM</th>
  </tr>
    <tr>
    <td scope="col" >Systeme d'exploitation</td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='td' and semestre=1 and noter.nume='".$nume."' and nom_module='se'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='tp' and semestre=1 and noter.nume='".$nume."' and nom_module='se'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='devoir' and semestre=1 and noter.nume='".$nume."' and nom_module='se'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='examen' and semestre=1 and noter.nume='".$nume."' and nom_module='se'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td> 
  </tr>
    <tr>
    <td scope="col" >Reseau</td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='td' and semestre=1 and noter.nume='".$nume."' and nom_module='reseau'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='tp' and semestre=1 and noter.nume='".$nume."' and nom_module='reseau'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='devoir' and semestre=1 and noter.nume='".$nume."' and nom_module='reseau'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='examen' and semestre=1 and noter.nume='".$nume."' and nom_module='reseau'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td> 
  </tr>
    <tr>
    <td scope="col" >Telecom</td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='td' and semestre=1 and noter.nume='".$nume."' and nom_module='telecom'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='tp' and semestre=1 and noter.nume='".$nume."' and nom_module='telecom'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='devoir' and semestre=1 and noter.nume='".$nume."' and nom_module='telecom'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td>
    <td scope="col" ><?php $req=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where '$nume'=noter.nume and type_eva='examen' and semestre=1 and noter.nume='".$nume."' and nom_module='telecom'"); 
                           $ligne= $req->fetch();
                           echo $ligne['note'];?></td> 
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