
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    

    <div>
        <form action="read.php" method="GET">
        <div>
        <?php include('conexion.php');
        $sql1 = "SELECT id,descripcion FROM tipo_habitacion ";

         $resultado1 = $con->query($sql1);?>
            <label for="buscar">buscar</label>
            <select name="buscar">
                <?php while ($row_carrera = $resultado1->fetch_assoc()) { ?>
                    <option  <?php echo $row_carrera['descripcion']?> ><?php echo $row_carrera['descripcion'] ?></option>


                <?php } ?>

            </select>
            
            <input type="submit" value="Buscar">
        </div>
        </form>
    </div>
    <?php include('conexion.php');
    
    
    $sql = "SELECT a.id,nro,bano_privado,espacio,precio,descripcion,numero_camas FROM habitacion a
    LEFT JOIN tipo_habitacion t on a.id_tipo_habitacion=t.id ";
    
    if (isset($_GET['buscar']))
    {
        $buscar=$_GET['buscar'];
        $sql .=" WHERE descripcion like '%$buscar%' ";
    }
  

    //echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table border="1">
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
                $var=$row['id'];
                $sql2="SELECT id,id_habitacion,fotografia FROM fotos_habitacion where id_habitacion=$var" ;
                $resultado2 = $con->query($sql2);
            ?>
                <tr>
                 <td>
                 <table>
                 <?php while ($row2 = $resultado2->fetch_assoc()) {?>
                    <td> <img src="images/<?php echo $row2['fotografia'];  ?>" width="100px" ></td>
                    
                    <?php } ?>
                 </table>  
                 <a href="anadir_imagen.php?id=<?php echo $row['id']; ?>">Subir Imagen</a> 
                 </td>
                    <td><?php echo $row['nro']; ?></td>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><?php echo $row['numero_camas']; ?></td>
                    <td><?php echo $row['bano_privado']; ?></td>
                    <td><?php echo $row['espacio']; ?></td>
                    <td><?php echo $row['precio']; ?></td>
                    <td><
                        <a href="form_update_abitacion.php?id=<?php echo $row['id']; ?>">Editar</a>
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

        <a href="formu_abitaciones.php">Crear Abitacion</a>
    <?php  ?>



</body>

</html>