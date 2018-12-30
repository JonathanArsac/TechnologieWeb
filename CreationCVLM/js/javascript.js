function rechercher() {
  var recherche = document.getElementById('recherche');
  var domaine = document.getElementsByClassName('sdomaine');
  var lieu = document.getElementsByClassName('slieu');
  var ligne = document.getElementsByClassName('ligneTab')
  var selector = document.getElementById('selector');
  var value = selector[selector.selectedIndex].value;
  for(var i=0; i<domaine.length;i++){
    if(value=="Domaine"){
      if(domaine[i].textContent.includes(recherche.value)){
        ligne[i].style.display = 'table-row';
      }else{
        ligne[i].style.display = 'none';
      }
    }else{
      if(lieu[i].textContent.includes(recherche.value)){
        ligne[i].style.display = 'table-row';
      }else{
        ligne[i].style.display = 'none';
      }
    }
  }
}
