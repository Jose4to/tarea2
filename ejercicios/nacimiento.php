<?php 
require_once "index.php";
$nacimientoa = $_POST['año']; 
$nacimientom = $_POST['mes']; 
$nacimientod = $_POST['dia']; 
$digitos = ['0','1','2','3','4','5','6','7','8','9'];
$dias = is_numeric($nacimientod); 
$meses = is_numeric($nacimientom); 
$años = is_numeric($nacimientoa); 
$dato1 = 0;
$dato2 = 0;
$dato3 = 0;
if($dias == true and $meses == true and $años == true)
{
    //tomando en cuenta la fecha de su nacimiento hasta el 7 de abril del 2024 
    $dato1 = 2023 - $nacimientoa;
    $dato2 = 15 - $nacimientom; 
    $dato3 = 38 - $nacimientod; 
    if($dato3 >= 31){
        $dato2 = $dato2 + 1;
        $dato3 = 7 - $nacimientod;  
        if($dato2 >= 12){
            $dato1 = $dato1 + 1;
            $dato2 = 4 - $nacimientom;  
        }
    }elseif($dato2 <= 4){
        $dato1 = $dato1 + 1; 
    }
    echo "Usted tiene $dato1 años con $dato2 meses y $dato3 días"; 
}
?>