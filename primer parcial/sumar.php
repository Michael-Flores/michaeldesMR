<?php
include("calculadora.php");

if(isset($_COOKIE['a']) and isset($_COOKIE['b']))
{
  $o=new Calculadora($_COOKIE['a'],$_COOKIE['b']);
  echo "la suma es = ".$o->suma();
}
else {
    echo "no existe valores para a y b";
}
?>
