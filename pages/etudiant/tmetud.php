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
          <h1>MODIFICATION ETUDIANT</h1>
        </div>
        <div class="row">
          <div class="span12">
            <div class="widget-body">
              <div class="rigth-align">
<p>

							<form  enctype="multipart/form-data" action="ttmetud.php" method="post">

<fieldset>
<legend>MODIFIER ETUDIANT</legend>
<table>
<tr><td><label for="nume">Numero etudiant</label></td><td><input  tabindex="4" class="span6" type="password" name="nume" id="nume"  size="30"  value="<?php echo $resultat['nume'] ;?>" /></td></tr>
<tr><td><label for="prenom">Prenom</label></td><td><input  tabindex="4" class="span6" type="text"   name="prenom" id="prenom" size="30" value="<?php echo $resultat['prenom'] ;?>" /></td></tr>
<tr><td><label  for="nom">Nom</label></td><td><input  tabindex="4" class="span6" type="text"   name="nom" id="nom" size="30" value="<?php echo $resultat['nom'] ;?>" /></td></tr>
<tr><td><label for="dnaiss">Date de naissance</label></td><td><input  tabindex="4" class="span6"  type="date" name="dnaiss" id="dnaiss" value="<?php echo $resultat['dnaiss'] ;?>"/></td></tr>
<tr><td><label for="lnaiss">Lieu de naissance</label></td><td><input  tabindex="4" class="span6" type="text"   name="lnaiss" id="lnaiss" value="<?php echo $resultat['lnaiss'] ;?>"/></td></tr>
<tr><td><label  for="adr">Adresse</label></td><td><input  tabindex="4" class="span6" type="text"   name="adr" id="adr"value="<?php echo $resultat['adr'] ;?>"  /></td></tr>
<tr><td><label>Sexe : </label></td><td><label>Masculin</label><input name="sexe" type="radio" value="M" checked="checked"/><label>Feminin</label><input name="sexe" type="radio" value="F"/></td></tr>
<tr><td><label for="tel">Telephone</label></td><td><input  tabindex="4" class="span6"  type="tel" name="tel" id="tel" value="<?php echo $resultat['tel'] ;?>"/></td></tr>
<tr><td><label for="email">E-mail</label></td><td><input  tabindex="4" class="span6"  type="email" name="email" id="email" value="<?php echo $resultat['email'] ;?>"/></td></tr>
<tr><td><label  for="photo"><?php echo"<img src='../utilisateur/etud/images/$photo' width='70' height='70' class='img-circle' />";?></label></td><td><input  tabindex="4" class="span6"  type="file" name="photo" id="photo" value="<?php echo $resultat['photo'] ;?>"  /></td></tr>
<tr><td><label for="nation">Nationalite</label></td><td><input  tabindex="4" class="span6" type="text"   name="nation" id="nation" value="<?php echo $resultat['nation'] ;?>"/></td></tr>
<tr><td><label for="pass">Mot de passe</label></td><td><input  tabindex="4" class="span6"  type="password" name="pass" id="pass" value="<?php echo $resultat['pass'] ;?>"/></td></tr>

</table>
</fieldset>
</form>
						</p>
</table>
						</p>

          </div></div></div>

                                                   
          </div>          
        </div>
      </div>
    </div>	

<?php include "pied.php";?>
	</body>
</html>			