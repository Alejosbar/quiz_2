<?php
//EN ESTE ARCHIVO VA TU CLASE

class ingreso{
    public $usuario;
    public $contraseña;
    function __construct($usuario_ingreso, $password)
    {
        $this->usuario = $usuario_ingreso;
        $this->contraseña = $password;
    }

    function ingreso_valido(){
        $usuario_sistema = "alejosbar"; 
        $contraseña_sistema = "josale";

        $mensaje_error = "Incorrecto";

        if($this->usuario == $usuario_sistema){
            if($this->contraseña == $contraseña_sistema){
                return "Correcto";
            }else{
                return $mensaje_error;
            }
        }else{
            return $mensaje_error;
        }
    }
}


