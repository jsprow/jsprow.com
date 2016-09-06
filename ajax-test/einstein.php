<?php
  $user = 'root';
  $password = 'hyha2527';
  $db = 'einstein';
  $host = 'localhost';
  $port = 8889;

  $con = mysqli_init();
  $success = mysqli_real_connect($con, $host, $user, $password, $db, $port);

  if ($con === false) {
    echo "Error connecting";
  };
  $sql = "SELECT fact FROM bio WHERE (fact IS NOT NULL AND fact != '' ) ";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $fact = ucwords($row['fact']);
      print '<p id="phpfact">' . $fact . '</p>';
    }
  } else {
    print "0 results";
  };
  mysqli_close($con);
?>
