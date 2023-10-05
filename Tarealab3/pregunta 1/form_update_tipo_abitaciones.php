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
    <h3>Actualizar Tipo de Abitaciones</h3>
    <?php include("conexion.php");
    $id=$_GET['id'];
    $sql="SELECT id,descripcion,numero_camas  FROM tipo_habitacion  where id=$id";
    $resultado=$con->query($sql);
    $row = $resultado->fetch_assoc();
    
    ?>
    <form action="update_tipo_abitacion.php" method="post" class="contenido">

        <div>
            <label for="nombres">Descripcion</label>
            <input type="text" name="descrip" value="<?php echo $row['descripcion']?>">
        </div>
        <div>
            <label for="apellidos">Numero de Camas</label>
            <input type="text" name="numc" value="<?php echo $row['numero_camas']?>">
        </div>
        
       
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="Editar">


    </form>

</body>

</html>