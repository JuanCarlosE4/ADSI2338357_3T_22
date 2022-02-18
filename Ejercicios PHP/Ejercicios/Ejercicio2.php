<?php
//Elaborar una función que permita capturar una frase digitada por el usuario y la cambie a mayusculas o solo la primera en mayusculas 
//de acuerdo a la opcion escogida por el usuario.

$vrcadena = "juan carlos ";
$vrconvertir = "Minusculg";
function  conversion_cadena1($vrconvertir, $vrcadena){
    if ($vrconvertir == "Mayusculas") {
        $vrcadena_devuelta = strtoupper($vrcadena);
    } else {
        if ($vrconvertir == "Minusculas"){
            $vrcadena_devuelta = strtolower($vrcadena);
        }else{
            $vrcadena_devuelta = ucfirst($vrcadena);
        }
    }
    return $vrcadena_devuelta;
}
echo conversion_cadena1($vrconvertir, $vrcadena);
?>