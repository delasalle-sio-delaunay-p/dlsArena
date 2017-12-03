<!DOCTYPE html>
<html lang="fr">
<head>
<?php 

include_once('include/head.php'); 
include_once('modele/DAO.Class.php');
$dao = new DAO();
$lesClasses = $dao->getClasses();
unset($dao);
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
					<div class="page-title">Contacter un administrateur</div>
					<ol class="breadcrumb">
						<li><a href="index" class="no-padding-left">Accueil</a></li>
						<li><a href="my-menu" class="no-padding-left">Menu - espace membre</a></li>
						<li class="active">Contacter un administrateur</li>
					</ol>	
				</div>
			</div>
		</section>

	
		<section class="elements">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-offset-2">
						<div class="title">
							<h4><i class="fa fa-envelope"></i>RESTONS EN CONTACT !</h4>
							<p>Nous veillerons à vous répondre dans les plus brefs délais.</p>
						</div>
						<form>

							<div class="form-group">
						      
							      <select name="destinataire" id="destinataire" class="form-control" required>
							        <option value="dls@nexart.fr" selected>Choisir un destinataire...</option>
							        <option value="dls@nexart.fr">L'équipe - dls@nexart.fr</option>
							        <option value="dls@nexart.fr">Titouan B. - réseau</option>
							        <option value="dls@nexart.fr">Florian L. - réseau</option>
							        <option value="dls@nexart.fr">Aymeric R. - réseau</option>
							        <option value="dls@nexart.fr">Olivier M. - réseau</option>
							        <option value="dls@nexart.fr">Mickaël C. - développeur</option>
							        <option value="dls@nexart.fr">Pierre D. - développeur</option>
							      </select>
							   
						    </div>			

							<div class="form-group">
								<input type="text" class="form-control" name="mail" placeholder="Votre adresse mail" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="sujet" placeholder="Votre sujet" required>
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="7" name="message"  placeholder="Votre message"></textarea>
							</div>
							<div class="text-center margin-top-30">
								<button type="button" class="btn btn-primary btn-lg btn-rounded btn-shadow">Envoyer le message</button>
							</div>
						</form>
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