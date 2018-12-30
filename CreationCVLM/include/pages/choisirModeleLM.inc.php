


<?php
if(isset($_POST["supprimerLM"]) && file_exists($_POST["supprimerLM"])){
  unlink($_POST["supprimerLM"]);
}
 ?>


<div class="row">


<div class="col-sm-12 col-lg-5">
  <h3 class="text-center">
    Créer une nouvelle LM
  </h3>

  <div id="carouselModele" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carouselModele" data-slide-to="0" class="active"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="col-sm-10  col-lg-6 offset-lg-3 card">
        <div class="card-header">Modèle 1</div>
         <div class="card-body">En-Tête <br /> Date </div>
         <div class="card-footer"><a class="col-sm-5 offset-sm-4" href="index.php?page=13&modele=1">Choisir</a></div>
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
  <a class="col-sm-5 offset-sm-5 boutonPasserModele" href="index.php?page=13&modele=0" >Passer</a>
</div>
<div class="col-sm-12 col-lg-5 offset-lg-1">
<h3 class="text-center">
  Tes LM
</h3>
<div id="containerLMEnregistre" class="text-center col-lg-8 offset-lg-4">


<?php
if(file_exists($_SESSION["numeroPersonne"]."/LM")){
  $d = dir($_SESSION["numeroPersonne"]."/LM");
  while($entry = $d->read()) {
    if($entry!="." &&  $entry!=".." ){
      echo "<div class=\"row text-center\"><div class=\"col-sm-2\"><a  href=\"".$_SESSION["numeroPersonne"]."/LM/".$entry."\">".$entry."</a></div><div class=\"col-sm-5\"> <form method=\"post\" action=\"#\"><input type=\"hidden\" name=\"supprimerLM\" value=\"".$_SESSION["numeroPersonne"]."/LM/".$entry."\"><input type=\"submit\" value=\"Supprimer\" class=\"boutonSupprimer\" /></form></div></div>";
    }

  }
  $d->close();
}

?>
</div>
</div>

</div>
