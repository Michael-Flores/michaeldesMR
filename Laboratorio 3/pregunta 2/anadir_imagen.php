<?php
include("conexion.php");
$id=$_GET['id'];
?>
<form action="crear_abitacion_foto.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="">Fotografia</label>
        <input type="file" name="fotografia">
    </div>
    <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="Subir">
</form>