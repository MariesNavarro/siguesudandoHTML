<?php
date_default_timezone_set('America/Mexico_City');

require_once('conexion.php');
require_once('funciones.php');


mysql_set_charset('utf8');

function getcodigo($client,$idClient,$promo)
{
     $query1 = "SELECT TIME_TO_SEC(TIMEDIFF(NOW(), fecha_entregado))>(24*60*60) Entregar,TIMEDIFF(NOW(), fecha_entregado) TiempoTranscurrido,TIMEDIFF( TIMEDIFF('2018-08-01 00:00:00', '2018-07-31 00:00:00'),TIMEDIFF(NOW(), fecha_entregado)) TiempoRestante from gtrd_cupones where ip='".$client."' and huella_digital='".$idClient."' and id_promo=".$promo." order by fecha_entregado desc LIMIT 1;";
	 $result1 = mysql_query($query1);

	 //if (mysql_num_rows($result1)<1) {
    if(true){
       $query     = "SELECT codigo FROM gtrd_cupones where estatus=0 and id_promo=".$promo." LIMIT 1;";
	   $result = mysql_query($query);
	   return $result;
	 }
	 else
	 {
	 	while($datos = mysql_fetch_array($result1)) {
	 		if($datos['Entregar']=='1')
                 {
                     $query2= "SELECT codigo FROM gtrd_cupones where estatus=0 and id_promo=".$promo." LIMIT 1;";
	                 $result2 = mysql_query($query2);
	                 return $result2;
                 }
            else
            {
            	$query3 = "SELECT TIME_TO_SEC(TIMEDIFF(NOW(), fecha_entregado))>(24*60*60) Entregar,TIMEDIFF(NOW(), fecha_entregado) TiempoTranscurrido,TIMEDIFF( TIMEDIFF('2018-08-01 00:00:00', '2018-07-31 00:00:00'),TIMEDIFF(NOW(), fecha_entregado)) TiempoRestante from gtrd_cupones where ip='".$client."' and huella_digital='".$idClient."' and id_promo=".$promo." order by fecha_entregado desc LIMIT 1;";
                $result3 = mysql_query($query3);
                return $result3;
            }
	 	}

	 }

}
function getpromoestado($ip,$promo)
{
    $query1 = "SELECT * from gtrd_promociones_estados where id_promo=".$promo.";";
	 $result1 = mysql_query($query1);
	if($result1)
	{
        $salida          = 0;
        $country_code    = '';
        $ip_address      = $ip;
        $country_name         = 'Local';
        $country_city    = '';
        $country_region  = '';
        $estado='';
        //$salida = get_country_local($country_code,$ip_address,$lang,$country_name,$id_group); // busqueda en BD local
        //if ($salida==0) {
        $salida = get_country_api($country_code,$ip_address,$country_region); // busqueda en api de google
        $estado=$country_region;//equivalencia_estados_api($country_code,$region);
        //$query2 = "SELECT * from gtrd_promociones_estados where id_promo=".$promo." and estado='".$estado."' and  pais='".$country_code."';";
        $query2="select * from gtrd_promociones_estados a inner join gtrd_estados b on a.id_estado=b.id where b.codigo_estado='".$estado."' and b.pais='".$country_code."';";

	    $result2 = mysql_query($query2);
	    if ($result2) {
          $query3     = "SELECT 1 PromoValid;";
	      $result3 = mysql_query($query3);
	      return $result3;
	    }
	    else
	    {
	      $query     = "SELECT 0 PromoValid;";
	      $result = mysql_query($query);
	      return $result;
	 	}
	}
	else
	{
	  $query     = "SELECT 1 PromoValid;";
	  $result = mysql_query($query);
	  return $result;
	}


}
function update_codigos($codigo,$client,$idClient)
{
	$query ="UPDATE  gtrd_cupones SET estatus = 1,ip='".$client."',huella_digital='".$idClient."',fecha_entregado=NOW() WHERE codigo = '".$codigo."'";
    $Result = mysql_query($query);
}

?>
