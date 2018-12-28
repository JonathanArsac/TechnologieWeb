

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
    if(ev.target.tagName=="FORM"){
      ev.target.parentNode.insertBefore(document.getElementById(data),ev.target.nextSibling);
    }else{
      var parent = ev.target.parentElement;
      while(parent.tagName!="FORM"){
        parent = parent.parentElement;
      }
        parent.parentNode.insertBefore(document.getElementById(data),parent.nextSibling);
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
