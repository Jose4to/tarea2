<?php
require_once "index.php";
$radio = $_POST['r'];
    $rad = is_numeric($radio);
    if($rad == true){
        $area = $radio * $radio * 3.14159;
        $perimetro = $radio * 2 * 3.14159;
        echo "El area del circulo es $area y el perimetro es $perimetro";
    }
?>