<?php require_once('../connexion.php');
      include "entete.php";
$req=$bd->query("select nom_module from module");?>
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>PUBLIER UNE INFORMATION</h1>
        </div>
        <div class="row">
          <div class="span12">
            <div class="widget-body">
              <div class="rigth-align">
               
<p>
					<div id="contact-form">

						<form method="post" action="tarticle.php">
							
							<fieldset>
								<label for='nom_module'>MODULE</label></td><td>
                                 <select name='nom_module' id='nom_module' />
                                 <option  value="administration">administration</option>
                                     <?php while($ligne= $req->fetch()) {
                                           echo "<option  value=".$ligne['nom_module'].">".$ligne['nom_module']."</option>";
                                                                          }?>
                                </select>
								<input tabindex="4" id="titre" name="titre" type="text"  class="span11" placeholder="Titre: ..." >
								<input tabindex="2" id="resume" name="resume" type="text"  class="span11" placeholder="Resume: ...">
								<input tabindex="3" id="auteur" name="auteur" type="text"  class="span11" placeholder="Auteur: ...">
								<textarea tabindex="3" class="input-xlarge span11" id="message" name="message" rows="10" placeholder="Message: ..."></textarea>

								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-succes btn-large">POSTER LE MESSAGE</button>
								</div>
								
							</fieldset>

						</form>

					</div>
						</p>

          </div></div></div>
          
        </div>
      </div>
    </div>
<?php include "pied.php";?>
	</body>
</html>