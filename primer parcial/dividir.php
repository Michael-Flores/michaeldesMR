<?php
include("calculadora.php");

if(isset($_COOKIE['a']) and isset($_COOKIE['b']))
{
  $o=new Calculadora($_COOKIE['a'],$_COOKIE['b']);
  echo "la resta es = ".$o->division();
}
else {
    echo "no existe valores para a y b";
}
?>
