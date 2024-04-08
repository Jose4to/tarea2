<?php
require_once "index.php"; 
$otxet = $_POST['texto']; 
$texto = strrev($otxet);
echo "El texto ingresado $otxet al reves luce así $texto"; // outputs "!dlrow olleH"
?>
