<?php
$pdo = new Mypdo();
$candidatManager = new CandidatManager($pdo);
$offreManager = new OffreManager($pdo);
$candidats = $candidatManager->getCandidatForOnePersonne($_SESSION['numeroPersonne']);
?>
<h1>Liste Candidatures</h1>


<table class="table">

  <tr><th>Numero Offre</th><th>Etat Demande</th></tr>
  <?php
  foreach ($candidats as $candidat){
    if($offreManager->verifDate($candidat->getNumeroOffre())){
     ?>
    <tr>
      </td><td><?php echo $candidat->getNumeroOffre();?>
      </td><td><?php if($candidat->getEtatDemande()==2){
        echo "En Attente";
      }elseif($candidat->getEtatDemande()==1){
        echo "Accepté";
      }else{
        echo "Refusé";
      } ?>
    </tr>
  <?php } }?>
  </table>
