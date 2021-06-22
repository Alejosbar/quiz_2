<?php
//CICLO FOR

for($i=1; $i<=15; $i++){
    echo $i;
    echo "<br>";
 }
$contador = 1;
$limite = 10;

//CICLO WHILE

while($contador < $limite){
    echo $contador . '<br />';
    $contador++;
 }
 echo "<br>";

//CONDICIONAL IF - ELSE IF - ELSE

$variable0 =4;
   if($variable0 = 4) {
    echo "Variable es igual a 4";
    echo "<br>";
    
    } else {
    echo "Variable no es igual a 4";
    echo "<br>";    
    }
    $variable1 =1;
    if ($variable1 == 0) {
        echo "Variable es igual a 0";
    } elseif ($variable1 == 1) {
        echo "variable es igual a 1";
    } elseif ($variable1 == 2) {
        echo "variable es igual a 2";
    }
    echo "<br>";

//SWITCH

$variable2 =2;
switch ($variable2) {
    case 0:
        echo "variable es igual a 0";
        break;
    case 1:
        echo "variable es igual a 1";
        break;
    case 2:
        echo "variable es igual a 2";
        break;
}


//TERNARIA