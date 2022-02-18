<?php
$vr_dia= "I";
// L. Lunes M. Martes I. Miescoles J. Jueves V. Viernes
switch ($vr_dia) {
    case ($vr_dia=='L' or 'l');
        echo "Lunes";
        break;
        case ($vr_dia=='M' or 'm');
        echo "Martes";
        break;
        case ($vr_dia=='I' or 'i');
        echo "Miercoles";
        break;
        case ($vr_dia=='J' or 'j');
        echo "Jueves";
        break;
        case ($vr_dia=='V' or 'v');
        echo "Viernes";
        break;
        case ($vr_dia);
        echo "La letra no corresponde ";
        break;
}
?>