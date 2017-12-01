<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="Évènement sur une journée, consacré aux jeux vidéo et au monde vidéoludique, organisé au lycée de la salle de Rennes">
	<meta name="author" content="Lycée de la salle de Rennes">
	<meta name="theme-color" content="#141619">
	<title>DLS Arena 5</title>

	<!-- FAVICON -->
	<link rel="shortcut icon" href="../vues/img/favicon.ico">
	<!-- /FAVICON -->

	<!-- CSS -->
	<link href="../vues/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../vues/css/theme.min.css" rel="stylesheet">
	<link href="../vues/css/custom.css" rel="stylesheet"> 
	<link href="../vues/css/helpers.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
	<link href="../vues/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="../vues/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="../vues/plugins/animate/animate.min.css" rel="stylesheet">
	<link href="../vues/plugins/animate/animate.delay.css" rel="stylesheet">
	<link href="../vues/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
</head>

<body class="fixed-header">
	<header>
		<!-- Menu -->
<div class="container">
	<span class="bar hide"></span>
	<a href="" class="logo"><img src="../vues/img/logo.png" alt=""></a>
	<nav>

		<div class="nav-control">
			<ul>
				<li>
					<a href="../index" class="dropdown-toggle">Accueil</a>
				</li>

				<li>
					<a href="../news" class="dropdown-toggle">News</a>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle">L'événement</a>
					<ul class="dropdown-menu default">
						<li><a href="../infos">Informations générales</a></li>
						<li><a href="../team">Présentation de l'équipe</a></li>
						<li><a href="../faq">F.A.Q</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle">Les jeux</a>
					<ul class="dropdown-menu default">
						<li><a href="../cs">CS:GO</a></li>
						<li><a href="../lol">League Of Legends</a></li>
						<li><a href="../fifa">Fifa 2018</a></li>
						<li><a href="../rl">Rocket League</a></li>
						<li><a href="pokemon">Pokémon</a></li>
						<!--<li><a href="#">Jeu 7</a></li>
						<li><a href="#">Jeu 8</a></li>
						<li><a href="#">Jeu 9</a></li>
						<li><a href="#">Jeu 10</a></li>-->
					</ul>
				</li>

				<li>
					<a href="../register" class="dropdown-toggle">Inscription</a>
				</li>
				
				<li>
					<a href="../login" class="dropdown-toggle">Connexion</a>
				</li>
				
				<li>
					<a href="../contact" class="dropdown-toggle">Contact</a>
				</li>

			</ul>

		</div>

	</nav>

	<?php if (isset($_SESSION['fullName'])) { ?>
	    
	<div class="nav-right">
		<div class="nav-profile dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><?php echo $_SESSION['fullName']; ?></span></a>
		<ul class="dropdown-menu">
			<li><a href="../my-menu"><i class="fa fa-bars"></i>Retour menu</a></li>
			<!--<li><a href="my-settings"><i class="fa fa-user"></i>Mon compte</a></li>-->
			<li><a href="../my-settings"><i class="fa fa-gear"></i>Paramètres</a></li>
			<li class="divider"></li>
			<li><a href="../logoff"><i class="fa fa-power-off"></i>Se déconnecter</a></li>
		</ul>
		</div>
	</div>
	<?php
    } else {?>
    
    
    <?php }?>
