<?php
$pdo = new Mypdo();
$candidatManager = new CandidatManager($pdo);
$candidats = $candidatManager->getCandidatForOneRecruteur($_SESSION['numeroPersonne']);
?>
<h1>Liste Candidat</h1>


<table class="table">

  <tr><th>Numero personne</th><th>Numero Offre</th></tr>
  <?php
  foreach ($candidats as $candidat){?>
    <tr>
      <td><?php echo $candidat->getNumeroPersonne();?>
      </td><td><?php echo $candidat->getNumeroOffre();?></td>
    </tr>
  <?php } ?>
  </table>
