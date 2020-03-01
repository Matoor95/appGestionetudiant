<?php require_once('../../connexion.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "entete.php";?>
 <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>AFFICHAGE DE LA LISTE DES CLASSE</h1>
        </div>
        <div class="row">
          <div class="span9">
            <div class="widget-body">
              <div class="rigth-align">
						<p>
<?php $req=$bd->query("select * from classe order by nom_classe"); 
?>
<table  class="table table-striped">
  <tr>
    <th scope="col">CLASSE</th>
    <th scope="col">FILIERE</th>
    <th scope="col">DEPARTEMENT</th>
  </tr>
<?php 
while($ligne= $req->fetch()) {
echo "<tr><th scope='row'>".$ligne['nom_classe']."</th><td>".$ligne['nom_filiere']."</td><td>".$ligne['nom_dep']."</td></tr>";
}
?>
</table>
</p>
          </div></div></div>
          <div class="span3 pull-right sidebar">

<?php include "menudroite.php";?>
                                                   
          </div>          
        </div>
      </div>
    </div>			
            


<?php include "../pied.php";?>
	</body>
</html>