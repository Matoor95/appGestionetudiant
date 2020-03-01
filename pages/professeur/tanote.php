<?php require_once('../connexion.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "entete.php";?>
 <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>AJOUT DES NOTES</h1>
        </div>
        <div class="row">
          <div class="span12">
            <div class="widget-body">
              <div class="rigth-align">
						<p>
<?php
$nom_classe=null;
if(isset($_POST['nom_classe']))
$nom_classe=$_POST['nom_classe'];
$num_sem=null;
if(isset($_POST['num_sem']))
$num_sem=$_POST['num_sem'];
$type_eva=null;
if(isset($_POST['type_eva']))
$type_eva=$_POST['type_eva'];
$nom_module=null;
if(isset($_POST['nom_module']))
$nom_module=$_POST['nom_module'];
$session=null;
if(isset($_POST['session']))
$session=$_POST['session'];
$date_eva=null;
if(isset($_POST['date_eva']))
$date_eva=$_POST['date_eva'];

if($nom_classe)
{
 $req=$bd->query("select nume,nom,prenom,dnaiss from etudiant where nom_classe='$nom_classe' order by nom,prenom"); 

?>
<p>
<form  enctype="multipart/form-data" action="ttanote.php" method="post">
<?php  
echo "<input type='hidden' name='num_sem' value='".$num_sem."'/>";
echo "<input type='hidden' name='type_eva' value='".$type_eva."'/>";
echo "<input type='hidden' name='nom_module' value='".$nom_module."'/>";
echo "<input type='hidden' name='session' value='".$session."'/>";
echo "<input type='hidden' name='date_eva' value='".$date_eva."'/>";?>          
  <table class="table table-striped" >
    <thead>
    <th scope="col">PRENOM</th>
    <th scope="col">NOM</th>
    <th scope="col">DATE DE NAISSANCE</th>
    <th scope="col">NOTE</th>
  </thead>
    <tbody>
<?php 
while($ligne= $req->fetch()) {
echo "<tr><th scope='row'>".$ligne['prenom']."</th><th scope='row'>".$ligne['nom']."</th><td>".$ligne['dnaiss']."</td><td><input type='hidden' name='nume[]' id='nume[]' value='".$ligne['nume']."'/><input name='note[]' id='note[]' width='10' /></td></tr>";
}
echo "</tbody>
  </table><input type='submit' value='VALIDER' class='btn btn-primary btn-large'/>
</form>";	 
}?>
						</p>

          </div></div></div>          
        </div>
      </div>
    </div>			

<?php include "pied.php";?>
	</body>
</html>			