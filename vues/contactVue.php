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
						<form>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Adresse mail" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Sujet" required>
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="7" placeholder="Message"></textarea>
							</div>
							<div class="text-center margin-top-30">
								<button type="button" class="btn btn-primary btn-lg btn-rounded btn-shadow">Envoyer le message</button>
							</div>
						</form>
					</div>
					<div class="col-lg-5 height-300">
						<img src="vues/img/content/contact.jpg" class="image-right" alt="">
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
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="vues/plugins/gmaps/prettify.js"></script>
	<script src="vues/plugins/gmaps/gmaps.js"></script>
	<script>
	(function($) {
	"use strict";
		var map;
		$(document).ready(function(){
			prettyPrint();
			var map = new GMaps({
				div: '#map',
				scrollwheel: false,
				lat: -12.043333,
				lng: -77.028333
			});
			var marker = map.addMarker({
				lat: -12.042,
				lng: -77.028333
			});
		});
	})(jQuery);
	</script>
</body>

</html>