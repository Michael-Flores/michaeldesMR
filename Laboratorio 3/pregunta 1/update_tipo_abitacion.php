<?php
include("conexion.php");
$descripcion=$_POST['descrip'];
$num_C=$_POST['numc'];
$id=$_POST['id'];

$sql="UPDATE  tipo_habitacion set descripcion='$descripcion',numero_camas=$num_C
WHERE  id=$id ";
 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read_tipo_abitacion.php" />


