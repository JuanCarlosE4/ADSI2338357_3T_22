<?php
require_once("02_Class_Cliente.php");
class Empleado extends Cliente{
    private $salario;
    public function __construct($vrcedula,  $vrnombres, $vredad, $vrcelular,$vrcredito, $vrsalario){
        parent::__construct($vrcedula,  $vrnombres, $vredad, $vrcelular,$vrcredito,$vrsalario);
        $this->salario = $vrsalario;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($vrsalario){
        $this->salario = $vrsalario;
    }
}
?>