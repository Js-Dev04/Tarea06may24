<?php 
    $datos = $_GET;
    echo('<pre>');
    if (!ctype_digit(implode('', $datos))) {
        die('Error: No todos los elementos del array son enteros.');
        }else{
    if (count($datos) > 5) {
        die('Error: El array tiene más de 5 elementos.');

    }else{ 
        var_dump($datos);
            
                    }
                }
        
    
     
    
 ?>