<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Check-In Table</title>
	<link href="https://fonts.googleapis.com/css?family=Lato|Lora|Montserrat|Open+Sans+Condensed:300|Oswald|PT+Sans|Raleway|Roboto+Condensed|Slabo+27px|Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="descritpion">
	<p>Click <a href="index.php">here</a> to go back.</p>
</div>
<table class="query_table">
	<thead>
	</thead>
	<tbody>
<?php
include_once "config.php";
$results = $con->query("SELECT id,time,date,name,in_out FROM add_delete_record GROUP BY name,date");
while ($row = $results->fetch_assoc()) {

	$id = $row["id"];
	$name = $row["name"];
	$time = $row["time"];
	$date = $row["date"];
	$in_out = $row["in_out"];

	echo '<tr id="' . $id . '"><td>' . $name . '</td><td>' . $time . '</td><td>' . $date . '</td><td>' . $in_out . '</td></tr>';
}
?>
	</tbody>
</table>
<div class="test_output">
<?php

$results = $con->query("SELECT id,time,date,name,in_out FROM add_delete_record GROUP BY date");


while ($row = $results->fetch_object()) {
	echo $row->id;
	$id = $row->id;
}
echo $id;
//close db connection
$con->close();
?>
</div>

<script>
</script>
</body>
</html>