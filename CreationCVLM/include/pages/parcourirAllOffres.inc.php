<?php
$pdo = new Mypdo();
$offreManager = new OffreManager ($pdo);
$personneManager = new PersonneManager($pdo);
$candidatManager = new CandidatManager ($pdo);
$offres = $offreManager->getAllOffres();
?>
<h1>Liste Offre</h1>

<input type="text" name="recherche" oninput="rechercher()" id="recherche" placeholder="Rechercher..">
<table class="table">

  <tr><th>Intitulé</th><th>Domaine</th><th>Description</th><th>Mission</th><th>Profil Recherche</th><th>Type</th><th>Occupation</th><th>Durée</th><th>lieu</th><th>fourchette</th><th>contrainte</th><th>date début</th><th>date fin</th></tr>
  <?php
  foreach ($offres as $offre){
    if(date("Y-m-d")>$offre->getDateDebutOffre() && date("Y-m-d")<$offre->getDateFinOffre()){

    ?>
    <tr class="ligneTab">
      <td><?php echo $offre->getIntituleOffre();?>
      </td><td class="sdomaine"><?php echo $offre->getDomaineOffre();?>
      </td><td><?php echo $offre->getDescriptionOffre();?>
      </td><td><?php echo $offre->getMissionOffre();?>
      </td><td><?php echo $offre->getProfilRechercheOffre();?>
      </td><td><?php echo $offre->getTypeContratOffre();?>
      </td><td><?php echo $offre->getTypeOccupationOffre();?>
      </td><td><?php echo $offre->getDureeSemaineOffre();?>
      </td><td class="slieu"><?php echo $offre->getLieuOffre();?>
      </td><td><?php echo $offre->getFourchetteSalarialeOffre();?>
      </td><td><?php echo $offre->getContrainteOffre();?>
      </td><td><?php echo $offre->getDateDebutOffre();?>
      </td><td><?php echo $offre->getDateFinOffre();?>
      </td>  <?php if (isset($_SESSION['demandeurPersonne']) && $_SESSION['demandeurPersonne']==1 ){ ?>
        <td> <a href="./index.php?page=5&amp;idOffre=<?php echo $offre->getNumeroOffre() ?>">Candidater</a> </td>
      <?php }  ?>

    </tr>
  <?php } } ?>
  </table>
  <?php if (isset($_SESSION['demandeurPersonne']) && $_SESSION['demandeurPersonne']==0 ){ ?>
  <a href="./index.php?page=4">Créer une nouvelle offre</a>
  <?php }
  if(isset($_GET['idOffre'])){
    $candidatManager->add($_SESSION['numeroPersonne'],$_GET['idOffre']);
  }
  ?>
