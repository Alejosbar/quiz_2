<?php
require_once "class_nombre.php";
//EN ESTE ARCHIVO USAS TU CLASE

if (filter_var($_POST['usuario'], FILTER_VALIDATE_EMAIL)) {
    $usuario_ingreso = new login($_POST['usuario'], $_POST['contraseña']);
    $contraseña_sistema = $usuario_ingreso->validar_usuario();
    echo $contraseña_sistema;
}else{
    echo "Correo invalido";
}