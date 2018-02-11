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
				
		$playerid = $_POST["playerid"];
		$suggestions = $_POST["suggestions"];
		
		$query1 = "select * from player where player_id = ".$playerid.";";
		$result1 = $conn->query($query1);
		if($result1->num_rows == 0)
		{
			echo "<script>
					alert('The Player ID entered doed not exit. Please enter a valid value.');
					document.location = 'adminhomepage.php';
			</script>";
			exit;
		}
		
		$query2 = "update player set suggestions = '".$suggestions."' where player_id = ".$playerid.";";
		$result2 = $conn->query($query2);
		if(!$result2)
		{
			echo "ERROR";
			printf("\nError Messsage: %s\n", mysqli_error($conn));
			exit;
		}
		
		header("Location: adminhomepage.php");
		$conn->close();
?>
