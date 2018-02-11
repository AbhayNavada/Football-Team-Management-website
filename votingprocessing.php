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
		
	$player = $_POST["player"];
	$forward = $_POST["forward"];
	$defender = $_POST["defender"];
	$midfielder = $_POST["midfielder"];
	$keeper = $_POST["keeper"];
	
	if($player == "player1")
	{
		$query1 = "update bestplayer set player1 = player1 + 1;";
		$conn->query($query1);
	}
	else if($player == "player2")
	{
		$query1 = "update bestplayer set player2 = player2 + 1;";
		$conn->query($query1);
	}
	else
	{
		$query1 = "update bestplayer set player3 = player3 + 1;";
		$conn->query($query1);
	}
	
	if($forward == "forward1")
	{
		$query2 = "update bestforward set forward1 = forward1 + 1;";
		$conn->query($query2);
	}
	else if($forward == "forward2")
	{
		$query2 = "update bestforward set forward2 = forward2 + 1;";
		$conn->query($query2);
	}
	else
	{
		$query2 = "update bestforward set forward3 = forward3 + 1;";
		$conn->query($query2);
	}
	
	if($defender == "defender1")
	{
		$query3 = "update bestdefender set defender1 = defender1 + 1;";
		$conn->query($query3);
	}
	else if($defender == "defender2")
	{
		$query3 = "update bestdefender set defender2 = defender2 + 1;";
		$conn->query($query3);
	}
	else
	{
		$query3 = "update bestdefender set defender3 = defender3 + 1;";
		$conn->query($query3);
	}
	
	if($midfielder == "midfielder1")
	{
		$query4 = "update bestmidfielder set midfielder1 = midfielder1 + 1;";
		$conn->query($query4);
	}
	else if($midfielder == "midfielder2")
	{
		$query4 = "update bestmidfielder set midfielder2 = midfielder2 + 1;";
		$conn->query($query4);
	}
	else
	{
		$query4 = "update bestmidfielder set midfielder3 = midfielder3 + 1;";
		$conn->query($query4);
	}
	
	if($keeper == "keeper1")
	{
		$query5 = "update bestkeeper set keeper1 = keeper1 + 1;";
		$conn->query($query5);
	}
	else if($keeper == "keeper2")
	{
		$query5 = "update bestkeeper set keeper2 = keeper2 + 1;";
		$conn->query($query5);
	}
	else
	{
		$query5 = "update bestkeeper set keeper3 = keeper3 + 1;";
		$conn->query($query5);
	}
	
	echo "<script>
			alert('Thank You for Voting.');
			document.location = 'polling.php';
		</script>";
?>
