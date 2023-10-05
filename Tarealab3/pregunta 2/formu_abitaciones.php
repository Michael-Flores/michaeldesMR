
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('conexion.php');
    $sql = "SELECT id,descripcion,numero_camas  FROM tipo_habitacion ";
    $resultado = $con->query($sql);
    ?>
    <h3>Crear Abitacion</h3>
    <form action="create.php" method="post" enctype="multipart/form-data"
>
        
        <div>
            <label for="">Numero De Abitacion</label>
            <input type="number" name="nro">
        </div>
        <div>
            <label for="apellidos">Baño Pribado</label>
            <input type="text" name="bano" pattern="[01]" title="ingrese solo 0 o 1">
        </div>
        <div>
            <label for="CU">Espacio</label>
            <input type="number" name="espacio" step="0.01" min="0">
        </div>
        <div>
            <label for="CU">precio</label>
            <input type="number" name="precio" step="0.01" min="0">
        </div>
        <div>
        <label for="idcarrera">Tipo de Abitacion:</label>
            <select name="id">
                <?php while ($row = $resultado->fetch_assoc()) { ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['descripcion'] ?></option>


                <?php } ?>

            </select>
        </div>
        <input type="submit" value="Crear">


    </form>

</body>

</html>