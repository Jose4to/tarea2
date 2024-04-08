<?php
require_once "index.php";
$tipo = $_POST['tipo'];
$cantidad = $_POST['conversion'];
$conversion = ['$', 'Q', '€'];
$resultado = 0; 
for($i = 0; $i < strlen($tipo); $i++){
    if(in_array($tipo[$i], $conversion)){
        $tip = str_replace(['$', 'Q', '€'], '', $tipo);
        $tipos = is_numeric($tip);
        if($tipos == true){
            if($tipo[$i] == '$'){
                if($cantidad == 'Q'){
                    $resultado = $tip * 7.78;
                    echo "la cantidad de dolares puestas a quetzales es igual a: Q$resultado";
                }
                elseif($cantidad == '€') {
                    $resultado = $tip * 0.92;
                    echo "la cantidad de dolares puestas a euros es igual a: €$resultado";
                }
                else {
                    echo "No es posible convertir la cantidad"; 
                    break;
                }
                break ;
            }
            if($tipo[$i] == 'Q'){
                if($cantidad == '$'){
                    $resultado = $tip * 0.13;
                    echo "la cantidad de quetzales puestas a dolares es igual a: $$resultado";
                }
                elseif($cantidad == '€') {
                    $resultado = $tip * 0.12;
                    echo "la cantidad de quetzales puestas a euros es igual a: €$resultado";
                }
                else {
                    echo "No es posible convertir la cantidad"; 
                    break;
                }
                break;
            }
            if($tipo[$i] == '€'){
                if($cantidad == 'Q'){
                    $resultado = $tip * 8.44;
                    echo "la cantidad de euros puestas a quetzales es igual a: Q$resultado";
                }
                elseif($cantidad == '$') {
                    $resultado = $tip * 1.08;
                    echo "la cantidad de dolares puestas a euros es igual a: $$resultado";
                }
                else {
                    echo "No es posible convertir la cantidad"; 
                    break;
                }
                break;
            }
        }else {
            echo "Los numeros no estan bien";
            break; 
        }
    }else 
    {
        echo "La moneda no es valida"; 
        break;
    }
}

?>