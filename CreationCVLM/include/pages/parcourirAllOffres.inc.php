<?php
$pdo = new Mypdo();
$offreManager = new OffreManager ($pdo);
$personneManager = new PersonneManager($pdo);
$offres = $offreManager->getAllOffres();
?>

<h4 class="text-center">Toutes les annonces</h4>

<div class="col-lg-9 offset-lg-1">

  <input class="form-control  col-lg-3 " id="recherche" name="recherche" oninput="rechercher() "type="text" placeholder="Rechercher..."value="" />
  <select class=" col-lg-3 form-control"  id="selector">
          <option>Lieu</option>
          <option>Domaine</option>
  </select>
  <div class="table-responsive">
  <table class="table" >
    <thead>
    <tr><th>Intitulé</th><th>Domaine</th><th>Lieu</th><th>Date début</th><th>Date fin</th><th></th></tr>
    <tbody>

    <?php
    foreach ($offres as $offre){
      if($offreManager->verifDate($offre->getNumeroOffre())){

      ?>
      <tr class="ligneTab">
        <td><?php echo $offre->getIntituleOffre();?></td>
        <td class="sdomaine"><?php echo $offre->getDomaineOffre();?></td>
        <td class="slieu"><?php echo $offre->getLieuOffre();?></td>
        <td><?php echo $offre->getDateDebutOffre();?></td>
        <td><?php echo $offre->getDateFinOffre();?></td>
        <td> <a class="boutonCarouselAccueil" href="index.php?page=9&offre=<?php echo $offre->getNumeroOffre();?>"> Voir l'offre </a></td>
      </tr>
    <?php } } ?>

  </tbody>
    </table>
  </div>
</div>
