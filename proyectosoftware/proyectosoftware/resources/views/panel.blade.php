<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Learn how to quickly get started using our CSS framework. We have guides for a variety of skill levels.">
    <title>Getting Started - Materialize</title>
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->
    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
    <link href="css/panel.css" rel="stylesheet">
    <script>
      window.liveSettings = {
        api_key: "a0b49b34b93844c38eaee15690d86413",
        picker: "bottom-right",
        detectlang: true,
        dynamic: true,
        autocollect: true
      };
    </script>
    <script src="//cdn.transifex.com/live.js"></script>
  </head>
  <body>
    <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle"><i class="mdi-navigation-menu"></i></a></div>
      <ul id="nav-mobile" class="side-nav fixed">
        <li class="logo">
            <a id="logo-container" href="#" class="brand-logo">
            <img src="img/loader.png" height="80px" width="80px">
            </a>
        </li>
        <li class="bold"><a href="#" class="waves-effect waves-teal">Link</a></li>
        <li class="bold"><a href="#" class="waves-effect waves-teal">Link</a></li>
        <li class="bold"><a href="#" class="waves-effect waves-teal">Link</a></li>
        <li class="bold"><a href="#" class="waves-effect waves-teal">Link</a></li>
      </ul>
    </header>
    <main>


        <nav style="background-color:#006684">
          <div class="nav-wrapper">
            <ul class="right hide-on-med-and-down">
              <li><a href="#">Posible Link</a></li>
              <!-- Dropdown Trigger -->
              <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Username<i class="mdi-navigation-arrow-drop-down right"></i></a>
              <ul id="dropdown1" class="dropdown-content" style="width: 140px; position: absolute; top: 0px; left: 476.5625px; opacity: 1; display: none;">
              <li><a href="#!">Link</a></li>
              <li><a href="#!">Link</a></li>
              <li class="divider"></li>
          
               <li>
                            <a href="{{url('logout')}}">Cerrar Sesion</a>
              </li>
              </ul>
              </li>
            </ul>
          </div>
        </nav>


   <div class="section" id="index-banner" style="background-color:#009673">
  <div class="container">
    <div class="row">
      <div class="col s12 m9">
        <h1 class="header center-on-small-only">Panel de Administración</h1>
        <h4 style ="color:rgb(252, 252, 252);" class ="light text-lighten-4 center-on-small-only">
        Este es un texto de prueba.
        </h4>
      </div>
      <div class="col s12 m3">
        <!-- BuySellAds Zone Code -->
        <div class="buysellads-header center-on-small-only">
          <!-- CarbonAds Zone Code -->
          <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=materializecss" id="_carbonads_js"></script>
        </div>
        <!-- End BuySellAds Zone Code -->
      </div>
    </div>
  </div>
</div>

<div class="container">
  <!--  Outer row  -->
  <div class="row">

    <div class="section col s12 m9 l10">

      <div id="download" class="row scrollspy">
          <h2 style ="color:rgba(145, 145, 145, 1);"class="col s12 header">
          Texto mas pequeño
          </h2>
        <p class="caption col s12">
        Párrafo de prueba.
        </p>

      </div>


    </div>

  </div>

</div>

    </main>    

    <footer class="page-footer" style="background-color:#006684">
      <div class="container">
        <div class="row">
          <div class="col l4 s12">
            <h5 class="white-text">Texto pie de página</h5>
            <p class="grey-text text-lighten-4">
            Párrafo pie de página.
            </p>
            <form action="#" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="encrypted" value="">
            <button class="btn waves-effect waves-light teal darken-1" type="submit" name="" alt="">Botoncito</button>
            </form>

          </div>
        </div>
      </div>

      <div class="footer-copyright">
        <div class="container">
        © 2015 Ingeniería en Software, Derechos Reservados.
        <a class="grey-text text-lighten-4 right" href="#">GLAMOROSO GODOFREDO</a>
        </div>
      </div>

    </footer>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }
    </script>
    <script src="js/escript.js"></script>  
    <!-- Twitter Button -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <!-- Google Plus Button-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <!--  Google Analytics  -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-56218128-1', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
    </script>
    <script>
      $('#download-source, #download-sass').on('click', function () {
        $('#download').slideUp(
          { duration: 500,
            easing: "easeOutQuart",
            queue: false,
            complete: function()
              { $('#download-thanks').slideDown({ duration: 300,
            easing: "easeOutQuart"}); }
          });
          
      });
    </script>
  </body>
</html>