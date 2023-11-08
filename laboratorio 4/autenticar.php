<?php

if($_POST['usuario'] == 'admin' && $_POST['password'] == '123') {

  session_start();
  $_SESSION['nivel'] = 'admin';
  
  echo 'Autenticado correctamente';

} else {

  echo 'No autenticado';

}
?>