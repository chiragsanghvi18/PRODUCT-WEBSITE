<?php

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="sunnshade";
//Create connection
	$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
	if($conn->connect_error)
		die("Failed Connection: " . $conn->connect_error);

	$name=$_POST["name"];
	$email=$_POST["email"];
	$phn=$_POST["phone"];
	$msg=$_POST["message"];

	
	$sql="INSERT INTO FEEDBACK(Name,Email,Phone,Message)  VALUES('$name','$email','$phn','$msg')";

	
	if($conn->query($sql)===TRUE){
		echo "FEEdback Successful";
		header('Location: home.php');
	}
	else{
		echo "Error: " .$sql. "<br>". $conn->error;
	}
	


$conn->close();

?>
