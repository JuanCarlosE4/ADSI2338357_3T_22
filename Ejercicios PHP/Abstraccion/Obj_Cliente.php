<?php
require_once("Class_Cliente.php");
//Crear una instancia de la clase cuenta bancaria
$Obj_Cliente = new Clientes(100167576, "Franco", "franc2@misena.edu.co", "sd", 3589375784);
echo $Obj_Cliente->nombre . "<br>";
echo $Obj_Cliente->fecha_de_registro . "<br>";
echo $Obj_Cliente->getCedula(). "<br>";
echo $Obj_Cliente->getEmail();
?>