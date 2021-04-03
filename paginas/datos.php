<?php
include "../config.php";
class modelo{
    private $ci;
    private $nombre;
    private $apellido;
    private $rol;

    // public function __construct()
    // {
    //     $this->ci="";
    //     $this->nombre="";
    //     $this->apellido="";
    //     $this->rol="";
    // }
    public function almacenar($a,$b,$c,$d){
        $this->ci=$a;
        $this->nombre=$b;
        $this->apellido=$c;
        $this->rol=$d;
    }
    public function getCI(){
        return $this->ci;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getRol(){
        return $this->rol;
    }


}
?>