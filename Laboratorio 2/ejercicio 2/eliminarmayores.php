<?php 
function rmayores($vector1,$numero){
    $arr=array();
    foreach($vector1 as $valor){
        if ($valor<=$numero){
             $arr[]=$valor;
        }
     }

     foreach($arr as $arry){
        echo $arry.",";
     }
}
?>