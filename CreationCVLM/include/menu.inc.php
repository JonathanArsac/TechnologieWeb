<?php
if (isset($_SESSION['connexion']) && $_SESSION['connexion']==true ){
?>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin:24px 0;">
		<a class="navbar-brand" href="javascript:void(0)">Accueil</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navb">
			<ul class="navbar-nav mr-auto">

				<li class="nav-item">
					<a class="nav-link" href="#">Vos projets</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Vos candidats</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#">Vos CV</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Vos lettres de motivations</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Vos candidatures</a>
				</li>

			</ul>
			<li>
				  <a href="index.php?page=14">   <?php echo "<span> Utilisateur : </span>".$_SESSION['identifiantPersonne']."   Déconnexion";?></a>
			</li>
		</div>
	</nav>
	<?php
}
?>
