<?php
// Fetching Values From URL
$name2 = $_POST['name1'];
$email2 = $_POST['FavoriteWord1'];
$connection = mysql_connect("localhost", "root", "hyha2527", "words"); // Establishing Connection with Server..
// $db = mysql_select_db("mydba", $connection); // Selecting Database
if (isset($_POST['name1'])) {
$query = mysql_query("insert into names(name, favorite_word) values ('$name2', '$FavoriteWord2') on duplicate key update favorite_word='$FavoriteWord2"); //Insert Query
echo "Form Submitted succesfully";
}
mysql_close($connection); // Connection Closed
?>