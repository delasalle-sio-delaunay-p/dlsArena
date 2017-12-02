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
					<div class="page-title">Inscription</div>
					<ol class="breadcrumb">
						<li><a href="index" class="no-padding-left">Accueil</a></li>
						<li class="active">Inscription</li>
					</ol>	
				</div>
			</div>
		</section>

	
		<section class="elements">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-3">
						<h3>Formulaire d'inscription</h3>
						<p>Vous avez déjà un compte ? <a href="login" class="no-padding-left">Cliquez ici pour vous connecter.</a></p>
						<form method="post" action="">
						 
						  <div class="form-group row">
						    <label for="colFormLabel" class="col-sm-2 col-form-label">Identifiant</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="login" id="login" placeholder="Votre identifiant" required>
						    </div>
						  </div>

						  <div class="form-group row">
						    <label for="colFormLabel" class="col-sm-2 col-form-label">Mot de passe</label>
						    <div class="col-sm-10">
						      <input type="password" class="form-control" name="password" id="password" placeholder="Votre mot de passe" required>
						    </div>
						  </div>

						  <div class="form-group row">
						    <label for="colFormLabel" class="col-sm-2 col-form-label">Confirmation</label>
						    <div class="col-sm-10">
						      <input type="password" class="form-control" name="passwordConf" id="passwordConf" placeholder="Confirmer votre mot de passe" required>
						    </div>
						  </div>

						  <div class="form-group row">
						    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" name="mail" id="mail" placeholder="Votre adresse mail" required>
						    </div>
						  </div>

						  <div class="form-group row">
						    <label for="colFormLabel" class="col-sm-2 col-form-label">Nom</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Votre nom" required>
						    </div>
						  </div>

						  <div class="form-group row">
						    <label for="colFormLabel" class="col-sm-2 col-form-label">Prénom</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Votre prénom" required>
						    </div>
						  </div>

						  <div class="form-group row">
						    <label for="colFormLabel" class="col-sm-2 col-form-label">Téléphone</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="tel" id="tel" placeholder="Votre téléphone">
						    </div>
						  </div>

					    <div class="form-group row">
					      <label for="colFormLabel" class="col-sm-2 col-form-label">Classe</label>
					      <div class="col-sm-10">
						      <select name="classe" id="classe" class="form-control" required>
						        <option value="0"selected>Choisir...</option>
						        <?php 
                                    foreach ($lesClasses as $uneClasse)
                                    {
                                        echo "<option value=".$uneClasse->getId().">".$uneClasse->getInitials()." - ".$uneClasse->getFullName()."</option>";
                                    }


                                ?>
						      </select>
						   </div>
					    </div>				  						  						  


						  <div class="form-group row">
						    <div class="col-sm-10">
						      <button type="submit" class="btn btn-primary">Inscription</button>
						    </div>
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