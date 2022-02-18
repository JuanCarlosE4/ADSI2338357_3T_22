<?php
class Clientes{
    //Atributos;
    public $cedula;
    public $nombre;
    public $email;
    public $fecha_de_registro;
    public $password;

    //Metodo princial
    function __construct(String $vr_cedula, String $vr_nombre, String $vr_email, $vr_password)
    {
        $this->cedula = $vr_cedula;
        $this->nombre = $vr_nombre;
        $this->email = $vr_email;
        $this->password = $vr_password;
        $this->fecha_de_registro= date ('Y-m-d');

    } //End Constructor

    //Metodos secundarios
    //Mostrar la informacion de la cuenta

    public function getUsuarios(){
        $arrayDatos = Array(
            'Cedula: ' => $this-> cedula,
            'Nombre: ' => $this->nombre,
            'Email: ' => $this->email,
            'Contraseña: ' =>$this->password,
            'Fecha: ' => $this->fecha_de_registro,
        );
        return $arrayDatos;
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
    } //End class
?>