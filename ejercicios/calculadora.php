<?php
require_once "index.php"; 
$a = $_POST['dato1'];
$b = $_POST['dato2'];
$operacio = $_POST['dato3'];
$operacion = strtoupper($operacio);
$resultado = 0;
$dato1 = is_numeric($a);
$dato2 = is_numeric($b);
if($dato1 == true and $dato2 == true){
    if($operacion == "S") {    
        $resultado = $a + $b;
        echo "<br>el resultado es igual a: $resultado ";
    }else if($operacion == "R") {
        $resultado = $a - $b;
        echo "<br>el resultado es igual a: $resultado ";
    }else if($operacion == "M") {
        $resultado = $a * $b;
        echo "<br>el resultado es igual a: $resultado ";
    }else if($operacion == "D") {
        $resultado = $a / $b;
        echo "<br>el resultado es igual a: $resultado ";
    }else {
        echo "La operación ingresada no existe";
    }
}


?>