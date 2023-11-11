<?php
if(isset($_POST['numero'])) {

  $numero = $_POST['numero'];

  echo '<form>';

  for($i=1; $i<=$numero; $i++) {
    echo "<input type='number'>";
    echo"<br>";
    echo"<br>";
   
  }

  echo '</form>';

}