<?php
require_once "index.php"; 
$texto = $_POST['texto']; 
$txt = str_word_count($texto); 
echo "El número de palabras utilizadas es $txt"; 
?>