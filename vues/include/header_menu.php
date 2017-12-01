<!-- Menu -->
<div class="container">
	<span class="bar hide"></span>
	<a href="" class="logo"><img src="vues/img/logo.png" alt=""></a>
	<nav>

		<div class="nav-control">
			<ul>
				<li>
					<a href="index" class="dropdown-toggle">Accueil</a>
				</li>

				<li>
					<a href="news" class="dropdown-toggle">News</a>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle">L'événement</a>
					<ul class="dropdown-menu default">
						<li><a href="infos">Informations générales</a></li>
						<li><a href="team">Présentation de l'équipe</a></li>
						<li><a href="faq">F.A.Q</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle">Les jeux</a>
					<ul class="dropdown-menu default">
						<li><a href="cs">CS:GO</a></li>
						<li><a href="lol">League Of Legends</a></li>
						<li><a href="fifa">Fifa 2018</a></li>
						<li><a href="rl">Rocket League</a></li>
						<li><a href="pokemon">Pokémon</a></li>
						<!--<li><a href="#">Jeu 7</a></li>
						<li><a href="#">Jeu 8</a></li>
						<li><a href="#">Jeu 9</a></li>
						<li><a href="#">Jeu 10</a></li>-->
					</ul>
				</li>

				<li>
					<a href="register" class="dropdown-toggle">Inscription</a>
				</li>
				
				<li>
					<a href="login" class="dropdown-toggle">Connexion</a>
				</li>
				
				<li>
					<a href="contact" class="dropdown-toggle">Contact</a>
				</li>

			</ul>

		</div>

	</nav>

	<?php if (isset($_SESSION['fullName'])) { ?>
	    
	<div class="nav-right">
		<div class="nav-profile dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><?php echo $_SESSION['fullName']; ?></span></a>
		<ul class="dropdown-menu">
			<li><a href="my-menu"><i class="fa fa-bars"></i>Retour menu</a></li>
			<!--<li><a href="my-settings"><i class="fa fa-user"></i>Mon compte</a></li>-->
			<li><a href="my-settings"><i class="fa fa-gear"></i>Paramètres</a></li>
			<li class="divider"></li>
			<li><a href="logoff"><i class="fa fa-power-off"></i>Se déconnecter</a></li>
		</ul>
		</div>
	</div>
	<?php
    } else {?>
    
    
    <?php }?>
</div>