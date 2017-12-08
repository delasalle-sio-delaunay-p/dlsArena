<!DOCTYPE html>
<html lang="fr">
<head>
<?php 

include_once('include/head.php'); 
include_once('modele/DAO.Class.php');

?>
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
					<div class="page-title">Récapitulatif</div>
					<ol class="breadcrumb">
						<li><a href="index" class="no-padding-left">Accueil</a></li>
						<li><a href="my-menu" class="no-padding-left">Menu - espace membre</a></li>
						<li class="active">Récapitulatif des inscriptions</li>
					</ol>	
				</div>
			</div>
		</section>

	
		<section class="elements">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-3">
						<h3>Récapitulatif des inscriptions : </h3>
						<p>Vous rencontrez un problème ? <a href="contact-admin" class="no-padding-left">Cliquez ici pour vous contacter un administrateur.</a></p>
						
						<p><b>Inscriptions pour les tournois 1 joueur :  </b></p>
						
						<p><b>Inscriptions pour les tournois multi-joueurs : </b></p>

					</div>
				</div>
			</div>
		</section>

	<!-- Modals-->
	<?php include_once('include/modal.php'); ?>


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
	<script>
  		<?php include_once('include/modal.js'); ?>
  	</script>
</body>

</html>