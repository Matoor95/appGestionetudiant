<?php require_once('../../connexion.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "entete.php";?>
 <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>MODIFICATION D'UN ETUDIANT</h1>
        </div>
        <div class="row">
          <div class="span9">
            <div class="widget-body">
              <div class="rigth-align">
						<p>
<?php $req=$bd->query("select nume,nom,prenom,nom_classe,photo from etudiant order by nom_classe,nom,prenom"); 


?>

<table  class="table table-striped">
  <tr>
    <th scope="col">PHOTO</th>
    <th scope="col">PRENOM</th>
    <th scope="col">NOM</th>
    <th scope="col">CLASSE</th>
    <th scope="col">ACTION</th>
  </tr>
<?php 
while($ligne= $req->fetch()) {
echo "<tr><td><img src='images/".$ligne['photo']."' width='70' height='70' /></td><th scope='row'>".$ligne['prenom']."</th><th scope='row'>".$ligne['nom']."</th><td>".$ligne['nom_classe']."</td><td><form action='tmetud.php' method='post'><input type='hidden' name='nume' value='".$ligne['nume']."' /><input type='submit' value='  MODIFIER  ' class='btn btn-primary btn-large'/>
</form></td></tr>";
}
?>
</table>
						</p>

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