<!DOCTYPE html>
<html>
<head>
	<title>AJAX Trying Again...</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="content_wrapper">
	<ul id="responds">
<?php
//include db configuration file
include_once "config.php";

//MySQLi query
$results = $con->query("SELECT id,content FROM add_delete_record");
//get all records from add_delete_record table
while ($row = $results->fetch_assoc()) {
    echo '<li id="item_' . $row["id"] . '">';
    echo '<div class="del_wrapper"><a href="#" class="del_button" id="del-' . $row["id"] . '">';
    echo '<img src="icon_del.gif" border="0" />';
    echo '</a></div>';
    echo $row["content"] . '</li>';
}

//close db connection
$con->close();
?>
	</ul>
</div>
<div class="form_style">
	<textarea name="content_txt" id="contentText" cols="45" rows="5"></textarea>
	<button id="FormSubmit">Add record</button>
	<img src="loading.gif" id="LoadingImage" style="display:none" />
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="ajax.js"></script>
</body>
</html>