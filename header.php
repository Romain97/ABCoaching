<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./index.php">
        <img alt="nautile" src="./images/petit_nautile_bleu.png" class="nautile">
      </a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li>
          <a href="./index.php">Accueil</a>
        </li>
        <li>
          <a href="./qui_suis_je.php">Qui suis-je ?</a>
        </li>
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mes prestations <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="./formations.php">Formations</a></li>
            <li><a href="./coaching.php">Coaching</a></li>
            <li><a href="./ateliers.php">Ateliers</a></li>
          </ul>
        </li>
        <li>
          <a href="./references.php">Références</a>
        </li>
        <li>
          <a href="./liens.php">Liens</a>
        </li>
        <li>
          <a href="./temoignages.php">Témoignages</a>
        </li>
        <li>
          <a href="./blog.php">Blog</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./contact.php">Contact</a></li>
        <li><a class="linked_in" href="https://fr.linkedin.com/in/anniebearez"><img alt="Brand" src="./images/LinkedIn_logo_initials.png"></a></li>
      </ul>
    </div>
  </div>
</nav>

<script>
  $(document).ready(function(){
      var url = window.location;
      // Will only work if string in href matches with location
      // $('ul.nav a[href="'+ url +'"]').parent().addClass('active');

      // Will also work for relative and absolute hrefs
      $('ul.nav a').filter(function() {
          return this.href == url;
      }).parent().addClass('active');
  });
</script>
