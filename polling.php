<html>
	<head>
		<title>Register For Polling</title>
		<link rel = "stylesheet" href = "css/polling.css" />
		<script language="Javascript" type="text/javascript">
			function onlyAlphabets(e, t) {
           		 	try {
               				if (document.event) {
               			 	    var charCode = document.event.keyCode;
               				 }
               				 else if (e) {
                   					 var charCode = e.which;
                				}
               					 else { return true; }
                			if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                   				 return true;
                			else
                   				 return false;
            				}
            			catch (err) {
                		alert(err.Description);
            			}
        		}
        	</script>
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
		
		
		echo '<div id = "polling1">
			<header>
				<img src = "img/logo.png" alt = "Logo" />
   				<h1>CRAZY FEET</h1>
				<h2>Manage Your Football Team With Ease</h2>
			</header>
		</div>
		<div id = "polling2">
			<br />
			<form action = "pollingprocessing.php" method = "post">
			<h2>Enter details to complete registration:</h2>
			<label for = "email">E-mail ID:</label>
   			<input type = "email" id = "email" name = "email" placeholder = "Your E-mail address...(Mandatory)" maxlength = "75" autocomplete = "off" required />
   			<br />
   			<label for = "fname">Legal First Name:</label>
    			<input type = "text" id = "fname" name = "firstname" placeholder = "Your name...(Mandatory)" maxlength = "50" pattern = "[A-Za-z]{1,50}" autocomplete = "off" onkeypress = "return onlyAlphabets(event,this);" required />
   			<label for = "lname">Legal Last Name:</label>
   			<input type = "text" id = "lname" name = "lastname" placeholder = "Your last name..." maxlength = "50" pattern = "[A-Za-z]{1,50}" autocomplete = "off" onkeypress = "return onlyAlphabets(event,this);" />
   			<label for = "country">Country:</label>
    			<select class = "country" id = "country" name = "country">
    				<option value = "Argentina">Argentina</option>
    				<option value = "Belgium">Belgium</option>
    				<option value = "Brazil">Brazil</option>
    				<option value = "Chile">Chile</option>
    				<option value = "France">France</option>
     				<option value = "Germany">Germany</option>
     				<option value = "India">India</option>
     				<option value = "Peru">Peru</option>
     				<option value = "Poland">Poland</option>
     				<option value = "Portugal">Portugal</option>
     				<option value = "Spain">Spain</option>
     			</select>
     			<br /><br />
     			<input type = "submit" name = "submit" value= "Register" />
			</form>
			
			<br /><br />
			<h2>Results Of The Poll:</h2>';
				
				$query1 = "select * from bestplayer;";
				$query2 = "select * from bestforward;";
				$query3 = "select * from bestdefender;";
				$query4 = "select * from bestmidfielder;";
				$query5 = "select * from bestkeeper;";
				
				$result1 = $conn->query($query1);
				$result2 = $conn->query($query2);
				$result3 = $conn->query($query3);
				$result4 = $conn->query($query4);
				$result5 = $conn->query($query5);
				
				$row1 = $result1->fetch_assoc();
				$row2 = $result2->fetch_assoc();
				$row3 = $result3->fetch_assoc();
				$row4 = $result4->fetch_assoc();
				$row5 = $result5->fetch_assoc();
				
				echo '<h3 align = "center">Best Player Results</h3>
				<table align = "center">
    					<tr>
    						<th>Christiano Ronaldo</th><th>Eden Hazard</th><th>Gianluigi Buffon</th>
    					</tr>
    					<tr>
    						<td>' . $row1["player1"]. '</td><td>' . $row1["player2"]. '</td><td>' . $row1["player3"]. '</td>
    					</tr>
    				</table>
    				<br />
    				<h3 align = "center">Best Forward Results</h3>
    				<table align = "center">
    					<tr>
    						<th>Christiano Ronaldo</th><th>Lionel Messi</th><th>Luis Suarez</th>
    					</tr>
    					<tr>
    						<td>' . $row2["forward1"]. '</td><td>' . $row2["forward2"]. '</td><td>' . $row2["forward3"]. '</td>
    					</tr>
    				</table>
    				<br />
    				<h3 align = "center">Best Defender Results</h3>
    				<table align = "center">
    					<tr>
    						<th>Leonardo Bonucci</th><th>Marcelo</th><th>Diego Godin</th>
    					</tr>
    					<tr>
    						<td>' . $row3["defender1"]. '</td><td>' . $row3["defender2"]. '</td><td>' . $row3["defender3"]. '</td>
    					</tr>
    				</table>
    				<br />
    				<h3 align = "center">Best Mid-Fielder Results</h3>
    				<table align = "center">
    					<tr>
    						<th>Toni Kroos</th><th>Thiago Alcantara</th><th>Marco Veratti</th>
    					</tr>
    					<tr>
    						<td>' . $row4["midfielder1"]. '</td><td>' . $row4["midfielder2"]. '</td><td>' . $row4["midfielder3"]. '</td>
    					</tr>
    				</table>
    				<br />
    				<h3 align = "center">Best Goal-Keeper Results</h3>
    				<table align = "center">
    					<tr>
    						<th>Manuel Neuer</th><th>David De Gea</th><th>Thibaut Courtois</th>
    					</tr>
    					<tr>
    						<td>' . $row5["keeper1"]. '</td><td>' . $row5["keeper2"]. '</td><td>' . $row5["keeper3"]. '</td>
    					</tr>
    				</table>
    				<br />
		</div>
		<div id = "polling3">
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
