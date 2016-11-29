<?php
//include db configuration file
include_once("config.php");

if(isset($_POST["content_txt"]) && strlen($_POST["content_txt"])>0) 
{	//check $_POST["content_txt"] is not empty

	//sanitize post value, PHP filter FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH Strip tags, encode special characters.
	$name = filter_var($_POST["content_txt"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$date = date("Y-m-d");
	$time_in = date("H:i:s");
	
	// Insert sanitize string in record
	$insert_row = $con->query("INSERT INTO add_delete_record(name,time_in,date) VALUES('".$name."','".$time_in."','".$date."')");
	
	if($insert_row)
	{
		 //Record was successfully inserted, respond result back to index page
		  $my_id = $con->insert_id; //Get ID of last inserted row from MySQL
      echo '<li id="item_' . $my_id . '"><p>' . $name . '</p><p>IN: ' . $time_in . ' DATE:' . $date . '</p>';
  		echo '<div class="del_wrapper"><a href="#" class="close del_button" id="del-' . $my_id . '">';
			echo '<i class="fa fa-times"></i></a></div></li>';

		  $con->close(); //close db connection

	}else{
		
		//header('HTTP/1.1 500 '.mysql_error()); //display sql errors.. must not output sql errors in live mode.
		header('HTTP/1.1 500 Looks like mysql error, could not insert record!');
		exit();
	}

}
elseif(isset($_POST["recordToDelete"]) && strlen($_POST["recordToDelete"])>0 && is_numeric($_POST["recordToDelete"]))
{	//do we have a delete request? $_POST["recordToDelete"]

	//sanitize post value, PHP filter FILTER_SANITIZE_NUMBER_INT removes all characters except digits, plus and minus sign.
	$idToDelete = filter_var($_POST["recordToDelete"],FILTER_SANITIZE_NUMBER_INT); 
	
	//try deleting record using the record ID we received from POST
	$delete_row = $con->query("DELETE FROM add_delete_record WHERE id=".$idToDelete);
	
	if(!$delete_row)
	{    
		//If mysql delete query was unsuccessful, output error 
		header('HTTP/1.1 500 Could not delete record!');
		exit();
	}
	$con->close(); //close db connection
}
else
{
	//Output error
	//header('HTTP/1.1 500 Error occurred, Could not process request!');
    exit();
}
?>