<?php
//choose database
$username = "root";
$password = "";
$database = "pemweb";
$host_name ="localhost";

//start to connect
$conn = mysqli_connect("$host_name", "$username", "$password", "$database");

if(mysqli_connect_errno()){
	echo "Failed to connect ".mysqli_connect_error();
}
?>
