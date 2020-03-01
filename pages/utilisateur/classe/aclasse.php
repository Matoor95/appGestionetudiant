<?php require_once('../../connexion.php'); ?>
<?php include "entete.php";?>
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>AJOUT DE CLASSE</h1>
        </div>
        <div class="row">
          <div class="span9">
            <div class="widget-body">
              <div class="rigth-align">
<p>
							<form  enctype="multipart/form-data" action="taclasse.php" method="post">

                             <fieldset>
                             <legend>NOUVEAU CLASSE</legend>
                               <table>
                                <tr><td><label for="nom_classe">NOM DE LA CLASSE</label></td><td><input  type="text"
name="nom_classe" id="nom_classe"  size="30" placeholder="nom de la classe" /></td></tr>
                                <tr><td><label for="nom_filiere">FILIERE</label></td><td><input type="text" name="nom_filiere" id="nom_filiere"  placeholder="nom de la filiere" /></td></tr>
                                <tr><td><label  for="nom_dep">DEPARTEMENT</label></td><td><input type="text" name="nom_dep" id="nom_dep"  placeholder="nom du departement" /></td></tr>
                                </table>
                              </fieldset>
                              <input type="submit" value="ENREGISTRER" class="btn btn-primary btn-large"/>
                            </form>
											
						</p>

          </div></div></div>
          <div class="span3 pull-right sidebar">

<?php include "menudroite.php";?>
                                                   
          </div>          
        </div>
      </div>
    </div>			
            
            
            
          
<?php include "pied.php";?>
	</body>
</html>