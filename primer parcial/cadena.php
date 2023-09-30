<?php
    $cadena1 = $_POST["cadena1"];
    $cadena2 = $_POST["cadena2"];

    $vector1 = explode(" ", $cadena1);
    $vector2 = explode(" ", $cadena2);

    $encontrar = false;
    $resultado = array();

    foreach ($vector1 as $palabra1) {
        if (in_array($palabra1, $vector2)) {
            $encontrar = true;
            $resultado[] = $palabra1;
        }
    }
if ($encontrar) {
echo $cadena1." : tiene la palabra: ".implode("-",$resultado) . "<br>";


$resultado = [];
echo "La casena 1 sin la cadena 2:";
foreach ($vector1 as $elemento) {
    if (!in_array($elemento, $vector2)) {
        $resultado[] = $elemento;
    }
    
}
foreach($resultado as $elm)
{
    echo $elm;
}
    
    } else {
        echo $cadena1." :no tiene la palabra: ".$cadena2;
    }
    ?>


