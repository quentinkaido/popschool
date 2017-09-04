/* this file contains CRUD functions for promotions */

// Read function for promotions
var getPromotions = function() {
  console.log("AAAAAAAAAAAAAAAAAAAAAA");

  // creation of the XHR / API call / call / request _ object
  var request = new XMLHttpRequest();

  //open (méthode, URL à taper, asynchrone true/false)

  request.open('GET', url + "promotions.php", true);

  //what do we do when the request is done?
  //e is event information (you can have a look with a console.log if it pleases you)
  request.onreadystatechange = function(e) {
    //first step
    //for the moment we write the raw reponse text in app
    //the whole data of the response is in a variable called "this"
    // app.innerHTML = this.responseText;

    //better step
    //promotionsJSON contains the JSON of the promotionsJSON
    app.innerHTML = "<ul>";
    if (this.readyState == XMLHttpRequest.DONE) {
      var promotionsJSON = this.responseText;
      // console.log("promotionsJSON:" + promotionsJSON);
      //promotions contains an array with the promotions
      var promotions = JSON.parse(promotionsJSON);
      // console.log("promotions");
      // console.log(promotions);
      // console.log("name of first promotion");
      // console.log(promotions[0].name);
      //for each promotion, we display information
      promotions.forEach(function(promotion) {
        app.innerHTML += "<li>" + promotion.name + "</li>";
      });
    }
    app.innerHTML += "</ul>";
    if (this.readyState == XMLHttpRequest.DONE) {
      var promotions = JSON.parse(this.responseText);
      app.innerHTML = "<fieldset><legend>Liste des promotions</legend>";
      promotions.forEach(function(promotion) {
        app.innerHTML += '<div class="form-group">';
        app.innerHTML += '<label class="col-md-4 control-label" for="edit_button">' + promotion.name + '</label>';
        app.innerHTML += '<div class="col-md-8">';
        app.innerHTML += '<a onclick="" class="btn btn-success">Éditer</a>';
        app.innerHTML += '<a onclick="" class="btn btn-danger">Supprimer</a>';
        app.innerHTML += '</div>';
        app.innerHTML += '</div>';
      });
      app.innerHTML += "</fieldset>";
    }

  };

  //at this point, we have done nothing yet. We launch the request now
  request.send();
  // app.innerHTML = "<div class='alert alert-success'>Ici les promotions</div>";
}

// Create promotion form-group
var createPromotionForm = function() {
  app.innerHTML = '<fieldset>';
  app.innerHTML += '<legend>Créer une promotion</legend>';
  app.innerHTML += '<div class="form-group">';
  app.innerHTML += '<label class="col-md-4 control-label" for="promotionname">Nom de la promotion</label>';
  app.innerHTML += '<div class="col-md-4">';
  app.innerHTML += '<input id="promotionname" name="promotionname" placeholder="Nom de la promotion" class="form-control input-md" required="" type="text">';
  app.innerHTML += '<span class="help-block">Indiquez ici le nom de la promotion</span>';
  app.innerHTML += '</div';
  app.innerHTML += '</div>';
  app.innerHTML += '<div class="form-group">';
  app.innerHTML += '<label class="col-md-4 control-label" for="validate"></label>';
  app.innerHTML += '<div class="col-md-4">';
  //We call the createPromotion function with document... as promotionName's value
  app.innerHTML += '<button onclick="createPromotion(document.getElementById(\'promotionname\').value);" id="validate" name="validate" class="btn btn-primary">Valider</button>';
  //Delete promotion
  app.innerHTML += '<button onclick="deletePromotion(document.getElementById(\'promotionname\').value);" id="delete" name="delete" class="btn btn-danger">Supprimer</button>';
  app.innerHTML += '</div>';
  app.innerHTML += '</div>';
  app.innerHTML += '</fieldset>';

};

//Create function for promotions
 var createPromotion = function(promotionName) {
  console.log("You tried to create a promotion " + promotionName);
  var promotion = {
    "name": promotionName,
    "stardate": "2018-01-01",
    "enddate": "2018-06-30",
  };
  var promotionJSON = JSON.stringify(promotion);


}

// Check of the promotion variable
console.log(promotion);
// CHeck of the promotion JSON variable
console.log(promotionJSON);
};
