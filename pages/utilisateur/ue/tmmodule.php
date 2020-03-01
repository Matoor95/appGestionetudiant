<?php require_once('../../connexion.php'); ?>
<?php include "entete.php";
$nom_module=null;
if(isset($_POST['nom_module']))
$nom_module=$_POST['nom_module'];     
$req=$bd->query("select * from module where nom_module='$nom_module'"); 
$resultat= $req->fetch();
?>
 <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>MODIFICATION D'UN MODULE</h1>
        </div>
        <div class="row">
          <div class="span9">
            <div class="widget-body">
              <div class="rigth-align">
<p>
							<form action="ttmmodule.php" method="post">

<fieldset>
<legend>MODIFIER MODULE</legend>
<table>
<tr><td><label for="nom_ue">UE</label></td><td><input  tabindex="4" class="span6" type="text" name="nom_ue" id="nom_ue"   value="<?php echo $resultat['nom_ue'] ;?>" /></td></tr>
<tr><td><label for="nom_module">MODULE</label></td><td><input  tabindex="4" class="span6" type="text" name="nom_module" id="nom_module"   value="<?php echo $resultat['nom_module'] ;?>" /></td></tr>
<tr><td><label for="credit_module">CREDIT</label></td><td><input  tabindex="4" class="span6" type="text"   name="credit_module" id="credit_module" value="<?php echo $resultat['credit_module'] ;?>" /></td></tr>
<tr><td><label  for="coef_module">COEFFICIENT</label></td><td><input  tabindex="4" class="span6" type="text"   name="coef_module" id="coef_module" value="<?php echo $resultat['coef_module'] ;?>" /></td></tr>
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