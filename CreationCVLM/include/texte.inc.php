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


	case 10:
		// inclure ici la page parcourirOffre
		include("pages/choisirModeleCV.inc.php");
	  break;
default : 	include_once('pages/seConnecter.inc.php');
}

?>
</div>
