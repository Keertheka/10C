<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username=$_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$mobilenumber = $_POST['mobilenumber'];

	// Database connection
	$conn = new mysqli('localhost','root','','project');
	if($conn->connect_error)
	{
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		
		 $stmt = $conn->prepare("insert into signup(firstname, lastname,username, email, password, mobilenumber) values(?, ?, ?,?, ?, ?)");
		$stmt->bind_param("sssssi", $firstname, $lastname, $username, $email, $password, $mobilenumber);

		echo $execval=$stmt->execute();
	
        header("location: Placement.html");
		 $stmt->close();
		$conn->close();
	
	}	
	
?>