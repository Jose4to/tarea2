<?php
require_once "index.php"; 
$a = 0;
$c = 0; 
echo "numeros pares ";
for($i = 0; $i <= 40; $i++){
    $a = $a + 1; 
    $b = $a % 2;
    if($b == 0){
        echo "$a, ";
    }
}
echo "numeros impares ";
for($i = 0; $i < 40; $i++){
    $c = $c + 1; 
    $d = ($c + 1) % 2;
    if($d == 0){
        echo "$c, ";
    }
}
?>