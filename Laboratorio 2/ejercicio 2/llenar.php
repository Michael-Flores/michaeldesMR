<form action="eliminar.php" method="post">
<?php
$numero=$_GET['numero'];
for ($i=0;$i<$numero;$i++){
    echo '<div><input type="number" name="valor[]"></div>';
}
?>
<input type="hidden" name="n" value="<?php echo $numero;?>">
    <div>
        <label for=""> eliminar </label>
        <input type="number" name="a">
    </div>
    <div>
        <input type="submit" value="eliminar">
    </div>
</form>