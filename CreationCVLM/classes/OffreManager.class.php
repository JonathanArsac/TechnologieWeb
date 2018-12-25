<?php
class OffreManager{
		private $db;
		public function __construct($db){
		$this->db=$db;
		}

    public function ajouter($offre){
            $requete = $this->db->prepare(
						'INSERT INTO offre (numeroRecruteur,intituleOffre,domaineOffre,descriptionOffre,missionOffre,profilRechercheOffre,typeContratOffre,typeOccupationOffre,dureeSemaineOffre,lieuOffre,fourchetteSalarialeOffre,contrainteOffre,dateDebutOffre,dateFinOffre)VALUES(:numeroRecruteur,:intituleOffre,:domaineOffre,:descriptionOffre,:missionOffre,:profilRechercheOffre,:typeContratOffre,:typeOccupationOffre,:dureeSemaineOffre,:lieuOffre,:fourchetteSalarialeOffre,:contrainteOffre,:dateDebutOffre,:dateFinOffre)');
						$requete -> bindValue(':numeroRecruteur',$offre->getNumeroRecruteur());
            $requete -> bindValue(':intituleOffre',$offre->getIntituleOffre());
						$requete -> bindValue(':domaineOffre',$offre->getDomaineOffre());
						$requete -> bindValue(':descriptionOffre',$offre->getDescriptionOffre());
						$requete -> bindValue(':missionOffre',$offre->getMissionOffre());
						$requete -> bindValue(':profilRechercheOffre',$offre->getProfilRechercheOffre());
          	$requete -> bindValue(':typeContratOffre',$offre->getTypeContratOffre());
            $requete -> bindValue(':typeOccupationOffre',$offre->getTypeOccupationOffre());
            $requete -> bindValue(':dureeSemaineOffre',$offre->getDureeSemaineOffre());
          	$requete -> bindValue(':lieuOffre',$offre->getLieuOffre());
          	$requete -> bindValue(':fourchetteSalarialeOffre',$offre->getFourchetteSalarialeOffre());
            $requete -> bindValue(':contrainteOffre',$offre->getContrainteOffre());
            $requete -> bindValue(':dateDebutOffre',$offre->getDateDebutOffre());
          	$requete -> bindValue(':dateFinOffre',$offre->getDateFinOffre());
						return $requete->execute();
    }

		public function modifier($offre){

						$requete = $this->db->prepare(
						'UPDATE offre SET numeroRecruteur=:numeroRecruteur,intituleOffre=:intituleOffre,domaineOffre=:domaineOffre,descriptionOffre=:descriptionOffre,missionOffre=:missionOffre,profilRechercheOffre=:profilRechercheOffre,typeContratOffre=:typeContratOffre,typeOccupationOffre=:typeOccupationOffre,dureeSemaineOffre=:dureeSemaineOffre,lieuOffre=:lieuOffre,fourchetteSalarialeOffre=:fourchetteSalarialeOffre,contrainteOffre=:contrainteOffre,dateDebutOffre=:dateDebutOffre,dateFinOffre=:dateFinOffre WHERE numeroOffre=:numeroOffre');
            $requete -> bindValue(':numeroRecruteur',$offre->getNumeroRecruteur());
            $requete -> bindValue(':intituleOffre',$offre->getIntituleOffre());
            $requete -> bindValue(':domaineOffre',$offre->getDomaineOffre());
            $requete -> bindValue(':descriptionOffre',$offre->getDescriptionOffre());
            $requete -> bindValue(':missionOffre',$offre->getMissionOffre());
            $requete -> bindValue(':profilRechercheOffre',$offre->getProfilRechercheOffre());
            $requete -> bindValue(':typeContratOffre',$offre->getTypeContratOffre());
            $requete -> bindValue(':typeOccupationOffre',$offre->getTypeOccupationOffre());
            $requete -> bindValue(':dureeSemaineOffre',$offre->getDureeSemaineOffre());
            $requete -> bindValue(':lieuOffre',$offre->getLieuOffre());
            $requete -> bindValue(':fourchetteSalarialeOffre',$offre->getFourchetteSalarialeOffre());
            $requete -> bindValue(':contrainteOffre',$offre->getContrainteOffre());
            $requete -> bindValue(':dateDebutOffre',$offre->getDateDebutOffre());
            $requete -> bindValue(':dateFinOffre',$offre->getDateFinOffre());
						return $requete->execute();
		}

	public function supprimer($numeroOffre){
		$sql = 'DELETE FROM offre where numeroOffre='.$numeroOffre;

		$requete=$this->db->prepare($sql);
		$requete->execute();
		$requete->closeCursor();
	}

	public function getLesDernieresOffres() {
			$listeOffres = array(); // marche même sans  (tableau d'objets)
			$sql = 'SELECT numeroOffre,numeroRecruteur,intituleOffre,descriptionOffre,fourchetteSalarialeOffre,lieuOffre FROM offre ORDER BY numeroOffre desc  LIMIT 0, 5';

			$requete=$this->db->prepare($sql);
			$requete->execute();
			while ($offre=$requete->fetch(PDO::FETCH_OBJ)){
				$listeOffres[]= new Offre($offre);
			}
			$requete->closeCursor();

		return $listeOffres;
	}

}
?>
