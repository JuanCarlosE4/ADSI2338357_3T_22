<?php
class Cuentabancaria{
    //Atributos;
    public $id;
    private $tipo_de_cuenta;
    public $saldo;
    public $movimiento;
    public $fecha_movimiento;

    //Metodo princial
    function __construct($vr_id, String $vr_tipo_de_cuenta, float $vr_saldo, $vr_movimiento)
    {
        $this->id = $vr_id;
        $this->tipo_de_cuenta = $vr_tipo_de_cuenta;
        $this->saldo = $vr_saldo;
        $this->movimiento = $vr_movimiento;
        $this->fecha_movimiento= date ('Y-m-d');

    } //End Constructor

    //Metodos secundarios
    //Mostrar la informacion de la cuenta

    public function getCuentabancaria(){
        $arrayCuentabancaria = Array(
            'No.Cuenta' => $this-> id,
            'Tipo de cuenta: ' => $this->tipo_de_cuenta,
            'Saldo: ' => $this->movimiento,
            'Fecha: ' => $this->fecha_movimiento,
        );
        return $arrayCuentabancaria;
    }
    public function retirar_dinero(float $retiro){
        if ($this->saldo>$retiro){
            $vr_saldo = $this -> saldo;
            $vr_saldo = $vr_saldo - $retiro;
            $this->saldo = $vr_saldo;
        }else{
            echo "El monto exede el saldo de la cuenta";
        }
        echo "Valor del retiro:" . $retiro . " nuevo saldo: " . $this->saldo;
        return $vr_saldo;
    }
 public function transaccion(float $Consignacion){
    $vr_saldo = $this -> saldo;
    $vr_saldo = $vr_saldo + $Consignacion;
    $this->saldo = $vr_saldo;
    echo "El valor de la consignacion fue de:" . $Consignacion . $this->saldo;
   return $vr_saldo;
 }
 public function setTipo_de_cuenta(){
     $tipo_de_cuenta =  $this->tipo_de_cuenta;
 }

    } //End class
?>