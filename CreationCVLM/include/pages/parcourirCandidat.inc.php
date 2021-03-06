<?php
$pdo = new Mypdo();
$candidatManager = new CandidatManager($pdo);
$offreManager = new OffreManager($pdo);
$personneManager = new PersonneManager($pdo);


$candidats = $candidatManager->getCandidatForOneRecruteur($_SESSION['numeroPersonne']);
?>

<h4 class="text-center">Vos candidats</h4>
<div class="col-lg-9 offset-lg-1">


<div class="table-responsive">


<table class="table">

  <tr><th>Nom personne</th><th>Intitulé Offre</th><th>Etat Demande</th></tr>
  <?php
  foreach ($candidats as $candidat){
    if($offreManager->verifDate($candidat->getNumeroOffre())){
      if ($candidat->getEtatDemande()!=0){
        $intituleOffre = $offreManager->getIntituleByNumero($candidat->getNumeroOffre());
        $nomPersonne = $personneManager->getNomByNum($candidat->getNumeroPersonne());
        ?>
        <tr>
          <td><?php echo $nomPersonne;?>
          </td><td><?php echo $intituleOffre;?>
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
  </div>
  </div>
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
