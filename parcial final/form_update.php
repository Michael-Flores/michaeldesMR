<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id = $_GET['id'];
    include('conexion.php');
    $sql = "SELECT imagen, titulo,autor,anio,ideditorial,idusuario,idcarrera from libros where id=$id";
    $sql2 = "SELECT id,editorial from editoriales";
    $sql3 = "SELECT id,usuario from usuarios";
    $sql4 = "SELECT id,carreras from carreras";
    $resultado = $con->query($sql);
    $resultado2 = $con->query($sql2);
    $resultado3 = $con->query($sql3);
    $resultado4 = $con->query($sql4);

    $row = $resultado->fetch_assoc();
    ?>
    <form action="javascript:actualizarPersona()" method="POST" enctype="multipart/form-data" id="form-persona">
        <input type="hidden" name="id" value="<?php echo $id; ?> ">
        <div>
            <img width="200px" src="images/<?php echo $row['imagen']; ?>" alt="">
            <label for="archivo">Fotografia:</label>
            <input type="file" name="archivo">
        </div>
        
        <div>
            <label for="nombres">titulo:</label>
            <input type="text" name="nombres" value="<?php echo $row['titulo']; ?>">
        </div>
        <div>
            <label for="apellidos">autor:</label>
            <input type="text" name="apellidos" value="<?php echo $row['autor']; ?>">
        </div>
        <div>
            <label for="celular">año:</label>
            <input type="number" name="celular" value="<?php echo $row['anio']; ?>">
        </div>
        <div>
            <label for="ideditorial">editorial:</label>
            <select name="ideditorial">
                <?php while ($editorial = $resultado2->fetch_assoc()) {
                ?>
                    <option value="<?php echo $editorial['id']; ?>"
                    <?php echo $editorial['id']==$row['ideditorial']?'selected':''; ?>>
                    <?php echo $editorial['editorial']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div>
            <label for="idusuario">usuario:</label>
            <select name="idusuario">
                <?php while ($usuario = $resultado2->fetch_assoc()) {
                ?>
                    <option value="<?php echo $usuario['id']; ?>"
                    <?php echo $usuario['id']==$row['idusuario']?'selected':''; ?>>
                    <?php echo $usuario['usuario']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div>
            <label for="idcarrera">carrera:</label>
            <select name="idcarrera">
                <?php while ($carrera = $resultado4->fetch_assoc()) {
                ?>
                    <option value="<?php echo $carrera['id']; ?>"
                    <?php echo $carrera['id']==$row['idcarrera']?'selected':''; ?>>
                    <?php echo $carrera['carrera']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <input type="submit" value="Actualizar">



    </form>

</body>

</html>