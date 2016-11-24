<!DOCTYPE html>
<html>
<head>
	<title>AJAX Trying Again...</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Amiko" rel="stylesheet">
</head>
<body>
<div class="form_style">
	<input name="content_txt" id="contentText" placeholder="Name" />
	<button id="FormSubmit">Add record</button>
	<img src="loading.gif" id="LoadingImage" style="display:none" />
</div>
<div class="content_wrapper">
	<ul id="responds">
<?php
//include db configuration file
include_once "config.php";

//MySQLi query
$results = $con->query("SELECT id,name FROM add_delete_record");
//get all records from add_delete_record table
while ($row = $results->fetch_assoc()) {
    echo '<li id="item_' . $row["id"] . '">' . '<p>' . $row["name"] . '</p>';
    echo '<div class="del_wrapper"><a href="#" class="del_button" id="del-' . $row["id"] . '">';
    echo '<img src="icon_del.gif" border="0" /></a></div></li>';
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