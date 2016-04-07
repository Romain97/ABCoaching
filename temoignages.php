<!DOCTYPE html>
<html lang="fr">
	
  <head>
		<meta charset="utf-8"/>
		<script type ="text/javascript" src="./js/boostrap.min.js"></script>
    <script src="./js/jquery.js"></script>
    <link type="text/css" rel="stylesheet" href="./css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="./css/style_temoignages.css">
		<title>Témoignages</title>

	</head>
	
	<body>

    <?php
      include("header.php")
    ?>

    <div class="temoignages_section2">
      <div class="row">
        <!--Formulaire-->
        <form class="formulaire col-lg-offset-1 col-lg-4 col-md-offset-1 col-md-5 col-sm-12 col-xs-12">
          <h1>Formulaire de témoignage :</h1>
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
        <div class="temoignages col-lg-offset-1 col-lg-5 col-lg-offset-1 col-md-offset-1 col-md-5 col-md-offset-1 col-sm-12 col-xs-12">
          <p><strong>Michel DURAND, DRH, RTE</strong></p>
          <p><em>«  Etiam metus risus, vestibulum sed sollicitudin at, vulputate non turpis. Quisque sollicitudin id odio et ullamcorper. Suspendisse ut diam lobortis, blandit orci non, rutrum dui. Morbi commodo tortor posuere consequat ultrices. Proin vulputate mi sed tortor tempor pharetra. Vestibulum tristique consequat ullamcorper. Donec posuere scelerisque nunc, non imperdiet urna tincidunt a.
          Curabitur molestie augue ut placerat pharetra. Ut elementum nunc justo, a dictum nunc venenatis a. Proin posuere mattis augue, id pretium orci luctus non. Aliquam at pellentesque eros. Quisque luctus urna sed dolor imperdiet tempus. Quisque felis arcu, laoreet non mollis at, dictum a risus. Vestibulum vitae vehicula sem, ut pulvinar diam. Aenean scelerisque urna in auctor placerat. Maecenas eget dui justo. Pellentesque dui tellus, rutrum vel risus at, ultricies condimentum magna. Morbi mattis dolor massa, ac egestas nibh tristique nec. Phasellus non congue felis. Sed suscipit rhoncus augue eget egestas. »</em></p>
        </div>
      </div>



  <?php
    include("footer.php")
  ?>

	</body>

</html>