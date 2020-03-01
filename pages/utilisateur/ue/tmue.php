<?php require_once('../../connexion.php'); ?>
<?php include "entete.php";
$nom_ue=null;
if(isset($_POST['nom_ue']))
$nom_ue=$_POST['nom_ue'];     
$req=$bd->query("select * from ue where nom_ue='".$nom_ue."'"); 
$resultat= $req->fetch();
?>
 <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>MODIFICATION D'UNE UNITE D'ENSEIGNEMENT</h1>
        </div>
        <div class="row">
          <div class="span9">
            <div class="widget-body">
              <div class="rigth-align">
<p>
							<form action="ttmue.php" method="post">

<fieldset>
<legend>MODIFIER UE</legend>
<table>
<tr><td><label for="nom_ue">UE</label></td><td><input  tabindex="4" class="span6" type="text" name="nom_ue" id="nom_ue"   value="<?php echo $resultat['nom_ue'] ;?>" /></td></tr>
<tr><td><label for="credit_ue">CREDIT</label></td><td><input  tabindex="4" class="span6" type="text"   name="credit_ue" id="credit_ue" value="<?php echo $resultat['credit_ue'] ;?>" /></td></tr>
<tr><td><label  for="coef_ue">COEFFICIENT</label></td><td><input  tabindex="4" class="span6" type="text"   name="coef_ue" id="coef_ue" value="<?php echo $resultat['coef_ue'] ;?>" /></td></tr>
</table>
</fieldset>
<input type="submit" value="MODIFIER" class='btn btn-primary btn-large'/>
</form>
						</p>
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