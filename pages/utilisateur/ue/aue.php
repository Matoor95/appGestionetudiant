<?php require_once('../../connexion.php'); ?>
<?php include "entete.php";
$req1=$bd->query("select nom_ue from ue");?>
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>AJOUT de UE et de MODULE</h1>
        </div>
        <div class="row">
          <div class="span9">
            <div class="widget-body">
              <div class="rigth-align">
<p>
							<form  enctype="multipart/form-data" action="taue.php" method="post">

                             <fieldset>
                             <legend>NOUVEAU UE</legend>
                               <table>
                                <tr><td><label for="nom_ue">UE</label></td><td><input   tabindex="4" class="span6"  type="text"
name="nom_ue" id="nom_ue"  size="30" placeholder="nom de l'ue" /></td></tr>
                                <tr><td><label for="credit_ue">Credit Horaire</label></td><td><input  tabindex="4" class="span6"  type="text" name="credit_ue" id="credit_ue"  placeholder="credit horaire de l'ue" /></td></tr>
                                <tr><td><label  for="coef_ue">Coefficient</label></td><td><input  tabindex="4" class="span6"  type="text" name="coef_ue" id="coef_ue"  placeholder="coefficient de l'ue" /></td></tr>
                                </table>
                              </fieldset>
                              <input type="submit" value="ENREGISTRER" class="btn btn-primary btn-large"/>
                            </form>
														<form  enctype="multipart/form-data" action="taue.php" method="post">

                             <fieldset>
                             <legend>NOUVEAU MODULE</legend>
                               <table>
                               <tr><td><label for='nom_ue_mod'>UE</label></td><td>
<select name='nom_ue_mod' id='nom_ue_mod' />
<?php while($ligne1= $req1->fetch()) {
echo "<option  value=".$ligne1['nom_ue'].">".$ligne1['nom_ue']."</option>";
}?>
</select></td></tr>
                                <tr><td><label for="nom_module">Nom du module</label></td><td><input  tabindex="4" class="span6"   type="text"
name="nom_module" id="nom_module"  placeholder="nom du module" /></td></tr>
                                <tr><td><label for="credit_module">Credit Horaire</label></td><td><input  tabindex="4" class="span6"  type="text" name="credit_module" id="credit_module" placeholder="credit horaire du module" /></td></tr>
                                <tr><td><label  for="coef_module">Coefficient</label></td><td><input  tabindex="4" class="span6"  type="text" name="coef_module" id="coef_module"  placeholder="coefficient du module" /></td></tr>
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