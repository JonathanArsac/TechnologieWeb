

function rechercher() {
  var recherche = document.getElementById('recherche');
  var domaine = document.getElementsByClassName('sdomaine');
  var lieu = document.getElementsByClassName('slieu');
  var ligne = document.getElementsByClassName('ligneTab')
  var test = 0;
  for(var i=0; i<domaine.length;i++){
    if(domaine[i].textContent.includes(recherche.value)){
      ligne[i].style.display = 'table-row';
    }else{
      ligne[i].style.display = 'none';

    }
  }
}
