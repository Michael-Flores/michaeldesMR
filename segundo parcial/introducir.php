<?php
if(isset($_POST['numero'])) {

  $numero = $_POST['numero'];

 

  for($i=1; $i<=$numero; $i++) {
    echo "<input type='number'>";
  }



}