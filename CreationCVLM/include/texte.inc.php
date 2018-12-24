<div id="texte">
<?php
if (!empty($_GET["page"])){
	$page=$_GET["page"];}
	else
	{$page=0;
	}
switch ($page) {

//
// Personnes
//

case 0:
	// inclure ici la page accueil photo
	include_once('pages/seConnecter.inc.php');
	break;

case 1:
	// inclure ici la page liste des personnes
	include_once('pages/accueil.inc.php');
  break;

case 2:
	// inclure ici la page insertion nouvelle personne
	include("pages/ajouterPersonne.inc.php");
    break;
case 3:
	// inclure ici la page modification des personnes
	include("pages/modifierPersonne.inc.php");
  break;

case 4:
	// inclure ici la page suppression personnes
	include_once('pages/supprimerPersonne.inc.php');
  break;

//
// Citations
//

case 5:
	// inclure ici la page ajouter citations
  include("pages/ajouterCitation.inc.php");
  break;

case 6:
	// inclure ici la page liste des citations
	include("pages/listerCitation.inc.php");
  break;

case 7:
	// inclure ici la page rechercherCitation
	include("pages/rechercherCitation.inc.php");
  break;

case 8:
	// inclure ici la page valider citation
	include("pages/validerCitation.inc.php");
	break;

case 9:
	// inclure ici la page supprimer citation
	include("pages/supprimerCitation.inc.php");
	break;

//
//
// Villes
//


case 10:
		include("pages/listerVilles.inc.php");
    break;

case 11:
	include("pages/ajouterVille.inc.php");
    break;

case 12:
	// inclure ici la page supprimer ville
	include("pages/supprimerVille.inc.php");
  break;

case 13:
	// inclure ici la page seConnecter
	include("pages/seConnecter.inc.php");
	break;

case 14:
	// inclure ici la page seDeconnecter
	include("pages/seDeconnecter.inc.php");
	break;

default : 	include_once('pages/accueil.inc.php');
}

?>
</div>
