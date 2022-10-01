<?php
class usuario{
    //Atributos
    private $idUsuario;
    private $nombreUsuario;
    private $apellidoPaternoUsuario;
    private $apellidoMaternoUsuario;
    private $email;
    private $telefono;
    private $estatusUsuario;

    //Constructor
    public function __construct($idUsuario, $nombreUsuario, $apellidoPaternoUsuario,
    $apellidoMaternoUsuario, $email, $telefono,$estatusUsuario){
        $this->idUsuario =  $idUsuario;
        $this->nombreUsuario = $nombreUsuario;
        $this->apellidoPaternoUsuario = $apellidoPaternoUsuario;
        $this->apellidoMaternoUsuario = $apellidoMaternoUsuario;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->estatusUsuario = $estatusUsuario;

    }
    //Metodos set y get

}
?>