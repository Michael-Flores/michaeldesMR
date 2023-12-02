<?php

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$celular = $_POST['celular'];
$id = $_POST['id'];
$idprofesion = $_POST['ideditorial'];
$idusuario = $_POST['idusuario'];
$idcarrera = $_POST['idcarrera'];
include('conexion.php');
if (isset($_FILES['archivo']['tmp_name'])) {
    $archivo_original = $_FILES['archivo']['name'];
    $arreglo = explode(".", $archivo_original);
    $extension = $arreglo[1];
    $fotografia = uniqid() . '.' . $extension;
    copy($_FILES['archivo']['tmp_name'], 'imagen/' . $fotografia);
    $sql = "UPDATE libros SET fotografia='$fotografia', titulo='$nombres',autor='$apellidos',anio=$celular,ideditorial=$idprofesion,idusuario=$idusuario,idcarrera=$idcarrera
WHERE id=$id";

} else {
    $sql = "UPDATE libros SET fotografia='$fotografia', titulo='$nombres',autor='$apellidos',anio=$celular,ideditorial=$idprofesion,idusuario=$idusuario,idcarrera=$idcarrera
    WHERE id=$id";
}

if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

