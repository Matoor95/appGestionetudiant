<?php

error_reporting(0);

 require_once('../../connexion.php');?>
<?php include "entete.php";


$table='parent';


foreach($_POST as $index=>$v)
  {
  if($index!='table' )
  { 

$v=str_replace("'", "‘" ,$v);
//if ($index=='password') {
 // $v=md5($v)
//}
  $insert1.="'".$v."',";
  $insert2.=''.$index.',';
  }
  
  } 

$insert1=substr($insert1,0,-1);
$insert2=substr($insert2,0,-1);
//$pass=md5($pass);




   $sql = 'insert into '.$table.' ('.$insert2.')   values('.$insert1.')';
    $req = $bd->prepare($sql);
    $req->execute();  
    
 
?>
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>AJOUT D'UN PARENT</h1>
        </div>
        <div class="row">
          <div class="span9">
            <div class="widget-body">
              <div class="rigth-align">

<p>
							<form  enctype="multipart/form-data" action="#" method="post" class="form-group">

<fieldset>
<legend>NOUVEAU PARENT</legend>
<table>

</select></td>
</tr>
<tr><td><label for="idparent">Numero du parent</label></td><td><input  tabindex="4" class="span6"   type="text" name="idparent" id="idparent" placeholder="Votre numero" /></td></tr>
<tr><td><label for="Prenom">Prenom</label></td><td><input  tabindex="4" class="span6"   type="text" name="Prenom" id="Prenom" placeholder="Prenom" /></td></tr>
<tr><td><label  for="Nom">Nom</label></td><td><input  tabindex="4" class="span6"   type="text" name="Nom" id="Nom"  placeholder="Nom" /></td></tr>
<tr><td><label  for="adresse">Adresse</label></td><td><input  tabindex="4" class="span6"   type="text" name="adresse" id="adresse" /></td></tr>
<tr><td><label for="sexe">Sexe : </label></td><td>Masculin<input name="sexe" type="radio" value="M" id="sexe" checked="checked"/>Feminin<input name="sexe" type="radio" value="F" id="sexe"/><br/></td></tr>
<tr><td><label for="TEL">Telephone</label></td><td><input  tabindex="4" class="span6"   type="tel" name="TEL" id="TEL" /></td></tr>
<tr><td><label for="mail">E-mail</label></td><td><input  tabindex="4" class="span6"   type="email" name="mail" id="mail" /></td>
<tr><td><label for="password">Mot de passe</label></td><td><input  tabindex="4" class="span6"   type="password" name="password" id="password"/></td></tr>
</tr>

</table>
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
              <button type="submit" class="btn">Rechercher</button>
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