<?php
require_once "index.php";
$largo = $_POST['l'];
$dato1 = is_numeric($largo);
    if($dato1 == true){
        $area = $largo * $largo;
        $perimetro = $largo * 4 ;
        echo "El area del cuadrado es $area y el perimetro es $perimetro";
    }
?>