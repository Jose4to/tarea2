<?php 
require_once "index.php"; 
$a = $_POST['dato1'];
$b = $_POST['dato2'];
$c = $_POST['dato3'];
$dato1 = is_numeric($a);
$dato2 = is_numeric($b);
$dato3 = is_numeric($c);
if($dato1 == true and $dato2 == true and $dato3 == true){
    echo "El dato mayor es " . max($a, $b, $c); 
} else {
    echo "Hay algún dato mal ingresado"; 
}

?>