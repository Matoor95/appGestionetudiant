<?php
error_reporting(0);
require_once('../../connexion.php');
?>

<?php include "entete.php";
$req1=$bd->query("select nom_classe from classe");
$req2=$bd->query("select idparent,TEL,Nom,Prenom from parent");


$table='etudiant';

if(isset ($_POST['nume']) && isset( $_POST['prenom']) )
{
foreach($_POST as $index=>$v)
	{
	if($index!='table' )
	{	

$v=str_replace("'", "‘" ,$v);
	$insert1.="'".$v."',";
	$insert2.=''.$index.',';
	}
	
	}	

$insert1=substr($insert1,0,-1);
$insert2=substr($insert2,0,-1);




   $sql = 'insert into '.$table.' ('.$insert2.')   values('.$insert1.')';
    $req = $bd->prepare($sql);
    $req->execute();  
	
	

}	
	
?>
    <div class="content">
      <div class="container">
        <div class="page-header">
  
  <h1>AJOUT D'UN ETUDIANT</h1>
  <?php 
		  if($req)
	echo "L'étudiant a été ajouté avec succés";
else echo "Erreur lors de l'ajout";
?>
        </div>
        <div class="row">
          <div class="span9">
            <div class="widget-body">
              <div class="rigth-align">

<p>
							<form  enctype="multipart/form-data" action="#" method="post" class="form-group">

<fieldset>
<legend>NOUVEAU ETUDIANT</legend>
<table>
<?php 
echo "<tr><td><label for='nom_classe'>CLASSE</label></td><td>
<select name='nom_classe' id='nom_classe' />";
while($ligne1= $req1->fetch()) {
echo "<option  value=".$ligne1['nom_classe'].">".$ligne1['nom_classe']."</option>";
}?>
</select></td>
</tr>
<tr><td><label for="nume">Numero etudiant</label></td><td><input  tabindex="4" class="span6"   type="text" name="nume" id="nume" placeholder="Votre numero" /></td></tr>
<tr><td><label for="prenom">Prenom</label></td><td><input  tabindex="4" class="span6"   type="text" name="prenom" id="prenom" placeholder="Prenom" /></td></tr>
<tr><td><label  for="nom">Nom</label></td><td><input  tabindex="4" class="span6"   type="text" name="nom" id="nom"  placeholder="Nom" /></td></tr>
<tr><td><label for="dnaiss">Date de naissance</label></td><td><input  tabindex="4" class="span6"   type="date" name="dnaiss" id="dnaiss" /></td></tr>
<tr><td><label for="lnaiss">Lieu de naissance</label></td><td><input  tabindex="4" class="span6"   type="text" name="lnaiss" id="lnaiss" /></td></tr>
<tr><td><label  for="adr">Adresse</label></td><td><input  tabindex="4" class="span6"   type="text" name="adr" id="adr" /></td></tr>
<tr><td><label for="sexe">Sexe : </label></td><td>Masculin<input name="sexe" type="radio" value="M" id="sexe" checked="checked"/>Feminin<input name="sexe" type="radio" value="F" id="sexe"/><br/></td></tr>
<tr><td><label for="tel">Telephone</label></td><td><input  tabindex="4" class="span6"   type="tel" name="tel" id="tel" /></td></tr>
<tr><td><label for="email">E-mail</label></td><td><input  tabindex="4" class="span6"   type="email" name="email" id="email" /></td></tr>
<tr><td><label  for="photo">Photo</label></td><td><input  tabindex="4" class="span6"     type="file" name="photo" id="photo"  /></td></tr>
<tr><td><label for="nation">Nationalite</label></td><td><input  tabindex="4" class="span6"   type="text" name="nation" id="nation" /></td></tr>
<tr><td><label for="pass">Mot de passe</label></td><td><input  tabindex="4" class="span6"   type="password" name="pass" id="pass"/></td></tr>
<table>

<legend>INFORMATION PARENTS</legend>

<?php 
$req3=$bd->query("select *from parent");
echo "<select id='idparent' name='idparent'>";
echo "<option value=''>Selectionner </option>";
while($ligne3= $req3->fetch()) {
echo "<option  value=".$ligne3['idparent'].">".$ligne3['Prenom']. " ".$ligne3['Nom']." (id: ".$ligne3['idparent']. ")".$ligne3['TEL']." </option>";
}
echo "</select>";
?>

</td>
</tr>
</table>
</TABLE>


</fieldset>
<input type="submit" value="ENREGISTRER"class="btn btn-primary btn-large"/>
</form>
						</p>

          </div></div></div>
          <div class="span3 pull-right sidebar">
            <form class="form-search" action="retud.php" method="post">
              <div class="input-append">
              <legend>Rechercher</legend>
              <input type="text" class="span2 search-query" name="rechercher" placeholder="Rechercher ">
              <button type="submit" name="forminscription" class="btn">Rechercher</button>
              </div>
            </form>
<?php include "menudroite.php";?>
                                                   
          </div>          
        </div>
      </div>
    </div>			
                     
            
          
<?php include "pied.php";?>
	</body>
</html>