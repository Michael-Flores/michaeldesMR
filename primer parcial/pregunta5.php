<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
<h2></h2>
    <?php include('conexion.php');

    $sql = "SELECT id,nombre,correo,rol FROM usuario";

    //echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table class="tablas">
            <tr>
                
                <th>Correo</th>
                <th>Nombres Completo</th>
                <th>Rol</th>
                <th>Operaciones</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['correo']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['rol']; ?></td>
                    <td><a href="actualizar.php?id=<?php echo $row['id'];?>">Cambiar a <?php if($row['rol']=="Administrador"){echo "usuario";}
                    else{
                        echo "administrador";
                    }?> </a></td>

                </tr>

            <?php } ?>
        </table>

    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>

    <a href="formu_alumno.php">Crear Alumno</a>




</body>

</html>