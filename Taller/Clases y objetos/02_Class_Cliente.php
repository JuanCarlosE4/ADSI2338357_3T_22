<?php
require_once("01_Class_Persona.php");
class Cliente extends Persona
{
    private $credito;
    public function __construct( $vrcedula,  $vrnombres, $vredad, $vrcelular,$vrcredito)
    {
        //envio los atributos se asignen a la clase persona.
        parent::__construct($vrcedula, $vrnombres, $vredad, $vrcelular, $vrcredito);
        $this->credito = $vrcredito;
    }
    public function getCredito(){
        return $this->credito;
    }
       //Set the value of cedula
       public function setCredito($credito){
        $this->credito = $credito;
        return $this;
    }
}
?>