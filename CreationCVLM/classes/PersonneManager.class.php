<?php
class PersonneManager{
		private $db;
		public function __construct($db){
		$this->db=$db;
		}

    public function ajouter($personne){
            $requete = $this->db->prepare(
						'INSERT INTO personne (nomPersonne,prenomPersonne,mailPersonne,identifiantPersonne,motDePassePersonne,demandeurPersonne) VALUES (:nomPersonne,:prenomPersonne,:mailPersonne,:identifiantPersonne,:motDePassePersonne,:demandeurPersonne)');
						$requete -> bindValue(':nomPersonne',$personne->getNomPersonne());
            $requete -> bindValue(':prenomPersonne',$personne->getPrenomPersonne());
						$requete -> bindValue(':mailPersonne',$personne->getMailPersonne());
						$requete -> bindValue(':identifiantPersonne',$personne->getIdentifiantPersonne());
						$requete -> bindValue(':motDePassePersonne',$personne->getMotDePassePersonne());
						$requete -> bindValue(':demandeurPersonne',$personne->getDemandeurPersonne());
						return $requete->execute();
    }

		public function modifier($personne){

						$requete = $this->db->prepare(
						'UPDATE personne SET nomPersonne=:nomPersonne,prenomPersonne=:prenomPersonne,mailPersonne=:mailPersonne,identifiantPersonne=:identifiantPersonne,motDePassePersonne=:motDePassePersonne,demandeurPersonne=:demandeurPersonne WHERE numeroPersonne=:numeroPersonne');
						$requete -> bindValue(':numeroPersonne',$personne->getNumeroPersonne());
						$requete -> bindValue(':nomPersonne',$personne->getNomPersonne());
						$requete -> bindValue(':prenomPersonne',$personne->getPrenomPersonne());
						$requete -> bindValue(':mailPersonne',$personne->getMailPersonne());
						$requete -> bindValue(':identifiantPersonne',$personne->getIdentifiantPersonne());
						$requete -> bindValue(':motDePassePersonne',$personne->getMotDePassePersonne());
						$requete -> bindValue(':demandeurPersonne',$personne->getDemandeurPersonne());
						return $requete->execute();
		}

	public function supprimer($numeroPersonne){
		$sql = 'DELETE FROM personne where numeroPersonne='.$numeroPersonne;

		$requete=$this->db->prepare($sql);
		$requete->execute();
		$requete->closeCursor();
	}

	public function getPersonneParIdentifiantEtMotDePasse($identifiantPersonne,$motDePassePersonne) {
			$listePersonnes = array(); // marche même sans  (tableau d'objets)
			$sql = 'SELECT numeroPersonne,identifiantPersonne,nomPersonne,prenomPersonne,demandeurPersonne FROM personne where identifiantPersonne="'.$identifiantPersonne.'" and motDePassePersonne="'.$motDePassePersonne.'"';

			$requete=$this->db->prepare($sql);
			$requete->execute();
			while ($personne=$requete->fetch(PDO::FETCH_OBJ)){
				$listePersonnes[]= new Personne($personne);
			}
			$requete->closeCursor();

		return $listePersonnes;
	}

	public function getPersonneParNumeroPersonne($numeroPersonne) {
			$listePersonnes = array(); // marche même sans  (tableau d'objets)
			$sql = 'SELECT numeroPersonne,nomPersonne,prenomPersonne FROM personne where numeroPersonne='.$numeroPersonne;

			$requete=$this->db->prepare($sql);
			$requete->execute();
			while ($personne=$requete->fetch(PDO::FETCH_OBJ)){
				$listePersonnes[]= new Personne($personne);
			}
			$requete->closeCursor();

		return $listePersonnes;
	}

	public function getNomByNum($numP){
		$sql = 'SELECT numeroPersonne,nomPersonne,prenomPersonne FROM personne where numeroPersonne='.$numP;
		$requete=$this->db->prepare($sql);
		$requete->execute();
		while ($personne=$requete->fetch(PDO::FETCH_OBJ)){
			$listePersonnes[]= new Personne($personne);
		}
		$requete->closeCursor();

		return $listePersonnes[0]->getNomPersonne();


	}

}
?>
