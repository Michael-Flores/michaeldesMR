<?php

include("conexion.php");
$id=$_GET['id'];

$sql="DELETE FROM habitacion WHERE id=$id";
$sql2="DELETE FROM fotos_habitacion WHERE id_habitacion=$id";
 //echo $sql;
 if ($con->query($sql) === TRUE and $con->query($sql2)) {
    echo "Se elimino el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read.php" />


