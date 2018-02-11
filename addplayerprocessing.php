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
				
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$age = $_POST["age"];
		$country = $_POST["country"];
		$username = $_POST["username"];
		$password = $_POST["password"];
		$physical = $_POST["physical"];
		$mental = $_POST["mental"];
		$speed = $_POST["speed"];
		$attacking = $_POST["attacking"];
		$defending = $_POST["defending"];
		$technical = $_POST["technical"];
		
		$checkplayerexists = "select * from player where first_name = '".$fname."' and last_name = '".$lname."' and age = ".$age." and country = '".$country."' and physical = ".$physical." and mental = ".$mental." and speed = ".$speed." and attacking = ".$attacking." and defending = ".$defending." and technical = ".$technical.";";
		$result = $conn->query($checkplayerexists);
		if($result->num_rows > 0)
		{
			echo "<script> 
    			 	alert('This player is already a part of the team.');
    			 	document.location = 'adminhomepage.php';
    			</script>";
    			exit;
    		}
		
		$query1 = "select * from playerlogin where username = '".$username."';";
		$result1 = $conn->query($query1);
		if($result1->num_rows > 0)
		{
			echo "<script> 
    			 	alert('The entered username already exists. Please enter something else.');
    			 	document.location = 'addplayer.php';
    			</script>";
    			exit;
    		}
		
		$query2 = "insert into player(first_name, last_name, age, country, physical, mental, speed, attacking, defending, technical) values('".$fname."','".$lname."',".$age.",'".$country."',".$physical.",".$mental.",".$speed.",".$attacking.",".$defending.",".$technical.");";
		$result2 = $conn->query($query2);
		if(!$result2)
		{
			echo "ERROR";
			printf("MySQL Error: %s\n", mysqli_error($conn));
			exit;
		}
		
		$query3 = "select * from player where first_name = '".$fname."' and last_name = '".$lname."' and age = ".$age." and country = '".$country."' and physical = ".$physical." and mental = ".$mental." and speed = ".$speed." and attacking = ".$attacking." and defending = ".$defending." and technical = ".$technical.";";
		$result3 = $conn->query($query3);
		if($result3->num_rows > 0)
		{
			$row3 = $result3->fetch_assoc();
			$playerid = $row3["player_id"];
		}
		else
		{
			echo "0 results(Insertion error)";
		}
		
		$query4 = "insert into playerlogin values('".$username."','".$password."',".$playerid.");";
		$result4 = $conn->query($query4);
		if(!$result4)
		{
			echo "ERROR";
			printf("MySQL Error: %s\n", mysqli_error($conn));
			exit;
		}
		
		echo "<script> 
    			 	alert('The new player has been added to the records.');
    			 	document.location = 'adminhomepage.php';
    			</script>";
?>
