<?php 
require_once "index.php"; 
$correo1 = $_POST['correo']; 
$correo = strtolower($correo1); 
$validacion = ['@', '.']; 
for ($i = 0; $i < strlen($correo); $i++){
    if(in_array($correo[$i], $validacion)){
        if($correo[$i] == '@'){
            $correo2 = str_replace(['@'], '', $correo);
            for($i = 0; $i < strlen($correo2); $i++){
                if(in_array($correo2[$i], $validacion)){
                    if($correo2[$i] == '.'){
                        $i = $i + 1; 
                        if($correo2[$i] == 'c'){
                            $i = $i + 1; 
                            if($correo2[$i] == 'o'){
                                $i = $i + 1; 
                                if($correo2[$i] == 'm')
                                {
                                    echo "El correo $correo1 es válido"; 
                                    break;
                                }
                                else {
                                    echo "El correo $correo1 no es válido"; 
                                    break; 
                                }
                            }else {
                                echo "El correo $correo1 no es válido"; 
                                break; 
                            }
                        }else {
                        echo "El correo $correo1 no es válido"; 
                        break; 
                        }
                    }
                } 
            }
            break; 
        }
        else {
            echo "El correo esta mal ingresado";
            break;
        }
    }
}
?>