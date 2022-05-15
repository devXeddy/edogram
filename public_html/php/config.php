<?php
  $hostname = "localhost";
  $username = "id18903630_root";
  $password = "Gx[ri=cQZ0m9bOmS";
  $dbname = "id18903630_edomed2";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "impossibile connettersi".mysqli_connect_error();
  }
?>
