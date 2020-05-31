<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "todo";

	//conn=connection  it will buuld connection between html file and mysql
	$conn = mysqli_connect($servername,$username,$password,$dbname);

	if($conn){
		//echo "connection established";
	}
	else{
		echo "connection not established".mysqli_connect_error();
		/*mysqli_connect_error() will let you know about the error*/

	}
?>