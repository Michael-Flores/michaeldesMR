
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include("conexion.php");
    $id=$_GET['id'];
    $sql="SELECT id,nro,bano_privado,espacio,precio,id_tipo_habitacion FROM habitacion  where id=$id";
    $sql1 = "SELECT id,descripcion FROM tipo_habitacion ";

    $resultado1 = $con->query($sql1);
    $resultado=$con->query($sql);
    $row = $resultado->fetch_assoc();
    
    ?>
    <h3>Actualizar Habitacion</h3>
    <form action="update.php" method="post" enctype="multipart/form-data">
        
        <div>
            <label for="">Numero De Abitacion</label>
            <input type="number" name="nro" value="<?php echo $row['nro']?>">
        </div>
        <div>
            <label for="">Baño Pribado</label>
            <input type="text" name="bano" value="<?php echo $row['bano_privado']?>" pattern="[01]" title="ingrese solo 0 o 1">
        </div>
        <div>
            <label for="">Espacio</label>
            <input type="number" name="espacio" value="<?php echo $row['espacio']?>" name="espacio" step="0.01" min="0">
        </div>
        <div>
            <label for="">precio</label>
            <input type="number" name="precio" value="<?php echo $row['precio']?>" name="espacio" step="0.01" min="0">
        </div>
        <div>
        <label for="">Tipo de abitacion:</label>
            <select name="idabitacion">
                <?php while ($row_carrera = $resultado1->fetch_assoc()) { ?>
                    <option value="<?php echo $row_carrera['id'] ?>" 
                    <?php echo $row_carrera['id']==$row['id_tipo_habitacion']?"selected":"";  ?> ><?php echo $row_carrera['descripcion'] ?></option>


                <?php } ?>

            </select>
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="Editar">


    </form>

</body>

</html>