</div>
	</header>
	<!-- /header -->
	
	<!-- wrapper -->
	<div id="wrapper">	
		<section class="padding-top-50 padding-bottom-50">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="post post-single">
							<div class="post-header post-author">
								<a href="#" class="author" data-toggle="tooltip" title="YAKUZI"><img src="../vues/img/user/avatar4.jpg" alt="" /></a>
								<div class="post-title">
									<h2><a href="#">Titre</a></h2>
									<ul class="post-meta">
										<li><a href="#"><i class="fa fa-user"></i> Auteur</a></li>
										<li><i class="fa fa-calendar-o"></i> Post time</li>
										<li><a href="#"><i class="fa fa-comments"></i> nb <span class="hidden-xs">Commentaires</span></a></li>
									</ul>
								</div>
							</div>
							
							<p>Contenu</p>
							
							<div class="row margin-top-40">
								<div class="col-md-8">
									<div class="tags">
										<a href="../index">DLS Arena 5</a>
										<a href="http://www.lycee-delasalle.com/">Lycée De La Salle</a>
									</div>
								</div>
								<div class="col-md-4 hidden-xs hidden-sm">
									<ul class="share">	
										<li><a href="#" class="btn btn-sm btn-social-icon btn-facebook" data-toggle="tooltip" title="Share on facebook"><i class="fa fa-facebook"></i></a><span>312</span></li>
										<li><a href="#" class="btn btn-sm btn-social-icon btn-twitter" data-toggle="tooltip" title="Share on twitter"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" class="btn btn-sm btn-social-icon btn-google-plus" data-toggle="tooltip" title="Share on google"><i class="fa fa-google-plus"></i></a></li>
									</ul>	
								</div>
							</div>	
						</div>
							
						<div class="comments">
							<h4 class="page-header"><i class="fa fa-comment-o"></i> Commentaires</h4>
							<div class="media">
								<a class="media-left" href="#">
									<img src="img/user/avatar2.jpg" alt="" />
								</a>
								<div class="media-body">
									<div class="media-content">
										<a href="#" class="media-heading">Nathan Drake</a>
										<span class="date">Post time</span>
										<p>Contenu</p>
									</div>
								</div>
							</div>
									
													
							<div class="comment-form">
								<h4 class="page-header">Poster un commentaire</h4>
								<form>
									<div class="form-group">
										<textarea class="form-control" rows="6" placeholder="Votre commentaire"></textarea>
									</div>
									<button type="button" class="btn btn-primary btn-rounded btn-shadow pull-right">Envoyer le commentaire</button>
								</form>
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

	<div class="container">

	<div class="widget row">

    <!-- A propos -->
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
    <h4 class="title">DLS ARENA</h4>
    <p>Évènement sur une journée, consacré aux jeux vidéo et au monde vidéoludique, organisé le Samedi 24 Mars 2018 de 9h à 17h30.</p>
    </div>
    <!-- /A propos -->

    <!-- Liens -->
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <h4 class="title">Liens</h4>
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
    <ul class="nav">
    <li><a href="legal-mentions">Mentions légales</a></li>
    <li><a href="https://discord.gg/awJurmh" target="_blank">Discord</a></li>
    </ul>
		</div>

		</div>
	</div>
       <!-- /Liens -->

    <!-- Newlesting -->
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <h4 class="title">News par mail</h4>
    <p>Suivre l'actualité de la DLS ARENA par mail</p>
    <form method="post" action="#" class="btn-inline form-inverse">
    <input type="text" class="form-control" placeholder="Adresse mail..." />
    <button type="submit" class="btn btn-link"><i class="fa fa-envelope"></i></button>
    </form>
    </div>
    <!-- Newslesting -->

    </div>
    </div>
    <!-- /Bloc bas de page -->

    <!-- Social -->
    <div class="footer-bottom">
    <div class="container">	
    <ul class="list-inline">
    <li><a href="" class="btn btn-circle btn-social-icon" data-toggle="tooltip" title="Nous suivre sur Twitter"><i class="fa fa-twitter"></i></a></li>
    <li><a href="" class="btn btn-circle btn-social-icon" data-toggle="tooltip" title="Nous suivre sur Facebook"><i class="fa fa-facebook"></i></a></li>
    <!--<li><a href="" class="btn btn-circle btn-social-icon" data-toggle="tooltip" title="Nous suivre sur Google"><i class="fa fa-google-plus"></i></a></li>-->
    <li><a href="" class="btn btn-circle btn-social-icon" data-toggle="tooltip" title="Nous suivre sur Steam"><i class="fa fa-steam"></i></a></li>
    </ul>
    <!-- /Social -->

    <!-- Copyright -->
    Copyright &copy; 2017 DLS Arena - Tous droits réservés
    <!-- /Copyright -->

		</div>
	</div>
	</footer>	
	<!-- /.footer -->
	
	<!-- Javascript -->
	<script src="vues/plugins/jquery/jquery-1.11.1.min.js"></script>
	<script src="vues/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="vues/plugins/core.min.js"></script>
	
</body>

</html>