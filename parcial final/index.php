<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="ajax.js"></script>
    <script src="fetch.js"></script>
</head>
<body>
    <div class="inicio" id="inicio">
       <div class=" inicio1">
        <div id="sib-menu" class="me1">
            <img src="imagen/usfx.png" alt="">
            <button id="btn1">Opciónes</button>
            <button id="btn2">Detalle 1</button>
            <button id="btn3">Detalle 2</button>
            <div id="sub-menu" ></div>
        </div>

        <div class=" men2">
            <div id="menu">
                <button><a href="index.php">Pregunta 1</a></button>
                <hr >
                <button onclick="cargarContenido4('pregunta2.php'), cambiartitulo('Pregunta2.php')">Pregunta 2</button>
                <hr >
                <button>Pregunta 3</button>
                <hr >
                <button onclick="cargarContenido('listar.php'), cambiartitulo('Pregunta 4'),cargarSubmenu('submenu.html')">Pregunta 4</button>
                <hr >
                <button onclick="cargarContenido4('pregunta5.html'),cambiartitulo('Pregunta5.html') ">Pregunta 5</button>
            </div>
            <div id="titulo"> Pregunta 1</div>
            <div id="contenido">
                <div class="contenido-fon">
                    <div class="p1">
                        <p style="font-weight: bold;">SIS 256 Programacion Web</p>
                        <p>Examen Final - 02-12-2023 7:00 am</p>
                    </div>
                    <img src="imagen/yo.jpeg" alt="">
                    <div class="p2">
                     <p class="pa1">BARJA CORAGUA ERLINDA</p>
                     <p>Carrera: Ingenieria de distemas</p>
                     <p>Repositorio Examen:<a href="https://github.com/Erlinda-Barja/DesarrolloWebEBC/tree/main/Evaluaciones/parcial%20final">https://github.com/Erlinda-Barja/DesarrolloWebEBC/tree/main/Evaluaciones/parcial%20final</a></p>
                    </div>
                </div>
            </div>
        </div>
       </div>


       <div id="pie">
            Sucre - Semestre 2-2023
       </div> 
    </div>
</body>
</html>