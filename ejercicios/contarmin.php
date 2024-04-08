<?php 
    $cadena = "ejemplo de cadena de texto"; 
    $cadenaMin = strtolower($cadena);
    $vocales = ['a', 'e', 'i', 'o', 'u'];
    $conteovocales = 0; 
    for($i = 0; $i < strlen($cadenaMin); $i++){
        if(in_array($cadenaMin[$i], $vocales)){
            $conteovocales++;
        }
    }
    echo "Numero de vocales en la cadena: ". $conteovocales;
?>