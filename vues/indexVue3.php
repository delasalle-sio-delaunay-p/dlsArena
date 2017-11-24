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
</ol>
<div class="carousel-inner">

<!-- Page -->
<div class="item active inactiveUntilOnLoad">
<img src="vues/img/slideshow/1.jpg" alt="">
<div class="container">
<div class="carousel-caption">
<h1 data-animation="animated animate1 bounceInDown">The Witcher 3: Wild Hunt</h1>
<p data-animation="animated animate7 fadeInUp">The Witcher 3: Wild Hunt est un jeu vidéo en monde ouvert de type action-RPG développé par le studio polonais CD Projekt RED et sorti le 19 mai 2015 sur PC sous système Windows, PlayStation 4 et Xbox One.</p>
<a href="" data-toggle="modal" class="btn btn-primary btn-lg btn-rounded" data-animation="animated animate10 fadeInDown">En savoir plus</a>
</div>		
</div>
</div>
<!-- /Page -->

<!-- Page -->
<div class="item">
<img src="vues/img/slideshow/2.jpg" alt="">
<div class="container">
<div class="carousel-caption">
<h1 data-animation="animated animate1 fadeInDown">The Last Of US</h1>
<p data-animation="animated animate7 fadeIn">Le survival action The Last of Us sur PS3 suit Joel et d'Ellie à travers les Etats-Unis. Les deux devront s'entraider pour survivre à une mystérieuse peste. La nature commence à s'approprier les villes abandonnées et les quelques survivants s'entretuent pour récupérer le peu de nourriture et d'armes encore présentes.</p>
<a href="" data-toggle="modal" class="btn btn-primary btn-lg btn-rounded" data-animation="animated animate10 fadeIn">En savoir plus</a>
</div>
</div>
</div>
<!-- /Page -->

<!-- Page -->
<div class="item">
<img src="vues/img/slideshow/3.jpg" alt="">
<div class="container">
<div class="carousel-caption">
<h1 data-animation="animated animate1 fadeIn">Star Wars: Battlefront</h1>
<p data-animation="animated animate7 fadeIn">Star Wars : Battlefront est un FPS se déroulant dans l'univers de la célèbre saga. Le joueur y crée son personnage, choisit son camp entre la rébellion et l'Empire, et peut revivre des batailles mémorables sur des lieux bien connus. Il peut combattre à pied, ou à bord d'un de ses véhicules favoris.</p>
<a href="" data-toggle="modal" class="btn btn-primary btn-lg btn-rounded" data-animation="animated animate10 fadeIn">En savoir plus</a>
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

<!-- Les derniers jeux -->
<section class="bg-grey-50 border-bottom-1 border-grey-200 relative">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="title outline">
<h4><i class="fa fa-heart"></i> Jeux récents</h4>
<p>Les derniers jeux du moment sont ici !</p>
</div>
</div>
</div>
<div class="row">

<!-- Jeu -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<div class="card card-hover">
<div class="card-img">
<img src="vues/img/blog/md/1.jpg" alt="">
<div class="category"><span class="label label-warning">PC</span></div>
<div class="meta"><a href=""><i class="fa fa-heart-o"></i> <span>15</span></a></div>
</div>
<div class="caption">
<h3 class="card-title"><a href="">Assassin's Creed Syndicate</a></h3>
<ul>
<li>March 11, 2016</li>
</ul>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit cras felis mauris, accumsan.</p>
</div>
</div>
</div>
<!-- /Jeu -->

<!-- Jeu -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<div class="card card-hover">
<div class="card-img">
<img src="vues/img/blog/md/2.jpg" alt="">
<div class="category"><span class="label label-success">Xbox One</span></div>
<div class="meta"><a href=""><i class="fa fa-heart-o"></i> <span>8</span></a></div>
</div>
<div class="caption">
<h3 class="card-title"><a href="">Guardians of the Galaxy 2</a></h3>
<ul>
<li>March 15, 2016</li>
</ul>
<p>Donec maximus sodales tellus a molestie. In eu orci vitae ligula iaculis sollicitudin.</p>
</div>
</div>
</div>
<!-- /Jeu -->

<!-- Jeu -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<div class="card card-hover">
<div class="card-img">
<img src="vues/img/blog/md/3.jpg" alt="">
<div class="category"><span class="label label-primary">PS4</span></div>
<div class="meta"><a href=""><i class="fa fa-heart-o"></i> <span>12</span></a></div>
</div>
<div class="caption">
<h3 class="card-title"><a href="">The Witcher 3: Wild Hunt</a></h3>
<ul>
<li>Febr 21, 2016</li>
</ul>
<p>Proin at efficitur purus. Suspendisse eu erat ante. Ut lectus arcu, mollis id eleifend et.</p>
</div>
</div>
</div>
<!-- /Jeu -->

