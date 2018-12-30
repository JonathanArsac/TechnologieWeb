
<h4 class="text-center">Créer une offre</h4>
<?php
if(empty($_POST['intituleOffre'])){
?>
<div class="col-lg-9 offset-lg-1">
<form action="#" id="addOffre" method="post">

  <label for="intituleOffre">Intitulé : </label>
    <textarea class="form-control" rows="1"  name="intituleOffre" required></textarea>
  </br>
  <label for="domaineOffre">Domaine : </label>
    <textarea class="form-control" rows="1" name="domaineOffre" ></textarea>

  </br>
  <label for="descriptionOffre">Description : </label>
    <textarea class="form-control" rows="1" name="descriptionOffre"  ></textarea>

  </br>
  <label for="missionOffre">Mission : </label>
    <textarea class="form-control" rows="1"  name="missionOffre"  ></textarea>

  </br>
  <label for="profilRechercheOffre">Profil recherche : </label>
    <textarea class="form-control" rows="1" name="profilRechercheOffre" ></textarea>

  </br>
  <label for="typeContratOffre">Type Contrat : </label>
    <textarea class="form-control" rows="1" name="typeContratOffre" ></textarea>

  </br>
  <label for="typeOccupationOffre">Type Occupation : </label>
    <textarea class="form-control" rows="1" name="typeOccupationOffre" ></textarea>

  </br>
  <label for="dureeSemaineOffre">Durée semaine : </label>
    <textarea class="form-control" rows="1" name="dureeSemaineOffre" ></textarea>

  </br>
  <label for="lieuOffre">Lieu : </label>
    <textarea class="form-control" rows="1"  name="lieuOffre"  ></textarea>

  </br>
  <label for="fourchetteSalarialeOffre">Fourchette Salariale : </label>
    <textarea class="form-control" name="fourchetteSalarialeOffre"  ></textarea>

  </br>
  <label for="contrainteOffre">Contrainte : </label>
    <textarea class="form-control" rows="1"  name="contrainteOffre"  ></textarea>

  </br>
  <label for="dateDebutOffre">Date début : </label>
    <input  class="date " type="date" name="dateDebutOffre" value="" required/>
  </br>
  <label for="dateFinOffre">Date fin : </label>
    <input class="date " type="date" name="dateFinOffre"  value="" required/>
  </br>
	<input class="bouton" type="submit" value="Valider" class="valider">

</form>
</div>
<?php
}else{
	$pdo = new Mypdo();
	$offreManager = new OffreManager($pdo);
	$offre = new Offre($_POST);

	$retour = $offreManager->ajouter($offre,$_SESSION['numeroPersonne']);

  if($retour){
    ?>
    <div class="col-md-6 offset-3 gestionConnexion gestionModification text-center">
      <p> Votre offre a bien été <span>ajouté</span> !  <br />
       <strong>Redirection automatique dans 2 secondes.</strong> </p>
    </div>
    <?php
  }
  header("Refresh: 3;URL=index.php?page=2");
}
?>
