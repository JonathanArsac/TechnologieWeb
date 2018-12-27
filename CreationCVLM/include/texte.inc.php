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
	// inclure ici la page se connecter
	include_once('pages/seConnecter.inc.php');
	break;
case 1:
	// inclure ici la page seDeconnecter
	include("pages/seDeconnecter.inc.php");
	break;
case 2:
	// inclure ici la page accueil
	include_once('pages/accueil.inc.php');
  break;

case 3:
	// inclure ici la page modification des personnes
	include("pages/parcourirOffre.inc.php");
  break;

case 4:
	// inclure ici la page suppression personnes
	include_once('pages/supprimerPersonne.inc.php');
  break;

	case 5:
		// inclure ici la page
		include("pages/ajouterPersonne.inc.php");
	    break;


default : 	include_once('pages/seConnecter.inc.php');
}

?>
</div>
