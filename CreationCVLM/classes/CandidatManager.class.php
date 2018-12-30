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

	public function supprimer($numeroOffre){
		$sql = 'DELETE FROM CANDIDAT where numeroOffre='.$numeroOffre;

		$requete=$this->db->prepare($sql);
		$requete->execute();
		$requete->closeCursor();
	}

	public function getCandidatForOneRecruteur($idRecru) {
		$listeCandidats = array();
			$sql = 'SELECT c.numeroPersonne, c.numeroOffre, c.etatDemande FROM candidat c INNER JOIN offre o ON o.numeroOffre=c.numeroOffre where numeroRecruteur='.$idRecru;

			$requete=$this->db->prepare($sql);
			$requete->execute();
			while ($candidat=$requete->fetch(PDO::FETCH_OBJ)){
				$listeCandidats[]= new Candidat($candidat);
			}
			$requete->closeCursor();

		return $listeCandidats;
	}

	public function getCandidatForOnePersonne($idPers) {
				$listeCandidats = array();
			$sql = 'SELECT numeroPersonne, numeroOffre, etatDemande FROM candidat where numeroPersonne='.$idPers;

			$requete=$this->db->prepare($sql);
			$requete->execute();
			while ($candidat=$requete->fetch(PDO::FETCH_OBJ)){
				$listeCandidats[]= new Candidat($candidat);
			}
			$requete->closeCursor();

		return $listeCandidats;
	}

	public function getEtatPourCandidatPourUneOffre($idPers,$numeroOffre) {
				$listeCandidats = array();
			$sql = 'SELECT numeroPersonne, numeroOffre, etatDemande FROM candidat where numeroPersonne='.$idPers.' and numeroOffre='.$numeroOffre;

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
