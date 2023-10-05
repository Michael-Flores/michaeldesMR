<?php
include("conexion.php");
$descripcion=$_POST['descripcion'];
$num_C=$_POST['num'];
$sql="INSERT INTO tipo_habitacion(descripcion,numero_camas) values
 ('$descripcion', $num_C) ";

 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read_tipo_abitacion.php" />


