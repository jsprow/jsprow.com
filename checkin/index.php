<!DOCTYPE html>
<html>
<head>
	<title>AJAX List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Amiko" rel="stylesheet">
</head>
<body>
<div class="description">
	<p>Type a word in the box. It will be added to a MySQL database... which is cool. Even cooler... the page doesn't reload when you hit the 'Add Record' button.</p>
</div>
<div class="form_style">
	<input name="content_txt" id="contentText" placeholder="Name" />
	<select name="in_out" id="inOut">
		<option value="in">In</option>
		<option value="out">Out</option>
	</select>
	<button id="formSubmit"><span>Add record</span></button>
</div>
<div class="content_wrapper">
	<ul id="responds">
<?php
//include db configuration file
include_once "config.php";

//MySQLi query
$results = $con->query("SELECT id,time,name,in_out FROM add_delete_record");
//get all records from add_delete_record table
while ($row = $results->fetch_assoc()) {
    echo '<li id="item_' . $row["id"] . '">' . '<p>' . $row["name"] . '</p><p>' . $row["time"] . '</p><p>' . $row["in_out"] . '</p>';
    echo '<div class="del_wrapper"><a href="#" class="close del_button" id="del-' . $row["id"] . '">';
    echo '</a></div></li>';
}

//close db connection
$con->close();
?>
	</ul>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="ajax.js"></script>
</body>
</html>