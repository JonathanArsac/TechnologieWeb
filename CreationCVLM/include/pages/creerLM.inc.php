
<?php
if(isset($_POST["enregistrer"]) || isset($_POST["telecharger"])){


  $pdf = new PDF();
  $pdf->AliasNbPages();
  $pdf->AddPage();
  $pdf->SetFont('Times','',12);

  $ordres = explode("~",$_POST["ordreFormulaire"]);

  foreach($ordres as $ordre){

    if($ordre=="zoneEnTete2"){

      $pdf->MultiCell(140,10,utf8_decode($_POST["nom"]),0,1);
      $pdf->MultiCell(140,10,utf8_decode($_POST["coordonnees"]),0,1);
    }
    if($ordre=="zoneDate"){
      $pdf->SetFont('Arial','B',18);
      $pdf->Cell(140,5,"Date",0,1);
        $pdf->SetFont('Arial','',12);
        $pdf->MultiCell(140,5,utf8_decode($_POST["date"]),0,1);
    }
    if($ordre=="zoneCoordonneesEmployeur"){
      $pdf->SetFont('Arial','B',18);
      $pdf->Cell(140,5,"Coordonnées Employeur",0,1);
        $pdf->SetFont('Arial','',12);
        $pdf->MultiCell(140,5,utf8_decode($_POST["coordonneesEmployeur"]),0,1);
    }
    if($ordre=="zoneCivilite"){


        $pdf->SetFont('Arial','',12);
        $pdf->MultiCell(140,5,utf8_decode($_POST["civilite"]),0,1);
    }
    if($ordre=="zoneMotivations"){


        $pdf->SetFont('Arial','',12);
        $pdf->MultiCell(140,5,utf8_decode($_POST["motivations"]),0,1);
    }
    if($ordre=="zonePolitesse"){
        $pdf->MultiCell(140,5,utf8_decode($_POST["politesse"]),0,1);
    }

  }




  if(isset($_POST["enregistrer"])){
    if(!is_dir($_SESSION["numeroPersonne"])){
      mkdir($_SESSION["numeroPersonne"]);

    }
    if(!file_exists($_SESSION["numeroPersonne"]."/LM")){
        mkdir($_SESSION["numeroPersonne"]."/LM");
    }
    if(empty($_POST["nomPDF"])){
        $pdf->Output('F',$_SESSION["numeroPersonne"]."/LM/SansNom.pdf");
    }else{
        $pdf->Output('F',$_SESSION["numeroPersonne"]."/LM/".$_POST["nomPDF"].".pdf");
    }

  }else{
    if(!is_dir($_SESSION["numeroPersonne"])){
      mkdir($_SESSION["numeroPersonne"]);

    }
    if(!is_dir($_SESSION["numeroPersonne"]."/LM")){
        mkdir($_SESSION["numeroPersonne"]."/LM");

    }
    if(empty($_POST["nomPDF"])){
        $pdf->Output('F',$_SESSION["numeroPersonne"]."/LM/SansNom.pdf");
    }else{
        $pdf->Output('F',$_SESSION["numeroPersonne"]."/LM/".$_POST["nomPDF"].".pdf");
    }

    header("Content-type:application/pdf");

    if(empty($_POST["nomPDF"])){
        header("Content-Disposition:attachment;filename='SansNom.pdf'");
    }else{
        header("Content-Disposition:attachment;filename='".$_POST["nomPDF"].".pdf'");
    }

    ob_clean();
    flush();

    if(empty($_POST["nomPDF"])){
      readfile($_SESSION["numeroPersonne"]."/LM/SansNom.pdf");
      unlink($_SESSION["numeroPersonne"]."/LM/SansNom.pdf");
    }else{
      readfile($_SESSION["numeroPersonne"]."/LM/".$_POST["nomPDF"].".pdf");
      unlink($_SESSION["numeroPersonne"]."/LM/".$_POST["nomPDF"].".pdf");
    }


  }
}

?>

