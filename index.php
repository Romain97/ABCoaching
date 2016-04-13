<!DOCTYPE html>
<html lang="fr">
	
  <head>

    <?php
      include("commun.php")
    ?>

    <link type="text/css" rel="stylesheet" href="./css/style_index.css">

		<title>ABCoaching</title>

    <script>
      $(document).ready(function(){
        if($(window).width() > 700){
          $("#Apprendre").animate({left: '100px'}); 
          $("#Accompagner").animate({left: '250px'});
          $("#Developper").animate({left: '450px'}); 
        } else {
          $("#Apprendre").animate({left: '25px'}); 
          $("#Accompagner").animate({left: '75px'});
          $("#Developper").animate({left: '125px'}); 
        }
      });
    </script>

	</head>
	
	<body>

    <?php
      include("header.php")
    ?>
     
    <div class="row index_section1">
      <div class="index_section1_texte">    
        <div id="Apprendre">
        <a href="./formations.php">Apprendre</a>
        </div>
        <div id="Accompagner">
        <a href="./coaching.php">Accompagner</a>
        </div>
        <div id="Developper">
        <a href="./ateliers.php">Développer</a>
        </div>
      </div>
      <div class="index_section1_photo"></div>     
    </div>


    <div class="row index_section2_presentation">
      <div class="bloc_photo col-lg-6 col-md-6 hidden-sm hidden-xs">
        <div class="presentation_photo col-lg-10 col-md-10 col-sm-10 col-xs-10">
        </div>
      </div>
      <div class="presentation_biographie col-lg-5 col-md-5 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10">
        <h1>Annie Bearez</h1>
        <hr>
        <p>Le souhait d'évoluer, une envie de "mieux", une perte de motivation, des difficultés personnelles, le sentiment d'être débordé, un manque de confiance en soi, une décision délicate à prendre, des bonnes résolutions à garantir...
        <p>Le coaching vous aide !</p>
        <p>Le coaching est un moyen efficace et rapide d'atteindre votre objectif, qu'il soit professionnel, personnel, ou bien familial.</p>
      </div>
    </div>

    <div class="row index_section3_activites">
      <h2>Je vous propose</h2>
      <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10">
        <div class="row">
          <div class="formation_photo col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <a href="./formations.php"> 
              <img src="images/formation_test1.jpg" alt="" title="" class="img-responsive"> 
            </a>
            <h3>Formations</h3>
            <p>Management d'équipe,</p>
            <p>préparation à la retraite, etc.</p>
          </div>
          <div class="coaching_photo col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
            <a href="./coaching.php"> 
              <img src="images/coaching_test1.jpg" alt="" title="" class="img-responsive"> 
            </a> 
            <h3>Coaching</h3>
            <p>Franchir un obstacle,</p>
            <p>atteindre un objectif, etc.</p>
          </div>
          <div class="atelier_photo col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
            <a href="./ateliers.php"> 
              <img src="images/ateliers_test1.jpg" alt="" title="" class="img-responsive"> 
            </a> 
            <h3>Ateliers</h3>
            <p>Co-développement</p>
            <p>En demi-journée par petit groupe</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row index_section4_blog">
      <div class="citation col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-10 col-sm-offset-1 col-xs-offset-1 col-xs-10 col-xs-offset-1">"Te justifier ne t'apportera jamais un chameau de plus."</div>
      <div class="blog1 col-lg-offset-1 col-lg-6 col-lg-offset-1 col-md-offset-1 col-md-6 col-md-offset-1 col-sm-offset-1 col-sm-10 col-sm-offset-1 col-xs-offset-1 col-xs-10 col-xs-offset-1">
        <div class="c-frame-tl"></div>
        <div class="c-frame-tr"></div>
        <div class="c-frame-br"></div>
        <div class="c-frame-bl"></div>
          <h2>Titre de l'article 1</h2>
          <p> Nulla tincidunt, arcu a ullamcorper eleifend, eros urna pellentesque magna, ac maximus metus ex pulvinar magna. Integer mattis vel sapien lacinia scelerisque. Cras et tellus nec risus mollis facilisis non vitae turpis...</p>
          <p></p>
          <h2>Titre de l'article 2</h2>
          <p> Nulla tincidunt, arcu a ullamcorper eleifend, eros urna pellentesque magna, ac maximus metus ex pulvinar magna. Integer mattis vel sapien lacinia scelerisque. Cras et tellus nec risus mollis facilisis non vitae turpis. Praesent venenatis suscipit orci sagittis fringilla. Nulla facilisi...</p>
        </div>
      </div>
  
  <?php
    include("footer.php")
  ?>

	</body>

</html>