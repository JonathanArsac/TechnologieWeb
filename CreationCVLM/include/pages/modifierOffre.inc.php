<h4 class="text-center">Modifier une offre</h4>

<?php
$pdo = new Mypdo();
$offreManager = new OffreManager($pdo);
$offre = $offreManager->getOffreParNumero($_GET["offre"]);
  if(empty($_POST['intituleOffre'])){

?>
<div class="col-lg-9 offset-lg-1">


<form action="#" id="modifierOffre" method="post">

  <label for="intituleOffre">Intitulé : </label>
    <textarea class="form-control" rows="1"  name="intituleOffre" required><?php echo $offre[0]->getIntituleOffre();?></textarea>
  </br>
  <label for="domaineOffre">Domaine : </label>
    <textarea class="form-control" rows="1" name="domaineOffre" ><?php echo $offre[0]->getDomaineOffre();?></textarea>

  </br>
  <label for="descriptionOffre">Description : </label>
    <textarea class="form-control" rows="1" name="descriptionOffre"  ><?php echo $offre[0]->getDescriptionOffre();?></textarea>

  </br>
  <label for="missionOffre">Mission : </label>
    <textarea class="form-control" rows="1"  name="missionOffre"  ><?php echo $offre[0]->getMissionOffre();?></textarea>

  </br>
  <label for="profilRechercheOffre">Profil recherche : </label>
    <textarea class="form-control" rows="1" name="profilRechercheOffre" ><?php echo $offre[0]->getProfilRechercheOffre();?></textarea>

  </br>
  <label for="typeContratOffre">Type Contrat : </label>
    <textarea class="form-control" rows="1" name="typeContratOffre"  ><?php echo $offre[0]->getTypeContratOffre();?></textarea>

  </br>
  <label for="typeOccupationOffre">Type Occupation : </label>
    <textarea class="form-control" rows="1" name="typeOccupationOffre"   ><?php echo $offre[0]->getTypeOccupationOffre();?></textarea>

  </br>
  <label for="dureeSemaineOffre">Durée semaine : </label>
    <textarea class="form-control" rows="1" name="dureeSemaineOffre" ><?php echo $offre[0]->getDureeSemaineOffre();?></textarea>

  </br>
  <label for="lieuOffre">Lieu : </label>
    <textarea class="form-control" rows="1"  name="lieuOffre"  ><?php echo $offre[0]->getLieuOffre();?></textarea>

  </br>
  <label for="fourchetteSalarialeOffre">Fourchette Salariale : </label>
    <textarea class="form-control" name="fourchetteSalarialeOffre"  ><?php echo $offre[0]->getFourchetteSalarialeOffre();?></textarea>

  </br>
  <label for="contrainteOffre">Contrainte : </label>
    <textarea class="form-control" rows="1"  name="contrainteOffre"  ><?php echo $offre[0]->getContrainteOffre();?></textarea>

  </br>
  <label for="dateDebutOffre">Date début : </label>
    <input type="date" name="dateDebutOffre" value="<?php echo $offre[0]->getDateDebutOffre();?>" required/>
  </br>
  <label for="dateFinOffre">Date fin : </label>
    <input type="date" name="dateFinOffre"  value="<?php echo $offre[0]->getDateFinOffre();?>" required/>
  </br>
	<input class="bouton" type="submit" value="Valider" class="valider">

</form>
</div>
<?php
}else{

	$offre = new Offre($_POST);

	$retour = $offreManager->modifier($offre,$_SESSION['numeroPersonne'],$_GET["offre"]);

  if($retour){
    ?>
    <div class="col-md-6 offset-3 gestionConnexion gestionModification text-center">
      <p> Votre offre a bien été <span>modifié</span> !  <br />
       <strong>Redirection automatique dans 2 secondes.</strong> </p>
    </div>
    <?php
  }

  header("Refresh: 3;URL=index.php?page=2");
}
?>
