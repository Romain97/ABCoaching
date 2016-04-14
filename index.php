<!DOCTYPE html>
<html lang="fr">
	
  <head>

    <?php
      include("commun.php")
    ?>

    <link type="text/css" rel="stylesheet" href="./css/style_index.css">

		<title>Annie Bearez Coaching à St Piat en Eure et Loir (28)</title>

    <meta name="description" content="Site internet d'Annie Bearez sur son activité de coaching et d'accompagnement dans une nouvelle étape de votre vie. Son activité se situe en Eure et Loir et à Paris."/>
    
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
        <p>Comme vous sans doute, j’aime apprendre. Apprendre  aux autres – apprendre des autres.C’est un plaisir sans cesse renouvelé, c’est le sens de ma vie. D’où cette envie d’enseigner et de me tourner vers la formation.<br><br>
        Mon expérience d’animation de groupe m’a conduite tout naturellement vers l’accompagnement individuel.<br><br>
        Ma spécialité  ?  ce sont les jeunes :<br>
         - Jeune embauché : prise de poste<br>
         - Jeune maman (même à 40 ans), jeune papa<br>
         - Jeune sénior : préparation à la retraite, sens de la vie<br>
         - Jeune entrepreneur : construire un projet professionnel<br>
         - Nouvelle identité : promotion, divorce, veuvage, ...<br><br>
        Cette « conscience d’être soi » génère implicitement un mieux-être avec l’autre, ce qui améliore le relationnel, et atténue les conflits.<br><br>
        Mes clients disent qu’ils apprécient ma bonne humeur et mon coté pragmatique.<br><br>
        Je suis passionnée par la plongée sous marine et les longues courses à pieds, pour l’équilibre du corps, de la pensée, et des sensations.<br><br>
        Et vous  : quel est votre hobby ,  votre bulle d’oxygène  ?<br><br>
        à très vite.<br>
        <h1>Annie Bearez</h1></p>

      </div>
    </div>

    <div class="row index_section3_activites">
      <p class="accroche">Je vous propose</p>
      <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10">
        <div class="row">
          <div class="formation_photo col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <a href="./formations.php"> 
              <img src="images/formation_test1.jpg" alt="" title="" class="img-responsive"> 
            </a>
            <h2>Formations</h2>
            <p>Management d'équipe,</p>
            <p>préparation à la retraite, etc.</p>
          </div>
          <div class="coaching_photo col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
            <a href="./coaching.php"> 
              <img src="images/coaching_test1.jpg" alt="" title="" class="img-responsive"> 
            </a> 
            <h2>Coaching</h2>
            <p>Franchir un obstacle,</p>
            <p>atteindre un objectif,</p>
            <p>gagner du temps, etc.</p>
          </div>
          <div class="atelier_photo col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
            <a href="./ateliers.php"> 
              <img src="images/ateliers_test1.jpg" alt="" title="" class="img-responsive"> 
            </a> 
            <h2>Ateliers</h2>
            <p>Développement personnel</p>
            <p>Une demi-journée en petit groupe</p>
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
          <h2>Les réseaux sociaux : une désynchronisation temporelle et spatiale ?</h2>
          <p>Dans le sujet proposé « réseaux sociaux et thérapie », j’interroge l’impact d’une « identité sociale » potentiellement accessible via internet, par les thérapeutes sur leurs clients et inversement.<br>
          L’AT a-t-elle un champ « sociologie » ? ...<a href="#"> Lire la suite</a></p>
          <p></p>
          <h2>Titre de l'article 2</h2>
          <p> Nulla tincidunt, arcu a ullamcorper eleifend, eros urna pellentesque magna, ac maximus metus ex pulvinar magna. Integer mattis vel sapien lacinia scelerisque. Cras et tellus nec risus mollis facilisis non vitae turpis. Praesent venenatis suscipit orci sagittis fringilla. Nulla facilisi ...<a href="#"> Lire la suite</a></p>
        </div>
      </div>
  
  <?php
    include("footer.php")
  ?>

	</body>

</html>