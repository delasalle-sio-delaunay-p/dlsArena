<!-- HTML -->
<!DOCTYPE html>
<html lang="fr">

<!-- Entête -->
<head>
	<?php include_once('include/head.php'); ?>
</head>
<!-- /Entête -->

<!-- Corps -->
<body class="fixed-header">
<header>
	<?php include_once('include/header_menu.php'); ?>
</header>

<!-- Diaporama -->
<div id="wrapper">	

<div id="full-carousel" class="ken-burns carousel slide full-carousel carousel-fade" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#full-carousel" data-slide-to="0" class="active"></li>
		<li data-target="#full-carousel" data-slide-to="1"></li>
		<li data-target="#full-carousel" data-slide-to="2"></li>
		<li data-target="#full-carousel" data-slide-to="3"></li>
	</ol>
	
<div class="carousel-inner">

<!-- Page -->
<div class="item active inactiveUntilOnLoad">
	<img src="vues/img/slideshow/csgo_slide.jpg" alt="">
		<div class="container">
			<div class="carousel-caption">
				<h1 data-animation="animated animate1 bounceInDown">Counter-Strike : GO</h1>
				<p data-animation="animated animate7 fadeInUp">Tournoi CS:GO 5vs5</p>
				<a href="cs" class="btn btn-primary btn-lg btn-rounded" data-animation="animated animate10 fadeInDown">En savoir plus</a>
			</div>		
		</div>
</div>
<!-- /Page -->

<!-- Page -->
<div class="item">
	<img src="vues/img/slideshow/lol_slide.jpg" alt="">
		<div class="container">
			<div class="carousel-caption">
				<h1 data-animation="animated animate1 fadeInDown">League Of Legends</h1>
				<p data-animation="animated animate7 fadeIn">Tournoi LoL 5vs5</p>
				<a href="lol" class="btn btn-primary btn-lg btn-rounded" data-animation="animated animate10 fadeIn">En savoir plus</a>
			</div>
		</div>
</div>
<!-- /Page -->

<!-- Page -->
<div class="item">
	<img src="vues/img/slideshow/fifa_slide.jpg" alt="">
		<div class="container">
			<div class="carousel-caption">
				<h1 data-animation="animated animate1 fadeIn">Fifa 2018</h1>
				<p data-animation="animated animate7 fadeIn">Tournoi Fifa 1vs1</p>
				<a href="fifa" class="btn btn-primary btn-lg btn-rounded" data-animation="animated animate10 fadeIn">En savoir plus</a>
			</div>
		</div>
</div>
<!-- /Page -->

<!-- Page -->
<div class="item">
	<img src="vues/img/slideshow/rl_slide.jpg" alt="">
		<div class="container">
			<div class="carousel-caption">
				<h1 data-animation="animated animate1 fadeIn">Rocket League</h1>
				<p data-animation="animated animate7 fadeIn">Tournoi RocketLeague 3vs3</p>
				<a href="rl" class="btn btn-primary btn-lg btn-rounded" data-animation="animated animate10 fadeIn">En savoir plus</a>
			</div>
		</div>
</div>
<!-- /Page -->

<!-- Contrôleur -->
<a class="left carousel-control" href="#full-carousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
</a>

<a class="right carousel-control" href="#full-carousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
</a>
<!-- /Contrôleur -->

</div>
</div>
<!-- /Diaporama -->



	<section class="elements">
		<div class="container">
			<h3>DLS Arena 5</h3>
			<p>Évènement eSport.</p>
			<div id="countdown" class="margin-top-10"></div>
		</div>
	</section>

<!-- Modal Information -->
<div class="container">
	<div class="modal fade bs-modal" id="modalInformation" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">Information</h4>
				</div>
				<div class="modal-body">
					<p id="texte_message_information">Ceci est une information</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" data-dismiss="modal">Fermer</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Avertissement -->
<div class="container">
	<div class="modal fade bs-modal" id="modalAvertissement" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">Avertissement</h4>
				</div>
				<div class="modal-body">
					<p id="texte_message_avertissement">Ceci est un avertissement</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" data-dismiss="modal">Fermer</button>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
<!-- /Rejoindre -->

<!-- /Corps -->



<!-- Bas de page -->
<footer>
	<?php include_once('include/footer.php'); ?>
</footer>

<!-- Javascript -->
<script src="vues/plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="vues/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="vues/plugins/core.min.js"></script>
<script src="vues/plugins/countdown/jquery.countdown.min.js"></script>
<script src="vues/plugins/easypiechart/jquery.easypiechart.min.js"></script>
<script src="vues/plugins/owl-carousel/owl.carousel.min.js"></script>
<script>
(function($) {
"use strict";
var owl = $(".owl-carousel");

owl.owlCarousel({
items : 4, //4 items above 1000px browser width
itemsDesktop : [1000,3], //3 items between 1000px and 0
itemsTablet: [600,1], //1 items between 600 and 0
itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
});

$(".next").click(function(){
owl.trigger('owl.next');
return false;
})
$(".prev").click(function(){
owl.trigger('owl.prev');
return false;
})
})(jQuery);
</script>
<script>
	$(function() {
		$('#countdown').countdown('2018/03/24').on('update.countdown', function(event) {
			var $this = $(this).html(event.strftime(''
			+'<span>%-w week%!w</span>'
			+'<span>%-d day%!d</span>'
			+'<span>%H hr</span>'
			+'<span>%M min</span>'
			+'<span>%S sec</span>'));
		});
		$('.chart-color').easyPieChart({
			easing: 'easeOutBounce',
			barColor: '#5eb404',
			trackColor: '#e3e3e3',
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
				}
		});
		
		$('.chart-extra').easyPieChart({
			easing: 'easeOutBounce',
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			}
		});
	});
</script>

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
<!-- /Javascript -->

<!-- /Bas de page -->

</body>
</html>