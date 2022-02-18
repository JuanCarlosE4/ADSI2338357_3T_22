<?php
require_once("Clase_cuentabancaria.php");
//Crear una instancia de la clase cuenta bancaria
$Objeto_cuentabancaria = new Cuentabancaria(1001, "Ahorro", 1050000.55, "Retiro");
echo $Objeto_cuentabancaria->id . "<br>";
echo $Objeto_cuentabancaria->tipo_de_cuenta . "<br>";
$Objeto_cuentabancaria->getCuentabancaria();
print_r('<br>');
print_r($Objeto_cuentabancaria);
print_r('</pre>');
echo "<br>";
echo $Objeto_cuentabancaria-> retirar_dinero(16786.7)."<br>";
echo "Tipo de cuenta: " . $Objeto_cuentabancaria->getTipocuenta();
$Objeto_cuentabancaria->setTipocuenta("Cuenta corriente");
//Hay que llenar nuevamente el metodo get
echo $Objeto_cuentabancaria-> saldo . "<br>";
echo "Tipo de cuenta: " . $Objeto_cuentabancaria->getTipocuenta();
echo $Objeto_cuentabancaria-> transaccion(333) . "<br>";
echo $Objeto_cuentabancaria-> saldo;
?>