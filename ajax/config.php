<?php
$user     = 'root';
$password = 'hyha2527';
$db       = 'words';
$host     = 'localhost';
$port     = 8889;

$con     = mysqli_init();
$success = mysqli_real_connect($con, $host, $user, $password, $db, $port);

if ($con === false) {
    echo "Error connecting";
}
;
