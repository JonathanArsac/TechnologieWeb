<?php
class Personne{
    private $numeroPersonne;
    private $nomPersonne;
    private $prenomPersonne;
    private $mailPersonne;
    private $identifiantPersonne;
    private $motDePassePersonne;
    private $demandeurPersonne;

    public function __construct($valeurs=array()) {
    	if (!empty($valeurs))
			 $this->affecte($valeurs);
    }

public function affecte($donnees){
	foreach ($donnees as $attribut => $valeur) {  // attributs = nom colonne
		switch ($attribut) {
			case 'numeroPersonne':
				$this->setNumeroPersonne($valeur);
				break;
      case 'nomPersonne':
  			$this->setNomPersonne($valeur);
  			break;
      case 'prenomPersonne':
    		$this->setPrenomPersonne($valeur);
    		break;
      case 'mailPersonne':
        $this->setMailPersonne($valeur);
        break;
      case 'identifiantPersonne':
        $this->setIdentifiantPersonne($valeur);
        break;
      case 'motDePassePersonne':
        $this->setMotDePassePersonne($valeur);
        break;
      case 'demandeurPersonne':
        $this->setDemandeurPersonne($valeur);
        break;
		}
	}
}
  public function getNumeroPersonne(){
		return $this->numeroPersonne;
	}

	public function setNumeroPersonne($numero){
		$this->numeroPersonne=$numero;
	}
  public function getNomPersonne(){
		return $this->nomPersonne;
	}

	public function setNomPersonne($nom){
		$this->nomPersonne=$nom;
	}
  public function getPrenomPersonne(){
		return $this->prenomPersonne;
	}

	public function setPrenomPersonne($prenom){
		$this->prenomPersonne=$prenom;
	}

public function getMailPersonne(){
  return $this->mailPersonne;
}

public function setMailPersonne($mail){
  $this->mailPersonne=$mail;
}


public function getIdentifiantPersonne(){
  return $this->identifiantPersonne;
}

public function setIdentifiantPersonne($login){
  $this->identifiantPersonne=$login;
}
public function getMotDePassePersonne(){
  return $this->motDePassePersonne;
}

public function setMotDePassePersonne($password){
  $this->motDePassePersonne=$password;
}

public function getDemandeurPersonne(){
  return $this->demandeurPersonne;
}

public function setDemandeurPersonne($valeur){
  $this->demandeurPersonne=$valeur;
}
}
?>
