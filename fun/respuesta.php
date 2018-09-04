<?php ob_start("comprimir_pagina");?>
<?php
    require_once('lib/db.php');
    require_once('lib/barcode.php');
    $htmlresult='';
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
         $ip = $_SERVER['HTTP_CLIENT_IP'];
     } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
         $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
     } else {
         $ip = $_SERVER['REMOTE_ADDR'];
     }
     $idClient = $_POST['codigo'];
     $idprom=$_POST['promo'];
     $findip=getpromoestado($ip,$idprom);
     if(mysql_num_rows($findip)>0)
     {
       while($datos1 = mysql_fetch_array($findip)) {
            if($datos1['PromoValid']=='1')
             {
                $result=getcodigo($ip,$idClient,$idprom);
                if (mysql_num_rows($result)>0) {
                while($datos = mysql_fetch_array($result)) {
                  if($datos['codigo']!='')
                  {
                    $filepath = "";
                    $text ="".$datos['codigo']."";
                    $size = "450";
                    $orientation = "horizontal";
                    $code_type = "code128";
                    $print = true;
                    $sizefactor = "3";
                    $ismob = true;

                    barcode( $filepath, $text, $size, $orientation, $code_type, $print, $sizefactor,$ismob);

                    echo '<img src="img/promoMob'.$datos['codigo'].'.png"/><br/><br/><br/><br/><br/><img src="img/promo'.$datos['codigo'].'.png"/><a href="img/promoMob'.$datos['codigo'].'.png" download>Descargar</a>';
                    update_codigos($datos['codigo'],$ip,$idClient);
                  }
                  else
                  {
                    echo 'Ya has recibido un codigo,debes esperar un lapso de 24 horas para solicitar otro. Tiempo Transcurrido desde tu ultima solicitud '.$datos['TiempoTranscurrido'].' aun deves esperar '.$datos['TiempoRestante'].'<br/>';
                  }
                }
              }
              else
              {
                echo 'La promocion o los codigos se han agotado.<br/>';
              }
            }
            else
            {
              echo 'Esta promocion no es valida en tu ubicacion<br/>';
            }
       }
     }
     else
     {
       echo 'Ocurrio un error al solicitar el codigo<br/>';
     }

?>
<?php
  ob_end_flush();
 function comprimir_pagina($buffer) {

    $search = array(
        '/\>[^\S ]+/s',     // elimina espacios en blanco después de las etiquetas, excepto el espacio
        '/[^\S ]+\</s',     // elimina en blanco antes de las etiquetas, excepto el espacio
        '/(\s)+/s',         // Acortar múltiples secuencias de espacios en blanco.
        '/<!--(.|\s)*?-->/' // Borrar comentarios html
    );

    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
   }
?>
