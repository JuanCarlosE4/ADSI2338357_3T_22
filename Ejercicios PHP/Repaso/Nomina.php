<?php
// Nombres, documento, salario, fecha_ingreso, clave.
// Dias tabrajados - Salario minimo.
$vr_nombre= 'Pepito';
$vr_documento= 1535785;
$vr_fecha_ingreso = date ('Y-m-d');
$vr_salario= 1000000;
$vr_valordia= $vr_salario / 30;
$vr_diastrabajados= 10;
$vr_pago = $vr_valordia * $vr_diastrabajados;
echo "El pago es: " . number_format($vr_pago);
echo "<br>";

if ($vr_pago==1000000){
    echo "Se le puede prestar: $5.000.000 " ;
}else{
    if ($vr_pago==2000000){
        echo "Se le puede prestar $7.000.000";
    }else{
    if ($vr_pago==3000000){
        echo "Se le puede prestar $10.000.000";
    }else{
        echo "No se puede realizar el prestamos";
    }
}
}


?>