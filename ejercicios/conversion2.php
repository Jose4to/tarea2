<?php
    require_once "index.php";
    echo "<br>";
        $temperatura = $_POST['tipo'];
        $temperatura2 = $_POST['tipo2'];
        $temperatura3 = strtoupper($temperatura2);
        $valor = 0; 
        $dato = "";
        $digitos = ['0','1','2','3','4','5','6','7','8','9', '-', '.'];
        for($i = 0; $i < strlen($temperatura); $i++){
            if(in_array($temperatura[$i], $digitos)){
                $dato = $dato . $temperatura[$i];
            }
            elseif($temperatura[$i] == 'C' or $temperatura[$i] == 'c'){
                if($temperatura3 == 'F'){
                    $valor = ($dato * 5 / 9) + 32;
                    echo "<b>Los grados es igual a $valor F";
                }
                elseif($temperatura3 == 'K'){
                    $valor = $dato + 273.15;
                    echo "<b>Los grados es igual a $valor K";
                }
                else {
                    echo "El dato no existe para hacer la conversión";
                    break;
                }
                break; 
            }
            elseif($temperatura[$i] == 'F' or $temperatura[$i] == 'f'){
                if($temperatura3 == 'C'){
                    $valor = ($dato - 32) * 5 / 9;
                    echo "<b>Los grados es igual a $valor C";
                }
                elseif($temperatura3 == 'K'){
                    $valor = ($dato - 32) * 5 / 9 + 273.15;
                    echo "<b>Los grados es igual a $valor K";
                }
                else {
                    echo "El dato no existe para hacer la conversión";
                    break;
                }
                break; 
            }
            elseif($temperatura[$i] == 'K' or $temperatura[$i] == 'k'){
                if($temperatura3 == 'C'){
                    $valor = $dato - 273.15;
                    echo "<b>Los grados es igual a $valor C";
                }
                elseif($temperatura3 == 'F'){
                    $valor = ($dato - 273.15) * 5 / 9 + 32;
                    echo "<b>Los grados es igual a $valor F";
                }
                else {
                    echo "El dato no existe para hacer la conversión";
                    break;
                }
                break; 
            }else 
            {
                echo "El dato ingresado no es correcto";
            }
        }
    
?>