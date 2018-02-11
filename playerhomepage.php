<html>
	<head>
		<title>Player Home Page</title>
		<link rel = "stylesheet" href = "css/playerhomepage.css" />
	</head>
	<body>
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
		
			session_start();
	
			$playerid = $_SESSION['playerid'];
			
			echo '<div id = "player1">
			<header>
				<img src = "img/logo.png" alt = "Logo" />
   				<h1>CRAZY FEET</h1>
				<h2>Manage Your Football Team With Ease</h2>
			</header>
			</div>
			<div class = "player2">
				<br />';
			
			$query1 = "select * from player where player_id = ".$playerid.";";
			$result1 = $conn->query($query1);
			if($result1->num_rows == 0)
			{
				 echo "Player dos not exist.";
			}
			else
			{
				$row1 = $result1->fetch_assoc();
				$fname = $row1["first_name"];
				$lname = $row1["last_name"];
				$age = $row1["age"];
				$country = $row1["country"];
				$physical = $row1["physical"];
				$mental = $row1["mental"];
				$speed = $row1["speed"];
				$attacking = $row1["attacking"];
				$defending = $row1["defending"];
				$technical = $row1["technical"];
				$suggestions = $row1["suggestions"];
				
				echo '	<h2>Player Details:</h2>
					<label for = "playerid">Player ID:</label>
					<input type = "text" id = "playerid" value = "'.$playerid.'" readonly />
					<br />
					<label for = "fname">First Name:</label>
					<input type = "text" id = "fname" value = "'.$fname.'" readonly />
					<br />
					<label for = "lname">Last Name:</label>
					<input type = "text" id = "lname" value = "'.$lname.'" readonly />
					<br />
					<label for = "age">Age:</label>
					<input type = "text" id = "age" value = "'.$age.'" readonly />
					<br />
					<label for = "country">Country:</label>
					<input type = "text" id = "country" value = "'.$country.'" readonly />
					<br />
					<h3>Player Attributes Rating:</h3>
					<label for = "physical">Physical Attributes Rating:</label>
					<input type = "text" id = "physical" value = "'.$physical.'" readonly />
					<br />
					<label for = "mental">Mental Attributes Rating:</label>
					<input type = "text" id = "mental" value = "'.$mental.'" readonly />
					<br />
					<label for = "speed">Speed Rating:</label>
					<input type = "text" id = "speed" value = "'.$speed.'" readonly />
					<br />
					<label for = "attacking">Attacking Skills Rating:</label>
					<input type = "text" id = "attacking" value = "'.$attacking.'" readonly />
					<br />
					<label for = "defending">Defending Skills Rating:</label>
					<input type = "text" id = "defending" value = "'.$defending.'" readonly />
					<br />
					<label for = "technical">Technical Skills Rating:</label>
					<input type = "text" id = "technical" value = "'.$technical.'" readonly />
					<br />
					<label for = "suggestions">Suggestions from the Manager:</label>
					<input type = "text" id = "suggestions" value = "'.$suggestions.'" readonly />
					<br /><br />
					<h2>Upcoming Fixtures:</h2>
					<br />';
				
				$query2 = "select * from fixtures where fixture_date >= curdate() order by fixture_date;";
				$result2 = $conn->query($query2);	
				if($result2->num_rows == 0)
				{
					echo "No upcoming Fixtures";
				}
				else
				{
					echo "<table align = 'center'><tr><th>Opposition Team</th><th>Date Of Fixture</th></tr>";
    					while($row2 = $result2->fetch_assoc()) {
        					echo "<tr><td>" . $row2["opponent_name"]. "</td><td>" . $row2["fixture_date"] . "</td></tr>";
        					}
    					echo "</table>";
    				}
    			}
    				
    			echo '<br /><br />
    			<a href = "playerlogout.php">
				<button id = "logout" type = "button">Logout</button><br /><br />
			</a>
    			</div>';
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
