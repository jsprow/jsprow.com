<?php
  $user = 'root';
  $password = 'hyha2527';
  $db = 'einstein';
  $host = 'localhost';
  $port = 8889;

  $con = mysqli_init();
  $success = mysqli_real_connect($con, $host, $user, $password, $db, $port);
?>