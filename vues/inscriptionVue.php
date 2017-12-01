<!DOCTYPE html>
<html lang="fr">
<head>
	<?php include_once('include/head.php'); ?>
</head>

<body>
	<header>
		<?php include_once('include/header_menu.php'); ?>
	</header>
	<!-- /header -->
		
	<!-- wrapper -->
	<div id="wrapper">

		<section class="hero bg-dark">
			<div class="hero-bg"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title">Inscription</div>
					<ol class="breadcrumb">
						<li><a href="index" class="no-padding-left">Accueil</a></li>
						<li class="active">Inscription</li>
					</ol>	
				</div>
			</div>
		</section>

	
		<section class="elements">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h3>Formulaire d'inscription</h3>
						<p>Vous avez déjà un compte ? <a href="login" class="no-padding-left">Cliquez ici pour vous connecter.</a></p>
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Identifiant" required>
									</div>
									<div class="form-group">
										<input type="password" class="form-control" placeholder="Mot de passe" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Adresse mail" required>
									</div>
									<div class="form-group">
										<input type="password" class="form-control" placeholder="Confirmation du mot de passe" required>
									</div>
								</div>
							</div>

							<br/>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Nom" required>
									</div>
									<div class="form-group">
									<span class="label label-primary">Votre classe : </span>
										<select name="classe">
											<option value="sio2">SIO2</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Prénom" required>
									</div>
								</div>
							</div>
							
							<br/>

							<!--<div class="form-group">
								<input type="text" class="form-control" placeholder="Security Code" required>
							</div>-->
							
							<div class="checkbox pull-left margin-top-10">
								<input type="checkbox" id="checkbox2"> 
								<label for="checkbox2">Je souhaite m'inscrire à la newsletter.</label>
							</div>

							<br/>

							<button type="button" class="btn btn-primary pull-right">Inscription</button>
						</form>
					</div>
				</div>
			</div>
		</section>

	</div>
	<!-- /#wrapper -->
	
	<!-- footer -->
	<footer>
		<?php include_once('include/footer.php'); ?>
	</footer>	
	<!-- /.footer -->
	
	<!-- Javascript -->
	<script src="vues/plugins/jquery/jquery-1.11.1.min.js"></script>
	<script src="vues/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="vues/plugins/core.min.js"></script>
</body>

</html>