<?php 
require_once "index.php"; 
$a = $_POST['dato1'];
$b = $_POST['dato2'];
$c = 0; 
$d = 0; 
$dato1 = is_numeric($a);
$dato2 = is_numeric($b);
if($dato1 == true and $dato2 == true){
    for($i = 0; $i < $b; $i++){
        $c = $c + $a;
        $d = $d + 1;  
        echo "<br>$a x $d =  $c";
    }
}
else{
    echo "Hay algun dato mal ingresado"; 
}
?>