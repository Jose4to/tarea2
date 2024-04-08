<?php
require_once "index.php";
$tipo = $_POST['tipo'];
$tipos = strtoupper($tipo); 
if($tipos == 'CI'){
    echo "<form action='r.php' method='post'> ";
    echo "Ingrese el radio <input type='text' name='r'>";
    echo "<input type = 'submit'>";
    
}
elseif($tipos == 'CU'){
    echo "<form action='re.php' method='post'> ";
    echo "Ingrese un lado <input type='text' name='l'>";
    echo "<input type = 'submit'>";
    
}
elseif($tipos == 'RE'){
    echo "<form action='rec.php' method='post'> ";
    echo "Ingrese el largo <input type='text' name='l'>";
    echo "Ingrese el ancho <input type='text' name='a'>";
    echo "<input type = 'submit'>";
    
}
?>