<!DOCTYPE html>
<html>
<head>
	<title>AJAX List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Amiko" rel="stylesheet">
</head>
<body>
<div class="description">
	<p>Type your name in the box and click either the check in or check out button. You'll then be added to a MySQL database... which is cool. Even cooler, though... the page doesn't reload when you hit the check in/out buttons. That's the magic of AJAX. It's asynchronous!
</div>
<div class="form_style">
	<input name="content_txt" id="contentText" placeholder="Name" />
	<p id="error_box"></p>
	<button id="inSubmit"><span>Check In</span></button>
	<button id="outSubmit"><span>Check Out</span></button>
</div>
<div class="content_wrapper">
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Date</th>
				<th>Time In</th>
				<th>Time Out</th>
				<th colspan="2">Duration</th>
			</tr>
		</thead>
		<tbody id="responds">
<?php
//include db configuration file
include_once "config.php";

//MySQLi query
$results = $con->query("SELECT * FROM add_delete_record RIGHT OUTER JOIN duration ON add_delete_record.id=duration.id");
//get all records from add_delete_record table
while ($row = $results->fetch_assoc()) {
	echo '<tr id="item_' . $row["id"] . '">' . '<td>' . $row["name"] . '</td><td>' . $row["date"] . '</td><td>' . $row["time_in"] . '</td><td>' . $row["time_out"] . '</td><td>' . $row["duration"] . '</td>';
	echo '<td><div class="del_wrapper"><a href="#" class="close del_button" id="del-' . $row["id"] . '">';
	echo '<i class="fa fa-times"></i></a></div></td></tr>';
}
//close db connection
$con->close();
?>
		</tbody>
	</table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://use.fontawesome.com/27a0b013e2.js"></script>
<script src="ajax.js"></script>
</body>
</html>