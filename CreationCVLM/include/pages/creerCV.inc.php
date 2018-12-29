
<?php
if(isset($_POST["enregistrer"]) || isset($_POST["telecharger"])){


  $pdf = new PDF();
  $pdf->AliasNbPages();
  $pdf->AddPage();
  $pdf->SetFont('Times','',12);

  $ordres = explode("~",$_POST["ordreFormulaire"]);

  foreach($ordres as $ordre){

    if($ordre=="zoneEnTete"){

      $pdf->MultiCell(80,10,utf8_decode($_POST["nom"]),0,1);
      if(!empty($_POST["photo"])){
        $target_file =  basename($_FILES["photo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        $pdf->Image($target_file,150,10,30,50);
      }

      $pdf->MultiCell(100,10,utf8_decode($_POST["coordonnees"]),0,1);
    }
    if($ordre=="zoneObjectif"){
        $pdf->MultiCell(80,10,utf8_decode($_POST["objectifs"]),0,1);
    }
    if($ordre=="zoneExperience"){
        $pdf->MultiCell(80,10,utf8_decode($_POST["experiences"]),0,1);
    }
    if($ordre=="zoneFormation"){
        $pdf->MultiCell(80,10,utf8_decode($_POST["formations"]),0,1);
    }
    if($ordre=="zoneCompetence"){
        $pdf->MultiCell(80,10,utf8_decode($_POST["competences"]),0,1);
    }
    if($ordre=="zoneLangue"){
        $pdf->MultiCell(80,10,utf8_decode($_POST["langues"]),0,1);
    }
    if($ordre=="zoneProjet"){
        $pdf->MultiCell(80,10,utf8_decode($_POST["projets"]),0,1);
    }
    if($ordre=="zoneRealisation"){
        $pdf->MultiCell(80,10,utf8_decode($_POST["realisations"]),0,1);
    }

    if($ordre=="zoneCertification"){
        $pdf->MultiCell(80,10,utf8_decode($_POST["certifications"]),0,1);
    }

    if($ordre=="zonePublication"){
        $pdf->MultiCell(80,10,utf8_decode($_POST["publications"]),0,1);
    }
    if($ordre=="zoneReference"){
        $pdf->MultiCell(80,10,utf8_decode($_POST["references"]),0,1);
    }



  }




  if(isset($_POST["enregistrer"])){
    if(!is_dir($_SESSION["numeroPersonne"])){
      mkdir($_SESSION["numeroPersonne"]);
    }
    $pdf->Output('F',$_SESSION["numeroPersonne"]."/".$_POST["nomPDF"].".pdf");
  }else{
    if(!is_dir($_SESSION["numeroPersonne"])){
      mkdir($_SESSION["numeroPersonne"]);
    }
    $pdf->Output('F',$_SESSION["numeroPersonne"]."/".$_POST["nomPDF"].".pdf");
    header("Content-type:application/pdf");


    header("Content-Disposition:attachment;filename='".$_POST["nomPDF"].".pdf'");
    ob_clean();
    flush();

    readfile($_SESSION["numeroPersonne"]."/".$_POST["nomPDF"].".pdf");
    unlink($_SESSION["numeroPersonne"]."/".$_POST["nomPDF"].".pdf");

  }
  unlink($target_file);
}

?>

<div class="container-fluid" onload="affichageModele()">
  <div class="row">
    <div id="containerCheckBoxCV" class=" text-center container-fluid col-sm-12 col-md-3" >

      <div class="custom-control custom-checkbox ">
        <input type="checkbox" class="custom-control-input " id="checkboxEnTete" checked="checked" disabled>
        <label class="custom-control-label" for="checkboxEnTete">En-Tête</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="checkboxObjectif" onclick="apparaitreZone(this.id)">
        <label class="custom-control-label" for="checkboxObjectif">Objectif du CV</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="checkboxExperience" onclick="apparaitreZone(this.id)">
        <label class="custom-control-label" for="checkboxExperience">Expérience</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="checkboxFormation" onclick="apparaitreZone(this.id)">
        <label class="custom-control-label" for="checkboxFormation">Formation</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="checkboxCompetence" onclick="apparaitreZone(this.id)">
        <label class="custom-control-label" for="checkboxCompetence">Compétences</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="checkboxLangue" onclick="apparaitreZone(this.id)">
        <label class="custom-control-label" for="checkboxLangue">Langues</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="checkboxProjet" onclick="apparaitreZone(this.id)">
        <label class="custom-control-label" for="checkboxProjet">Projets réalisés</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="checkboxRealisation" onclick="apparaitreZone(this.id)">
        <label class="custom-control-label" for="checkboxRealisation">Réalisations</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="checkboxCertification" onclick="apparaitreZone(this.id)">
        <label class="custom-control-label" for="checkboxCertification">Certifications</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="checkboxPublication" onclick="apparaitreZone(this.id)">
        <label class="custom-control-label" for="checkboxPublication">Publications</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="checkboxReference" onclick="apparaitreZone(this.id)">
        <label class="custom-control-label" for="checkboxReference">Références</label>
      </div>


    </div>
    <div class="container-fluid col-sm-12 col-md-8 " id="containerCreationCV" ondrop="drop(event)" ondragover="allowDrop(event)">
      <form method="POST" action="#" enctype="multipart/form-data" accept-charset="UTF-8">
        <div>
          <fieldset  class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneEnTete" >
            <legend class="col-sm-2">En-Tête </legend>
            <div class="form-group" class="col-sm-8">
              <input class="form-control" type="text" name="nom" placeholder="Titre" >
            </div>
            <div class="row">
              <div class="form-group col-sm-9">
                 <textarea class="form-control" rows="5" name="coordonnees" >Coordonnées</textarea>
              </div>
              <div class="form-group col-sm-3 custom-file">
                <input class="form-control custom-file-input" type="file" name="photo" placeholder="Photo" >
                 <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
          </fieldset>

          <fieldset class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneObjectif" >
            <legend class="col-sm-2">Objectif  </legend>
            <div class="row">
              <div class="form-group col-sm-12">
                 <textarea class="form-control" rows="5" name="objectifs" ></textarea>

              </div>
            </div>
          </fieldset>

          <fieldset  class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneExperience" >
            <legend class="col-sm-3">Expériences  </legend>
            <div class="row">
              <div class="form-group col-sm-12">
                <input class="form-control" type="textarea" name="experiences" placeholder="Expériences" >
              </div>
            </div>
          </fieldset>

          <fieldset class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneFormation" ></fieldsetclass>
            <legend class="col-sm-3">Formation </legend>
            <div class="row">
              <div class="form-group col-sm-12">
                <input class="form-control" type="textarea" name="formations" placeholder="Formation" >
              </div>
            </div>
          </fieldset>

          <fieldset  class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneCompetence" >
            <legend class="col-sm-3">Compétences  </legend>
            <div class="row">
              <div class="form-group col-sm-12">
                <input class="form-control" type="textarea" name="competences" placeholder="Compétences" >
              </div>
            </div>
          </fieldset>

          <fieldset  class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneLangue">
            <legend class="col-sm-3">Langues  </legend>
            <div class="row">
              <div class="form-group col-sm-12">
                <input class="form-control" type="textarea" name="langues" placeholder="Langues" >
              </div>
            </div>
          </fieldset>

          <fieldset  class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneProjet">
            <legend class="col-sm-3">Projets réalisés  </legend>
            <div class="row">
              <div class="form-group col-sm-12">
                <input class="form-control" type="textarea" name="projets" placeholder="Projets" >
              </div>
            </div>
          </fieldset>

          <fieldset  class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneRealisation">
            <legend class="col-sm-3">Réalisations </legend>
            <div class="row">
              <div class="form-group col-sm-12">
                <input class="form-control" type="textarea" name="realisations" placeholder="Réalisations" >
              </div>
            </div>
          </fieldset>

          <fieldset  class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneCertification">
            <legend class="col-sm-3">Certifications </legend>
            <div class="row">
              <div class="form-group col-sm-12">
                <input class="form-control" type="textarea" name="certifications" placeholder="Certifications" >
              </div>
            </div>
          </fieldset>

          <fieldset  class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zonePublication">
            <legend class="col-sm-3">Publications  </legend>
            <div class="row">
              <div class="form-group col-sm-12">
                <input class="form-control" type="textarea" name="publications" placeholder="Publications" >
              </div>
            </div>
          </fieldset>

          <fieldset  class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneReference">
            <legend class="col-sm-3">Références  </legend>
            <div class="row">
              <div class="form-group col-sm-12">
                <input class="form-control" type="textarea" name="references" placeholder="Références" >
              </div>
            </div>
          </fieldset>
        </div>
        <input class="form-control" type="text" name="nomPDF" placeholder="Nom du PDF ">
        <input type="submit" name="enregistrer" value="Enregistrer dans mon espace personnel " id="boutonEnregistrerCV">
        <input type="submit" name="telecharger" value="Télécharger" id="boutonTelechargerCV">
        <input type="hidden" name="ordreFormulaire" value="zoneEnTete~" id="ordreFormulaire"/>
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
      break;
    case 1:
      zoneObjectif.style.display = "block";
      checkboxObjectif.checked=true;
      zoneExperience.style.display = "block";
      checkboxExperience.checked=true;
      zoneFormation.style.display = "block";
      checkboxFormation.checked=true;
      zoneProjet.style.display = "block";
      checkboxProjet.checked=true;
      break;
    case 2:

    zoneProjet.style.display = "block";
    checkboxProjet.checked=true;
    zoneRealisation.style.display = "block";
    checkboxRealisation.checked=true;
    zonePublication.style.display = "block";
    checkboxPublication.checked=true;
    zoneReference.style.display = "block";
    checkboxReference.checked=true;

      break;
    case 3:
    zoneExperience.style.display = "block";
    checkboxExperience.checked=true;
    zoneLangue.style.display = "block";
    checkboxLangue.checked=true;
    zoneCertification.style.display = "block";
    checkboxCertification.checked=true;

      break;
    case 4:
    zoneObjectif.style.display = "block";
    checkboxObjectif.checked=true;
    zoneExperience.style.display = "block";
    checkboxExperience.checked=true;
    zoneFormation.style.display = "block";
    checkboxFormation.checked=true;
    zoneCompetence.style.display = "block";
    checkboxCompetence.checked=true;
    zoneLangue.style.display = "block";
    checkboxLangue.checked=true;
    zoneProjet.style.display = "block";
    checkboxProjet.checked=true;

      break;
    default:

  }
}
</script>
