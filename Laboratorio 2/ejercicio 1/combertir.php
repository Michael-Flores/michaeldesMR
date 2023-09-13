<?php
        
            $cantidad = $_POST['cantidad'];
            $unidad_origen = $_POST['unidad_origen'];
            $unidad_destino = $_POST['unidad_destino'];

            // es un dicionario
            $conversiones = [
                'mm' => 1,
                'cm' => 0.1,
                'dm' => 0.01,
                'm' => 0.001,
                'km' => 0.000001
            ];

            $resultado = $cantidad * ($conversiones[$unidad_destino] / $conversiones[$unidad_origen]);

            echo "<br><strong>Resultado:</strong> $cantidad $unidad_origen = $resultado $unidad_destino";
        
        ?>