<?php

$con = mysqli_connect("localhost", "root", "", "test");

//check connection
if(mysqli_connect_error())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else {
	//echo "DB connection success.";
}
?>