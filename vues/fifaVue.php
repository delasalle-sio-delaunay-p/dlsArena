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
	
	<!-- wrapper -->
	<div id="wrapper">	
		<section class="bg-grey-50 border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="index">Accueil</a></li>
							<li class="active">Fifa</li>
						</ol>	
					</div>
				</div>
			</div>
		</section>
		
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="post post-fl">
							<div class="post-thumbnail">
								<img src="https://media.contentapi.ea.com/content/dam/ea/easports/fifa/home/2017/june/5/homepage-share.jpg" alt="">
							</div>
							<div class="post-header">
								<div class="post-title">
									<h2>Fifa 2018</h2>
								</div>
							</div>
							<p>FIFA Football (également connu sous le nom FIFA Soccer ou simplement FIFA) est le nom générique d’une série de jeux vidéo de football édité à l’origine par Electronic Arts en 1993 et développé par la suite sous la forme d’une franchise.</p>
								
							<blockquote>
								<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
								<p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tristique ligula a erat rhoncus, eget egestas quam dignissim. Cras accumsan diam non efficitur consequat."</em></p>
								<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
							</blockquote>
										
							<p>FIFA 18 est un jeu vidéo de football développé par EA Canada et édité par EA Sports, sorti le 29 septembre 2017 sur PlayStation 3, PlayStation 4, Xbox 360, Xbox One, PC et Nintendo Switch. Il s'agit du vingt-cinquième opus de la franchise FIFA développé par EA Sports. L'international portugais Cristiano Ronaldo figure sur la jaquette du jeu. L'ancien footballeur brésilien Ronaldo apparaît sur l'édition Icône du jeu.</p>

							<div class="post-header">
								<div class="post-title">
									<h2>Informations sur le tournoi</h2>
								</div>
							</div>
							<p>Version du jeu : 0000, PS4.</p>
							<p>Format du tournoi : 1 contre 1, matchs de poule puis single elimination bracket.</p>
							<p>Les joueurs bannis par Riot Games ne pourront pas participer au tournoi.</p>
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