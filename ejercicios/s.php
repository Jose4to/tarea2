<?php
require_once "index.php";
$s = $_POST['sorteo']; 
$so = rand(1, 100);
if($so == 39){
    echo "¡¡FELICIDADES $s !!, has ganado el sorteo";
}
else {
    echo "Lamentablemnte no has ganado $s"; 
}
?>