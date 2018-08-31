<?php
date_default_timezone_set('America/Mexico_City');
 // equivalancias de los estados (regiones) de la api e geoplugin y la BD de estados
function equivalencia_estados_api($country_code,$region) {
    $edo = '';

    $region = strtoupper($region);

    if ($country_code=='MX') { // mexico

      if ($region=='THE FEDERAL DISTRICT')  {
        $edo = 'CDMX';
      } else if ($region=='SINALOA') {
         $edo = 'SINALOA'; 
      } else if ($region=='BAJA CALIFORNIA') {
         $edo = 'BAJACALI'; 
      } else if ($region=='NUEVO LEÓN') {
         $edo = 'NUEVOLEON';       
      } else if ($region=='VERACRUZ-LLAVE') {
         $edo = 'VERACRUZ'; 
      } else if (strpos($region, 'AGUAS') !== false) {
         $edo = 'AGUASCALIE'; 
      } else if (strpos($region, 'CAMPECHE') !== false) {
         $edo = 'CAMPECHE'; 
      } else if (strpos($region, 'CIUDAD DE MÉXICO') !== false) {
         $edo = 'CDMX'; 
      } else if (strpos($region, 'CHIAPAS') !== false) {
         $edo = 'CHIAPAS'; 
       } else if (strpos($region, 'CHIHUAHUA') !== false) {
         $edo = 'CHIHUAHUA';     
       } else if (strpos($region, 'COAHUILA') !== false) {
         $edo = 'COAHUILA';     
       } else if (strpos($region, 'COLIMA') !== false) {
         $edo = 'COLIMA';     
       } else if (strpos($region, 'DURANGO') !== false) {
         $edo = 'DURANGO';     
       } else if (strpos($region, 'GUANAJUATO') !== false) {
         $edo = 'GUANAJUATO';     
       } else if (strpos($region, 'GUERRERO') !== false) {
         $edo = 'GUERRERO';     
       } else if (strpos($region, 'HIDALGO') !== false) {
         $edo = 'HIDALGO';     
       } else if (strpos($region, 'MICHOACAN') !== false) {
         $edo = 'MICHOACAN';     
       } else if (strpos($region, 'MORELOS') !== false) {
         $edo = 'MORELOS';     
       } else if (strpos($region, 'NAYARIT')!== false) {
         $edo = 'NAYARIT';     
       } else if (strpos($region, 'OAXACA') !== false) {
         $edo = 'OAXACA';     
       } else if (strpos($region, 'PUEBLA') !== false) {
         $edo = 'PUEBLA';     
       } else if (strpos($region, 'QUERETARO') !== false) {
         $edo = 'QUERETARO';     
       } else if (strpos($region, 'QUINTANA') !== false) {
         $edo = 'QUINTANARO';     
       } else if (strpos($region, 'POTOSÍ') !== false) {
         $edo = 'SANLUISPOT';     
       } else if (strpos($region, 'SONORA') !== false) {
         $edo = 'SONORA';     
       } else if (strpos($region, 'TABASCO') !== false) {
         $edo = 'TABASCO';     
       } else if (strpos($region, 'TAMAULIPAS') !== false) {
         $edo = 'TAMAULIPAS';     
       } else if (strpos($region, 'TLAXCALA') !== false) {
         $edo = 'TLAXCALA';     
       } else if (strpos($region, 'VERACRUZ') !== false) {
         $edo = 'VERACRUZ';     
       } else if (strpos($region, 'YUCATAN')!== false) {
         $edo = 'YUCATAN';     
       } else if (strpos($region, 'ZACATECAS') !== false) {
         $edo = 'ZACATECAS';                  
      } else {
         $edo = 'SINALOA';   // por defecto
      }  
    } 
    else
    {
    	$edo=$region;
    }
    // strpos($mystring, $findme);
    return $edo;
}
function get_country_api(&$country_code,&$ip_address,&$country_region){
    $salida     = 0;
    $geopluginURL   = 'http://www.geoplugin.net/php.gp?ip='.$ip_address;
    $addrDetailsArr = unserialize(file_get_contents($geopluginURL));
    $country_code   = $addrDetailsArr['geoplugin_countryCode'];
    $country_region = $addrDetailsArr['geoplugin_regionCode'];

    if ($country_code!='') {  $salida = 1;}
      
    return $salida;
}

?>
