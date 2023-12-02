<?php

if (!isset($_GET['orden'])) {
    $orden = 'per.titulo';
} else {
    $orden = $_GET['orden'];
}



include('conexion.php');
$sql = "SELECT per.id,imagen,titulo,autor,editorial,anio,idusuario,idcarrera FROM libros per 
left join editoriales pro on per.ideditorial=pro.id 
order by $orden
";
//echo $sql;
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
    
    <table>
        <tr>
            <th>imagen</th>
            <th><a href="cargarContenido('listar.php')?orden=titulo">titulo </a></th>
            <th><a href="read.php?orden=apellidos">autor</a> </th>
            <th><a href="read.php?orden=celular">editorial</a></th>
            <th><a href="read.php?orden=nombre">año</a></th>
            <th>Usuario</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
            <td><img width="100px" src="images/<?php echo $row['imagen'];  ?>" alt=""> </td>
            <td><?php echo $row['titulo'] ?> </td>
                <td><?php echo $row['autor'] ?></td>
                <td><?php echo $row['editorial'] ?></td>
                <td><?php echo $row['anio'] ?></td>
                <td><?php echo $row['idusuario'] ?></td>
                
            </tr>
        <?php } ?>
    </table>


<?php
} else {
    echo "la tabla no tiene datos que mostrar";
}

$con->close();
?>