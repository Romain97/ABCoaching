<!DOCTYPE html>
   <html lang="fr">
    	<head>

    	<?php
    	include("commun.php")
    	?>

    	<link type="text/css" rel="stylesheet" href="./css/style_plan_site.css">
    	    
    		<title>Plan du site</title>

    	</head>
    		
    	<body>

    	<?php
    	include("header.php")
    	?>

    	<div class="titre_plan_site">
    		<h2><u>Plan du site</u></h2>
    	</div>
    		
    	<div class="plan_site">
    	<ul>
    		<li id="Accueil">
    		<a href="./index.php">"Accueil"</a></li>
    		<li id="qui_suis-je">
    		<a href="./qui_suis_je">"Qui suis-je ?"</a></li>
    		<li id="mes_prestations">"Mes prestations"</li>
    			<div class="formations">
    			<li id="formations">
    			<a href="./formations.php">"Formations"</a></li>
    			</div>
    			<div class="coaching">
    			<li id="coaching">
    			<a href="./coaching.php">"Coaching"</a></li>
    			</div>
    			<div class="ateliers">
    			<li id="ateliers">
    			<a href="./ateliers.php">"Ateliers"</a></li>
    			</div>
    		<li id="references">
    		<a href="./references.php">"Références"</a></li>
    		<li id="liens">
    		<a href="./index.php">"Liens"</a></li>
    		<li id="temoignages">
    		<a href="./temoignages.php">"Témoignages"</a></li>
    		<li id="blog">
    		<a href="./blog.php">"Blog"</a></li>
    		<li id="contact">
    		<a href="./contact.php">"Contact"</a></li>
    		<li id="linkedin">
    		<a href="https://fr.linkedin.com/in/anniebearez">"Linked In"</a></li>
    		<li id="plan_site">
    		<a href="./plandusite.php">"Plan du site"</a></li>
    		<li id="mentions_legales">
    		<a href="./mentionslegales.php">"Mentions légales"</a></li>

    	</ul>
    	</div>
    	
    	<?php
    	  include("footer.php")
    	?>

    </body>
</html>

