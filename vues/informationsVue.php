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
							<li class="active">Informations générales</li>
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
							<!-- <div class="post-thumbnail">
								<img src="vues/img/content/fl.jpg" alt="">
							</div>-->
							<div class="post-header">
								<div class="post-title">
									<h2>Informations générales</h2>
								</div>
							</div>
							<p>AAAAAA</p>
								
							<blockquote>
								<h4>La citation du jour : </h4>
								<p><em>"Mais cassez-vous !"</em></p>
								<footer>Lala Rakotoarison <cite title="Source Title">Professeur d'éco, droit, management</cite></footer>
							</blockquote>
										
							<p>BBBBBBBBBB</p>
							<p>CCCCCCCCCC</p>
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