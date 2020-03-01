<?php
error_reporting(0);
 require_once('../connexion.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>Gestion des evaluations et des inscriptions</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="../../css/font-awesome.css" rel="stylesheet">
    <link href="../../css/font-awesome-ie7.css" rel="stylesheet">
    <link href="../../css/boot-business.css" rel="stylesheet">

  </head>
  <body>

						<p>
<?php 
$nom_classe=null;
if(isset($_POST['nom_classe']))
$nom_classe=$_POST['nom_classe'];
echo "<h4>Annee Scolaire  2017 - 2018 </h4>";
echo "<h4>Classe : ".$nom_classe."</h4>";
$req=$bd->query("select distinct etudiant.nume,nom,prenom,dnaiss,nom_classe,noter.nume from etudiant,noter where etudiant.nume=noter.nume and nom_classe='$nom_classe'"); 
?>
<table  class="table" border="1">
<tr><th scope="col" colspan="23"><center><h3>BULLETINS DE NOTES</h3></center></th></tr>
  <tr>
    <th scope="col" colspan="3">ETUDIANTS</th>
    <th scope="col" colspan="4">UE1</th>
    <th scope="col" colspan="5">UE2</th>
    <th scope="col" colspan="4">UE3</th>
    <th scope="col" colspan="5">UE4</th>
    <th scope="col" rowspan="2" colspan="2">RESULTAT</th>
  </tr>
  <tr><th scope='row'>Prenom</th><th scope='row'>Nom</th><th>date Nais</th>
      <td>BD</td><td>C</td><td>Moy</td><td>R</td>
      <td>JAVA</td><td>WEB</td><td>UML</td><td>Moy</td><td>R</td>
      <td>CALNUM</td><td>STAT</td><td>Moy</td><td>R</td>
      <td>SE</td><td>RESEAU</td><td>TELECOM</td><td>Moy</td><td>R</td>
      </tr>
      <?php 
while($ligne= $req->fetch()) {
  echo" <tr><th scope='row'>".$ligne['prenom']."</th><th scope='row'>".$ligne['nom']."</th><td>".$ligne['dnaiss']."</td>
      <td>";?>
<?php $req1=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='devoir' and noter.nume='".$ligne['nume']."' and nom_module='bd' and semestre=1"); 
                           $ligne1= $req1->fetch();
	  $req2=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='examen'and noter.nume='".$ligne['nume']."' and nom_module='bd' and semestre=1"); 
                           $ligne2= $req2->fetch();
						   $op1=$ligne1['note']*0.3; 
						   $op2= $ligne2['note']*0.7;
						   $op3=$op1+$op2;
                           echo $op3 ;
                           
      echo " </td>     
            <td>";
 $req1=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='devoir'and noter.nume='".$ligne['nume']."' and nom_module='algo' and semestre=1"); 
                           $ligne1= $req1->fetch();
	  $req2=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='examen'and noter.nume='".$ligne['nume']."' and nom_module='algo' and semestre=1"); 
                           $ligne2= $req2->fetch();
						   $op1=$ligne1['note']*0.3; 
						   $op2= $ligne2['note']*0.7;
						   $op4=$op1+$op2;
						   $opa=($op3+$op4)/2;
                           echo $op4 ;
                           
      echo " </td><th>"; echo $opa;?></th><th><?php if($opa<10)echo "nv";else echo "v";echo "</th>
       
             <td>";?>
<?php $req1=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='devoir' and noter.nume='".$ligne['nume']."' and nom_module='java' and semestre=1"); 
                           $ligne1= $req1->fetch();
	  $req2=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='examen'and noter.nume='".$ligne['nume']."' and nom_module='java' and semestre=1"); 
                           $ligne2= $req2->fetch();
						   $op1=$ligne1['note']*0.3; 
						   $op2= $ligne2['note']*0.7;
						   $op3=$op1+$op2;
                           echo $op3 ;
                           
      echo " </td>     
            <td>";
 $req1=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='devoir' and noter.nume='".$ligne['nume']."' and nom_module='web' and semestre=1"); 
                           $ligne1= $req1->fetch();
	  $req2=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='examen' and noter.nume='".$ligne['nume']."' and nom_module='web' and semestre=1"); 
                           $ligne2= $req2->fetch();
						   $op1=$ligne1['note']*0.3; 
						   $op2= $ligne2['note']*0.7;
						   $op4=$op1+$op2;
                           echo $op4 ;                  
      echo " </td>     
            <td>";
  $req1=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='devoir' and noter.nume='".$ligne['nume']."' and nom_module='uml' and semestre=1"); 
                           $ligne1= $req1->fetch();
	  $req2=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='examen' and noter.nume='".$ligne['nume']."' and nom_module='uml' and semestre=1"); 
                           $ligne2= $req2->fetch();
						   $op1=$ligne1['note']*0.3; 
						   $op2= $ligne2['note']*0.7;
						   $op5=$op1+$op2;
                           echo $op5 ;
                           $opb=($op3+$op4+$op5)/2;
                           
      echo " </td>
       <th>"; echo $opb;echo "</th><th>"; if($opb<10)echo "nv";else echo "v";?></th>
      <td>
<?php $req1=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='devoir'                                              and noter.nume='".$ligne['nume']."' and nom_module='calnum' and semestre=1"); 
                           $ligne1= $req1->fetch();
	  $req2=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='examen' and noter.nume='".$ligne['nume']."' and nom_module='calnum' and semestre=1"); 
                           $ligne2= $req2->fetch();
						   $op1=$ligne1['note']*0.3; 
						   $op2= $ligne2['note']*0.7;
						   $op3=$op1+$op2;
                           echo $op3 ;
                           
      echo" </td>     
            <td>";
 $req1=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='devoir' and noter.nume='".$ligne['nume']."' and nom_module='stat' and semestre=1"); 
                           $ligne1= $req1->fetch();
	  $req2=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='examen' and noter.nume='".$ligne['nume']."' and nom_module='stat' and semestre=1"); 
                           $ligne2= $req2->fetch();
						   $op1=$ligne1['note']*0.3; 
						   $op2= $ligne2['note']*0.7;
						   $op4=$op1+$op2;
						   $opc=($op3+$op4)/2;
                           echo $op4 ;
                           
      echo" </td><th>"; echo $opc;echo "</th><th>";?><?php if($opc<10)echo "nv";else echo "v";?></th>
       
             <td>
<?php $req1=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='devoir'  and noter.nume='".$ligne['nume']."' and nom_module='se' and semestre=1"); 
                           $ligne1= $req1->fetch();
	  $req2=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='examen' and noter.nume='".$ligne['nume']."' and nom_module='se' and semestre=1"); 
                           $ligne2= $req2->fetch();
						   $op1=$ligne1['note']*0.3; 
						   $op2= $ligne2['note']*0.7;
						   $op3=$op1+$op2;
                           echo $op3 ;
                           
       echo"</td>     
            <td>";?>
<?php $req1=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='devoir' and noter.nume='".$ligne['nume']."' and nom_module='reseau' and semestre=1"); 
                           $ligne1= $req1->fetch();
	  $req2=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='examen' and noter.nume='".$ligne['nume']."' and nom_module='reseau' and semestre=1"); 
                           $ligne2= $req2->fetch();
						   $op1=$ligne1['note']*0.3; 
						   $op2= $ligne2['note']*0.7;
						   $op4=$op1+$op2;
                           echo $op4 ;
			echo"</td>     
            <td>";?>
<?php $req1=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='devoir' and noter.nume='".$ligne['nume']."' and nom_module='telecom' and semestre=1"); 
                           $ligne1= $req1->fetch();
	  $req2=$bd->query("select nom,prenom,note,nom_module,semestre,noter.nume from etudiant,noter where etudiant.nume=noter.nume and type_eva='examen' and noter.nume='".$ligne['nume']."' and nom_module='telecom' and semestre=1"); 
                           $ligne2= $req2->fetch();
						   $op1=$ligne1['note']*0.3; 
						   $op2= $ligne2['note']*0.7;
						   $op5=$op1+$op2;
                           echo $op5 ;
                           $opd=($op3+$op4+$op5)/2;
						   $op=($opa+$opb+$opc+$opd)/4;
                           
       echo "</td>
       <th>"; echo $opd;echo "</th><th>"?><?php if($opd<10)echo "nv" ;else echo "v"; echo "</th>
      <th>"; echo $op;echo "</th><th>";if($op<10)echo "NV" ;else echo "V"; echo "</th></tr>
";
 } ?>	</table>					</p>

         

    <!-- End: FOOTER -->
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/boot-business.js"></script>
	</body>
</html>