<?php
$fila=$_POST['fila'];
$columna=$_POST['columna'];
$color=$_POST['color'];
?>
<table style="border-collapse: collapse;"><?php

for($i=1;$i<=$fila;$i++){
    echo "<tr>";
    for($j=1;$j<=$columna;$j++){  
       
        if($i % 2==1 and $j%2==1){// esta linea  pregunta si la posicion de la fila es impar y que la posicion de la columna es impar
            echo "<td style='border: 1px solid black; width: 50px; height:50px; background-color: ".$color."; '></td>";
        }
        else if($i%2==0 and $j%2==0) {// esta linea  pregunta si la posicion de la fila es par y que la posicion de la columna es par
            echo "<td style='border: 1px solid black; width: 50px; height:50px; background-color:".$color."; '></td>";}
        else {
            echo "<td style='border: 1px solid black; width: 100px; height:50px;'></td>";
        }
    
         
    }  
    echo "</tr>";
}?>
</table>