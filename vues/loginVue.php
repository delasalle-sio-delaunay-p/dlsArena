<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<?php include_once('include/head.php'); ?>
</head>

<body class="fixed-header">
	<header>
		<?php include_once('include/header_menu.php'); ?>
	</header>
	<!-- /header -->
	
	<div class="modal-search">
		<div class="container">
			<input type="text" class="form-control" placeholder="Type to search...">
			<i class="fa fa-times close"></i>
		</div>
	</div><!-- /.modal-search -->
	
	<!-- wrapper -->
	<div id="wrapper">	
		<section class="hero hero-panel" style="background-image: url(vues/img/cover/cover-login.jpg);">
			<div class="hero-bg"></div>
			<div class="container relative">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-none margin-auto">
						<div class="panel panel-default panel-login">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-user"></i> Connexion à l'espace membre</h3>
							</div>
							<div class="panel-body">
								<!--<a class="btn btn-block btn-social btn-facebook"><i class="fa fa-facebook"></i> Connect with Facebook</a>
								<div class="separator"><span>or</span></div>-->								
								<form action="login" method="post">
									<div class="form-group input-icon-left">
										<i class="fa fa-user"></i>
										<input type="text" class="form-control" name="login" placeholder="Mon identifiant" required>
									</div>
									<div class="form-group input-icon-left">
										<i class="fa fa-lock"></i>
										<input type="password" class="form-control" name="password" placeholder="Mon mot de passe" required>
									</div>
									<input type="submit" value="Valider" class="btn btn-primary btn-block">
									
										<div class="form-actions">
										<div class="checkbox checkbox-primary">
											<input type="checkbox" id="checkbox"> 
											<label for="checkbox">Se souvenir</label>
										</div>
									</div>
								</form>
							</div>
							<div class="panel-footer">
								Pas de compte ? <a href="register">S'inscrire maintenant</a><br/>
								Mot de passe oublié ? <a href="index">Cliquez ici</a>
							</div>
						</div>
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