var MetodoEnum = {
  Validar_Fecha:1,
  Obten_Cupon:2
 };
 var codigo='';
 var promo=0;
function huella()
{
  var d1 = new Date();
  var fp = new Fingerprint2();
  fp.get(function(result, components) {
     codigo=result;
  });
  promo=2;
  console.log('Huella '+codigo+' promo '+promo);
}
function obtencupon()
{
  param1=MetodoEnum.Obten_Cupon;
  cupon(param1);
}
function cupon(param1)
{
  huella();
  var dataString = 'param1=' + param1 + 'codigo=' + codigo + '&promo=' + promo;
        $.ajax({
           type : 'POST',
           url  : 'respuesta.php',
           data:  dataString,

           success:function(data) {
                console.log(data);
               //$('#container').html(data).fadeIn();
           }
        });
}

function valido()
{
  param1=MetodoEnum.Validar_Fecha;
  ValidateDate(param1);
}
function ValidateDate(param1) {
  var dataString = 'param1=' + param1;
  //console.log(dataString);
  $.ajax({
    type : 'POST',
    url  : 'respuesta.php',
    data:  dataString,
    success:function(data) {
      //console.log(data);
      if(data=="SI")
      {
        generateSeqHome();
        detectBrowser();
      }
      else
      {

        $('#index').html(data).fadeIn();
        //console.log('no');
          // checkPais(data);
         //checkLoginState();
      }
    }
  });
}
