<?php
$vr_numero1 = 1;
$vr_numero2 = 752;
$vr_numero3 = 2352;
$vr_numero4 = 435;
if ($vr_numero1 > $vr_numero2 && $vr_numero1 > $vr_numero3 && $vr_numero1 > $vr_numero4) {
    echo 'El mayor es: ' . $vr_numero1;
} else {
    if ($vr_numero2 > $vr_numero1 && $vr_numero2 > $vr_numero3 && $vr_numero2 > $vr_numero4) {
        echo 'El mayor es: ' . $vr_numero2;
    } else {
        if ($vr_numero3 > $vr_numero1 && $vr_numero3 > $vr_numero2 && $vr_numero3 > $vr_numero4) {
            echo 'El mayor es: ' . $vr_numero3;
        } else {
            if ($vr_numero4 > $vr_numero1 && $vr_numero4 > $vr_numero2 && $vr_numero4 > $vr_numero3) {
                echo 'El mayor es: ' . $vr_numero4;
            }
        }
    }
}
