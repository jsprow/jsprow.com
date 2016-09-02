<?php
  $user = 'root';
  $password = 'hyha2527';
  $db = 'words';
  $host = 'localhost';
  $port = 8889;

  $con = mysqli_init();
  $success = mysqli_real_connect($con, $host, $user, $password, $db, $port);

  if ($con === false) {
  echo "Error connecting";
  };

  $sql = mysqli_query($con, "SELECT name FROM names ORDER BY name ASC");

  while ($row = mysqli_fetch_array($sql)) {
  echo "<option name=\"name\" value=\"" . $row['name'] . "\">" . $row['name'] . "</option>";
  };


  if (isset($_POST['submitWord'])) {
  $YourName     = $_REQUEST['YourName'];
  $FavoriteWord = $_REQUEST['FavoriteWord'];

  $sql = "INSERT INTO names (name, favorite_word) VALUES ('$YourName', '$FavoriteWord')
  ON DUPLICATE KEY UPDATE favorite_word='$FavoriteWord'";

  if ($con->query($sql) === TRUE) {
  echo "You put the thing in the thing";
  header("Location: " . $_SERVER['PHP_SELF']);
  } else {
  echo "Error: " . $sql . "<br>" . $con->error;
  }
  };
  mysqli_close($con);


  $user = 'root';
  $password = 'hyha2527';
  $db = 'words';
  $host = 'localhost';
  $port = 8889;

  $con = mysqli_init();
  $success = mysqli_real_connect($con, $host, $user, $password, $db, $port);

  if ($con === false) {
  echo "Error connecting";
  };
  if ($_POST) {
  if (isset($_POST['submitName'])) {
  $NewName = $_REQUEST['NewName'];

  $sql = "INSERT INTO names (name) VALUES ('$NewName')
  ON DUPLICATE KEY UPDATE name=name";

  if ($con->query($sql) === TRUE) {
  echo "You put the thing in the thing";
  header("Location: " . $_SERVER['PHP_SELF']);
  } else {
  echo "Error: " . $sql . "<br>" . $con->error;
  };
  };
  };
  mysqli_close($con);

  $user = 'root';
  $password = 'hyha2527';
  $db = 'words';
  $host = 'localhost';
  $port = 8889;

  $con = mysqli_init();
  $success = mysqli_real_connect($con, $host, $user, $password, $db, $port);

  $sql = "SELECT name, favorite_word FROM names WHERE ((name IS NOT NULL AND name != '' ) AND (favorite_word IS NOT NULL AND favorite_word != '' )) ";

  $result = $con->query($sql);

  if ($result->num_rows > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>" . $row['name'] . "</td>" . "<td>" . $row['favorite_word'] . "</td></tr>";
  }
  } else {
  echo "0 results";
  };
  mysqli_close($con);
?>
