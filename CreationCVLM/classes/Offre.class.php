<?php
class Offre{
    private $numeroOffre;
    private $numeroPersonneCree;
    private $intituleOffre;
    private $domaineOffre;
    private $descriptionOffre;
    private $missionOffre;
    private $profilRechercheOffre;
		private $typeContratOffre;
		private $typeOccupationOffre;
		private $dureeSemaineOffre;
		private $lieuOffre;
		private $fourchetteSalarialeOffre;
		private $contrainteOffre;
		private $dateDebutOffre;
		private $dateFinOffre;


    public function __construct($valeurs=array()) {
    	if (!empty($valeurs))
			 $this->affecte($valeurs);
    }
public function affecte($donnees){
	foreach ($donnees as $attribut => $valeur) {  // attributs = nom colonne
		switch ($attribut) {
			case 'numeroOffre':
				$this->setNumeroOffre($valeur);
				break;
      case 'numeroRecruteur':
  			$this->setNumeroRecruteur($valeur);
  			break;
      case 'intituleOffre':
    		$this->setIntituleOffre($valeur);
    		break;
      case 'domaineOffre':
        $this->setDomaineOffre($valeur);
        break;
      case 'descriptionOffre':
        $this->setDescriptionOffre($valeur);
        break;
      case 'missionOffre':
        $this->setMissionOffre($valeur);
        break;
      case 'profilRechercheOffre':
        $this->setProfilRechercheOffre($valeur);
        break;
      case 'typeContratOffre':
        $this->setTypeContratOffre($valeur);
        break;
      case 'typeOccupationOffre':
        $this->setTypeOccupationOffre($valeur);
        break;
      case 'dureeSemaineOffre':
        $this->setDureeSemaineOffre($valeur);
        break;
      case 'lieuOffre':
        $this->setLieuOffre($valeur);
        break;
      case 'fourchetteSalarialeOffre':
        $this->setFourchetteSalarialeOffre($valeur);
        break;
      case 'contrainteOffre':
        $this->setContrainteOffre($valeur);
        break;
      case 'dateDebutOffre':
        $this->setDateDebutOffre($valeur);
        break;
      case 'dateFinOffre':
        $this->setDateFinOffre($valeur);
        break;
		}
	}
}
  public function getNumeroOffre(){
		return $this->numeroOffre;
	}

	public function setNumeroOffre($numero){
		$this->numeroOffre=$numero;
	}
  public function getNumeroRecruteur(){
		return $this->numeroRecruteur;
	}

	public function setNumeroRecruteur($nom){
		$this->numeroRecruteur=$nom;
	}
  public function getIntituleOffre(){
		return $this->intituleOffre;
	}

	public function setIntituleOffre($prenom){
		$this->intituleOffre=$prenom;
	}

public function getDomaineOffre(){
  return $this->domaineOffre;
}

public function setDomaineOffre($mail){
  $this->domaineOffre=$mail;
}


public function getDescriptionOffre(){
  return $this->descriptionOffre;
}

public function setDescriptionOffre($login){
  $this->descriptionOffre=$login;
}
public function getMissionOffre(){
  return $this->missionOffre;
}

public function setMissionOffre($mission){
  $this->missionOffre=$mission;
}

public function getProfilRechercheOffre(){
  return $this->profilRechercheOffre;
}

public function setProfilRechercheOffre($valeur){
  $this->profilRechercheOffre=$valeur;
}


public function getTypeContratOffre(){
  return $this->typeContratOffre;
}

public function setTypeContratOffre($valeur){
  $this->typeContratOffre=$valeur;
}

public function getTypeOccupationOffre(){
  return $this->typeOccupationOffre;
}

public function setTypeOccupationOffre($valeur){
  $this->typeOccupationOffre=$valeur;
}

public function getDureeSemaineOffre(){
  return $this->dureeSemaineOffre;
}

public function setDureeSemaineOffre($valeur){
  $this->dureeSemaineOffre=$valeur;
}

public function getLieuOffre(){
  return $this->lieuOffre;
}

public function setLieuOffre($valeur){
  $this->lieuOffre=$valeur;
}

public function getFourchetteSalarialeOffre(){
  return $this->fourchetteSalarialeOffre;
}

public function setFourchetteSalarialeOffre($valeur){
  $this->fourchetteSalarialeOffre=$valeur;
}

public function getContrainteOffre(){
  return $this->contrainteOffre;
}

public function setContrainteOffre($valeur){
  $this->contrainteOffre=$valeur;
}

public function getDateDebutOffre(){
  return $this->dateDebutOffre;
}

public function setDateDebutOffre($valeur){
  $this->dateDebutOffre=$valeur;
}

public function getDateFinOffre(){
  return $this->dateFinOffre;
}

public function setDateFinOffre($valeur){
  $this->dateFinOffre=$valeur;
}

}
?>
