<?php
  require_once('backend/lib/db.php');
  $htmlresult='';
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  else {
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  $tipo=$_POST['param1'];
  if($tipo==1)
  {
    $cads;
    $idprom=$_POST['promo'];
    $val=validafechas($cads,$idprom);
    if($val[0]>0.000001&&$val[1]<0.00000001)
    {
      //echo "SI";
      validalista($idprom,$ip);
    }
    else
    {
      echo '<nav id="menu" class="flexDisplay trans7" style="opacity: 1;">
        <h1>
          <a href="index.php"> <!-- CAMBIAR!!!!! -->
            <img src="ui/img/logotipo-gatorade.svg" alt="Gatorade ®| Sigue Sudando | Promociones" title="Gatorade ®| Sigue Sudando | Promociones" width="60px">
          </a>
        </h1>
        <p id="stateText"></p>
        <div id="blk"></div>
      </nav>
      <div id="horasDiv" class="mensaje standarWidth" style="display:block">
        <div class="flexDisplay">
          <p>
            <span>¡Ups!</span>
          </p>
          <p>
            La promocion se ha terminado<span>espera proximas promociones</span>
          </p>
          <div id="social" class="flexDisplay">
            <a href="https://www.facebook.com/GatoradeMexico/" target="_blank">
              <img src="ui/img/social/fb.svg" width="60">
            </a>
            <a href="https://www.instagram.com/gatorademexico/" target="_blank">
              <img src="ui/img/social/ig.svg" width="60">
            </a>
          </div>
        </div>
      </div><footer id="footer" class="flexDisplay trans7" style="opacity: 1;">
        <a class="flexDisplay" href="terminos-condiciones.html" target="_blank">Consulta Bases, Términos y Condiciones</a>
        <p><span>  |  </span>Hidrátate sanamente | ® Marca Registrada </p>
      </footer>';
  }
}
else if($tipo==2)
{
  $idClient = $_POST['codigo'];
  $idprom=$_POST['promo'];
  getcupon($ip,$idClient,$idprom);
}

?>
