<?php
class CandidatManager{
		private $db;
		public function __construct($db){
		$this->db=$db;
		}

    public function ajouter($personne){
            $requete = $this->db->prepare(
						'INSERT INTO candidat (numeroPersonne,numeroOffre) VALUES (:numeroPersonne,:numeroOffre)');
						$requete -> bindValue(':numeroPersonne',$candidat->getNumeroPersonne());
            $requete -> bindValue(':numeroOffre',$candidat->getNumeroOffre());
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
			$sql = 'SELECT c.numeroPersonne, c.numeroOffre FROM candidat c INNER JOIN offre o ON o.numeroOffre=c.numeroOffre where numeroRecruteur='.$idRecru;

			$requete=$this->db->prepare($sql);
			$requete->execute();
			while ($candidat=$requete->fetch(PDO::FETCH_OBJ)){
				$listeCandidats[]= new Candidat($candidat);
			}
			$requete->closeCursor();

		return $listeCandidats;
	}

}
?>
