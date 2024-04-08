<?php 
require_once "index.php"; 
$devil = $_POST['devil']; 
$texto = str_replace(['puta', 'mierda', 'coño', 'pendejo', 'idiota', 'negro', 'marica', 'culiao', 'triplehijueputa', 'verga', 'cerote', 'estupido'], '****', $devil);
echo "Escribiste: $texto";
?>