<?php
$pdo = new Mypdo();
$candidatManager = new CandidatManager($pdo);
$offreManager = new OffreManager($pdo);


if(isset($_POST["supprimer"])){
  $candidatManager->supprimer($_POST["supprimer"]);

}
$candidats = $candidatManager->getCandidatForOnePersonne($_SESSION['numeroPersonne']);
?>
<h4 class="text-center">Vos candidatures</h4>

<div class="col-lg-9 offset-lg-1">
  <div class="table-responsive">
    <table class="table">
    <thead>
      <tr><th>Intitulé de l'offre</th><th>Etat de la candidature</th><th></th><th></th></tr>
      </thead>
      <tbody>

      <?php
      foreach ($candidats as $candidat){
        if($offreManager->verifDate($candidat->getNumeroOffre())){
          $intituleOffre = $offreManager->getOffreParNumero($candidat->getNumeroOffre());
         ?>
        <tr>
        <td><?php echo $intituleOffre[0]->getIntituleOffre();?></td>
          </td><td><?php if($candidat->getEtatDemande()==2){
            echo "En Attente";
          }elseif($candidat->getEtatDemande()==1){
            echo "Accepté";
          }else{
            echo "Refusé";
          } ?>
          </td>
          <td><a class="boutonCarouselAccueil" href="index.php?page=9&offre=<?php echo $candidat->getNumeroOffre();?>"> Voir l'offre </a>  </td>
          <td><form method="post" action="#"><input type="hidden" name="supprimer" value=<?php echo $_SESSION["numeroPersonne"]; ?>><input type="submit" value="X" ></form></td>
        </tr>
      <?php }
          }?>

    </tbody>
      </table>
</div>
</div>
