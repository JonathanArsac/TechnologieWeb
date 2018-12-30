<?php
$pdo = new Mypdo();
$offreManager = new OffreManager ($pdo);
$personneManager = new PersonneManager($pdo);
$candidatManager = new CandidatManager($pdo);



if(isset($_POST["supprimer"])){
  $candidatManager->supprimer($_POST["supprimer"]);
  $offreManager->supprimer($_POST["supprimer"]);
}
$offres = $offreManager->getAllOffresDunRecruteur($_SESSION['numeroPersonne']);
?>
<h4 class="text-center">Vos annonces</h4>
<div class="col-lg-9 offset-lg-1">


<div class="table-responsive ">
<table class="table table-hover">
  <thead>
    <tr><th>Intitulé</th><th>Domaine</th><th>Lieu</th><th>Date début</th><th>Date fin</th><th></th><th></th></tr>
  </thead>
<tbody>


  <?php
  foreach ($offres as $offre){
    if($offreManager->verifDate($offre->getNumeroOffre())){
    ?>
    <tr>
      <td><?php echo $offre->getIntituleOffre();?></td>
      <td><?php echo $offre->getDomaineOffre();?></td>
      <td><?php echo $offre->getLieuOffre();?></td>
      <td><?php echo $offre->getDateDebutOffre();?></td>
      <td><?php echo $offre->getDateFinOffre();?></td>
      <td><a class="bouton" href="index.php?page=8&offre=<?php echo $offre->getNumeroOffre();?>"> Modifier Offre </a></td>
      <td><form method="post" action="#"><input type="hidden" name="supprimer" value=<?php echo $offre ->getNumeroOffre() ?>><input type="submit" value="X" ></form></td>
    </tr>
  <?php  } } ?>
  </tbody>
  </table>
</div>
  <a class="bouton" href="./index.php?page=4">Créer une nouvelle offre</a>
</div>
