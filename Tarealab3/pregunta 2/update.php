<?php
include("conexion.php");
$nro=$_POST['nro'];
$bano=$_POST['bano'];
$espacio=$_POST['espacio'];
$precio=$_POST['precio'];
$id_tipo = $_POST["idabitacion"];
$id = $_POST['id'];


    $sql = "UPDATE  habitacion set nro=$nro,id_tipo_habitacion=$id_tipo,bano_privado=$bano, espacio = $espacio,precio=$precio
    WHERE  id=$id ";

// echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read.php" />