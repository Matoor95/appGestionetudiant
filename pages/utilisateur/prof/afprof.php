<?php require_once('../../connexion.php'); ?>
<?php include "entete.php";?>
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>AFFICHAGE DE LA LISTE DES PROFESSEUR</h1>
        </div>
        <div class="row">
          <div class="span9">
            <div class="widget-body">
              <div class="rigth-align">
<p>
<?php $req=$bd->query("select nom,prenom,tel,email,photo,specialite from professeur order by nom,prenom"); 

?>
           
  <table class="table table-striped" >
    <thead>
    <th scope="col">PHOTO</th>
    <th scope="col">PRENOM</th>
    <th scope="col">NOM</th>
    <th scope="col">TELEPHONE</th>
    <th scope="col">EMAIL</th>
     <th scope="col">SPECIALITE</th>
  </thead>
    <tbody>
<?php 
while($ligne= $req->fetch()) {
echo "<tr><td><img src='images/".$ligne['photo']."' width='70' height='70' class='img-circle' /></td><th scope='row'>".$ligne['prenom']."</th><th scope='row'>".$ligne['nom']."</th><td>".$ligne['tel']."</td><td>".$ligne['email']."</td>"."<th scope='row'>".$ligne['specialite']."</th></tr>";
}
?>
    </tbody>
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