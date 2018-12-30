<?php
$pdo = new Mypdo();
$offreManager = new OffreManager ($pdo);
$personneManager = new PersonneManager($pdo);
$offres = $offreManager->getAllOffres();
?>

<h4>Toutes les annonces</h4>

<input id="champRecherche" name="string" type="text" value="" />
<input type="submit" value="Rechercher" onclick="searchString()" />
<select class=" col-lg-3 form-control"  id="typeRecherche">
        <option>Lieu</option>
        <option>Domaine</option>

      </select>
<div class="col-lg-9 offset-lg-1">
  <div class="table-responsive">
  <table class="table" >
    <thead>
    <tr><th>Intitulé</th><th>Domaine</th><th>Lieu</th><th>Date début</th><th>Date fin</th><th></th></tr>
    <tbody>

    <?php
    foreach ($offres as $offre){?>
      <tr>
        <td><?php echo $offre->getIntituleOffre();?></td>
        <td><?php echo $offre->getDomaineOffre();?></td>
        <td><?php echo $offre->getLieuOffre();?></td>
        <td><?php echo $offre->getDateDebutOffre();?></td>
        <td><?php echo $offre->getDateFinOffre();?></td>
        <td> <a class="boutonCarouselAccueil" href="index.php?page=9&offre=<?php echo $offre->getNumeroOffre();?>"> Voir l'offre </a></td>
      </tr>
    <?php } ?>

  </tbody>
    </table>
  </div>
</div>




  <script>
function searchString() {
  champRecherche = document.getElementById("champRecherche");
  typeRecherche = document.getElementById("typeRecherche");

}
</script>
