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
	// inclure ici la page parcourirOffre
	include("pages/parcourirOffre.inc.php");
  break;

case 4:
	include("pages/creerOffre.inc.php");
	break;

case 5:
	include("pages/parcourirAllOffres.inc.php");
	break;

case 6:
	include("pages/parcourirCandidat.inc.php");
	break;
case 7:
	include("pages/parcourirCandidatures.inc.php");
	break;

	case 10:
		// inclure ici la page choisirModeleCV
		include("pages/choisirModeleCV.inc.php");
	  break;
		case 11:
			// inclure ici la page creerCV
			include("pages/creerCV.inc.php");
		  break;
			case 12:
				// inclure ici la page choisirModeleLM
				include("pages/choisirModeleLM.inc.php");
			  break;
				case 13:
					// inclure ici la page creerLM
					include("pages/creerLM.inc.php");
				  break;
default : 	include_once('pages/seConnecter.inc.php');
}

?>
</div>
