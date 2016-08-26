<!DOCTYPE html>
<html>
<head>
	<title>FB Feed</title>
</head>
<body>
<?php 
$challenge = $_REQUEST['hub_challenge'];
  $verify_token = $_REQUEST['hub_verify_token'];

  if ($verify_token === 'hyha2527') {
  echo $challenge;
  }
  //Token of app
 $row = "hyha2527";
 ?>
 <h1>Hello</h1>
</body>
</html>