<!-- Jeu -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<div class="card card-hover">
<div class="card-img">
<img src="vues/img/blog/md/4.jpg" alt="">
<div class="category"><span class="label label-danger">Steam</span></div>
<div class="meta"><a href=""><i class="fa fa-heart-o"></i> <span>10</span></a></div>
</div>
<div class="caption">
<h3 class="card-title"><a href="">Grand Theft Auto 5</a></h3>
<ul>
<li>Apr 21, 2016</li>
</ul>
<p>Suspendisse potenti. Ut pretium, erat a cursus bibendum, nisi lectus egestas.</p>
</div>
</div>
</div>
<!-- /Jeu -->

<!-- Jeu -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<div class="card card-hover">
<div class="card-img">
<img src="vues/img/blog/md/5.jpg" alt="">
<div class="category"><span class="label label-primary">PS4</span></div>
<div class="meta"><a href=""><i class="fa fa-heart-o"></i> <span>4</span></a></div>
</div>
<div class="caption">
<h3 class="card-title"><a href="">Deadpool The Game</a></h3>
<ul>
<li>Unknown Release Date</li>
</ul>
<p>Nullam eu tellus feugiat, lobortis ante a, pulvinar magna.</p>
</div>
</div>
</div>
<!-- /Jeu -->

<!-- Jeu -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<div class="card card-hover">
<div class="card-img">
<img src="vues/img/blog/md/6.jpg" alt="">
<div class="category"><span class="label label-success">Xbox One</span></div>
<div class="meta"><a href=""><i class="fa fa-heart-o"></i> <span>16</span></a></div>
</div>
<div class="caption">
<h3 class="card-title"><a href="">Grand Theft Auto One</a></h3>
<ul>
<li>May 30, 2016</li>
</ul>
<p> Pellentesque id justo molestie, sodales leo nec, molestie nulla.</p>
</div>
</div>
</div>
<!-- /Jeu -->

</div>

<div class="text-center"><a href="" class="btn btn-primary btn-lg btn-shadow btn-rounded btn-icon-right margin-top-10 margin-bottom-20">Voir plus...<i class="fa fa-angle-right"></i></a></div>
</div>
</section>
<!-- /Les derniers jeux -->

<!-- Les derniers commentaires -->
<section>	
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="title outline">
<h4><i class="fa fa-star"></i> Les derniers commentaires</h4>
<p>On raconte pas notre vie ici !</p>
</div>
</div>
</div>
<div class="row slider">
<div class="owl-carousel">

<!-- Commentaire -->
<div class="card card-list">
<div class="card-img">
<img src="vues/img/review/1.jpg" alt="">
<span class="label label-success">7.2</span>
</div>
<div class="caption">
<h4 class="card-title"><a href="">Uncharted 4</a></h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
</div>
<!-- /Commentaire -->

<!-- Commentaire -->
<div class="card card-list">
<div class="card-img">
<img src="vues/img/review/2.jpg" alt="">
<span class="label label-warning">5.4</span>
</div>
<div class="caption">
<h4 class="card-title"><a href="">Hitman: Absolution</a></h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
</div>
<!-- /Commentaire -->

<!-- Commentaire -->
<div class="card card-list">
<div class="card-img">
<img src="vues/img/review/3.jpg" alt="">
<span class="label label-danger">2.1</span>
</div>
<div class="caption">
<h4 class="card-title"><a href="">Last of Us 2</a></h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
</div>
<!-- /Commentaire -->

<!-- Commentaire -->
<div class="card card-list">
<div class="card-img">
<img src="vues/img/review/4.jpg" alt="">
<span class="label label-success">6.9</span>
</div>
<div class="caption">
<h4 class="card-title"><a href="">Bioshock: Infinite</a></h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
</div>
<!-- /Commentaire -->

<!-- Commentaire -->
<div class="card card-list">
<div class="card-img">
<img src="vues/img/review/5.jpg" alt="">
<span class="label label-success">7.2</span>
</div>
<div class="caption">
<h4 class="card-title"><a href="">Grand Theft Auto 5</a></h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
</div>
<!-- /Commentaire -->

<!-- Commentaire -->
<div class="card card-list">
<div class="card-img">
<img src="vues/img/review/6.jpg" alt="">
<span class="label label-warning">5.4</span>
</div>
<div class="caption">
<h4 class="card-title"><a href="">DayZ</a></h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
</div>
<!-- /Commentaire -->

<!-- Commentaire -->
<div class="card card-list">
<div class="card-img">
<img src="vues/img/review/7.jpg" alt="">
<span class="label label-danger">2.1</span>
</div>
<div class="caption">
<h4 class="card-title"><a href="">Liberty City</a></h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
</div>
<!-- /Commentaire -->
</div>

<!-- Contrôleur -->
<a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
<a href="#" class="next"><i class="fa fa-angle-right"></i></a>
<!-- /Contrôleur -->

</div>
</div>
</section>
<!-- /Les derniers commentaires -->

<!-- Rejoindre -->
<section class="bg-success subtitle-lg">
<div class="container">
<h2>Rejoindre la DLS ARENA c'est simple !</h2>
<a href="" target="_blank" class="btn btn-white">Nous rejoindre<i class="fa fa-user margin-left-10"></i></a>
</div>
</section>
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
<!-- /Javascript -->

<!-- /Bas de page -->

</body>
</html>