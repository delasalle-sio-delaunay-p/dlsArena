<!DOCTYPE html>
<html lang="fr">

<!-- Entête -->
<head>
	<?php include_once('include/head.php'); ?>
</head>
<!-- /Entête -->

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
		<section class="hero bg-dark">
			<div class="hero-bg"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title">Contactez-nous !</div>
					<ol class="breadcrumb">
						<li><a href="index" class="no-padding-left">Accueil</a></li>
						<li class="active">Contact</li>
					</ol>	
				</div>
			</div>
		</section>

		<section class="padding-30">
			<div class="container text-center">
				<h2 class="font-size-22 font-weight-300"> <span class="font-weight-500">Formulaire de contact</span> </h2>
			</div>
		</section>

		<!--<section class="border-top-1 border-bottom-1 border-grey-400 section no-padding no-margin">
			<div id="map" class="height-300"></div>
		</section>-->

		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3167.1220269747437!2d-1.668542653146133!3d48.12525052508511!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa5c8facc41e599e8!2sLyc%C3%A9e+de+la+Salle!5e0!3m2!1sfr!2sfr!4v1509120792090" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

		<section class="overflow-hidden">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="title">
							<h4><i class="fa fa-envelope"></i> Restons en contact !</h4>
							<p>Nous veillerons à vous répondre dans les plus brefs délais.</p>
						</div>
						<form action="contact" method="post">
							<div class="form-group">
								<input type="text" id="mail" name="mail" class="form-control" placeholder="Adresse mail" pattern="^.+@.+$" required>
							</div>
							<div class="form-group">
								<input type="text" id="sujet" name="sujet" class="form-control" placeholder="Sujet" required>
							</div>
							<div class="form-group">
								<textarea id="contenu" name="contenu" class="form-control" rows="7" placeholder="Message" required></textarea>
							</div>
							<div class="text-center margin-top-30">
								<button type="submit" class="btn btn-primary btn-lg btn-rounded btn-shadow">Envoyer le message</button>
							</div>
						</form>
					</div>
					<div class="col-lg-5 height-300">
						<img src="vues/img/content/contact.jpg" class="image-right" alt="">
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
  	  $(document).ready(function() {
   
    // affichage du message préparé par le contrôleur avec une fenêtre de dialogue
	// activée en JQuery dès que la page est prête
	<?php if($typeMessage == "avertissement") {?>
	afficher_avertissement("<?php echo $message; ?>");
	<?php } ?>
		
	<?php if($typeMessage == "information") {?>
	afficher_information("<?php echo $message; ?>");
	<?php } ?>

    // affichage d'une information avec une fenêtre modale
	function afficher_information(msg)
	{
		$('#texte_message_information').empty();
		$('#texte_message_information').append(msg);
		// affiche la boîte de dialogue 'affichage_message_information'
		$('#modalInformation').modal('show');
	}

	// affichage d'un avertissement avec une fenêtre modale
	function afficher_avertissement(msg)
	{
		$('#texte_message_avertissement').empty();
		$('#texte_message_avertissement').append(msg);
		// affiche la boîte de dialogue 'affichage_message_avertissement' 
		$('#modalAvertissement').modal('show');
	}

  });
  	</script>
</body>

</html>