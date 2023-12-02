<?php 
$id=$_GET['id'];
include('conexion.php');

$sql="DELETE FROM libros WHERE id=$id";

if ($con->query($sql) === TRUE) {
    echo "Se elimino el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
