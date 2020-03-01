<?php require_once('../../connexion.php'); ?>
<?php include "entete.php";?>
  <div id="bg1"></div>
		<div id="bg2"></div>
		<div id="outer">
			<div id="header">
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>AJOUT D'UN PROFESSEUR</h1>
        </div>
        <div class="row" >
          <div class="span9">
            <div class="widget-body">
              <div class="rigth-align">
<p>
							<form  enctype="multipart/form-data" action="taprof.php" method="post" class="form-group">

<fieldset>
<legend>NOUVEAU PROFESSEUR</legend>
<table>
<tr><td><label for="matricule">Matricule</label></td><td><input tabindex="4" id="matricule" name="matricule" type="text"  class="span6" placeholder="matricule..." required></td></tr>
<tr><td><label for="prenom">Prenom</label></td><td><input  tabindex="4" class="span6" type="text" name="prenom" id="prenom" placeholder="Prenom" /></td></tr>
<tr><td><label  for="nom">Nom</label></td><td><input tabindex="4" class="span6" type="text" name="nom" id="nom"  placeholder="Nom" /></td></tr>
<tr><td><label for="dnaiss">Date de naissance</label></td><td><input  tabindex="4" class="span6"  type="date" name="dnaiss" id="dnaiss" /></td></tr>
<tr><td><label for="lnaiss">Lieu de naissance</label></td><td><input  tabindex="4" class="span6"  type="text" name="lnaiss" id="lnaiss" /></td></tr>
<tr><td><label  for="adr">Adresse</label></td><td><input  tabindex="4" class="span6"  type="text" name="adr" id="adr" /></td></tr>
<tr><td><label for="sexe">Sexe : </label></td><td>Masculin<input  name="sexe" type="radio" value="M" id="sexe" checked="checked"/>Feminin<input  name="sexe" type="radio" value="F" id="sexe"/><br/></td></tr>
<tr><td><label for="tel">Telephone</label></td><td><input  tabindex="4" class="span6"  type="tel" name="tel" id="tel" /></td></tr>
<tr><td><label for="email">E-mail</label></td><td><input  tabindex="4" class="span6"  type="email" name="email" id="email" /></td></tr>
<tr><td><label  for="photo">Photo</label></td><td><input  tabindex="4" class="span6"  type="file" name="photo" id="photo"  /></td></tr>
<tr><td><label for="nation">Nationalite</label></td><td><input  tabindex="4" class="span6"  type="text" name="nation" id="nation" /></td></tr>
<tr><td><label  for="specialite">Specialite</label></td><td><input  tabindex="4" class="span6"  type="text" name="specialite" id="specialite"  /></td></tr>
<tr><td><label for="pass">Mot de passe</label></td><td><input  tabindex="4" class="span6"  type="password" name="pass" id="pass"/></td></tr>

</table>
</fieldset>
<input align="middle" type="submit" value="ENREGISTRER" class="btn btn-primary btn-large" />
</form>
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
     </div>          
        </div>
      </div>
    </div>
     </div>
    </div>	         
            
            
          
<?php include "pied.php";?>
	</body>
</html>