


<?php
if(isset($_POST["supprimerCV"]) && file_exists($_POST["supprimerCV"])){
  unlink($_POST["supprimerCV"]);
}
 ?>


<div class="row">


<div class="col-sm-12 col-lg-5">
  <h3 class="text-center">
    Créer un nouveau CV
  </h3>

  <div id="carouselModele" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carouselModele" data-slide-to="0" class="active"></li>
    <li data-target="#carouselModele" data-slide-to="1"></li>
    <li data-target="#carouselModele" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="col-sm-10  col-lg-6 offset-lg-3 card">
        <div class="card-header">Modèle 1</div>
         <div class="card-body">En-Tête <br /> Objectif du CV  <br /> Expérience  <br /> Formation <br />  Projets réalisés</div>
         <div class="card-footer"><a class="col-sm-5 offset-sm-4" href="index.php?page=11&modele=1">Choisir</a></div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="col-sm-10  col-lg-6 offset-lg-3 card">
        <div class="card-header">Modèle 2</div>
         <div class="card-body">En-Tête <br />  Projets réalisés  <br /> Réalisations <br />  Publications <br />  Références</div>
         <div class="card-footer"><a class="col-sm-5 offset-sm-4" href="index.php?page=11&modele=2">Choisir</a></div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="col-sm-10  col-lg-6 offset-lg-3 card">
        <div class="card-header">Modèle 3</div>
         <div class="card-body">En-Tête <br />  Expérience  <br /> Langues  <br /> Certifications</div>
         <div class="card-footer"><a class="col-sm-5 offset-sm-4" href="index.php?page=11&modele=3">Choisir</a></div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-sm-10 col-lg-6 offset-lg-3 card">
        <div class="card-header">Modèle 4</div>
         <div class="card-body">En-Tête  <br /> Objectif du CV <br />  Expérience  <br /> Formation <br />  Compétences  <br /> Langues  <br /> Projets réalisés</div>
         <div class="card-footer"><a class="col-sm-5 offset-sm-4" href="index.php?page=11&modele=4">Choisir</a></div>
      </div>
    </div>
  </div>


		<a class="carousel-control-prev" href="#carouselModele" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselModele" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
  </div>
  <a class="col-sm-5 offset-sm-5" href="index.php?page=11&modele=0" id="boutonPasserModele">Passer</a>
</div>
<div class="col-sm-12 col-lg-5 offset-lg-1">
<h3 class="text-center">
  Tes CV
</h3>
<?php
if(file_exists($_SESSION["numeroPersonne"])){
  $d = dir($_SESSION["numeroPersonne"]);
  while($entry = $d->read()) {
    if($entry!="." &&  $entry!=".." ){
      echo "<a href=\"".$_SESSION["numeroPersonne"]."/".$entry."\">".$entry."</a>";
      echo "<form method=\"post\" action=\"#\"><input type=\"hidden\" name=\"supprimerCV\" value=\"".$_SESSION["numeroPersonne"]."/".$entry."\"><input type=\"submit\" value=\"Supprimer\" /></form>";
    }

  }
  $d->close();
}

?>

</div>

</div>
