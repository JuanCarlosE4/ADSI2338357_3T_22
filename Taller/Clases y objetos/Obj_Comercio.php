<?php

require_once("01_Class_Persona.php");
require_once ("02_Class_Cliente.php");
//$vrcedula,  $vrnombres, $vredad, $vrcelular,$vrcredito
//Instancia de la clase persona
$ObjPersona = new Persona(45345345, "Andrea Ruiz", 23,31246443,42342343);
echo "<h2> Llamado a la clase Persona </h2><br>";
echo "Cedula de la persona: " . $ObjPersona->getCedula();
echo "Nombres: " . $ObjPersona-> nombre . "<br>";
$ObjPersona->setCedula(3146757863);
echo "Cedula de la persona: " . $ObjPersona->getCedula() . "<br>";

//Instancia de la clase cliente
$ObjCliente = new Cliente (43534456456, "Juana Paz", 24, 675674535,234234234);
echo "<h2> Llamado a la clase Cliente </h2><br>";
echo "Cedula: " . $ObjCliente->getCedula() . "<br>";
echo "Nombre de la persona: " . $ObjCliente->nombre. "<br>";
echo "Valor del crédito: " . $ObjCliente->getCredito();
?>