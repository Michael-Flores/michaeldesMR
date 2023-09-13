<?php 
function rmayores($vector1,$numero){
     $vector2=array();
    foreach($vector1 as $valor1){
        if ($valor1<=$numero){
        
            $vector2[]= $valor1;

        }
     }
    
    return $vector2; 
}
?>