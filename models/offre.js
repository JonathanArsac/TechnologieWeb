/*
* config.Db contient les parametres de connection à la base de données
* il va créer aussi un pool de connexions utilisables
* sa méthode getConnection permet de se connecter à MySQL
*
*/
let db = require('../configDb');



module.exports.ajoutOffre = function (data,callback) {
   // connection à la base

	db.getConnection(function(err, connexion){
        if(!err){
        	  // s'il n'y a pas d'erreur de connexion
        	  // execution de la requête SQL
						let sql ="INSERT INTO offre SET ?";

						console.log (sql);
            connexion.query(sql,data, callback);

            // la connexion retourne dans le pool
            connexion.release();
         }
      });
};
