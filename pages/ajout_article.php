<?php 
require_once('./connexion.php');
 ?>


  <h1>AJOUT D'UN article</h1>
       

							<form  enctype="multipart/form-data" action="tajouter_article.php" method="post" class="form-group">

		<fieldset>
			<legend>Nouveau article</legend>
			<table>
				<tr><td><label for="libele"> Libelee </label></td><td><input  tabindex="4" class="span6"   type="text" name="libele" id=" libele" placeholder="Votre  libele" /></td></tr>
<tr><td><label for="prix">Prix</label></td><td><input  tabindex="4" class="span6"   type="text" name="prix" id="prix" placeholder="Prix" /></td></tr>
			</table>
		</fieldset>
	</form>
