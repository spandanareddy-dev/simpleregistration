<?php

	
	
	$hostname="localhost";
	$username="root";
	$password="doll";
	$dbname="cv";
	$usertable="users";
	//$yourfield = "your_field";
	
	//user data
	$fname= $_POST["fname"];
	$email = $_POST["email"];
	$pword = $_POST["pword"];
	$photo= $_POST["photo"];
	
	
	
	$conn = mysqli_connect($hostname,$username, $password, $dbname) ;
	//mysqli_select_db($dbname);

    if(mysqli_connect_error())
    {
        echo "Failed to connect" . mysqli_connect_error();
    }
	
	if(mysqli_ping($conn))
	{
	    
	    
	}
	else{
	    
	    echo "Error" . mysqli_error();
	}
	echo "Record's stored successfully";
    $sql = "INSERT INTO users (fname,email, pword, photo)
    VALUES ('$fname','$email', '$pword',  '$photo')";
if ($conn->query($sql) === TRUE) {
        echo ' <a href="index.html">Login Here</a>';
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
?>

</body>
</html>