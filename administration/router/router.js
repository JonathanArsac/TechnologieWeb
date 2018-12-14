let HomeController = require('./../controllers/HomeController');
let ConnexionController = require('./../controllers/ConnexionController');
let CVController = require('./../controllers/CVController');


// Routes
module.exports = function(app){

// Main Routes
  app.get('/', HomeController.Index);
  app.post('/Connexion', ConnexionController.Connexion);
  app.post('/CreationCompte', ConnexionController.CreationCompte);
  app.get('/Deconnexion', ConnexionController.Deconnexion);

  app.get('/CreationCV',CVController.Index);
  app.get('/CreationCV/Modele/:id',CVController.IndexCreationCV);
  app.post('/CreationCV/TelechargerCV',CVController.TelechargerCV);



// tout le reste
  app.get('*', HomeController.Index);
  app.post('*', HomeController.Index);

};
