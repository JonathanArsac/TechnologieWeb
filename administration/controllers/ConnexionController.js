
let model = require('../../models/connexion.js');
  var crypto = require('crypto');


module.exports.Connexion = function(request, response){
  var login = request.body.loginConnexion;
  var password = request.body.passwordConnexion;
  var hashPassword = crypto.createHash('sha1')
                     .update(password)
                     .digest('hex');

  model.getLoginEtPassword(login,hashPassword, function (err, result) {
      if (err) {
          // gestion de l'erreur
          console.log(err);
          return;
      }
      if(result[0]==null){
        request.session.connexion = 0;
      }else{
          request.session.idUtilisateur = result[0].idUtilisateur;
          request.session.demandeur=result[0].demandeur;
          request.session.connexion = 1;
      
             console.log(request.session.idUtilisateur);
          request.session.nomPrenom = result[0].nom+" "+result[0].prenom;
      }

      response.render('home',response);
    });
    }

module.exports.CreationCompte = function(request, response){

   response.title = 'Création Compte';

   var password = request.body.password;
   var hashPassword = crypto.createHash('sha1')
                       .update(password)
                      .digest('hex');
   var data = request.body;
   data.password=hashPassword;

   console.log(data);
   model.ajoutUtilisateur(data,function(err,result){});
   model.getLoginEtPassword(data.login,hashPassword, function (err, result) {request.session.idUtilisateur = result[0].idUtilisateur;});
   request.session.connexion = 1;
   console.log(request.session.idUtilisateur);
   request.session.demandeur = request.body.demandeur;
      request.session.nomPrenom = request.body.nom + " " + request.body.prenom;
       response.redirect('/home');

   };



module.exports.Deconnexion = function(request, response){

  response.title = 'Deconnexion';


    request.session.connexion = 0;
    request.session.demandeur = 0;
      response.redirect('/home');

  };
