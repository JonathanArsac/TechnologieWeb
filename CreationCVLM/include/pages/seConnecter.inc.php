
<?php

echo  $_SESSION['connexion'];
$pdo = new Mypdo();
$personneManager = new PersonneManager ($pdo);  // toutes les requêtes sont dans le manager
if (!isset($_SESSION['connexion'])){
  $_SESSION['connexion']=false;
}

if (isset($_SESSION['connexion']) && $_SESSION['connexion']==false ){
 ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 text-center">
      <h1 class="jumbotron"> Site CV,LM et offres d'emploi </h1>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12 col-md-6 " id="containerConnexion">
     <p> Vous avez déjà un compte ? </p>
     <form method="POST" action="#">
       <div class="form-group">
         <label> Login : </label>	<input class="form-control" type="text" name="identifiantConnexion">
       </div>
       <div class="form-group">
         <label> Mot de passe : </label>	<input class="form-control" type="password" name="motDePasseConnexion" >
       </div>
       <input class="btn btn-primary" type="submit" value="Connexion">
     </form>
    </div>

     <div  class="col-sm-12 col-md-6 " id="containerCreationCompte" >
       <p>Vous n'avez pas de compte ?</p>
       <form   method="POST" action="#">
         <div class="form-group">
           <label>Etes vous un :</label>
           <div class="form-check">
             <label class="form-check-label" for="radio1">
               <input type="radio" class="form-check-input" id="radio1" name="demandeurCreation" value="1" checked>Demandeur
             </label>
           </div>
           <div class="form-check">
             <label class="form-check-label" for="radio2">
               <input type="radio" class="form-check-input" id="radio2" name="demandeurCreation" value="0">Recruteur
             </label>
           </div>
         </div>
         <div class="form-group">
           <label> Nom : </label>
           <input class="form-control" type="text" name="nomCreation" required>
         </div>
         <div class="form-group">
           <label> Prénom : </label>
           <input class="form-control" type="text" name="prenomCreation" required>
         </div>
         <div class="form-group">
           <label> Adresse mail : </label>
           <input class="form-control" type="email" size="30" name="mailCreation" required>
         </div>
         <div class="form-group">
           <label> Login : </label>
           <input class="form-control" type="text" name="identifiantCreation" required>
         </div>
         <div class="form-group">
           <label> Mot de passe : </label>
           <input class="form-control" type="password" name="motDePasseCreation" required>
         </div>
         <input class="btn btn-primary" type="submit" value="Créer">
       </form>


     </div>
   </div>
 </div>

<?php

}
 if(isset($_SESSION['connexion']) && $_SESSION['connexion']==true ){
?>
  <h1>Pour vous connecter</h1>
  <div class="messageConnexion">
    <p><img src="image/valid.png" alt="coche"> Vous avez bien été connecté ! </p>
    <p> Redirection automatique dans 2 secondes. </p>
  </div>

<?php
    header("refresh:2;url=index.php?page=1");
  }

if (isset($_POST["motDePasseConnexion"]) && !empty($_POST["motDePasseConnexion"])){
  $sel = "48@!alsd";
  $motDePasse = $_POST['motDePasseConnexion'];
  $motDePasseMD5 = md5(md5($motDePasse).$sel);
  $connexionPersonne = $personneManager -> getPersonneParIdentifiantEtMotDePasse($_POST["identifiantConnexion"],$motDePasseMD5);

  if ($connexionPersonne!=NULL){
    $_SESSION['connexion']=true;
    $_SESSION['identifiantPersonne']=$connexionPersonne[0]->getIdentifiantPersonne();
    $_SESSION['demandeurPersonne']=$connexionPersonne[0]->getDemandeurPersonne();
    $_SESSION['numeroPersonne']=$connexionPersonne[0]->getNumeroPersonne();
  }
  else{
    echo '<img src="image/erreur.png" alt="croix"> Problème identifiant ou mot de passe';
  }

}
if (isset($_POST["motDePasseCreation"]) && !empty($_POST["motDePasseCreation"])) {
  $sel = "48@!alsd";
  $motDePasse = $_POST['motDePasseCreation'];
  $motDePasseMD5 = md5(md5($motDePasse).$sel);
  $personneArray =[
    "nomPersonne"=>$_POST['nomCreation'],
    "prenomPersonne"=>$_POST['prenomCreation'],
    "mailPersonne"=>$_POST['mailCreation'],
    "identifiantPersonne"=>$_POST['identifiantCreation'],
    "motDePassePersonne"=>$motDePasseMD5,
    "demandeurPersonne"=>$_POST['demandeurCreation']
  ];
  $personne= new Personne($personneArray);
  $personneManager->ajouter($personne);
  $_SESSION['connexion']=true;
  $_SESSION['identifiantPersonne']=$_POST['identifiantCreation'];
  $_SESSION['demandeurPersonne']=$_POST['demandeurCreation'];
  $numeroPersonneCree = $personneManager -> getPersonneParIdentifiantEtMotDePasse($_POST['identifiantCreation'],$motDePasseMD5);
  $_SESSION['numeroPersonne']=$numeroPersonneCree[0]->getNumeroPersonne();

}
?>
