<?php error_reporting(0);

require_once('../connexion.php'); ?>
<?php include "entete.php";
session_start ();
$idparent=$_SESSION['idparent']  ;     
$req=$bd->query("select * from parent where idparent='".$idparent."'"); 
$resultat= $req->fetch();
?>
 <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>MODIFICATION D'UN PARENT</h1>
        </div>
        <div class="row">
          <div class="span12">
            <div class="widget-body">
              <div class="rigth-align">
<p>

							<form  enctype="multipart/form-data" action="ttmparent.php" method="post">

<fieldset>
<legend>MODIFIER UN PARENT</legend>
<table>
<tr>
  <tr><td><label for="idparent">Numero du parent</label></td><td><input  tabindex="4" class="span6"   type="text" name="idparent" id="idparent" placeholder="Votre numero" /></td></tr>
<tr><td><label for="Prenom">Prenom</label></td><td><input  tabindex="4" class="span6"   type="text" name="Prenom" id="Prenom" placeholder="Prenom" /></td></tr>
<tr><td><label  for="Nom">Nom</label></td><td><input  tabindex="4" class="span6"   type="text" name="Nom" id="Nom"  placeholder="Nom" /></td></tr>
<tr><td><label  for="adresse">Adresse</label></td><td><input  tabindex="4" class="span6"   type="text" name="adresse" id="adresse" /></td></tr>
<tr><td><label for="sexe">Sexe : </label></td><td>Masculin<input name="sexe" type="radio" value="M" id="sexe" checked="checked"/>Feminin<input name="sexe" type="radio" value="F" id="sexe"/><br/></td></tr>
<tr><td><label for="TEL">Telephone</label></td><td><input  tabindex="4" class="span6"   type="TEL" name="tel" id="TEL" /></td></tr>
<tr><td><label for="mail">E-mail</label></td><td><input  tabindex="4" class="span6"   type="mail" name="mail" id="mail" /></td>
<tr><td><label for="password">Mot de passe</label></td><td><input  tabindex="4" class="span6"   type="password" name="password" id="password"/></td></tr>
</tr>

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