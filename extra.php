<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
    $department=$_POST['department'];
    $year = $_POST['year'];
    $interest = $_POST['interest'];
    $mobilenumber = $_POST['mobilenumber'];

	// Database connection
	$conn = new mysqli('localhost','root','','project');
	if($conn->connect_error)
	{
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		
		 $stmt = $conn->prepare("insert into activity(firstname, lastname,department,year, interest,mobilenumber) values(?, ?, ?,?, ?, ?)");
		$stmt->bind_param("sssssi", $firstname, $lastname, $department, $year,$interest, $mobilenumber);

		echo $execval=$stmt->execute();
	
        header("location: Activity.html");
		 $stmt->close();
		$conn->close();
	
	}	
	
?>