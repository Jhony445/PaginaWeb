<?php
class RolUsuario{
    //Atributos
    private $idRolUsuario;
    private $nombreRolUsuario;
    private $descripcion;

    //Constructor
    public function __construct($nombreRolUsuario, $descripcion){
        $this->nombreRolUsuario =  $nombreRolUsuario;
        $this->descripcion = $descripcion;
    }
    //Metodos set y get
    

}
?>