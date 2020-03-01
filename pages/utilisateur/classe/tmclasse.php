<?php require_once('../../connexion.php'); ?>
<?php include "entete.php";
$nom_classe=null;
if(isset($_POST['nom_classe']))
$nom_classe=$_POST['nom_classe'];     
$req=$bd->query("select * from classe where nom_classe='".$nom_classe."'"); 
$resultat= $req->fetch();
?>
 <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>MODIFICATION D'UNE CLASSE</h1>
        </div>
        <div class="row">
          <div class="span9">
            <div class="widget-body">
              <div class="rigth-align">
<p>
							<form action="ttmclasse.php" method="post">

<fieldset>
<legend>MODIFIER CLASSE</legend>
<table>
<tr><td><label for="nom_classe">CLASSE</label></td><td><input  tabindex="4" class="span6" type="text" name="nom_classe" id="nom_classe"   value="<?php echo $resultat['nom_classe'] ;?>" required="required"/></td></tr>
<tr><td><label for="nom_filiere">FILIERE</label></td><td><input  tabindex="4" class="span6" type="text"   name="nom_filiere" id="nom_filiere" value="<?php echo $resultat['nom_filiere'] ;?>" /></td></tr>
<tr><td><label  for="nom_dep">DEPARTEMENT</label></td><td><input  tabindex="4" class="span6" type="text"   name="nom_dep" id="nom_dep" value="<?php echo $resultat['nom_dep'] ;?>" /></td></tr>
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