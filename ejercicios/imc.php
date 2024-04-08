<?php
require_once "index.php"; 
$peso = $_POST['peso']; 
$altura = $_POST['altura'];
$dato1 = is_numeric($peso);
$dato2 = is_numeric($altura);
$resultado = 0;
if($dato1 == true and $dato2 == true){
        $resultado = $peso / (($altura / 100) * ($altura / 100));
        echo "Tu índice de masa corporal es igual a $resultado"; 
}else {
    echo "Están mal puestos los datos"; 
}
?>