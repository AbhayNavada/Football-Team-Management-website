<?php
	$servername = "localhost";
	$username = "root";
	$password = "";			//Enter your MySQL password
	$dbname = "football";		//Enter the name of your Database, which is 'football' in this case
		
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	//Check connection
	if ($conn->connect_error)
		die("Connection failed: " . $conn->connect_error);
		
	$email = $_POST["email"];
	$fname = $_POST["firstname"];
	$lname = $_POST["lastname"];
	$country = $_POST["country"];
	
	$query1 = "select * from pollregister where email = '".$email."';";
	$result1 = $conn->query($query1);
	if($result1->num_rows > 0)
	{
		echo "<script> 
    		 		alert('You have already registered for the poll. Each person is allowed to vote only once.');
    		 		window.close();
    		      </script>";
    		exit;
    	}
    	
    	$query2 = "insert into pollregister values('".$email."','".fname."','".$lname."','".$country."');";
    	$result2 = $conn->query($query2);
    	if(!$result2)
    	{
    		echo "ERROR";
                printf("\nErrormessage: %s\n", mysqli_error($conn));
                exit;
        }    	
    	
    	header("Location: voting.php");
?>
