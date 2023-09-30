<?php
$a=$_GET['a'];
$b=$_GET['b'];

setcookie('a',$a,time()+3600);
setcookie('b',$b,time()+3600);
?>
    <ul>
        <li><a href="sumar.php">Sumar </a></li>
        <li><a href="restar.php">restar</a></li>
        <li><a href="multiplicar.php">multiplicar</a></li>
        <li><a href="dividir.php">dividir</a></li>
    </ul>
