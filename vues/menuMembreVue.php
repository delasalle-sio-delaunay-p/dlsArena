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
	
	<!-- wrapper -->
	<div id="wrapper">	

		<!--<section class="bg-primary">
			<div class="container">
				<h2 class="font-size-24 color-white font-weight-300">Menu espace membre</h2>
			</div>
		</section>-->

		<section class="bg-grey-50 border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="index">Accueil</a></li>
							<li class="active">Menu espace membre</li>
						</ol>	
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="container">
					<h3>Gérer mon compte</h3>
					<br/>
					<a href="my-settings"><button type="button" class="btn btn-primary btn-icon-right">Paramètres du compte<i class="fa fa-cog"></i></button></a>
					<a href="change-password"><button type="button" class="btn btn-primary btn-icon-right">Changer mon mot de passe<i class="fa fa-send"></i></button></a>
					<a href="contact-admin"><button type="button" class="btn btn-primary btn-icon-right">Contacter un administrateur<i class="fa fa-whatsapp"></i></button></a>
					<br/><br/>

					<h3>Inscription à la DLS Arena 5</h3>
					<br/>
					<a href="solo-registration"><button type="button" class="btn btn-success btn-icon-right">Inscription individuelle<i class="fa fa-check-square-o"></i></button></a>
					<a href="cancel-solo-registration"><button type="button" class="btn btn-success btn-icon-right">Se désinscrire<i class="fa fa-cog"></i></button></a>
					<button type="button" class="btn btn-success btn-icon-right">Récapitulatif de l'inscription<i class="fa fa-inbox"></i></button>
					<br/><br/>

					<h3>Gérer mon équipe</h3>
					<br/>
					<button type="button" class="btn btn-danger btn-icon-right">S'inscrire en équipe <i class="fa fa-check-square-o"></i></button>
					<button type="button" class="btn btn-danger btn-icon-right">Rejoindre une équipe <i class="fa fa-users"></i></button>
					<button type="button" class="btn btn-danger btn-icon-right">Gérer mon équipe <i class="fa fa-cog"></i></button>
					<button type="button" class="btn btn-danger btn-icon-right">Récapitulatif de l'inscription<i class="fa fa-inbox"></i></button>
					<br/><br/>
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