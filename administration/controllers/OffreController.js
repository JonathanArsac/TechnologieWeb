let model = require('../../models/offre.js');
let async = require("async");
module.exports.Index = function(request, response){

        response.title = 'Accueil Offre';



            model.recupererListeOffreRecruteur(request.session.idUtilisateur,function(err,result){
              if (err) {
                  // gestion de l'erreur
                  console.log(err);
                  return;
              }
              console.log(result);
              response.listeOffres=result;
              response.render('accueilCreationOffre', response);

             });


};



module.exports.CreationOffre = function(request, response){

   response.title = 'Création Offre';
   var data = request.body;

data.idUtilisateur = request.session.idUtilisateur;
   console.log(data);
       model.ajoutOffre(data,function(err,result){
     });

       response.redirect('/');

   };
