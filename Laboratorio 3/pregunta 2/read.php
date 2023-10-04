
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="text-align: right;"><a href="cerrarsession.php">Cerrar Session</a></div>

    <div>
        <form action="read.php" method="GET">
        <div>
            <label for="buscar">buscar</label>
            <input type="text" name="buscar" >
            <input type="submit" value="Buscar">
        </div>
        </form>
    </div>
    <?php include('conexion.php');
    $orden=isset($_GET['orden'])?$_GET['orden']:'id';
    
    $sql = "SELECT t.id,nro,bano_privado,espacio,precio,descripcion,numero_camas FROM habitacion a
    LEFT JOIN tipo_habitacion t on a.id_tipo_habitacion=t.id ";
    if (isset($_GET['buscar']))
    {
        $buscar=$_GET['buscar'];
        $sql .=" WHERE descripcion like '%$buscar%' ";
    }
    $sql.="order by $orden";

    //echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table>
            <tr>
                <th>Fotografias</th>
                <th>Numero de aBitacion</th>
                <th>Tipo de Abitacion</th>
                <th> Numero de Camas </th>
                <th>Disponibilidad de Baño</th>
                <td>Epacio De abitacion</td>
                <td>Precio</td>
                <th>Operaciones</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                 <td><img src="images/<?php //echo $row['fotografia'];  ?>" width="100px" ></td>
                    <td><?php echo $row['nro']; ?></td>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><?php echo $row['numero_camas']; ?></td>
                    <td><?php echo $row['bano_privado']; ?></td>
                    <td><?php echo $row['espacio']; ?></td>
                    <td><?php echo $row['precio']; ?></td>
                    <td><
                        <a href="form_update_alumno.php?id=<?php echo $row['id']; ?>">Editar</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                        <?php  ?>
                    </td>

                </tr>

            <?php } ?>
        </table>

    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>
    <?php  
    ?>

        <a href="form_update_abitacion.php">Crear Abitacion</a>
    <?php  ?>



</body>

</html>