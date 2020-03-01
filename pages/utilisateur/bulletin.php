<?php require_once('../connexion.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "entete.php";?>
 <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>CHOISIR UNE CLASSE ET CONSULTER LES BULLETINS</h1>
        </div>
        <div class="row">
          <div class="span12">
            <div class="widget-body">
              <div class="rigth-align">
					<?php  
$req=$bd->query("select nom_classe from classe");
?>
<form  enctype="multipart/form-data" action="tbulletin.php" method="post">        
<label for='nom_classe'>CLASSE</label></td><td>
<select name='nom_classe' id='nom_classe' />
<?php while($ligne1= $req->fetch()) {
echo "<option  value=".$ligne1['nom_classe'].">".$ligne1['nom_classe']."</option>";
}?>
</select>
          <input type="submit" value="BULLETIN" class="btn btn-primary btn-large" align="center"/>
</form></div></div></div>          
        </div>
      </div>
    </div>			
            


<?php include "pied.php";?>
	</body>
</html>