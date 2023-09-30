<?php
include("conexion.php");
$id=$_GET['id'];
$sql1 = "SELECT id,nombre,correo,rol FROM usuario WHERE  id=$id ";

//echo $sql;
$resultado = $con->query($sql1);
if ($resultado->num_rows > 0) {
    ?>
            <?php while ($row = $resultado->fetch_assoc()) {
                if($row['rol']== "Administrador"){
                    $sql="UPDATE  usuario set rol='Usuario'
                    WHERE  id=$id ";
                }
                else if($row['rol']== "Usuario"){
                    $sql="UPDATE  usuario set rol='Administrador'
                    WHERE  id=$id ";
                }
             } 

    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    

 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=pregunta5.php" />