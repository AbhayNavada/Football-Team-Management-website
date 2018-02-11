<html>
	<head>
		<title>View All Players</title>
		<link rel = "stylesheet" href = "css/viewplayers.css" />
	</head>
	<body>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";			//Enter your MySQL password
			$dbname = "football";		//Enter the name of your Database, which is 'football' in this case

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if($conn->connect_error) 
   				die("Connection failed: " . $conn->connect_error);
   			
   			echo '<div id = "player1">
				<header>
					<img src = "img/logo.png" alt = "Logo" />
   					<h1>CRAZY FEET</h1>
					<h2>Manage Your Football Team With Ease</h2>
				</header>
			</div>';
			echo '<div class = "player2">
				<br />';
   			
   			$query1 = "select * from player;";
   			$result1 = $conn->query($query1);
   			if($result1->num_rows > 0)
   			{
   				echo "<table><tr><th>Player ID</th><th>First Name</th><th>Last Name</th><th>Age</th><th>Country</th><th>Physical Attributes Rating</th><th>Mental Attributes Rating</th><th>Speed Rating</th><th>Attacking Skills Rating</th><th>Defending Skills Rating</th><th>Technical Skills Rating</th></tr>";
   				// output data of each row
    				while($row1 = $result1->fetch_assoc()) {
        				echo "<tr><td>" . $row1["player_id"]. "</td><td>" . $row1["first_name"] . "</td><td>" . $row1["last_name"]. "</td><td>" . $row1["age"]. "</td><td>" . $row1["country"]. "</td><td>" . $row1["physical"]. "</td><td>" . $row1["mental"]. "</td><td>" . $row1["speed"]. "</td><td>" . $row1["attacking"]. "</td><td>" . $row1["defending"]. "</td><td>" . $row1["technical"]. "</td></tr>";
        				}
    				echo "</table>";
    			}
    			else
    			{
    				echo "0 results";
    			}
    			
    			$conn->close();
    			
    			echo '</div>';
			echo '<div id = "player3">
				<footer>
					<ul>
						<li>Contact number: 080-23450917, 080-23450918, 080-23450919, 080-23334565</li>
						<li>&copy; CRAZY FEET. All rights reserved.</li>
					</ul>
				</footer>
			</div>';
		?>
	</body>
</html>
