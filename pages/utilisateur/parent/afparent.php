<?php require_once('../../connexion.php'); ?>
<?php include "entete.php";?>
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>AFFICHAGE DE LA LISTE DES PARENTS</h1>
        </div>
        <div class="row">
          <div class="span9">
            <div class="widget-body">
              <div class="rigth-align">
<p>
<?php $req=$bd->query("select Nom,Prenom,TEL,mail,sexe,adresse from parent order by Nom,Prenom"); 

?>
           
  <table class="table table-striped" >
    <thead>
    <th scope="col">PRENOM</th>
    <th scope="col">NOM</th>
    <th scope="col">TELEPHONE</th>
    <th scope="col">MAIL</th>
    <th scope="col">SEXE</th>
    <th scope="col">ADRESSE</th>
  </thead>
    <tbody>
<?php 
while($ligne= $req->fetch()) {
echo "<tr><th scope='row'>".$ligne['Prenom']."</th><th scope='row'>".$ligne['Nom']."</th><td>".$ligne['TEL']."</td><td>".$ligne['mail']."</td> <td>".$ligne['sexe']."</td><td>".$ligne['adresse']."</td></tr>";
}
?>
    </tbody>
  </table>
						</p>

          </div></div></div>
          <div class="span3 pull-right sidebar">
            <form class="form-search" action="reparent.php" method="post">
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