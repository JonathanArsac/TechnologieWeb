<?php
if (isset($_SESSION['connexion']) && $_SESSION['connexion']==true ){
?>
	<nav class="navbar navbar-expand-lg navbar-dark " style="margin:24px 0;">
		<a class="navbar-brand" href="javascript:void(0)">Accueil</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navb">
			<ul class="navbar-nav mr-auto">
				<?php
				if (isset($_SESSION['demandeur']) && $_SESSION['demandeur']==0 ){
				?>
				<li class="nav-item">
					<a class="nav-link" href="#">Vos annonces</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Vos candidats</a>
				</li>
					<?php
				}else{


					?>
				<li class="nav-item">
					<a class="nav-link" href="index.php?page=10">Vos CV</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Vos lettres de motivations</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Vos candidatures</a>
				</li>
				<?php
			}
			?>
				<li class="nav-item">
					<a class="nav-link" href="#">Les annonces</a>
				</li>
				</ul>
<ul class="nav navbar-nav navbar-right">
			<li class="nav-item">
				   <?php echo "<span class=\"hidden-xs hidden-sm\"> Utilisateur : ".$_SESSION['identifiantPersonne']." </span>  <a id=\"lienDeconnexion\" href=\"index.php?page=1\">  Déconnexion </a>";?>
			</li>
				</ul>
		</div>
	</nav>
	<?php
}
?>
