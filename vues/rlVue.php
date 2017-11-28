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
							<li class="active">Rocket League</li>
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
								<img src="http://www.konsolum.com/wp-content/uploads/maxresdefault-19-1170x500.jpg" alt="">
							</div>
							<div class="post-header">
								<div class="post-title">
									<h2>Rocket League</h2>
								</div>
							</div>
							<p>Rocket League est un jeu vidéo de sport développé par Psyonix, sorti en juillet 2015 sur Windows et sur PlayStation 4, en février 2016 sur Xbox One, en septembre 2016 sur Linux et Mac et en novembre 2017 sur Nintendo Switch.</p>
																	
							<p>Rocket League est un mélange de jeu de voiture et de jeu de football. Par équipe ou en solo, le joueur contrôle un véhicule et peut ainsi frapper dans un ballon, avec pour objectif de marquer dans le but adverse. Le joueur possède notamment un boost permettant d'accélérer ou de voler dans les airs de façon temporaire, de sauts pour réceptionner ou frapper la balle lorsqu'elle est en l'air ainsi que de tonneaux sur le côté pour tirer sur le côté ou en avant permettant d'accélérer temporairement quand utilisé à plusieurs reprises, au cas où le joueur est à court de boost.</p>

							<div class="post-header">
								<div class="post-title">
									<h2>Informations sur le tournoi</h2>
								</div>
							</div>
							<p>Version du jeu : 0000, PS4.</p>
							<p>Format du tournoi : 3 contre 3, double elimination bracket.</p>
							<p>Les joueurs bannis par Steam ne pourront pas participer au tournoi.</p>
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