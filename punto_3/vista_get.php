<?php
echo "<pre>";
// print_r($_POST["pass"]);
$datos = $_GET;

foreach ($datos as $llave => $valor) {
    echo $llave." : ".$valor."<br>";
}