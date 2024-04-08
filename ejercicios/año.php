<?php
require_once "index.php"; 
$año = $_POST['año']; 
$a = is_numeric($año); 
if($a == true){
    $bisiesto = $año % 4; 
    if($bisiesto == 0){
        echo "El año ingresado en efecto es bisiesto"; 
    }else 
    {
        echo "El año ingresado no es bisiesto"; 
    }
}else {
    echo "El año está mal ingresado"; 
}
?>