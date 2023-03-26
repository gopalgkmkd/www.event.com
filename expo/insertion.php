<?php
session_start();
include("connect.php");
if(isset($_POST['submit']))
{
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$expo=$_REQUEST['expo'];

	$sql="INSERT INTO participant VALUES('$name','$email','$expo')";

	

	if ($conn->query($sql) === TRUE) {
		echo "<script>window.open('add.php','_self')</script>";
	
		
	  } else {
		echo "Error: " . $sql . "<br>" . $mysqli_connect_error();
	  }
}
?>