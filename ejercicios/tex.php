<?php
require_once "index.php"; 
$texto = $_POST['texto'];
$tip = str_replace([' '], '', $texto);
$total = 0;
for($i = 0; $i < strlen($tip); $i++){
    $total++;
}
echo "el total de los caracteres de esa cadena es igual a $total";
?>