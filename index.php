<!DOCTYPE html>
<html lang="fr">
	
  <head>
		<meta charset="utf-8"/>
		<script type ="text/javascript" src="./js/boostrap.min.js"></script>
    <script src="./js/jquery.js"></script>
    <link type="text/css" rel="stylesheet" href="./css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>    
    <link type="text/css" rel="stylesheet" href="./css/style_index.css">
		<title>ABCoaching</title>

    <script>
      $(document).ready(function(){
        $("#Apprendre").animate({left: '100px'}); 
        $("#Accompagner").animate({left: '250px'});
        $("#Developper").animate({left: '450px'});   
      });
    </script>

	</head>
	
	<body>

    <?php
      include("header.php")
    ?>
    
    <div class="index_section1_texte">
      <div id="Apprendre">Apprendre</div>
      <div id="Accompagner">Accompagner</div>
      <div id="Developper">Développer</div>
    </div>

    <div class="index_section1_photo"></div>


    <div class="index_section2_presentation">
        <div class="row">
          <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-offset-2 col-sm-8 col-sm-offset-2 col-xs-offset-2 col-xs-8 col-xs-offset-2">
            <img src="images/photo2annie.png" class="img-responsive">
          </div>
          <div class="biographie col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <h1>Annie Bearez</h1>
            <p>Quam ob rem id primum videamus, si placet, quatenus amor in amicitia progredi debeat. Numne, si Coriolanus habuit amicos, ferre contra patriam arma illi cum Coriolano debuerunt? num Vecellinum amici regnum adpetentem, num Maelium debuerunt iuvare?
            Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos.</p>
          </div>
        </div>
    </div>

    <div class="index_section3_activites">
      <div class="row">
        <p>Je vous propose...</p>
        <!--<div class="col-md-12">-->
          <div class="col-lg-10 col-lg-offset-1">
            <!--<div class="col-md-12">-->
              <div class="formation_photo col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="./mes_prestations.php"> 
                  <img src="images/formation_test1.jpg" alt="" title="" class="img-responsive"> 
                </a>
                <h3>Formations</h3>Lorem ipsum<br>dolor sit amet
              </div>
              <div class="coaching_photo col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
                <a href="./mes_prestations.php"> 
                  <img src="images/coaching_test1.jpg" alt="" title="" class="img-responsive"> 
                </a> 
                <h3>Coaching</h3>Lorem ipsum<br>dolor sit amet
              </div>
              <div class="atelier_photo col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
                <a href="./mes_prestations.php"> 
                  <img src="images/atelier_test1.jpg" alt="" title="" class="img-responsive"> 
                </a> 
                <h3>Ateliers</h3>Lorem ipsum<br>dolor sit amet
              </div>

          </div>

      </div>
    </div>

    <div class="index_section4_blog">
      <div class="row">
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
      </div>
    </div>
  <?php
    include("footer.php")
  ?>

	</body>

</html>