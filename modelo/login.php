<?php
class login{
    //Atributos
    private $idLogin;
    private $nombreLogin;
    private $claveLogin;
    private $fechaCreacion;
    private $estatusLogin;
    private $idRolUsuario;
    private $idUsuario;

    //Constructor
    public function __construct($idLogin, $nombreLogin, $claveLogin, $fechaCreacion, $estatusLogin,
    $idRolUsuario,$idUsuario ){
        $this->idLogin =  $idLogin;
        $this->nombreLogin = $nombreLogin;
        $this->claveLogin =  $claveLogin;
        $this->fechaCreacion =  $fechaCreacion;
        $this->estatusLogin =  $estatusLogin;
        $this->idRolUsuario =  $idRolUsuario;
        $this->idUsuario =  $idUsuario;
    }
    //Metodos set y get

}
