<?php ob_start("comprimir_pagina"); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Codigo Unico</title>
  <script < src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="lib/fingerprint2.js"></script>
  <script>
      var codigo='';
      var d1 = new Date();
      var fp = new Fingerprint2();
      fp.get(function(result, components) {
         codigo=result;
      });
      var promo=2
  </script>
</head>
<body>
  <div id="container"></div>

  <div>
</div>
</body>
 <script>
      $(document).ready(function(){

        var dataString = 'codigo=' + codigo + '&promo=' + promo;
              $.ajax({
                 type : 'POST',
                 url  : 'respuesta.php',
                 data:  dataString,

                 success:function(data) {
                      console.log(data);
                     $('#container').html(data).fadeIn();
                 }
              });
        });
  </script>
</html>
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
