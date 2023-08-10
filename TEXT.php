<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mytext";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn)
{
	die(mysqli_error());
}

if(isset($_POST['submit']))
{
	$textareaValue = trim($_POST['content']);
	
	$sql = "insert into textarea_value (textarea_content) values ('".$textareaValue."')";
	$rs = mysqli_query($conn, $sql);
	$affectedRows = mysqli_affected_rows($conn);
	
	if($affectedRows == 1)
	{
		$successMsg = "Record has been saved successfully";
	}
}


		if(isset($successMsg))
		{
			echo "<div class='success-msg'>";
			print_r($successMsg);
			echo "</div>";
		}



?>