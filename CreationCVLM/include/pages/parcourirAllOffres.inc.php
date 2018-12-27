<?php
$pdo = new Mypdo();
$offreManager = new OffreManager ($pdo);
$personneManager = new PersonneManager($pdo);
$offres = $offreManager->getAllOffres();
?>
<h1>Liste Offre</h1>


<table class="table">

  <tr><th>Intitulé</th><th>Domaine</th><th>Description</th><th>Mission</th><th>Profil Recherche</th><th>Type</th><th>Occupation</th><th>Durée</th><th>lieu</th><th>fourchette</th><th>contrainte</th><th>date début</th><th>date fin</th></tr>
  <?php
  foreach ($offres as $offre){?>
    <tr>
      <td><?php echo $offre->getIntituleOffre();?>
      </td><td><?php echo $offre->getDomaineOffre();?>
      </td><td><?php echo $offre->getDescriptionOffre();?>
      </td><td><?php echo $offre->getMissionOffre();?>
      </td><td><?php echo $offre->getProfilRechercheOffre();?>
      </td><td><?php echo $offre->getTypeContratOffre();?>
      </td><td><?php echo $offre->getTypeOccupationOffre();?>
      </td><td><?php echo $offre->getDureeSemaineOffre();?>
      </td><td><?php echo $offre->getLieuOffre();?>
      </td><td><?php echo $offre->getFourchetteSalarialeOffre();?>
      </td><td><?php echo $offre->getContrainteOffre();?>
      </td><td><?php echo $offre->getDateDebutOffre();?>
      </td><td><?php echo $offre->getDateFinOffre();?></td>
    </tr>
  <?php } ?>
  </table>

  <a href="./index.php?page=4">Créer une nouvelle offre</a>
