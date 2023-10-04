<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
<h2>Lista de Tipos de abitaciones</h2>
    <?php include('conexion.php');

    $sql = "SELECT id,descripcion,numero_camas  FROM tipo_habitacion ";
    //echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table class="tablas">
            <tr>
                <th>Descripcion</th>
                <th>Numero de Camas</th>
              
                <th>Operaciones</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><?php echo $row['numero_camas']; ?></td>
                   
                    <td><a href="form_update_tipo_abitaciones.php?id=<?php echo $row['id'];?>">Editar </a>
                        <a href="delete_tipo_abitaciones.php?id=<?php echo $row['id'];?>">Eliminar </a>
                </td>

                </tr>

            <?php } ?>
        </table>

    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>

    <a href="formu_tipo_abitacion.php">Crear hanitacion</a>




</body>

</html>