<div class="container-fluid" onload="affichageModele()">
  <div class="row">
    <div  class=" text-center container-fluid col-sm-12 col-md-3" >
      <div class="containerCheckBox">
          <h5 class="text-center">Catégories</h5>

      <div class="custom-control custom-checkbox ">
        <input type="checkbox" class="custom-control-input " checked="checked" disabled>
        <label class="custom-control-label">En-Tête</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="checkboxDate" onclick="apparaitreZone(this.id)">
        <label class="custom-control-label" for="checkboxDate">Date</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="checkboxCoordonneesEmployeur" onclick="apparaitreZone(this.id)">
        <label class="custom-control-label" for="checkboxCoordonneesEmployeur">Coordonnées Employeur</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="checkboxCivilite" onclick="apparaitreZone(this.id)">
        <label class="custom-control-label" for="checkboxCivilite">Civilité</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="checkboxMotivation" onclick="apparaitreZone(this.id)">
        <label class="custom-control-label" for="checkboxMotivation">Motivations</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="checkboxPolitesse" onclick="apparaitreZone(this.id)">
        <label class="custom-control-label" for="checkboxPolitesse">Politesse</label>
      </div>
    </div>
    </div>
    <div class="container-fluid col-sm-12 col-md-8 containerCreation"  ondrop="drop(event)" ondragover="allowDrop(event)">
      <form method="POST" action="#" enctype="multipart/form-data" accept-charset="UTF-8">
        <div>
          <fieldset  class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneEnTete2" >
            <legend class="col-sm-2">En-Tête </legend>
            <div class="form-group" class="col-sm-8">
              <input class="form-control" type="text" name="nom" placeholder="Nom" >
            </div>
            <div class="row">
              <div class="form-group col-sm-9">
                 <textarea class="form-control" rows="5" name="coordonnees" placeholder="Coordonnées"></textarea>
              </div>
            </div>
          </fieldset>

          <fieldset class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneDate" >
            <legend class="col-sm-2">Date  </legend>
            <div class="row">
              <div class="form-group col-sm-12">
                 <textarea class="form-control" rows="1" name="date" placeholder="Date" ></textarea>

              </div>
            </div>
          </fieldset>

          <fieldset  class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneCoordonneesEmployeur" >
            <legend class="col-sm-12">Coordonnées Employeur  </legend>
            <div class="row">
              <div class="form-group col-sm-12">
                <textarea class="form-control" rows="4" name="coordonneesEmployeur"  placeholder="Coordonnées"></textarea>
              </div>
            </div>
          </fieldset>

          <fieldset class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneCivilite" ></fieldsetclass>
            <legend class="col-sm-3">Civilité </legend>
            <div class="row">
              <div class="form-group col-sm-12">
                  <textarea class="form-control" rows="1" name="civilite" placeholder="Civilité" ></textarea>

              </div>
            </div>
          </fieldset>

          <fieldset  class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneMotivation" >
            <legend class="col-sm-3">Motivations  </legend>
            <div class="row">
              <div class="form-group col-sm-12">
                  <textarea class="form-control" rows="4" name="motivations" placeholder="Motivations" ></textarea>
              </div>
            </div>
          </fieldset>

          <fieldset  class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zonePolitesse">
            <legend class="col-sm-3">Politesse  </legend>
            <div class="row">
              <div class="form-group col-sm-12">
                  <textarea class="form-control" rows="3" name="politesse" placeholder="Politesse" ></textarea>

              </div>
            </div>
          </fieldset>


        </div>
        <div class="containerBoutonsCreation">
          <input class="form-control" type="text" name="nomPDF" placeholder="Nom du PDF ">
          <input class="col-sm-5 boutonEnregistrer" type="submit" name="enregistrer" value="Enregistrer dans mon espace personnel ">
          <input class="col-sm-5 offset-sm-1 boutonTelecharger" type="submit" name="telecharger" value="Télécharger" >
          <input type="hidden" name="ordreFormulaire" value="zoneEnTete2~" id="ordreFormulaire"/>
        </div>

      </form>
    </div>
  </div>
</div>





<script>



function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("fieldset", ev.target.id);
}

function drop(ev) {

    ev.preventDefault();
    var data = ev.dataTransfer.getData("fieldset");
    console.log(ev.target.id);
    if(ev.target.tagName=="FIELDSET"){
      ev.target.parentNode.insertBefore(document.getElementById(data),ev.target.nextSibling);
    }else{
      var parent = ev.target.parentElement;
      while(parent.tagName!="FIELDSET"){
        parent = parent.parentElement;
      }
        parent.parentNode.insertBefore(document.getElementById(data),parent.nextSibling);
    }

    ordreFormulaire();

}
function ordreFormulaire(){
  var categorie = document.getElementsByTagName("fieldset");
  var ordreFormulaire = document.getElementById("ordreFormulaire");
  ordreFormulaire.value="";
  for (var i=0;i<categorie.length;i++){
    if(getComputedStyle(categorie[i], null).display!="none"){
          ordreFormulaire.value =ordreFormulaire.value + categorie[i].id + "~";
    }
  }
  ordreFormulaire.value= ordreFormulaire.value.substring(0,ordreFormulaire.value.length-1);
}
function apparaitreZone(nom) {
    var idcheckBox = nom;
    var nomZoneCV= "zone"+idcheckBox.substring(8, 50);

    var zoneCV = document.getElementById(nomZoneCV);

    if (document.getElementById(nom).checked == true){
        zoneCV.style.display = "block";
    } else {
       zoneCV.style.display = "none";
    }
    ordreFormulaire();
}

function $_GET(param) {
  var vars = {};
  window.location.href.replace( location.hash, '' ).replace(
    /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
    function( m, key, value ) { // callback
      vars[key] = value !== undefined ? value : '';
    }
  );

  if ( param ) {
    return vars[param] ? vars[param] : null;
  }
  return vars;
}

window.onload = function(){
  switch(parseInt($_GET("modele"))){
    case 0:
      ordreFormulaire();
      break;
    case 1:
      zoneDate.style.display = "block";
      checkboxDate.checked=true;

      ordreFormulaire();
      break;

    default:

  }
}
</script>
