<?php require_once('../connexion.php');
include "entete.php";
$req1=$bd->query("select nom_classe from classe");
$req2=$bd->query("select nom_module from module");
?>
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>AJOUT DES NOTES</h1>
        </div>
        <div class="row">
          <div class="span12">
            <div class="widget-body">
              <div class="rigth-align">

<p>
							<form  enctype="multipart/form-data" action="tanote.php" method="post">

<div class="container">            
  <table class="table">
 
<tr><td><label for='nom_classe'>CLASSE</label></td><td>
<select name='nom_classe' id='nom_classe' />
<?php while($ligne1= $req1->fetch()) {
echo "<option  value=".$ligne1['nom_classe'].">".$ligne1['nom_classe']."</option>";
}?>
</select></td>
<td><label for='num_sem'>SEMESTRE</label></td><td>
<select name='num_sem' id='num_sem' />
<option  value='1'>semestre 1</option>
<option  value='2'>semestre 2</option>
</select></td>
<td><label for='type_eva'>TYPE </label></td><td>
<select name='type_eva' id='type_eva' />
<option  value='devoir'>DEVOIR</option>
<option  value='examen'>EXAMEN</option>
<option  value='td'>TD</option>
<option  value='tp'>TP</option>
</select></td></tr>
 
<tr><td><label for='nom_module'>MODULE</label></td><td>
<select name='nom_module' id='nom_module' />
<?php while($ligne2= $req2->fetch()) {
echo "<option  value=".$ligne2['nom_module'].">".$ligne2['nom_module']."</option>";
}?>
</select></td>
<td><label for='session'>SESSION</label></td><td>
<select name='session' id='session' />
<option  value='normal'>NORMAL</option>
<option  value='rattrapage'>RATTRAPAGE</option>
</select></td>
<td><label for="date_eva">DATE</label></td><td><input type="date" name="date_eva" id="date_eva" /></td></tr>

  </table>
</div>
<input type="submit" value="VALIDER" class="btn btn-primary btn-large" align="center"/>
</form>
						</p>

          </div></div></div>
                    
        </div>
      </div>
    </div>        
<?php include "pied.php";?>
	</body>
</html>