<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php include('conexion.php');
    ?>

    <form action="create_tipo_abitacion.php" method="post"  class="contenido">
        <h3>Crear Tipo de Abitaciones</h3>
        <div>
            <label for="nombres">descripcion</label>
            <input type="text" name="descripcion">
        </div>
        <div>
            <label for="apellidos">numero de avitacuines</label>
            <input type="number" name="num">
        </div>
        
        <input type="submit" value="Crear">


    </form>

</body>

</html>