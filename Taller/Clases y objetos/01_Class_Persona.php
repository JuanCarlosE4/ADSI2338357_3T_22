<?php
class Persona{
    protected $cedula;
    public $nombres;
    protected $edad;
    public $celular;
    //Constructor
    function __construct(int $vr_cedula, String $vr_nombres, $vr_edad, $vr_celular){
        $this->cedula =$vr_cedula;
        $this->nombres =$vr_nombres;
        $this->edad =$vr_edad;
        $this->celular =$vr_celular;
    }//end constructor 
    public function getDatospersonales(){
        $arrayDatospersonales=array(
            'Cedula: ' => $this->cedula,
            'Nombres: ' => $this->nombres,
            'Edad: ' => $this->edad,
            'Celular: ' => $this->celular,
        );
        return $arrayDatospersonales;
    }
    //Get the value of cedula
    public function getCedula(){
        return $this->cedula;
    }
    //Set the value of cedula
    public function setCedula($cedula){
        $this->cedula = $cedula;
        return $this;
    }
}
?>