<?php
class Candidat{
    private $numeroPersonne;
    private $numeroOffre;
    private $etatDemande;

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
      case 'numeroOffre':
  			$this->setNumeroOffre($valeur);
  			break;
      case 'etatDemande':
        $this->setEtatDemande($valeur);
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
  public function getNumeroOffre(){
		return $this->numeroOffre;
	}
	public function setNumeroOffre($num){
		$this->numeroOffre=$num;
	}
  public function getEtatDemande(){
		return $this->etatDemande;
	}
	public function setEtatDemande($etat){
		$this->etatDemande=$etat;
	}
}
?>
