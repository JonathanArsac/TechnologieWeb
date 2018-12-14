let model = require('../../models/cv.js');
let async = require("async");
module.exports.Index = function(request, response){

   response.title = 'Creation CV';

response.render('creationCV', response);

};

module.exports.IndexCreationCV = function(request, response){

   response.title = 'Creation CV';
     var id = request.params.id;
     response.modele=id;

response.render('creationCV2', response);

};



module.exports.TelechargerCV = function(request, response){

   response.title = 'Creation CV';
   const fs = require('fs');

    fs.unlink('/tmp/hello', (err) => {
      if (err) throw err;
      console.log('successfully deleted /tmp/hello');
    });

   let puppeteer = require('puppeteer');
   (async function(){
     try {
       const browser = await puppeteer.launch();
       const page = await browser.newPage();
       await page.setContent('');
       await page.emulateMedia('screen');
       await page.pdf({
         path:'mypdf.pdf',
         format:'A4',
         printBackground:true
       });
       console.log('done');

     }catch(e){
       console.log('error',e);
     }
   })();
response.render('creationCV', response);

};
