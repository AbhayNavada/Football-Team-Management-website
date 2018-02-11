<?php
	$servername = "localhost";
	$username = "root";
	$password = "";			//Enter your MySQL password
	$dbname = "football";		//Enter the name of your Database, which is 'football' in this case

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error)
   		die("Connection failed: " . $conn->connect_error);
   	
   	$playerid = $_POST["playerid"];
   		
   	$query1 = "select * from player where player_id = ".$playerid.";";
   	$result1 = $conn->query($query1);
   	if($result1->num_rows == 0)
   	{
   		echo "<script>
   			alert('The Player ID entered does not exist. Please enter a valid value.');
   			document.location = 'adminhomepage.php';
   		</script>";
   		exit;
   	}
   	
   	$query2 = "delete from playerlogin where player_id = ".$playerid.";";
   	$result2 = $conn->query($query2);
   	if(!$result2)
   	{
   		echo "ERROR";
		printf("MySQL Error: %s\n", mysqli_error($conn));
		exit;
	}
   	
   	$query3 = "delete from player where player_id = ".$playerid.";";
   	$result3 = $conn->query($query3);
   	if(!$result3)
   	{
   		echo "ERROR";
		printf("MySQL Error: %s\n", mysqli_error($conn));
		exit;
	}
	
	echo "<script> 
    			 alert('The requested player has been removed from the team.');
    			 document.location = 'adminhomepage.php';
    		</script>";
?>
