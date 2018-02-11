<html>
	<head>
		<title>Vote For The Best Players</title>
		<link rel = "stylesheet" href = "css/voting.css" />
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
			
			echo '<div id = "voting1">
				<header>
					<img src = "img/logo.png" alt = "Logo" />
   					<h1>CRAZY FEET</h1>
					<h2>Manage Your Football Team With Ease</h2>
				</header>
			</div>
			<div class = "voting2">
				<br />
				<form action = "votingprocessing.php" method = "post">
				<ul>
					<h2>Vote For The Players You Think Are The Best:</h2>
					<li><h3>Who is the best player?</h3></li>
					<input type = "radio" class = "player" name = "player" value = "player1" checked = "checked">Christiano Ronaldo</input>
					<br />
					<input type = "radio" class = "player" name = "player" value = "player2" >Eden Hazard</input>
					<br />
					<input type = "radio" class = "player" name = "player" value = "player3" >Gianluigi Buffon</input>
					<br />
					<br />
					<li><h3>Who is the best forward?</h3></li>
					<input type = "radio" class = "player" name = "forward" value = "forward1" checked = "checked">Christiano Ronaldo</input>
					<br />
					<input type = "radio" class = "player" name = "forward" value = "forward2" >Lionel Messi</input>
					<br />
					<input type = "radio" class = "player" name = "forward" value = "forward3" >Luis Suarez</input>
					<br />
					<br />
					<li><h3>Who is the best defender?</h3></li>
					<input type = "radio" class = "player" name = "defender" value = "defender1" checked = "checked">Leonardo Bonucci</input>
					<br />
					<input type = "radio" class = "player" name = "defender" value = "defender2" >Marcelo</input>
					<br />
					<input type = "radio" class = "player" name = "defender" value = "defender3" >Diego Godin</input>
					<br />
					<br />
					<li><h3>Who is the best mid-fielder?</h3></li>
					<input type = "radio" class = "player" name = "midfielder" value = "midfielder1" checked = "checked">Toni Kroos</input>
					<br />
					<input type = "radio" class = "player" name = "midfielder" value = "midfielder2" >Thiago Alcantara</input>
					<br />
					<input type = "radio" class = "player" name = "midfielder" value = "midfielder3" >Marco Veratti</input>
					<br />
					<br />
					<li><h3>Who is the best goal-keeper?</h3></li>
					<input type = "radio" class = "player" name = "keeper" value = "keeper1" checked = "checked">Manuel Neuer</input>
					<br />
					<input type = "radio" class = "player" name = "keeper" value = "keeper2" >David De Gea</input>
					<br />
					<input type = "radio" class = "player" name = "keeper" value = "keeper3" >Thibaut Courtois</input>
					<br />
					<br />
					<input type = "submit" name = "submit" value= "Submit" />
				</form>
			</div>
			<div id = "voting3">
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
