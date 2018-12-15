let model = require('../../models/offre.js');
let async = require("async");
module.exports.Index = function(request, response){

   response.title = 'Creation Offre';

response.render('creationOffre', response);

};



module.exports.CreationOffre = function(request, response){

   response.title = 'Création Offre';
   var data = request.body;


   console.log(data);
       model.ajoutUtilisateur(data,function(err,result){
     });

       response.redirect('/home');

   };
