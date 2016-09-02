<html>
<head>
  <title>Perv!</title>

  <link rel="stylesheet" href="style.css" media="screen" charset="utf-8">
  
</head>
<?php
  $con = mysqli_connect('localhost', "root", "hyha2527", "form");

  if($con === false) {
    echo "Error connecting";
  };

  $YourName = $_REQUEST['YourName'] ;
  $FavoriteWord = $_REQUEST['FavoriteWord'] ;

  $sql = "INSERT INTO words (your_name, favorite_word) VALUES ('$YourName', '$FavoriteWord')";

  if ($con->query($sql) === TRUE) {
    echo "You put the thing in the thing";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
  $con->close();
?>
<body bgcolor="#FFFFFF" text="#000000">
  <p> Hi <?php print $YourName; ?> <p> You like the word <b> <?php print $FavoriteWord; ?>!?!</b> <p>You oughta be ashamed of yourself!
</body>
</html>
