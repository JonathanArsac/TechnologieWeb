

<div class="container-fluid">
  <div class="row">
    <div class="container-fluid col-sm-12 col-md-4" >

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

      <form class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneEnTete"  >
        <fieldset  class=" col-sm-12" id="fieldsetEnTete">
          <legend class="col-sm-2">En-Tête </legend>
          <div class="form-group" class="col-sm-8">
            <input class="form-control" type="text" name="nom" placeholder="Titre" required>
          </div>
          <div class="row">
            <div class="form-group col-sm-9">
              <input class="form-control" type="textarea" name="coordonnees" placeholder="Coordonnées" required>
            </div>
            <div class="form-group col-sm-3 custom-file">
              <input class="form-control custom-file-input" type="file" name="photo" placeholder="Photo" required>
               <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>

        </fieldset>
      </form>

      <form class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneObjectif" >
        <fieldset  class=" col-sm-12" id="fieldsetObjectif">
          <legend class="col-sm-2">Objectif  </legend>
          <div class="row">
            <div class="form-group col-sm-12">
              <input class="form-control" type="textarea" name="objectifs" placeholder="Objectifs" required>
            </div>
          </div>
        </fieldset>
      </form>

      <form class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneExperience" >
        <fieldset  class=" col-sm-12" id="fieldsetExperience">
          <legend class="col-sm-3">Expériences  </legend>
          <div class="row">
            <div class="form-group col-sm-12">
              <input class="form-control" type="textarea" name="experiences" placeholder="Expériences" required>
            </div>
          </div>
        </fieldset>
      </form>

      <form class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneFormation" >
        <fieldset  class="zoneCV col-sm-12" id="fieldsetFormation">
          <legend class="col-sm-3">Formation </legend>
          <div class="row">
            <div class="form-group col-sm-12">
              <input class="form-control" type="textarea" name="formations" placeholder="Formation" required>
            </div>
          </div>
        </fieldset>
      </form>

      <form class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneCompetence" >
        <fieldset  class=" col-sm-12" id="fieldsetCompétences">
          <legend class="col-sm-3">Compétences  </legend>
          <div class="row">
            <div class="form-group col-sm-12">
              <input class="form-control" type="textarea" name="competences" placeholder="Compétences" required>
            </div>
          </div>
        </fieldset>
      </form>
      <form class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneLangue" >
        <fieldset  class=" col-sm-12" id="fieldsetLangues">
          <legend class="col-sm-3">Langues  </legend>
          <div class="row">
            <div class="form-group col-sm-12">
              <input class="form-control" type="textarea" name="langues" placeholder="Langues" required>
            </div>
          </div>
        </fieldset>
      </form>
      <form class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneProjet" >
        <fieldset  class=" col-sm-12" id="fieldsetProjets">
          <legend class="col-sm-3">Projets réalisés  </legend>
          <div class="row">
            <div class="form-group col-sm-12">
              <input class="form-control" type="textarea" name="projets" placeholder="Projets" required>
            </div>
          </div>
        </fieldset>
      </form>
      <form class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneRealisation" >
        <fieldset  class=" col-sm-12" id="fieldsetRealisations">
          <legend class="col-sm-3">Réalisations </legend>
          <div class="row">
            <div class="form-group col-sm-12">
              <input class="form-control" type="textarea" name="realisations" placeholder="Réalisations" required>
            </div>
          </div>
        </fieldset>
      </form>
      <form class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneCertification" >
        <fieldset  class=" col-sm-12" id="fieldsetCertifications">
          <legend class="col-sm-3">Certifications </legend>
          <div class="row">
            <div class="form-group col-sm-12">
              <input class="form-control" type="textarea" name="certifications" placeholder="Certifications" required>
            </div>
          </div>
        </fieldset>
      </form>
      <form class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zonePublication" >
        <fieldset  class=" col-sm-12" id="fieldsetPublications">
          <legend class="col-sm-3">Publications  </legend>
          <div class="row">
            <div class="form-group col-sm-12">
              <input class="form-control" type="textarea" name="publications" placeholder="Publications" required>
            </div>
          </div>
        </fieldset>
      </form>
      <form class="zoneCV col-sm-12" draggable="true" ondragstart="drag(event)" id="zoneReference" >
        <fieldset  class=" col-sm-12" id="fieldsetReferences">
          <legend class="col-sm-3">Références  </legend>
          <div class="row">
            <div class="form-group col-sm-12">
              <input class="form-control" type="textarea" name="references" placeholder="Références" required>
            </div>
          </div>
        </fieldset>
      </form>

      <form class=" col-sm-12" action="/CreationCV/TelechargerCV" >
        <input class="form-control" type="textarea" name="references" placeholder="Références" required>
        <button type="submit">Télécharger</button>
      </form>

      <script>
      function allowDrop(ev) {
          ev.preventDefault();
      }

      function drag(ev) {
          ev.dataTransfer.setData("form", ev.target.id);
      }

      function drop(ev) {

          ev.preventDefault();
          var data = ev.dataTransfer.getData("form");

            console.log(ev.target.id);

          if( ev.target.id=="containerCreationCV"){
            ev.target.appendChild(document.getElementById(data));
          }else if(ev.target.tagName=="FORM"){
            ev.target.parentElement.appendChild(document.getElementById(data));
          }else if(ev.target.tagName=="FIELDSET"){
            ev.target.parentElement.parentElement.appendChild(document.getElementById(data));
            console.log("coucou 2");
          }else if(ev.target.tagName=="INPUT"){
            ev.target.parentElement.parentElement.parentElement.parentElement.parentElement.appendChild(document.getElementById(data));
              console.log("coucou 3");
          }
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
      }




      </script>

    </div>
  </div>
</div>
