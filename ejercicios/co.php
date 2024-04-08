<?php 
require_once "index.php";
function generatePassword($length)
{
    $key = "";
    $pattern = "1234567890abcdefghijklmñnopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ.-_*/=[]{}#@|~¬&()?¿";
    $max = strlen($pattern)-1;
    for($i = 0; $i < $length; $i++){
        $key .= substr($pattern, mt_rand(0,$max), 1);
    }
    return $key;
}
$digito = $_POST['digitos'];
$digitos = is_numeric($digito); 
if($digitos == true){
    echo "tu nueva contraseña segura es " . generatePassword($digito);
}

?>