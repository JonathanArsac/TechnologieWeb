<?php
$pdo = new Mypdo();
$candidatManager = new CandidatManager($pdo);
$offreManager = new OffreManager($pdo);

$candidats = $candidatManager->getCandidatForOneRecruteur($_SESSION['numeroPersonne']);
?>
<h1>Liste Candidat</h1>


<table class="table">

  <tr><th>Numero personne</th><th>Numero Offre</th><th>Etat Demande</th></tr>
  <?php
  foreach ($candidats as $candidat){
    if($offreManager->verifDate($candidat->getNumeroOffre())){
      if ($candidat->getEtatDemande()!=0){?>
        <tr>
          <td><?php echo $candidat->getNumeroPersonne();?>
          </td><td><?php echo $candidat->getNumeroOffre();?>
          </td><td><?php if($candidat->getEtatDemande()==2){
            echo "En Attente";
          }elseif($candidat->getEtatDemande()==1){
            echo "Accepté";
          }else{
            echo "Refusé";
          } ?>
          <td><a href="index.php?page=6&amp;numeroOffre=<?php echo $candidat->getNumeroOffre() ?>&amp;numeroPersonne=<?php echo $candidat->getNumeroPersonne() ?>&amp;etat=1">Accepter</a></td>
          <td><a href="index.php?page=6&amp;numeroOffre=<?php echo $candidat->getNumeroOffre() ?>&amp;numeroPersonne=<?php echo $candidat->getNumeroPersonne() ?>&amp;etat=0 ">Refuser</a></td>
        </tr>
  <?php  } } }?>
  </table>
  <?php
    if(isset($_GET["etat"])){
      if($_GET["etat"]==1){
        $candidatManager->accepter($_GET["numeroPersonne"],$_GET["numeroOffre"]);
      }elseif ($_GET["etat"]==0) {
        $candidatManager->refuser($_GET["numeroPersonne"],$_GET["numeroOffre"]);
      }
      header("Refresh: 0;URL=index.php?page=6");

    }
  ?>
