<?php 
error_reporting(0);
session_start();
if (!$_SESSION['login'] && !$_SESSION['pass'] ) {

header("Location:../../index.php"); }


require_once('../connexion.php');
 include "entete.php";?>
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>INFORMATIONS</h1>
        </div>
<?php  
$req=$bd->query("select id_article,titre,resume,auteur,message,nom_module from article order by id_article DESC");
?>        
        <div class="row">
          <div class="span12">
            <div class="widget-body">
              <div class="rigth-align">
               <div class="container">
          <div class="row-fluid">
            <ul class="thumbnails">
<?php error_reporting(0);
while($ligne= $req->fetch()) {
echo "<li class='span3'>
                <div class='thumbnail'>";
				switch ($ligne['nom_module']){
				  case 'ALGO': echo "<img src='../../img/algo.jpg' >";break;
				  case 'JAVA': echo "<img src='../../img/java.png' >";break;
				  case 'TELECOM': echo "<img src='../../img/telecom.jpg' >";break;
				  case 'administration': echo "<img src='../../img/admin.jpg'>";break;
				  case 'SE': echo "<img src='../../img/se.jpg' >";break;
				  case 'WEB': echo "<img src='../../img/web.png'>";break;
				  case 'RESEAU': echo "<img src='../../img/reseau.jpg' >";break;
				  case 'CALNUM': echo "<img src='../../img/calnum.jpg'>";break;
				  case 'STAT': echo "<img src='../../img/stat.jpg' >";break;
				  case 'BD': echo "<img src='../../img/bd.png' >";break;
				  case 'UML': echo "<img src='../../img/uml.jpg' >";break;
				  default :echo "<img src='../../img/admin.jpg' >";break;}
	echo "
                  <div class='caption'>
                    <h3>"
                      .$ligne['titre'].
                    "</h3>
                    <p>"
                      .$ligne['resume'].
                    "</p>
                  </div>
                  <div class='widget-footer'>
                    <p>
                     "
                      .$ligne['auteur'].
                    "
                    </p>
                  </div>
                </div>
              </li>";
}
?>
            </ul>
          </div>
        </div>
          </div></div></div>
          </div>          
        </div>
      </div>
    </div>
<?php include "pied.php";?>
	</body>
</html>