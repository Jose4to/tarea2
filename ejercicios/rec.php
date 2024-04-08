<?php
require_once "index.php";
$largo = $_POST['l'];
$ancho = $_POST['a'];
$dato1 = is_numeric($largo);
$dato2 = is_numeric($ancho);
    if($dato1 == true and $dato2 == true){
        $area = $largo * $ancho;
        $perimetro = ($largo * 2) + ($ancho * 2);
        echo "El area del rectangulo es $area y el perimetro es $perimetro";
    }
?>