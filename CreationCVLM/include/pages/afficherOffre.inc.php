<h4 class="text-center">Offre</h4>

<?php
$pdo = new Mypdo();
$offreManager = new OffreManager($pdo);
$personneManager = new PersonneManager($pdo);
$candidatManager = new CandidatManager($pdo);

if(isset($_POST["candidater"])){
  $candidatManager->add($_SESSION["numeroPersonne"],$_GET["offre"]);
}
$offre = $offreManager->getOffreParNumero($_GET["offre"]);
$recruteur = $personneManager->getPersonneParNumeroPersonne($offre[0]->getNumeroRecruteur());


?>
<div class="col-lg-9 offset-lg-1">


<form action="#"  method="post">
<h5>Coordonnées recruteur</h5>
<p>
  <?php echo strtoupper($recruteur[0]->getNomPersonne())." ".ucfirst($recruteur[0]->getPrenomPersonne())."<br /> Mail : ".$recruteur[0]->getMailPersonne();?>

</p>
  <h5 >Intitulé : </h5>
    <p><?php echo $offre[0]->getIntituleOffre();?><p>
  </br>
  <h5 >Domaine : </h5>
    <p><?php echo $offre[0]->getDomaineOffre();?></p>

  </br>
  <h5 >Description : </h5>
    <p  ><?php echo $offre[0]->getDescriptionOffre();?></p>

  </br>
  <h5 >Mission : </h5>
    <p   ><?php echo $offre[0]->getMissionOffre();?></p>

  </br>
  <h5 >Profil recherche : </h5>
    <p  ><?php echo $offre[0]->getProfilRechercheOffre();?></p>

  </br>
  <h5 >Type Contrat : </h5>
    <p   ><?php echo $offre[0]->getTypeContratOffre();?></p>

  </br>
  <h5 >Type Occupation : </h5>
    <p   ><?php echo $offre[0]->getTypeOccupationOffre();?></p>

  </br>
  <h5 >Durée semaine : </h5>
    <p  ><?php echo $offre[0]->getDureeSemaineOffre();?></p>

  </br>
  <h5>Lieu : </h5>
    <p ><?php echo $offre[0]->getLieuOffre();?></p>

  </br>
  <h5 >Fourchette Salariale : </h5>
    <p ><?php echo $offre[0]->getFourchetteSalarialeOffre();?></p>

  </br>
  <h5>Contrainte : </h5>
    <p ><?php echo $offre[0]->getContrainteOffre();?></p>

  </br>
  <h5 >Date début : </h5>
    <p><?php echo $offre[0]->getDateDebutOffre();?></p>
  </br>
  <h5 >Date fin : </h5>
  <p><?php echo $offre[0]->getDateFinOffre();?></p>

  </br>

  <?php
  if($_SESSION["demandeurPersonne"]==1){

    $candidature = $candidatManager->getEtatPourCandidatPourUneOffre($_SESSION["numeroPersonne"],$_GET["offre"]);
    if($candidature == NULL){
      echo 	"<input class=\"bouton\" type=\"submit\" name=\"candidater\" value=\"Candidater\">";
    }else if ($candidature[0]->getEtatDemande()=="2"){
        echo 	"<span class=\"text-center\"><strong>Candidature en attente</strong></span>";
    }else if ($candidature[0]->getEtatDemande()=="1"){
        echo 	"<span class=\"text-center\"><strong>Candidature acceptée</strong></span>";
      }else{
          echo 	"<span class=\"text-center\"><strong>Candidature refusée</strong></span>";
      }
  ?>

  <?php
}
?>
</form>
</div>
