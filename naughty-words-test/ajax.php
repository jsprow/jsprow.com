<?php
	header('Content-type: application/json');

	require_once 'config.php';

	$response = array();

	if ($_POST) {

		$name = $_POST['name'];

		$stmt = $DB_con->prepare('INSERT INTO names (name) VALUES(:name)');
		$stmt->bindParam(':name', $name);
		$stmt->execute();

		// check for successfull registration
		if ($stmt->rowCount() == 1) {
			$response['status'] = 'success';
			$response['message'] = '<span class="glyphicon glyphicon-ok"></span> &nbsp; registered sucessfully, you may login now';
		} else {
			$response['status'] = 'error'; // could not register
			$response['message'] = '<span class="glyphicon glyphicon-info-sign"></span> &nbsp; could not register, try again later';
		} 
	}


	echo json_encode($response);
?>