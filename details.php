<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
    $dept=$_POST['dept'];
    $batch = $_POST['batch'];
    $email = $_POST['email'];
    $mobilenumber = $_POST['mobilenumber'];
    $placed= $_POST['placed'];

	// Database connection
	$conn = new mysqli('localhost','root','','project');
	if($conn->connect_error)
	{
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		
		 $stmt = $conn->prepare("insert into alumni(firstname, lastname,dept, batch, email,mobilenumber,placed) values(?,?, ?, ?,?, ?, ?)");
		$stmt->bind_param("sssssis", $firstname, $lastname, $dept, $batch, $email,$mobilenumber,$placed);

		echo $execval=$stmt->execute();
	
        header("location: Placement.html");
		 $stmt->close();
		$conn->close();
	
	}	
	
?>