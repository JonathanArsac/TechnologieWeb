<h1>Créer une offre</h1>

<?php
if(empty($_POST['intituleOffre'])){
?>

<form action="index.php?page=4" id="addOffre" method="post">

  <label for="intituleOffre">Intitulé : </label>
    <input type="text" name="intituleOffre" id="intituleOffre" required/>
  </br>
  <label for="domaineOffre">Domaine : </label>
    <input type="text" name="domaineOffre" id="domaineOffre" />
  </br>
  <label for="descriptionOffre">Description : </label>
    <input type="text" name="descriptionOffre" id="descriptionOffre"/>
  </br>
  <label for="missionOffre">Mission : </label>
    <input type="text" name="missionOffre" id="missionOffre"  />
  </br>
  <label for="profilRechercheOffre">Profil recherche : </label>
    <input type="text" name="profilRechercheOffre" id="profilRechercheOffre"  />
  </br>
  <label for="typeContratOffre">Type Contrat : </label>
    <input type="text" name="typeContratOffre" id="typeContratOffre"  />
  </br>
  <label for="typeOccupationOffre">Type Occupation : </label>
    <input type="text" name="typeOccupationOffre" id="typeOccupationOffre"  />
  </br>
  <label for="dureeSemaineOffre">Durée semaine : </label>
    <input type="text" name="dureeSemaineOffre" id="dureeSemaineOffre"  />
  </br>
  <label for="lieuOffre">Lieu : </label>
    <input type="text" name="lieuOffre" id="lieuOffre"  />
  </br>
  <label for="fourchetteSalarialeOffre">Fourchette Salariale : </label>
    <input type="text" name="fourchetteSalarialeOffre" id="fourchetteSalarialeOffre"  />
  </br>
  <label for="contrainteOffre">Contrainte : </label>
    <input type="text" name="contrainteOffre" id="contrainteOffre"  />
  </br>
  <label for="dateDebutOffre">Date début : </label>
    <input type="date" name="dateDebutOffre" id="dateDebutOffre" required/>
  </br>
  <label for="dateFinOffre">Date fin : </label>
    <input type="date" name="dateFinOffre" id="dateFinOffre" required/>
  </br>
	<input type="submit" value="Valider" class="valider">

</form>

<?php
}else{
	$pdo = new Mypdo();
	$offreManager = new OffreManager($pdo);
	$offre = new Offre($_POST);

	$retour = $offreManager->ajouter($offre,$_SESSION['numeroPersonne']);

  if($retour){
    echo "Offre ajoutée";
  }
  else{
    echo "Offre refusée";
  }
  header("Refresh: 3;URL=index.php?page=3");
}
?>
