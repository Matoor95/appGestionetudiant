<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>ECOLE SUPERIEUR DE MANAGEMENT ET DE TELECOMMUNICATION SUP MTI BENI MELLAL</title>

	<meta name="description" content="User login page" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />


	<!-- PNotify -->

	<link href="pnotify/dist/pnotify.css" rel="stylesheet">
	<link href="pnotify/dist/pnotify.buttons.css" rel="stylesheet">
	<link href="pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- text fonts -->
	<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="assets/css/ace.min.css" />

	<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
	<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

	<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

	<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<style>
	body {
		background-color: white;
		background-image: url(ecole.jpeg)
	}
</style>

<body class="login-layout">
	<div class="main-container">
		<div class="main-content">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="login-container">
						<div class="center">
							<h1>


								<span class="white" id="id-text2">Page d'authentification</span>
							</h1>
							<h4 class="blue" id="id-company-text">&copy; ECOLE SUPERIEUR DE MANAGEMENT ET DE TELECOMMUNICATION SUP MTI BENI MELLAL</h4>
						</div>

						<div class="space-6"></div>

						<div class="position-relative">
							<div id="login-box" class="login-box visible widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header blue lighter bigger">
											<i class="ace-icon fa fa-lock"></i>
											Veuillez entrer votre login et votre mot de passe
										</h4>

										<div class="space-6"></div>

										<form method="post" action="tconnexion.php">
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" class="form-control" name='login' id='login_' placeholder="Login" />
														<i class="ace-icon fa fa-user"></i>
													</span>
												</label>

												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="password" name='pass' class="form-control" placeholder="Mot de passe" />
														<i class="ace-icon fa fa-lock"></i>
													</span>
												</label>

												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														Profile : <select name="type_connection">
															<option value="etudiant">Etudiant</option>
															<option value="parent">Parent</option>
															<option value="utilisateur">Utilisateur</option>
															<option value="professeur">Professeur</option>
														</select>
														<i class="ace-icon fa fa-group"></i>
													</span>
												</label>

												<div class="space"></div>

												<div class="clearfix">
													<label class="inline">
														<input type="checkbox" class="ace" />
														<span class="lbl"> Se souvenir de moi</span>
													</label>

													<input type="submit" class="width-35 pull-right btn btn-sm btn-primary">
													<i class="ace-icon fa fa-key"></i>
													<span class="bigger-110">Login</span>
													</input>
												</div>

												<div class="space-4"></div>
											</fieldset>
										</form>

										<div class="social-or-login center">
											<span class="bigger-110" id="code_retour">---</span>
										</div>

										<div class="space-6"></div>


									</div><!-- /.widget-main -->

									<div class="toolbar clearfix">
										<div>
											<a href="#" data-target="#forgot-box" class="forgot-password-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												mot de passe oublié
											</a>
										</div>

										<div>
											<a href="#" data-target="#signup-box" class="user-signup-link">
												Créér un compte
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div>
								</div><!-- /.widget-body -->
							</div><!-- /.login-box -->

							<div id="forgot-box" class="forgot-box widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header red lighter bigger">
											<i class="ace-icon fa fa-key"></i>
											Réinitialisation de mot de passe
										</h4>

										<div class="space-6"></div>
										<p id='titre_reinit'>
											Veuillez renseigner votre mail
										</p>

										<form id='reinitialiser_pass'>
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="email" id="email_reinit" class="form-control" placeholder="Email" />
														<i class="ace-icon fa fa-envelope"></i>
													</span>
												</label>

												<div class="clearfix">
													<button type="button" onclick="reinitialiser()" class="width-35 pull-right btn btn-sm btn-danger">
														<i class="ace-icon fa fa-lightbulb-o"></i>
														<span class="bigger-110">Envoyer!</span>
													</button>
												</div>
											</fieldset>
										</form>
									</div><!-- /.widget-main -->

									<div class="toolbar center">
										<a href="#" data-target="#login-box" class="back-to-login-link">
											Retour à la page de connexion
											<i class="ace-icon fa fa-arrow-right"></i>
										</a>
									</div>
								</div><!-- /.widget-body -->
							</div><!-- /.forgot-box -->

							<div id="signup-box" class="signup-box widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header green lighter bigger">
											<i class="ace-icon fa fa-users blue"></i>
											Création de nouveau compte
										</h4>

										<div class="space-6"></div>
										<p id="rapport_pass"> Veuillez renseigner vos informations: </p>

										<form id="nouveau_compte">
											<fieldset>


												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" id="prenom" class="form-control" placeholder="Votre prénom et nom" />
														<i class="ace-icon fa fa-user"></i>
													</span>
												</label>

												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="email" id="email" class="form-control" placeholder="Email" />
														<i class="ace-icon fa fa-envelope"></i>
													</span>
												</label>

												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" id="nom" class="form-control" placeholder="Votre structure" />
														<i class="ace-icon fa fa-envelope"></i>
													</span>
												</label>

												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" id="statut" class="form-control" placeholder="Votre fonction" />
														<i class="ace-icon fa fa-work"></i>
													</span>
												</label>

												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="email" id="telephone" class="form-control" placeholder="Numéro de téléphone" />
														<i class="ace-icon fa fa-phone"></i>
													</span>
												</label>



												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="password" id="password" class="form-control" placeholder="Mot de passe" />
														<i class="ace-icon fa fa-lock"></i>
													</span>
												</label>

												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="password" id="confirmer" class="form-control" placeholder="Confirmer mot de passe" />
														<i class="ace-icon fa fa-retweet"></i>
													</span>
												</label>



												<div class="space-24"></div>

												<div class="clearfix">
													<button type="reset" class="width-30 pull-left btn btn-sm">
														<i class="ace-icon fa fa-refresh"></i>
														<span class="bigger-110">Annuler</span>
													</button>

													<button type="button" onclick="new_account()" class="width-65 pull-right btn btn-sm btn-success">
														<span class="bigger-110">Enregistrer</span>

														<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
													</button>
												</div>
											</fieldset>
										</form>
									</div>

									<div class="toolbar center">
										<a href="#" data-target="#login-box" class="back-to-login-link">
											<i class="ace-icon fa fa-arrow-left"></i>
											Retour à la page de connexion
										</a>
									</div>
								</div><!-- /.widget-body -->
							</div><!-- /.signup-box -->
						</div><!-- /.position-relative -->


					</div>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.main-content -->
	</div><!-- /.main-container -->

	<!-- basic scripts -->

	<!--[if !IE]> -->
	<script src="assets/js/jquery-2.1.4.min.js"></script>

	<!-- PNotify -->
	<script src="pnotify/dist/pnotify.js"></script>
	<script src="pnotify/dist/pnotify.buttons.js"></script>
	<script src="pnotify/dist/pnotify.nonblock.js"></script>

	<!-- <![endif]-->

	<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
	<script type="text/javascript">
		if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
	</script>

	<!-- inline scripts related to this page -->
	<script type="text/javascript">
		// Paramètres permettant de recupérer l'id du prijet

		function $_GET(param) {
			var vars = {};
			window.location.href.replace(location.hash, '').replace(
				/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
				function(m, key, value) { // callback
					vars[key] = value !== undefined ? value : '';
				}
			);

			if (param) {
				return vars[param] ? vars[param] : null;
			}


			return vars;
		}

		var signin = $_GET('signin');
		var login = $_GET('login');

		if (signin == "failed") {
			$("#code_retour").html("<b style='color:red'>Login ou mot de passe incorrect</b>");

		}

		if (signin == "unactived") {
			$("#code_retour").html("<b style='color:red'>Votre compte est toujours en attente d'activation, veuillez réassayer plus tard</b>");
			document.getElementById('login_').style.background = 'RGBA(255,0,0,0.3)';
			$('#login_').val(login);

		}

		jQuery(function($) {
			$(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible'); //hide others
				$(target).addClass('visible'); //show target
			});
		});




		function intial() {
			$('body').attr('class', 'login-layout light-login');
			$('#id-text2').attr('class', 'grey');
			$('#id-company-text').attr('class', 'blue');
		}
		intial();

		//you don't need this, just used for changing background
		jQuery(function($) {
			$('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');

				e.preventDefault();
			});
			$('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');

				e.preventDefault();
			});
			$('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');

				e.preventDefault();
			});

		});






		//Création d'un nouveau compte d'utilisateur
		function new_account() {

			var prenom = $("#prenom").val();
			var nom = $("#nom").val();
			var email = $("#email").val();
			var statut = $("#statut").val();
			var telephone = $("#telephone").val();
			var password = $("#password").val();
			var confirmer = $("#confirmer").val();

			var statut_compte = 0;
			var table = "utilisateur";


			if (prenom.length == 0) {
				alert("Vous devez donner votre nom et prénom");
				document.getElementById('prenom').style.border = '2px solid red';
				return false;
			}

			if (email.length == 0) {
				alert("Vous devez donner renseigner votre email");
				document.getElementById('prenom').style.border = '1px solid gray';
				document.getElementById('email').style.border = '2px solid red';
				return false;
			}

			if (nom.length == 0) {
				alert("Vous devez renseigner votre structure");
				document.getElementById('email').style.border = '1px solid gray';
				document.getElementById('nom').style.border = '2px solid red';
				return false;
			}

			if (telephone.length == 0) {
				alert("Vous devez donner un numéro de téléphone");
				document.getElementById('nom').style.border = '1px solid gray';
				document.getElementById('telephone').style.border = '2px solid red';
				return false;
			}

			if (password.length == 0) {
				alert("Le mot de passe ne doit pas etre vide");
				return false;
			}


			if (password != confirmer) {
				$("#rapport_pass").html('<b style="color:red">Vos deux mots de passe ne correspondent pas</b>');
				return false;
			}

			$.ajax({
				type: "POST",
				url: "traitement/ajouter_user.php",
				data: {
					prenom: prenom,
					nom: nom,
					email: email,
					statut: statut,
					telephone: telephone,
					statut_compte: statut_compte,
					table: table,
					password: password
				}, // on peut ajouter des paramètres au POST: ici par exemple on peut récupérer le type : $_POST['type']
				success: result_d1,
				dataType: "json"
			});

			function result_d1(data) {

				if (data[0] == '00000') {

					$("#rapport_pass").html("");
					$("#nouveau_compte").html('<label class="block clearfix"> <i class="ace-icon fa fa-success"></i> <span class="block input-icon input-icon-right"> Votre compte a été enregistré avec succés. Nos administrateurs procédront à la validation  </span> </label>');
				} else {

					new PNotify({
						title: 'Erreur',
						text: "Erreur lors de l'enregistrement du compte, veuillez vérifier si votre email n'a pas déjà été utilisé",
						type: 'warning',
						styling: 'bootstrap3'
					});

				}

			}

		}



		//Réinitialisation de mot de passe
		function reinitialiser() {
			var email_reinit = $("#email_reinit").val();
			if (email_reinit.length == 0) {
				alert("Vous devez renseigner une adresse email valide");
				document.getElementById('email_reinit').style.border = '2px solid red';
				return false;
			}

			$.ajax({
				type: "POST",
				url: "traitement/reinitialiser.php",
				data: {
					email: email_reinit
				}, // on peut ajouter des paramètres au POST: ici par exemple on peut récupérer le type : $_POST['type']
				success: result_d1,
				dataType: "json"
			});

			function result_d1(data) {


				if (data == 1) {


					$("#titre_reinit").html('');

					$("#reinitialiser_pass").html('<label class="block clearfix"> <span class="block input-icon input-icon-right"> Un mail de réinitialisation a été envoyé à l\'adresse:  <b style="color:green">' + email_reinit + '</b> </span> </label>');
				} else {

					new PNotify({
						title: 'Erreur',
						text: "Vous ne pouvez pas effectuer de demande de réinitialisation, votre login n'est pas encore enregistré",
						type: 'warning',
						styling: 'bootstrap3'
					});

				}

			}

		}
	</script>


	<?php include "pied.php"; ?>
</body>

</html>