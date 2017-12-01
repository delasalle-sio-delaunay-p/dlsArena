<!DOCTYPE html>
<html lang="fr">
<head>
	<?php include_once('include/head.php'); 
	       include_once('modele/Outils.class.php'); 
	?>
</head>

<body class="fixed-header">
	<header>
		<?php include_once('include/header_menu.php'); ?>
	</header>
	<!-- /header -->
	
	<!-- wrapper -->
	<div id="wrapper">	
		<section class="border-bottom-1 border-grey-300 padding-10">
			<div class="container">
				<ol class="breadcrumb">
					<li><a href="index">Accueil</a></li>
					<li class="active">News</li>
				</ol>	
			</div>
		</section>
		
		<section class="bg-grey-50">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">

						<?php foreach($lesNews as $uneNews){ ?>
						<div class="panel panel-default panel-post">
							<div class="panel-body">
								<div class="post">
									<div class="post-header post-author">
										<a href="#" class="author" data-toggle="tooltip" title="YAKUZI"><img src="vues/img/user/avatar4.jpg" alt=""></a>
										<div class="post-title">
											<h3><a href="<?php echo 'news/'.$uneNews->getId(); ?>"><?php echo $uneNews->getTitle(); ?></a></h3>
											<ul class="post-meta">
												<li><a href="#"><i class="fa fa-user"></i> <?php echo $uneNews->getAuthor(); ?></a></li>
												<li><i class="fa fa-calendar-o"></i> <?php echo Outils::toDateTimeFR($uneNews->getCreated()); ?></li>
												<li><a href="<?php echo 'news/'.$uneNews->getId(); ?>"><i class="fa fa-comments"></i><span class="hidden-xs"><?php echo $uneNews->getNbComments().' commentaire(s)'; ?></span></a></li>
											</ul>
										</div>
									</div>
									<?php echo $uneNews->getContent(); ?>
								</div>
							</div>
						</div>
						<?php } ?>
						
						<div class="text-right">
							<ul class="pagination">
								<li class="disabled"><a href="#"><span>&laquo;</span></a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#"><span>&raquo;</span></a></li>
							</ul>  
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