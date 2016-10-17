<?php
//Connect to database

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

//Add a new name to the table

if ($_POST) {
    if (isset($_POST['submitName'])) {
        $newName = $_POST['newName'];

        $addName = "INSERT INTO names (name) VALUES ('$newName')
                ON DUPLICATE KEY UPDATE name=name";

        if ($con->query($addName) === true) {
        } else {
            echo "Error: " . $addName . "<br>" . $con->error;
        }
        ;
    }
    ;
}
;

//Add naughty word to list

if (isset($_POST['submitWord'])) {
    $yourName     = $_REQUEST['yourName'];
    $FavoriteWord = $_REQUEST['FavoriteWord'];

    $addWord = "INSERT INTO names (name, word) VALUES ('$yourName', '$FavoriteWord')
              ON DUPLICATE KEY UPDATE word='$FavoriteWord'";

    if ($con->query($addWord) === true) {
    } else {
        echo "Error: " . $addWord . "<br>" . $con->error;
    }
}
;


//Build the table and add results to $result variable

$table = "SELECT name, word FROM names WHERE ((name IS NOT NULL AND name != '' ) AND (word IS NOT NULL AND word != '' )) ";

$result = $con->query($table);

mysqli_close($con);
?>
