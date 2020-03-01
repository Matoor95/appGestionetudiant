<?php require_once('../../connexion.php'); ?>
<?php include "entete.php";
$matricule=null;
if(isset($_POST['matricule']))
$matricule=$_POST['matricule'];     
$req=$bd->query("select * from professeur where matricule='".$matricule."'"); 
$resultat= $req->fetch();
?>
 <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>MODIFICATION D'UN PROFESSEUR</h1>
        </div>
        <div class="row">
          <div class="span9">
            <div class="widget-body">
              <div class="rigth-align">
<p>
							<form  enctype="multipart/form-data" action="ttmprof.php" method="post">

<fieldset>
<legend>MODIFIER PROFESSEUR</legend>
<table>
<tr><td><label for="matricule">Matricule</label></td><td><input  tabindex="4" class="span6" type="text" name="matricule" id="matricule"  size="30" placeholder="Votre matricule" value="<?php echo $resultat['matricule'] ;?>" /></td></tr>
<tr><td><label for="prenom">Prenom</label></td><td><input  tabindex="4" class="span6" type="text"   name="prenom" id="prenom" size="30" value="<?php echo $resultat['prenom'] ;?>" /></td></tr>
<tr><td><label  for="nom">Nom</label></td><td><input  tabindex="4" class="span6" type="text"   name="nom" id="nom" size="30" value="<?php echo $resultat['nom'] ;?>" /></td></tr>
<tr><td><label for="dnaiss">Date de naissance</label></td><td><input  tabindex="4" class="span6"  type="date" name="dnaiss" id="dnaiss" value="<?php echo $resultat['dnaiss'] ;?>"/></td></tr>
<tr><td><label for="lnaiss">Lieu de naissance</label></td><td><input  tabindex="4" class="span6" type="text"   name="lnaiss" id="lnaiss" value="<?php echo $resultat['lnaiss'] ;?>"/></td></tr>
<tr><td><label  for="adr">Adresse</label></td><td><input  tabindex="4" class="span6" type="text"   name="adr" id="adr"value="<?php echo $resultat['adr'] ;?>"  /></td></tr>
<tr><td><label>Sexe : </label></td><td><label>Masculin</label><input name="genre" type="radio" value="M" checked="checked"/><label>Feminin</label><input name="genre" type="radio" value="F"/></td></tr>
<tr><td><label for="tel">Telephone</label></td><td><input  tabindex="4" class="span6"  type="tel" name="tel" id="tel" value="<?php echo $resultat['tel'] ;?>"/></td></tr>
<tr><td><label for="email">E-mail</label></td><td><input  tabindex="4" class="span6"  type="email" name="email" id="email" value="<?php echo $resultat['email'] ;?>"/></td></tr>
<tr><td><label  for="photo">Photo</label></td><td><input  tabindex="4" class="span6"  type="file" name="photo" id="photo" value="<?php echo $resultat['nation'] ;?>" /></td></tr>
<tr><td><label for="nation">Nationalite</label></td><td><input  tabindex="4" class="span6" type="text"   name="nation" id="nation" value="<?php echo $resultat['nation'] ;?>"/></td></tr>
<tr><td><label  for="specialite">Specialite</label></td><td><input  tabindex="4" class="span6" type="text"  name="specialite" id="specialite"  value="<?php echo $resultat['specialite'] ;?>"/></td></tr>
<tr><td><label for="pass">Mot de passe</label></td><td><input  tabindex="4" class="span6"  type="password" name="pass" id="pass" value="<?php echo $resultat['pass'] ;?>"/></td></tr>

</table>
</fieldset>
<input type="submit" value="MODIFIER" class='btn btn-primary btn-large'/>
</form>
						</p>
</table>
						</p>

          </div></div></div>
          <div class="span3 pull-right sidebar">
            <form class="form-search" action="rprof.php" method="post">
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