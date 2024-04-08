<?php
    $numero1 = 5; 
    $numero2 = 10; 
    $suma = $numero1 + $numero2;
    echo "la suma de los numeros es igual a $suma ";
    
    $numero = 0; 
    if($numero > 1){
        echo "el numero es menor a 1 ";
    }elseif ($numero >= 1 ){
        echo "el numero es mayor a 1 ";
    }

    for ($i = 1; $i <= 10; $i++ ){
        echo "<br>";
        echo $i;
    }
    
?>