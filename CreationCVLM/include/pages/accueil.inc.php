
<?php
$pdo = new Mypdo();
$offreManager = new OffreManager ($pdo);

$dernieresOffres = $offreManager->getLesDernieresOffres(); //tableau de citation valides
?>
<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
			<?php
				$i = 0;
				foreach ($dernieresOffres as $derniereOffre){
					if($i==0){
						echo "<li data-target=\"#myCarousel\" data-slide-to=\"".$i."\" class=\"active\"></li>" ;
					}else{
						echo "<li data-target=\"#myCarousel\" data-slide-to=\"".$i."\" ></li>" ;
					}
					$i++;
				}
			?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
			<?php
				$i = 0;
				foreach ($dernieresOffres as $derniereOffre){

					echo "<div class=\"carousel-item"; if($i==0){echo " active";} echo "\">";
								echo "<h4>".$derniereOffre->getIntituleOffre()."</h4>";
								echo "<p >".$derniereOffre->getNumeroRecruteur()."</p>";
								echo $derniereOffre->getLieuOffre();
								echo $derniereOffre->getFourchetteSalarialeOffre();
								echo $derniereOffre->getDescriptionOffre();
					echo	"</div>";

				$i++;
				}
				?>
    </div>

		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
  </div>
</div>
