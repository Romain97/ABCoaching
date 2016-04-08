<!DOCTYPE html>
<html lang="fr">
	
  <head>

    <?php
      include("./css/commun.css")
    ?>

		<link type="text/css" rel="stylesheet" href="./css/style_contact.css">
    
		<title>Contact</title>

	</head>
	
	<body>

    <?php
      include("header.php")
    ?>

    <div class="row_contact">

      <!--Bloc contact-->
      <div class="contact col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12">
        <h1>CONTACT</h1>
        <p>41 Rue Robert Poisson<br>28130 SAINT PIAT<br>PARIS : Place d'Italie, Nationale<br>06 87 68 13 99<br>annie.bearez@wanadoo.fr</p>
        <!--Formulaire-->
        <form class="formulaire col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12">
          <h1>Formulaire de contact :</h1>
          <div class="form-group">
            <label for="Input_nom"></label>
            <input type="text" class="form-control" id="Input_nom" placeholder="Nom, prénom">
          </div>
          <div class="form-group">
            <label for="Input_email"></label>
            <input type="email" class="form-control" id="Input_email" placeholder="Email">
          </div>
          <fieldset class="form-group">
            <label for="Input_telephone"></label>
            <input type="text" class="form-control" id="Input_telephone" placeholder="Téléphone">
          </fieldset>
          <fieldset class="form-group">
            <label for="Input_sujet"></label>
            <input type="text" class="form-control" id="Input_sujet" placeholder="Sujet">
          </fieldset>
          <fieldset class="form-group">
            <label for="Input_texte"></label>
            <textarea class="form-control" id="Input_texte" rows="3" placeholder="Mon message"></textarea>
          </fieldset>
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
      </div>

      <!--Carte de localisation-->
      <div class="maps col-lg-4 col-lg-offset-1 col-md-offset-1 col-md-offset-1 col-md-4 col-md-offset-1 col-hidden-sm col- hidden-xs">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14943.80878486592!2d1.5723702804991457!3d48.538652430118596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e41064cb21fb51%3A0x2e86372cadd676!2s41+Rue+Robert+Poisson%2C+28130+Saint-Piat!5e0!3m2!1sfr!2sfr!4v1459952529933" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        <p></p>
        <a href="http://www.voyages-sncf.com/billet-train/horaires">Pour consulter les horaires de train</a>
      </div>

    </div>

    <?php
      include("footer.php")
    ?>

	</body>

</html>