<?php
	$name = $_POST['name'];

	$user = 'root';
	$password = 'hyha2527';
	$db = 'words';
	$host = 'localhost';
	$port = 8889;

	$con = mysqli_init();

	$success = mysqli_real_connect($con, $host, $user, $password, $db, $port);
	if (isset($_POST[$data])) {
		
		$sql = "INSERT INTO names name VALUES ('$name') ON DUPLICATE KEY UPDATE name='$name'";

		if ($con->query($sql) === TRUE) {
			echo "You put the thing in the thing";
		} else {
			echo "Error: " . $sql . "<br>" . $con->error;
		}
	};
	mysqli_close($con);
?>