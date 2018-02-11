<html>
	<head>
		<title>View All Scheduled Fixtures</title>
		<link rel = "stylesheet" href = "css/viewfixtures.css" />
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
			
			echo '<div id = "fixture1">
				<header>
					<img src = "img/logo.png" alt = "Logo" />
   					<h1>CRAZY FEET</h1>
					<h2>Manage Your Football Team With Ease</h2>
				</header>
			</div>';
			echo '<div class = "fixture2">
				<br />
				<h2 align = "center">Upcoming Fixtures</h2>';
   			
   			$query1 = "select * from fixtures where fixture_date >= curdate() order by fixture_date;";
   			$result1 = $conn->query($query1);
   			if($result1->num_rows > 0)
   			{
   				echo "<table align = 'center'><tr><th>Opposition Team</th><th>Date Of Fixture</th></tr>";
    				while($row1 = $result1->fetch_assoc()) {
        				echo "<tr><td>" . $row1["opponent_name"]. "</td><td>" . $row1["fixture_date"] . "</td></tr>";
        				}
    				echo "</table>";
    			}
    			else
    			{
    				echo "No Fixtures are scheduled currently.";
    			}
    			
    			$conn->close();
    			
    			echo '</div>';
			echo '<div id = "fixture3">
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
