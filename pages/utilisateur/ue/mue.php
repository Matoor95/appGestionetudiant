<?php require_once('../../connexion.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "entete.php";?>
 <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>MODIFICATION D'UN UE OU D'UN MODULE</h1>
        </div>
        <div class="row">
          <div class="span9">
            <div class="widget-body">
              <div class="rigth-align">
						<p>
<?php $req=$bd->query("select * from ue order by nom_ue"); 
$req1=$bd->query("select * from module order by nom_module");
?>
<table  class="table table-striped">
  <tr>
    <th scope="col">UE</th>
    <th scope="col">CREDIT</th>
    <th scope="col">COEFFICIENT</th>
    <th scope="col">ACTION</th>
  </tr>
<?php 
while($ligne= $req->fetch()) {
echo "<tr><th scope='row'>".$ligne['nom_ue']."</th><td>".$ligne['credit_ue']."</td><td>".$ligne['coef_ue']."</td><td><form action='tmue.php' method='post'><input type='hidden' name='nom_ue' value='".$ligne['nom_ue']."' /><input type='submit' value='  MODIFIER  ' class='btn btn-primary btn-large'/>
</form></td></tr>";
}
?>
</table>
</p>
<p>
<table  class="table table-striped">
  <tr>
    <th scope="col">MODULE</th>
    <th scope="col">CREDIT</th>
    <th scope="col">COEFFICIENT</th>
    <th scope="col">ACTION</th>
  </tr>
<?php 
while($ligne1= $req1->fetch()) {
echo "<tr><th scope='row'>".$ligne1['nom_module']."</th><td>".$ligne1['credit_module']."</td><td>".$ligne1['coef_module']."</td><td><form action='tmmodule.php' method='post'><input type='hidden' name='nom_module' value='".$ligne1['nom_module']."' /><input type='submit' value='  MODIFIER  ' class='btn btn-primary btn-large'/>
</form></td></tr>";
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