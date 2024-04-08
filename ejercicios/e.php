<?php 
require_once "index.php"; 
$edad = $_POST['edad']; 
$dato = is_numeric($edad); 
if($dato == true){
    if($edad >= 18){
        echo "es usted mayor de edad";
    }
    else {
        echo "usted no es mayor de edad"; 
    }
}
?>