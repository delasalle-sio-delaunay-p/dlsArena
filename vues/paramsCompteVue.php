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
					<div class="page-title">Mes paramètres</div>
					<ol class="breadcrumb">
						<li><a href="index" class="no-padding-left">Accueil</a></li>
						<li><a href="my-menu" class="no-padding-left">Menu - espace membre</a></li>
						<li class="active">Mes paramètres</li>
					</ol>	
				</div>
			</div>
		</section>

	
		<section class="elements">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-3">
						<h3>Vos paramètres de compte : </h3>
						<p>Vous rencontrez un problème ? <a href="contact-admin" class="no-padding-left">Cliquez ici pour vous contacter un administrateur.</a></p>
						<form method="post" action="">
						 	
						  <div class="form-group row">
						    <label for="colFormLabel" class="col-sm-6 col-form-label">Votre identifiant est : <?php if (isset($login)) { echo $login;} ?></label>
						  </div>

						  <div class="form-group row">
						    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" name="mail" id="mail" value=<?php if (isset($mail)) { echo $mail;} ?> required>
						    </div>
						  </div>

						  <div class="form-group row">
						    <label for="colFormLabel" class="col-sm-2 col-form-label">Nom</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="lastname" id="lastname" value=<?php if (isset($lastname)) { echo $lastname;} ?> required>
						    </div>
						  </div>

						  <div class="form-group row">
						    <label for="colFormLabel" class="col-sm-2 col-form-label">Prénom</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="firstname" id="firstname" value=<?php if (isset($firstname)) { echo $firstname;} ?> required>
						    </div>
						  </div>

						  <div class="form-group row">
						    <label for="colFormLabel" class="col-sm-2 col-form-label">Téléphone</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="tel" id="tel" value=<?php if (isset($tel)) { echo $tel;} ?>>
						    </div>
						  </div>

					    <div class="form-group row">
					      <label for="colFormLabel" class="col-sm-2 col-form-label">Classe</label>
					      <div class="col-sm-10">
						      <select name="classe" id="classe" class="form-control" required>
						        <?php 
                                    foreach ($lesClasses as $uneClasse)
                                    {
                                        if ($classe == $uneClasse->getId()) {
                                        echo "<option value=".$uneClasse->getId()." selected>".$uneClasse->getInitials()." - ".$uneClasse->getFullName()."</option>";	
                                        }
                                        else {
                                        echo "<option value=".$uneClasse->getId().">".$uneClasse->getInitials()." - ".$uneClasse->getFullName()."</option>";
                                        }
                                    }


                                ?>
						      </select>
						   </div>
					    </div>				  						  						  


						  <div class="form-group row">
						    <div class="col-sm-10">
						      <button type="submit" class="btn btn-primary">Mettre à jour</button>
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