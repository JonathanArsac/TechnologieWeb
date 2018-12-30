<?php
class CandidatManager{
		private $db;
		public function __construct($db){
		$this->db=$db;
		}

    public function add($numP,$numO){
            $requete = $this->db->prepare(
						'INSERT INTO candidat (numeroPersonne,numeroOffre,etatDemande) VALUES (:numeroPersonne,:numeroOffre,2)');
						$requete -> bindValue(':numeroPersonne',$numP);
            $requete -> bindValue(':numeroOffre',$numO);
						return $requete->execute();
    }

	public function supprimer($numeroPersonne){
		$sql = 'DELETE FROM personne where numeroPersonne='.$numeroPersonne;

		$requete=$this->db->prepare($sql);
		$requete->execute();
		$requete->closeCursor();
	}

	public function getCandidatForOneRecruteur($idRecru) {
			$listePersonnes = array(); // marche même sans  (tableau d'objets)
			$sql = 'SELECT c.numeroPersonne, c.numeroOffre, c.etatDemande FROM candidat c INNER JOIN offre o ON o.numeroOffre=c.numeroOffre where numeroRecruteur='.$idRecru;

			$requete=$this->db->prepare($sql);
			$requete->execute();
			while ($candidat=$requete->fetch(PDO::FETCH_OBJ)){
				$listeCandidats[]= new Candidat($candidat);
			}
			$requete->closeCursor();

		return $listeCandidats;
	}

	public function accepter($numP, $numO){
		$sql = 'UPDATE candidat set etatDemande=1 WHERE numeroPersonne='.$numP.' AND numeroOffre='.$numO;

		$requete=$this->db->prepare($sql);
		$requete->execute();
		$requete->closeCursor();
	}

	public function refuser($numP, $numO){
		$sql = 'UPDATE candidat set etatDemande=0 WHERE numeroPersonne='.$numP.' AND numeroOffre='.$numO;

		$requete=$this->db->prepare($sql);
		$requete->execute();
		$requete->closeCursor();
	}

}
?>
