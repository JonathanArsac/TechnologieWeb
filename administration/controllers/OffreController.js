let model = require('../../models/offre.js');
let async = require("async");
module.exports.Index = function(request, response){

   response.title = 'Creation Offre';

response.render('creationOffre', response);

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
