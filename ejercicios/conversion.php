<?php
    require_once "index.php";
    echo "<br>";
    $cadena = $_POST['cadena']; 
    $cadenaLimpia = strtolower(str_replace([' ', '.', ',','!'], '', $cadena));
    $cadenaInvertida = strrev($cadenaLimpia);
    if($cadenaLimpia == $cadenaInvertida){
        echo "La cadena $cadena es un palíndromo";
    } else {
        echo "La cadena $cadena no es un palíndromo"; 
    }
?>
