<!--
Oet Capital
Sigue sudando v2
22 de Agosto 2018
-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="google" content="notranslate">
    <meta name="viewport" content="width=device-width, initial-scale=1.0000, minimum-scale=1.0000, maximum-scale=1.0000, user-scalable=no">
    <title>Sigue Sudando | Gatorade ®</title>
    <link rel="stylesheet" href="ui/css/fonts.css">
    <link rel="stylesheet" href="ui/css/master.css">
    <link rel="prefetch" href="ui/img/logotipo-gatorade.svg">
    <link rel="canonical" href="www.siguesudando.com">
    <link rel="apple-touch-icon" sizes="180x180" href="ui/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="ui/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="ui/fav/favicon-16x16.png">
    <link rel="manifest" href="ui/fav/site.webmanifest">
    <link rel="mask-icon" href="ui/fav/safari-pinned-tab.svg" color="#000000">
    <link rel="shortcut icon" href="ui/fav/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="ui/fav/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="El lugar perfecto para encontrar las mejores promociones de toda la línea de Gatorade ®">
    <meta name="keywords" content="Sigue Sudando, Hidratación, Hidratar, Ejercicio, Electrolitos, Energía, Gatorade, Promoción, Deporte, Football Energy, OXXO">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="backend/js/fingerprint2.js"></script>
    <script src="backend/js/app.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125324668-1"></script>
    <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-125324668-1');
  </script>
  </head>
  <body id="index" class="standarWidth">
    <!-- LOADING -->
    <div id="loading" class="flexDisplay standarWidth trans7">
      <div>
        <img src="ui/img/logotipo-gatorade.svg" alt="Logotipo Gatorade ®" width="280" height="280">
        <div class="flexDisplay">
          <p>Cargando</p>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- MENU -->
    <nav id="menu" class="flexDisplay trans7">
      <h1>
        <a href="index.php">
          <img src="ui/img/logotipo-gatorade.svg" class="trans3" alt="Gatorade ®" title="Gatorade ®" width="60px" height="60px">
        </a>
      </h1>
      <p id="stateText"></p>
      <div id="blk"></div>
    </nav>
    <!-- PRODUCTOS CARRUSEL -->
    <div id="carrusel" class="standarWidth" style="display:block">
      <section id="producto1" class="producto flexDisplay trans7">
        <div class="wrap trans7"></div>
        <a role="button" id="buttonHome" class="buttonG scaleUpButtonInit">Obtén Tu Cupón</a>
      </section>
    </div>
    <!-- GENERANDO CUPÓN -->
    <div id="generandocupon" class="standarWidth trans7" style="display:block">
      <section id="loadCoupon1" class="producto flexDisplay">
        <div class="wrap"></div>
        <div id="counter" class="flexDisplay">
          <svg viewBox="0 0 119.5 119.5"><path id="ccircleB" class="ccircle" d="M7.5,59.75a52.25,52.25 0 1,0 104.5,0a52.25,52.25 0 1,0 -104.5,0"/></svg>
          <svg viewBox="0 0 119.5 119.5"><path id="ccircleW" class="ccircle" d="M7.5,59.75a52.25,52.25 0 1,0 104.5,0a52.25,52.25 0 1,0 -104.5,0"/></svg>
          <p>0</p>
        </div>
      </section>
    </div>
    <!-- CUPON 24 -->
    <div id="horasDiv" class="mensaje standarWidth" style="display:block">
      <div class="flexDisplay">
        <p>
          <span>¡Ups!</span>
        </p>
        <p>
          Acabas de crear un cupón <br/><span>vuelve pronto.</span>
        </p>
        <div id="social" class="flexDisplay">
          <a href="https://www.facebook.com/GatoradeMexico/" target="_blank">
            <img src="ui/img/social/fb.svg" width="50" height="50">
          </a>
          <a href="https://www.instagram.com/gatorademexico/" target="_blank">
            <img src="ui/img/social/ig.svg" width="50" height="50">
          </a>
        </div>
      </div>
    </div>
    <!-- CUPON Agotado -->
    <div id="agotadoDiv" class="mensaje standarWidth" style="display:none">
      <div class="flexDisplay">
        <p>
          <span>¡Ups!</span>
        </p>
        <p>
          Los cupones <span>se han agotado</span>
        </p>
        <div id="social" class="flexDisplay">
          <a href="https://www.facebook.com/GatoradeMexico/" target="_blank">
            <img src="ui/img/social/fb.svg" width="50" height="50">
          </a>
          <a href="https://www.instagram.com/gatorademexico/" target="_blank">
            <img src="ui/img/social/ig.svg" width="50" height="50">
          </a>
        </div>
      </div>
    </div>
    <!-- CUPÓN -->
    <div id="cupon" class="standarWidth" style="display:none">
      <section id="cupon1" class="cupon"></section>
      <a id="download" role="button" class="buttonG trans7" onclick="savedCoupon()">Capturar Pantalla</a>
    </div>
    <!-- CUPÓN GUARDADO -->
    <div id="guardado" class="mensaje standarWidth" style="display:none">
      <div class="flexDisplay">
        <img src="ui/img/logotipo-gatorade.svg" alt="Logotipo Gatorade ®" width="120" height="120">
        <p>
          Ya tienes más <span>Gatorade<span>®</span></span> para seguir sudando
        </p>
        <p>
          <span>#siguesudando<span>®</span></span>
        </p>
        <div id="social" class="flexDisplay">
          <a href="https://www.facebook.com/GatoradeMexico/" target="_blank">
            <img src="ui/img/social/fb.svg" width="50" height="50">
          </a>
          <a href="https://www.instagram.com/gatorademexico/" target="_blank">
            <img src="ui/img/social/ig.svg" width="50" height="50">
          </a>
        </div>
      </div>
    </div>
    <!-- FOOTER -->
    <footer id="footer" class="flexDisplay trans7">
      <a class="flexDisplay trans3" href="terminos-condiciones.html">Consulta Bases, Términos y Condiciones</a>
      <p><span>  |  </span>Hidrátate sanamente | ® Marca Registrada </p>
    </footer>
    <!-- PREVENT LANDSCAPE -->
    <div id="preventLandscape" class="dislplayNone">
      <img src="ui/img/rotate.svg" width="50" height="50">
      <p>Por favor gira tu teléfono</p>
    </div>
    <!-- SCRIPT -->
    <script src="ui/js/bowser.min.js" charset="utf-8"></script>
    <script src="ui/js/front.js" charset="utf-8"></script>
    <script>
      window.onload = function(){ valido(); }
    </script>
  </body>
</html>
